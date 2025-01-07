<?php

namespace App\Livewire\Ests;

use App\Models\EstOpera;
use Livewire\Component;

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
    public $status = "Updated";

    protected $rules = [
            'months_operated' => 'required',
            'rooms_yearend' => 'required',
            'beds_yearend' => 'required',
            'roomnights_sold' => 'required',
            'bednights_sold' => 'required',
            'roomrate_annual' => 'required',
    ];

    public function mount(EstOpera $estrecordid)
    {
        $this->user_id = $estrecordid->user_id;
        $this->est_record_id = $estrecordid->id;
        $this->months_operated = json_decode($estrecordid->months_operated, true);
        $this->rooms_yearend = $estrecordid->rooms_yearend;
        $this->beds_yearend = $estrecordid->beds_yearend;
        $this->roomnights_sold = $estrecordid->roomnights_sold;
        $this->bednights_sold = $estrecordid->bednights_sold;
        $this->roomrate_annual = $estrecordid->roomrate_annual;
        $this->status = $estrecordid->status;
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

        EstOpera::where('id', $this->est_record_id)->update([
            'user_id' => $this->user_id,
            'months_operated' => json_encode($this->months_operated),
            'rooms_yearend' => $this->rooms_yearend,
            'beds_yearend' => $this->beds_yearend,
            'roomnights_sold' => $this->roomnights_sold,
            'bednights_sold' => $this->bednights_sold,
            'roomrate_annual' => $this->roomrate_annual,
            'status' => $this->status,
        ]);
        

        session()->flash('success', 'Operations Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-operation-edit');
    }
}
