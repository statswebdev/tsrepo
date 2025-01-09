<?php

namespace App\Livewire\Ests;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;

class EstablishmentFuelconsumptionEdit extends Component
{
    public $user_id;
    public $est_record_id;
    public $diesel_bought_qty;
    public $diesel_bought_year;
    public $petrol_bought_qty;
    public $petrol_bought_year;
    public $lpg_bought_qty;
    public $lpg_bought_year;
    public $other_bought_qty;
    public $other_bought_year;
    public $diesel_inventory_unit;
    public $diesel_inventory_yearfirst;
    public $diesel_inventory_yearend;
    public $petrol_inventory_unit;
    public $petrol_inventory_yearfirst;
    public $petrol_inventory_yearend;
    public $lpg_inventory_unit;
    public $lpg_inventory_unit_yearfirst;
    public $lpg_inventory_unit_yearend;
    public $other_inventory_specify;
    public $other_inventory_unit;
    public $other_inventory_unit_yearfirst;
    public $other_inventory_unit_yearend;
    public $diesel_electricity_unit;
    public $diesel_electricity_qty;
    public $petrol_electricity_unit;
    public $petrol_electricity_qty;
    public $diesel_desalination_unit;
    public $diesel_desalination_qty;
    public $petrol_desalination_unit;
    public $petrol_desalination_qty;
    public $diesel_transportsea_unit;
    public $diesel_transportsea_qty;
    public $petrol_transportsea_unit;
    public $petrol_transportsea_qty;
    public $diesel_transportland_unit;
    public $diesel_transportland_qty;
    public $petrol_transportland_unit;
    public $petrol_transportland_qty;
    public $lpg_cooking_unit;
    public $lpg_cooking_qty;
    public $diesel_cooking_unit;
    public $diesel_cooking_qty;
    public $petrol_cooking_unit;
    public $petrol_cooking_qty;
    public $diesel_other_fuelconsumption;
    public $diesel_other_fuelconsumption_unit;
    public $diesel_other_fuelconsumption_qty;
    public $petrol_other_fuelconsumption;
    public $petrol_other_fuelconsumption_unit;
    public $petrol_other_fuelconsumption_qty;
    public $status = "submitted";


