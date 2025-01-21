<?php

namespace App\Livewire\Ests;

use App\Models\EstRecord;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ListRecords extends Component
{
    public $est;
    public $user;
    public $estrecords = [];
    public $estforms = [
        '1. Establishment Information' => 'estinfo', 
        '2. Operations' => 'estopera',
        '3. Employment Information P1' => 'estempone', 
        '3. Employment Information P2' => 'estemptwo',
        '3. Employment Information' => 'estguest',
        '4. Agricultural Production & Consumption' => 'estagri',
        '5. Fish Production & Consumption' => 'estfish',
        '6. Energy Capacity' => 'estfuel',
        '7. Fuel Consumption' => 'estfuelconsumption',
        '8. Electricity' => 'estelec',
        '9. Water & Waste' => 'estprod',
        '10. Other Services' => 'estotherservice',
        '11. Income' => 'estincome',
        '12. Expenditure' => 'estexpenses',
        '13. Stock & Inventory' => 'eststock',
    ];

    public function mount()
    {
        //$this->estrecords = EstRecord::all();
        $this->est = Auth::id();

        $this->user = Auth::user();

        $this->estrecords = EstRecord::with([
            'estinfo' => function($query) { $query->where('user_id', auth()->id()); },
            'estopera' => function($query) { $query->where('user_id', auth()->id()); },
            'estempone' => function($query) { $query->where('user_id', auth()->id()); },
            'estemptwo' => function($query) { $query->where('user_id', auth()->id()); },
            'estguest' => function($query) { $query->where('user_id', auth()->id()); },
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
