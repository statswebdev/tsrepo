<?php

namespace App\Livewire\Admin;

use App\Models\EstRecord;
use Livewire\Component;

class EstRecords extends Component
{
    public $recordname;
    public $collectionyear;
    public $listestrecords = [];

    public function mount(){
        $this->listestrecords = EstRecord::all();
    }

    public function submitRecord()
    {
        $this->validate([
            'recordname' => 'required|min:5',
            'collectionyear' => 'required',
        ]);

        $user = EstRecord::create([
            'recordname' => $this->recordname,
            'collectionyear' => $this->collectionyear,
        ]);
        session()->flash('success', 'Records Created successfully');
        return redirect()->route('dashboard');
        //return redirect('/')->with('success', 'Registration successful');
    }

    public function render()
    {
        return view('livewire.admin.est-records');
    }
}
