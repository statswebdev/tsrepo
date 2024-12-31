<?php

namespace App\Livewire\Ests;

use App\Models\EstInfo;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstInformation extends Component
{
    public $user_id;
    public $est_record_id;
    public $name;
    public $phone;
    public $estregno;
    public $estregdate;
    public $status = "completed";

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();
        $this->est_record_id = EstRecord::findOrFail($estrecordid);
        
        //dd($est_record_id->id);
    }

    public function submitRecord()
    {
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required',
            'estregno' => 'required',
            'estregdate' => 'required',
        ]);

        EstInfo::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'estregno' => $this->estregno,
            'estregdate' => $this->estregdate,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Est Information Submitted successfully');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.est-information');
    }
}
