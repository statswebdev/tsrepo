<?php

namespace App\Livewire\Ests;

use App\Models\EstRecord;
use Livewire\Component;

class ListRecords extends Component
{
    public $estrecords = [];

    public function mount()
    {
        //$this->estrecords = EstRecord::all();

        $this->estrecords = EstRecord::with(['estinfo' => function($query) {
            $query->where('user_id', auth()->id());
        }])->get();
    }

    public function render()
    {
        return view('livewire.ests.list-records');
    }
}
