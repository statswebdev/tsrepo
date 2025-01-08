<?php

namespace App\Livewire\Ests;

use App\Models\Estfue;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentFuel extends Component
{
    public $user_id;
    public $est_record_id;
    public $generator_capacity_unit;
    public $generator_capacity_qty;
    public $solar_rooftop;
    public $solar_groundmounted;
    public $solar_floating;
    public $energy_storage;
    public $energy_storage_power;
    public $energy_storage_kwh;
    public $energy_storage_other;
    public $energy_storage_othertype;
    public $energy_storage_othercapacity;
    public $solar_waterheating;
    public $waste_heatrecovery;
    public $other_energy_capacity;
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
            'generator_capacity_unit' => 'required|integer',
            'generator_capacity_qty' => 'required|integer',
            'solar_rooftop' => 'required|integer',
            'solar_groundmounted' => 'required|integer',
            'solar_floating' => 'required|integer',
            'energy_storage' => 'required|string',
            'energy_storage_power' => 'required|integer',
            'energy_storage_kwh' => 'required|integer',
            'energy_storage_other' => 'nullable|string',
            'energy_storage_othertype' => 'nullable|string',
            'energy_storage_othercapacity' => 'nullable|integer',
            'solar_waterheating' => 'required|integer',
            'waste_heatrecovery' => 'required|integer',
            'other_energy_capacity' => 'nullable|integer',
        ]);

        Estfue::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'generator_capacity_unit' => $this->generator_capacity_unit,
            'generator_capacity_qty' => $this->generator_capacity_qty,
            'solar_rooftop' => $this->solar_rooftop,
            'solar_groundmounted' => $this->solar_groundmounted,
            'solar_floating' => $this->solar_floating,
            'energy_storage' => $this->energy_storage,
            'energy_storage_power' => $this->energy_storage_power,
            'energy_storage_kwh' => $this->energy_storage_kwh,
            'energy_storage_other' => $this->energy_storage_other,
            'energy_storage_othertype' => $this->energy_storage_othertype,
            'energy_storage_othercapacity' => $this->energy_storage_othercapacity,
            'solar_waterheating' => $this->solar_waterheating,
            'waste_heatrecovery' => $this->waste_heatrecovery,
            'other_energy_capacity' => $this->other_energy_capacity,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Energy Capacity Information Submitted successfully');
        return redirect()->route('dashboard');
    }



    public function render()
    {
        return view('livewire.ests.establishment-fuel');
    }
}
