<?php

namespace App\Livewire\Ests;

use App\Models\EstOpera;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentOperationEdit extends Component
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

    protected $rules = [
            'months_operated' => 'required',
            'rooms_yearend' => 'required',
            'beds_yearend' => 'required',
            'roomnights_sold' => 'required',
            'bednights_sold' => 'required',
            'roomrate_annual' => 'required',
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        $est_record = EstRecord::with('estopera')->findOrFail($estrecordid);

        if ($est_record->estopera) {
            $this->months_operated = json_decode($est_record->estopera->months_operated, true);
            $this->rooms_yearend = $est_record->estopera->rooms_yearend;
            $this->beds_yearend = $est_record->estopera->beds_yearend;
            $this->roomnights_sold = $est_record->estopera->roomnights_sold;
            $this->bednights_sold = $est_record->estopera->bednights_sold;
            $this->roomrate_annual = $est_record->estopera->roomrate_annual;
            $this->status = $est_record->estopera->status;
        }

        $this->est_record_id = $estrecordid;
    }

    public function save()
    {
        $this->validate([
            'months_operated' => 'required',
            'rooms_yearend' => 'required',
            'beds_yearend' => 'required',
            'roomnights_sold' => 'required',
            'bednights_sold' => 'required',
            'roomrate_annual' => 'required',
            
        ]);

        $estRecord = EstRecord::with('estopera')->findOrFail($this->est_record_id);

        if ($estRecord->estopera) {
            // Update the fields in the related `estopera` model
            $estRecord->estopera->update([
                'months_operated' => json_encode($this->months_operated),
                'rooms_yearend' => $this->rooms_yearend,
                'beds_yearend' => $this->beds_yearend,
                'roomnights_sold' => $this->roomnights_sold,
                'bednights_sold' => $this->bednights_sold,
                'roomrate_annual' => $this->roomrate_annual,
                'status' => 'submitted',
            ]);
        }
        

        session()->flash('success', 'Operations Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-operation-edit');
    }
}
