<?php

namespace App\Livewire\Ests;

use App\Models\Estfue;
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

    public function mount()
    {
        $this->user_id = Auth::id();

        // Retrieve the record from the estopera table for the authenticated user
        $estfuel = Estfue::where('user_id', $this->user_id)->first();

        if ($estfuel) {
            $this->generator_capacity_unit = $estfuel->generator_capacity_unit;
            $this->generator_capacity_qty = $estfuel->generator_capacity_qty;
            $this->solar_rooftop = $estfuel->solar_rooftop;
            $this->solar_groundmounted = $estfuel->solar_groundmounted;
            $this->solar_floating = $estfuel->solar_floating;
            $this->energy_storage = $estfuel->energy_storage;
            $this->energy_storage_power = $estfuel->energy_storage_power;
            $this->energy_storage_kwh = $estfuel->energy_storage_kwh;
            $this->energy_storage_other = $estfuel->energy_storage_other;
            $this->energy_storage_othertype = $estfuel->energy_storage_othertype;
            $this->energy_storage_othercapacity = $estfuel->energy_storage_othercapacity;
            $this->solar_waterheating = $estfuel->solar_waterheating;
            $this->waste_heatrecovery = $estfuel->waste_heatrecovery;
            $this->other_energy_capacity = $estfuel->other_energy_capacity;
        }
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

        $estfuel = Estfue::where('user_id', $this->user_id)->first();

        if ($estfuel) {
            // Update the fields in the estopera record
            $estfuel->update([
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
            
        }

        session()->flash('success', 'Energy Capacity Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-fuel-edit');
    }
}
