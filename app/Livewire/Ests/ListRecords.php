<?php

namespace App\Livewire\Ests;

use App\Models\EstRecord;
use Livewire\Component;

class ListRecords extends Component
{
    public $estrecords = [];

    public function mount()
    {
        $this->estrecords = EstRecord::all();
    }

    public function render()
    {
        return view('livewire.ests.list-records');
    }
}
