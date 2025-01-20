<?php

namespace App\Livewire\Ests;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;
use App\Models\EstOpera;

class EstablishmentOperation extends Component
{
   
    public $user_id;
    public $est_record_id;
    public $months_operated = [];
    public $rooms_yearend;
    public $beds_yearend;
    public $roomnights_sold;
    public $bednights_sold;
    public $roomrate_annual;
    public $status = "submitted";

    

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();
        $this->est_record_id = EstRecord::findOrFail($estrecordid);
        
        //dd($est_record_id->id);
    }

    public function submitRecord()
    {
        $this->validate([
            'months_operated' => 'required',
            'rooms_yearend' => 'required',
            'beds_yearend' => 'required',
            'roomnights_sold' => 'required',
            'bednights_sold' => 'required',
            'roomrate_annual' => 'required',
        ]);

        EstOpera::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'months_operated' => json_encode($this->months_operated),
            'rooms_yearend' => $this->rooms_yearend,
            'beds_yearend' => $this->beds_yearend,
            'roomnights_sold' => $this->roomnights_sold,
            'bednights_sold' => $this->bednights_sold,
            'roomrate_annual' => $this->roomrate_annual,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Operations Information Submitted successfully');
        return redirect()->route('dashboard');
    }

   
   
   
    public function render()
    {
        return view('livewire.ests.establishment-operation');
    }
}
