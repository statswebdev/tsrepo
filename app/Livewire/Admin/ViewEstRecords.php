<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\EstRecord;
use App\Models\User;

class ViewEstRecords extends Component
{
    public $est;
    public $estrecords = [];
    public $estforms = [
        '1. Establishment Information' => 'estinfo', 
        '2. Operations' => 'estopera',
        '3. Employment Information P1' => 'estempone', 
        '3. Employment Information P2' => 'estemptwo',
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

        $this->est = User::find($estid);

        $this->estrecords = EstRecord::with([
            'estinfo' => function($query) { $query->where('user_id', $this->est->id); },
            'estopera' => function($query) { $query->where('user_id', $this->est->id); },
            'estempone' => function($query) { $query->where('user_id', $this->est->id); },
            'estemptwo' => function($query) { $query->where('user_id', $this->est->id); },
            'estprod' => function($query) { $query->where('user_id', $this->est->id); },
            'estagri' => function($query) { $query->where('user_id', $this->est->id); },
            'estfish' => function($query) { $query->where('user_id', $this->est->id); },
            'estelec' => function($query) { $query->where('user_id', $this->est->id); },
            'estfuel' => function($query) { $query->where('user_id', $this->est->id); },
            'estfuelconsumption' => function($query) { $query->where('user_id', $this->est->id); },
            'estotherservice' => function($query) { $query->where('user_id', $this->est->id); },
            'estincome' => function($query) { $query->where('user_id', $this->est->id); },
            'estexpenses' => function($query) { $query->where('user_id', $this->est->id); },
            'eststock' => function($query) { $query->where('user_id', $this->est->id); }
        ])->get();

        
    }

    public function render()
    {
        return view('livewire.admin.view-est-records');
    }
}
