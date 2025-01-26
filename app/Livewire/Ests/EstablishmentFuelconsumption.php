<?php

namespace App\Livewire\Ests;

use App\Models\Estfuelconsum;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentFuelconsumption extends Component
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
    public $consume_jan_diesel;
    public $consume_feb_diesel;
    public $consume_mar_diesel;
    public $consume_apr_diesel;
    public $consume_may_diesel;
    public $consume_jun_diesel;
    public $consume_jul_diesel;
    public $consume_aug_diesel;
    public $consume_sep_diesel;
    public $consume_oct_diesel;
    public $consume_nov_diesel;
    public $consume_dec_diesel;
    public $consume_jan_lub;
    public $consume_feb_lub;
    public $consume_mar_lub;
    public $consume_apr_lub;
    public $consume_may_lub;
    public $consume_jun_lub;
    public $consume_jul_lub;
    public $consume_aug_lub;
    public $consume_sep_lub;
    public $consume_oct_lub;
    public $consume_nov_lub;
    public $consume_dec_lub;
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
            'consume_jan_diesel' => 'required',
                'consume_feb_diesel' => 'required',
                'consume_mar_diesel' => 'required',
                'consume_apr_diesel' => 'required',
                'consume_may_diesel' => 'required',
                'consume_jun_diesel' => 'required',
                'consume_jul_diesel' => 'required',
                'consume_aug_diesel' => 'required',
                'consume_sep_diesel' => 'required',
                'consume_oct_diesel' => 'required',
                'consume_nov_diesel' => 'required',
                'consume_dec_diesel' => 'required',
                'consume_jan_lub' => 'required',
                'consume_feb_lub' => 'required',
                'consume_mar_lub' => 'required',
                'consume_apr_lub' => 'required',
                'consume_may_lub' => 'required',
                'consume_jun_lub' => 'required',
                'consume_jul_lub' => 'required',
                'consume_aug_lub' => 'required',
                'consume_sep_lub' => 'required',
                'consume_oct_lub' => 'required',
                'consume_nov_lub' => 'required',
                'consume_dec_lub' => 'required',
        ]);
       

        Estfuelconsum::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
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
            'consume_jan_diesel' => $this->consume_jan_diesel,
            'consume_feb_diesel' => $this->consume_feb_diesel,
            'consume_mar_diesel' => $this->consume_mar_diesel,
            'consume_apr_diesel' => $this->consume_apr_diesel,
            'consume_may_diesel' => $this->consume_may_diesel,
            'consume_jun_diesel' => $this->consume_jun_diesel,
            'consume_jul_diesel' => $this->consume_jul_diesel,
            'consume_aug_diesel' => $this->consume_aug_diesel,
            'consume_sep_diesel' => $this->consume_sep_diesel,
            'consume_oct_diesel' => $this->consume_oct_diesel,
            'consume_nov_diesel' => $this->consume_nov_diesel,
            'consume_dec_diesel' => $this->consume_dec_diesel,
            'consume_jan_lub' => $this->consume_jan_lub,
            'consume_feb_lub' => $this->consume_feb_lub,
            'consume_mar_lub' => $this->consume_mar_lub,
            'consume_apr_lub' => $this->consume_apr_lub,
            'consume_may_lub' => $this->consume_may_lub,
            'consume_jun_lub' => $this->consume_jun_lub,
            'consume_jul_lub' => $this->consume_jul_lub,
            'consume_aug_lub' => $this->consume_aug_lub,
            'consume_sep_lub' => $this->consume_sep_lub,
            'consume_oct_lub' => $this->consume_oct_lub,
            'consume_nov_lub' => $this->consume_nov_lub,
            'consume_dec_lub' => $this->consume_dec_lub,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Fuel Consumption Submitted successfully');
        return redirect()->route('dashboard');
    }

   

    public function render()
    {
        return view('livewire.ests.establishment-fuelconsumption');
    }
}
