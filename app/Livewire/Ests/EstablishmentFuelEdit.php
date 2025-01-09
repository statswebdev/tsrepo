<?php

namespace App\Livewire\Ests;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;

class EstablishmentFuelEdit extends Component
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

    protected $rules = [
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
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        $est_record = EstRecord::with('estfuel')->findOrFail($estrecordid);

        if ($est_record->estfuel) {
            $this->generator_capacity_unit = $est_record->estfuel->generator_capacity_unit;
            $this->generator_capacity_qty = $est_record->estfuel->generator_capacity_qty;
            $this->solar_rooftop = $est_record->estfuel->solar_rooftop;
            $this->solar_groundmounted = $est_record->estfuel->solar_groundmounted;
            $this->solar_floating = $est_record->estfuel->solar_floating;
            $this->energy_storage = $est_record->estfuel->energy_storage;
            $this->energy_storage_power = $est_record->estfuel->energy_storage_power;
            $this->energy_storage_kwh = $est_record->estfuel->energy_storage_kwh;
            $this->energy_storage_other = $est_record->estfuel->energy_storage_other;
            $this->energy_storage_othertype = $est_record->estfuel->energy_storage_othertype;
            $this->energy_storage_othercapacity = $est_record->estfuel->energy_storage_othercapacity;
            $this->solar_waterheating = $est_record->estfuel->solar_waterheating;
            $this->waste_heatrecovery = $est_record->estfuel->waste_heatrecovery;
            $this->other_energy_capacity = $est_record->estfuel->other_energy_capacity;
        }

        $this->est_record_id = $estrecordid;
    }

    public function save()
    {
        $this->validate([
            'generator_capacity_unit' => 'required|integer',
            'generator_capacity_qty' => 'required',
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

        $estRecord = EstRecord::with('estfuel')->findOrFail($this->est_record_id);

        if ($estRecord->estfuel) {
            // Update the fields in the related `estfuel` model
            $estRecord->estfuel->update([
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
                'status' => 'submitted',
            ]);
            
        }

        session()->flash('success', 'Energy Capacity Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-fuel-edit');
    }
}
