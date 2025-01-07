<?php

namespace App\Livewire\Ests;

use App\Models\EstRecord;
use Livewire\Component;

class ListRecords extends Component
{
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

    public function mount()
    {
        //$this->estrecords = EstRecord::all();

        $this->estrecords = EstRecord::with([
            'estinfo' => function($query) { $query->where('user_id', auth()->id()); },
            'estopera' => function($query) { $query->where('user_id', auth()->id()); },
            'estempone' => function($query) { $query->where('user_id', auth()->id()); },
            'estemptwo' => function($query) { $query->where('user_id', auth()->id()); },
            'estprod' => function($query) { $query->where('user_id', auth()->id()); },
            'estagri' => function($query) { $query->where('user_id', auth()->id()); },
            'estfish' => function($query) { $query->where('user_id', auth()->id()); },
            'estelec' => function($query) { $query->where('user_id', auth()->id()); },
            'estfuel' => function($query) { $query->where('user_id', auth()->id()); },
            'estfuelconsumption' => function($query) { $query->where('user_id', auth()->id()); },
            'estotherservice' => function($query) { $query->where('user_id', auth()->id()); },
            'estincome' => function($query) { $query->where('user_id', auth()->id()); },
            'estexpenses' => function($query) { $query->where('user_id', auth()->id()); },
            'eststock' => function($query) { $query->where('user_id', auth()->id()); }
        ])->get();

        
    }

    public function render()
    {
        return view('livewire.ests.list-records');
    }
}