    protected $rules = [
            'diesel_bought_qty' => 'required|integer',
            'diesel_bought_year' => 'required|string',
            'petrol_bought_qty' => 'required|integer',
            'petrol_bought_year' => 'required|string',
            'lpg_bought_qty' => 'required|integer',
            'lpg_bought_year' => 'required|string',
            'other_bought_qty' => 'nullable|integer',
            'other_bought_year' => 'nullable|string',
            'diesel_inventory_unit' => 'required|string',
            'diesel_inventory_yearfirst' => 'required|integer',
            'diesel_inventory_yearend' => 'required|integer',
            'petrol_inventory_unit' => 'required|string',
            'petrol_inventory_yearfirst' => 'required|integer',
            'petrol_inventory_yearend' => 'required|integer',
            'lpg_inventory_unit' => 'required|string',
            'lpg_inventory_unit_yearfirst' => 'required|integer',
            'lpg_inventory_unit_yearend' => 'required|integer',
            'other_inventory_specify' => 'nullable|string',
            'other_inventory_unit' => 'nullable|string',
            'other_inventory_unit_yearfirst' => 'nullable|integer',
            'other_inventory_unit_yearend' => 'nullable|integer',
            'diesel_electricity_unit' => 'required|string',
            'diesel_electricity_qty' => 'required|integer',
            'petrol_electricity_unit' => 'required|string',
            'petrol_electricity_qty' => 'required|integer',
            'diesel_desalination_unit' => 'required|string',
            'diesel_desalination_qty' => 'required|integer',
            'petrol_desalination_unit' => 'required|string',
            'petrol_desalination_qty' => 'required|integer',
            'diesel_transportsea_unit' => 'required|string',
            'diesel_transportsea_qty' => 'required|integer',
            'petrol_transportsea_unit' => 'required|string',
            'petrol_transportsea_qty' => 'required|integer',
            'diesel_transportland_unit' => 'required|string',
            'diesel_transportland_qty' => 'required|integer',
            'petrol_transportland_unit' => 'required|string',
            'petrol_transportland_qty' => 'required|integer',
            'lpg_cooking_unit' => 'required|string',
            'lpg_cooking_qty' => 'required|integer',
            'diesel_cooking_unit' => 'required|string',
            'diesel_cooking_qty' => 'required|integer',
            'petrol_cooking_unit' => 'required|string',
            'petrol_cooking_qty' => 'required|integer',
            'diesel_other_fuelconsumption' => 'nullable|string',
            'diesel_other_fuelconsumption_unit' => 'nullable|string',
            'diesel_other_fuelconsumption_qty' => 'nullable|integer',
            'petrol_other_fuelconsumption' => 'nullable|string',
            'petrol_other_fuelconsumption_unit' => 'nullable|string',
            'petrol_other_fuelconsumption_qty' => 'nullable|integer',
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        $est_record = EstRecord::with('estfuelconsumption')->findOrFail($estrecordid);

        if ($est_record->estfuelconsumption) {
            $this->diesel_bought_qty = $est_record->estfuelconsumption->diesel_bought_qty;
            $this->diesel_bought_year = $est_record->estfuelconsumption->diesel_bought_year;
            $this->petrol_bought_qty = $est_record->estfuelconsumption->petrol_bought_qty;
            $this->petrol_bought_year = $est_record->estfuelconsumption->petrol_bought_year;
            $this->lpg_bought_qty = $est_record->estfuelconsumption->lpg_bought_qty;
            $this->lpg_bought_year = $est_record->estfuelconsumption->lpg_bought_year;
            $this->other_bought_qty = $est_record->estfuelconsumption->other_bought_qty;
            $this->other_bought_year = $est_record->estfuelconsumption->other_bought_year;
            $this->diesel_inventory_unit = $est_record->estfuelconsumption->diesel_inventory_unit;
            $this->diesel_inventory_yearfirst = $est_record->estfuelconsumption->diesel_inventory_yearfirst;
            $this->diesel_inventory_yearend = $est_record->estfuelconsumption->diesel_inventory_yearend;
            $this->petrol_inventory_unit = $est_record->estfuelconsumption->petrol_inventory_unit;
            $this->petrol_inventory_yearfirst = $est_record->estfuelconsumption->petrol_inventory_yearfirst;
            $this->petrol_inventory_yearend = $est_record->estfuelconsumption->petrol_inventory_yearend;
            $this->lpg_inventory_unit = $est_record->estfuelconsumption->lpg_inventory_unit;
            $this->lpg_inventory_unit_yearfirst = $est_record->estfuelconsumption->lpg_inventory_unit_yearfirst;
            $this->lpg_inventory_unit_yearend = $est_record->estfuelconsumption->lpg_inventory_unit_yearend;
            $this->other_inventory_specify = $est_record->estfuelconsumption->other_inventory_specify;
            $this->other_inventory_unit = $est_record->estfuelconsumption->other_inventory_unit;
            $this->other_inventory_unit_yearfirst = $est_record->estfuelconsumption->other_inventory_unit_yearfirst;
            $this->other_inventory_unit_yearend = $est_record->estfuelconsumption->other_inventory_unit_yearend;
            $this->diesel_electricity_unit = $est_record->estfuelconsumption->diesel_electricity_unit;
            $this->diesel_electricity_qty = $est_record->estfuelconsumption->diesel_electricity_qty;
            $this->petrol_electricity_unit = $est_record->estfuelconsumption->petrol_electricity_unit;
            $this->petrol_electricity_qty = $est_record->estfuelconsumption->petrol_electricity_qty;
            $this->diesel_desalination_unit = $est_record->estfuelconsumption->diesel_desalination_unit;
            $this->diesel_desalination_qty = $est_record->estfuelconsumption->diesel_desalination_qty;
            $this->petrol_desalination_unit = $est_record->estfuelconsumption->petrol_desalination_unit;
            $this->petrol_desalination_qty = $est_record->estfuelconsumption->petrol_desalination_qty;
            $this->diesel_transportsea_unit = $est_record->estfuelconsumption->diesel_transportsea_unit;
            $this->diesel_transportsea_qty = $est_record->estfuelconsumption->diesel_transportsea_qty;
            $this->petrol_transportsea_unit = $est_record->estfuelconsumption->petrol_transportsea_unit;
            $this->petrol_transportsea_qty = $est_record->estfuelconsumption->petrol_transportsea_qty;
            $this->diesel_transportland_unit = $est_record->estfuelconsumption->diesel_transportland_unit;
            $this->diesel_transportland_qty = $est_record->estfuelconsumption->diesel_transportland_qty;
            $this->petrol_transportland_unit = $est_record->estfuelconsumption->petrol_transportland_unit;
            $this->petrol_transportland_qty = $est_record->estfuelconsumption->petrol_transportland_qty;
            $this->lpg_cooking_unit = $est_record->estfuelconsumption->lpg_cooking_unit;
            $this->lpg_cooking_qty = $est_record->estfuelconsumption->lpg_cooking_qty;
            $this->diesel_cooking_unit = $est_record->estfuelconsumption->diesel_cooking_unit;
            $this->diesel_cooking_qty = $est_record->estfuelconsumption->diesel_cooking_qty;
            $this->petrol_cooking_unit = $est_record->estfuelconsumption->petrol_cooking_unit;
            $this->petrol_cooking_qty = $est_record->estfuelconsumption->petrol_cooking_qty;
            $this->diesel_other_fuelconsumption = $est_record->estfuelconsumption->diesel_other_fuelconsumption;
            $this->diesel_other_fuelconsumption_unit = $est_record->estfuelconsumption->diesel_other_fuelconsumption_unit;
            $this->diesel_other_fuelconsumption_qty = $est_record->estfuelconsumption->diesel_other_fuelconsumption_qty;
            $this->petrol_other_fuelconsumption = $est_record->estfuelconsumption->petrol_other_fuelconsumption;
            $this->petrol_other_fuelconsumption_unit = $est_record->estfuelconsumption->petrol_other_fuelconsumption_unit;
            $this->petrol_other_fuelconsumption_qty = $est_record->estfuelconsumption->petrol_other_fuelconsumption_qty;
            $this->status = $est_record->estfuelconsumption->status;
        }

        $this->est_record_id = $estrecordid;
    }

