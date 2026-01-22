<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EstRecord;
use App\Models\User;

class ViewEstRecords extends Component
{
    use WithPagination;

    public int $estid;

    public array $estforms = [
        '1. Establishment Information' => 'estinfo',
        '2. Operations' => 'estopera',
        '3. Employment Information P1' => 'estempone',
        '3. Employment Information P2' => 'estemptwo',
        '3. Employment Information' => 'estguest',
        '4. Production & Consumption' => 'estprod',
        '5. Agricultural Products' => 'estagri',
        '6. Fish Products' => 'estfish',
        '7. Electricity' => 'estelec',
        '8. Energy Capacity' => 'estfuel',
        '9. Fuel Consumption' => 'estfuelconsumption',
        '10. Other Services' => 'estotherservice',
        '11. Income' => 'estincome',
        '12. Expenditure' => 'estexpenses',
        '13. Stock & Inventory' => 'eststock',
    ];

    public function mount($estid)
    {
        $this->estid = (int) $estid;
    }

    public function render()
    {
        $est = User::findOrFail($this->estid);

        $query = EstRecord::query()
            ->select(['id', 'collectionyear', 'recordname', 'created_at'])
            ->orderByDesc('collectionyear');

        /**
         * Filter records to only those that have at least ONE related form row
         * for this user (since est_records has no user_id).
         */
        $query->where(function ($outer) use ($est) {
            foreach ($this->estforms as $rel) {
                $outer->orWhereHas($rel, function ($q) use ($est) {
                    $q->where('user_id', $est->id);
                });
            }
        });

        /**
         * Add lightweight columns per relation:
         * - estinfo_exists (for any row)
         * - estinfo_status (status)
         *
         * BUT: we must scope them to the same user_id, otherwise you might get
         * existence/status from another user's submission.
         */
        foreach ($this->estforms as $rel) {
            $query->withExists([
                $rel . ' as ' . $rel . '_exists' => function ($q) use ($est) {
                    $q->where('user_id', $est->id);
                }
            ]);

            $query->withAggregate([
                $rel . ' as ' . $rel . '_status' => function ($q) use ($est) {
                    $q->where('user_id', $est->id);
                }
            ], 'status');
        }

        $estrecords = $query->paginate(10);

        return view('livewire.admin.view-est-records', [
            'est' => $est,
            'estrecords' => $estrecords,
            'estforms' => $this->estforms,
        ]);
    }
}