    public function save()
    {
        $this->validate([
            'diesel_bought_qty' => 'required|integer',
            'diesel_bought_year' => 'required|string',
            'petrol_bought_qty' => 'required|integer',
            'petrol_bought_year' => 'required|string',
            'lpg_bought_qty' => 'required|integer',
            'lpg_bought_year' => 'required|string',
            'other_bought_qty' => 'nullable|integer',
            'other_bought_year' => 'nullable|string',
            'diesel_inventory_unit' => 'required|string',
            'diesel_inventory_yearfirst' => 'required|integer',
            'diesel_inventory_yearend' => 'required|integer',
            'petrol_inventory_unit' => 'required|string',
            'petrol_inventory_yearfirst' => 'required|integer',
            'petrol_inventory_yearend' => 'required|integer',
            'lpg_inventory_unit' => 'required|string',
            'lpg_inventory_unit_yearfirst' => 'required|integer',
            'lpg_inventory_unit_yearend' => 'required|integer',
            'other_inventory_specify' => 'nullable|string',
            'other_inventory_unit' => 'nullable|string',
            'other_inventory_unit_yearfirst' => 'nullable|integer',
            'other_inventory_unit_yearend' => 'nullable|integer',
            'diesel_electricity_unit' => 'required|string',
            'diesel_electricity_qty' => 'required|integer',
            'petrol_electricity_unit' => 'required|string',
            'petrol_electricity_qty' => 'required|integer',
            'diesel_desalination_unit' => 'required|string',
            'diesel_desalination_qty' => 'required|integer',
            'petrol_desalination_unit' => 'required|string',
            'petrol_desalination_qty' => 'required|integer',
            'diesel_transportsea_unit' => 'required|string',
            'diesel_transportsea_qty' => 'required|integer',
            'petrol_transportsea_unit' => 'required|string',
            'petrol_transportsea_qty' => 'required|integer',
            'diesel_transportland_unit' => 'required|string',
            'diesel_transportland_qty' => 'required|integer',
            'petrol_transportland_unit' => 'required|string',
            'petrol_transportland_qty' => 'required|integer',
            'lpg_cooking_unit' => 'required|string',
            'lpg_cooking_qty' => 'required|integer',
            'diesel_cooking_unit' => 'required|string',
            'diesel_cooking_qty' => 'required|integer',
            'petrol_cooking_unit' => 'required|string',
            'petrol_cooking_qty' => 'required|integer',
            'diesel_other_fuelconsumption' => 'nullable|string',
            'diesel_other_fuelconsumption_unit' => 'nullable|string',
            'diesel_other_fuelconsumption_qty' => 'nullable|integer',
            'petrol_other_fuelconsumption' => 'nullable|string',
            'petrol_other_fuelconsumption_unit' => 'nullable|string',
            'petrol_other_fuelconsumption_qty' => 'nullable|integer',
            
        ]);

        $estRecord = EstRecord::with('estfuelconsumption')->findOrFail($this->est_record_id);

        if ($estRecord->estfuelconsumption) {
            // Update the fields in the related `estfuelconsumption` model
            $estRecord->estfuelconsumption->update([
                'diesel_bought_qty' => $this->diesel_bought_qty,
                'diesel_bought_year' => $this->diesel_bought_year,
                'petrol_bought_qty' => $this->petrol_bought_qty,
                'petrol_bought_year' => $this->petrol_bought_year,
                'lpg_bought_qty' => $this->lpg_bought_qty,
                'lpg_bought_year' => $this->lpg_bought_year,
                'other_bought_qty' => $this->other_bought_qty,
                'other_bought_year' => $this->other_bought_year,
                'diesel_inventory_unit' => $this->diesel_inventory_unit,
                'diesel_inventory_yearfirst' => $this->diesel_inventory_yearfirst,
                'diesel_inventory_yearend' => $this->diesel_inventory_yearend,
                'petrol_inventory_unit' => $this->petrol_inventory_unit,
                'petrol_inventory_yearfirst' => $this->petrol_inventory_yearfirst,
                'petrol_inventory_yearend' => $this->petrol_inventory_yearend,
                'lpg_inventory_unit' => $this->lpg_inventory_unit,
                'lpg_inventory_unit_yearfirst' => $this->lpg_inventory_unit_yearfirst,
                'lpg_inventory_unit_yearend' => $this->lpg_inventory_unit_yearend,
                'other_inventory_specify' => $this->other_inventory_specify,
                'other_inventory_unit' => $this->other_inventory_unit,
                'other_inventory_unit_yearfirst' => $this->other_inventory_unit_yearfirst,
                'other_inventory_unit_yearend' => $this->other_inventory_unit_yearend,
                'diesel_electricity_unit' => $this->diesel_electricity_unit,
                'diesel_electricity_qty' => $this->diesel_electricity_qty,
                'petrol_electricity_unit' => $this->petrol_electricity_unit,
                'petrol_electricity_qty' => $this->petrol_electricity_qty,
                'diesel_desalination_unit' => $this->diesel_desalination_unit,
                'diesel_desalination_qty' => $this->diesel_desalination_qty,
                'petrol_desalination_unit' => $this->petrol_desalination_unit,
                'petrol_desalination_qty' => $this->petrol_desalination_qty,
                'diesel_transportsea_unit' => $this->diesel_transportsea_unit,
                'diesel_transportsea_qty' => $this->diesel_transportsea_qty,
                'petrol_transportsea_unit' => $this->petrol_transportsea_unit,
                'petrol_transportsea_qty' => $this->petrol_transportsea_qty,
                'diesel_transportland_unit' => $this->diesel_transportland_unit,
                'diesel_transportland_qty' => $this->diesel_transportland_qty,
                'petrol_transportland_unit' => $this->petrol_transportland_unit,
                'petrol_transportland_qty' => $this->petrol_transportland_qty,
                'lpg_cooking_unit' => $this->lpg_cooking_unit,
                'lpg_cooking_qty' => $this->lpg_cooking_qty,
                'diesel_cooking_unit' => $this->diesel_cooking_unit,
                'diesel_cooking_qty' => $this->diesel_cooking_qty,
                'petrol_cooking_unit' => $this->petrol_cooking_unit,
                'petrol_cooking_qty' => $this->petrol_cooking_qty,
                'diesel_other_fuelconsumption' => $this->diesel_other_fuelconsumption,
                'diesel_other_fuelconsumption_unit' => $this->diesel_other_fuelconsumption_unit,
                'diesel_other_fuelconsumption_qty' => $this->diesel_other_fuelconsumption_qty,
                'petrol_other_fuelconsumption' => $this->petrol_other_fuelconsumption,
                'petrol_other_fuelconsumption_unit' => $this->petrol_other_fuelconsumption_unit,
                'petrol_other_fuelconsumption_qty' => $this->petrol_other_fuelconsumption_qty,
                'status' => 'submitted',
            ]);
           
        }
        

        session()->flash('success', 'Operations Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-fuelconsumption-edit');
    }
}
