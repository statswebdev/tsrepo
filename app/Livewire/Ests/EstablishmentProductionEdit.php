<?php

namespace App\Livewire\Ests;

use App\Models\EstEmppro;
use Livewire\Component;

class EstablishmentProductionEdit extends Component
{
    public $user_id;
    public $est_record_id;
    public $generated_inhouse;
    public $electricity_generated;
    public $electricity_outsourced;
    public $outsourced_generated;
    public $electricity_othersources;
    public $othersources_generated;
    public $electricity_consumption;
    public $solargrid_energy;
    public $solargrid_production;
    public $solargrid_consumption;
    public $renewable_other;
    public $renewable_other_production;
    public $renewable_other_consumption;
    public $waterinhouse_production;
    public $waterinhouse_monthly;
    public $water_outsourced;
    public $water_outsourced_monthly;
    public $monthly_water_jan;
    public $monthly_water_feb;
    public $monthly_water_mar;
    public $monthly_water_apr;
    public $monthly_water_may;
    public $monthly_water_jun;
    public $monthly_water_july;
    public $monthly_water_aug;
    public $monthly_water_sep;
    public $monthly_water_oct;
    public $monthly_water_nov;
    public $monthly_water_dec;
    public $waste_disposedinhouse;
    public $waste_disposedoutsourced;
    public $waste_disposalother;
    public $waste_monthly;
    public $plastic_waste;
    public $plastic_waste_method = [];
    public $organic_waste;
    public $organic_waste_method = [];
    public $metal_waste;
    public $metal_waste_method = [];
    public $other_waste;
    public $other_waste_method = [];
    public $status="Updated";

    protected $rules = [
            'generated_inhouse' => 'required',
            'electricity_generated' => 'nullable',
            'electricity_outsourced' => 'required',
            'outsourced_generated' => 'nullable',
            'electricity_othersources' => 'required',
            'othersources_generated' => 'nullable',
            'electricity_consumption' => 'required',
            'solargrid_energy' => 'required',
            'solargrid_production' => 'nullable',
            'solargrid_consumption' => 'nullable',
            'renewable_other' => 'required',
            'renewable_other_production' => 'nullable',
            'renewable_other_consumption' => 'nullable',
            'waterinhouse_production' => 'required',
            'waterinhouse_monthly' => 'nullable',
            'water_outsourced' => 'required',
            'water_outsourced_monthly' => 'nullable',
            'monthly_water_jan' => 'required',
            'monthly_water_feb' => 'required',
            'monthly_water_mar' => 'required',
            'monthly_water_apr' => 'required',
            'monthly_water_may' => 'required',
            'monthly_water_jun' => 'required',
            'monthly_water_july' => 'required',
            'monthly_water_aug' => 'required',
            'monthly_water_sep' => 'required',
            'monthly_water_oct' => 'required',
            'monthly_water_nov' => 'required',
            'monthly_water_dec' => 'required',
            'waste_disposedinhouse' => 'required',
            'waste_disposedoutsourced' => 'required',
            'waste_disposalother' => 'required',
            'waste_monthly' => 'required',
            'plastic_waste' => 'required',
            'plastic_waste_method' => 'required',
            'organic_waste' => 'required',
            'organic_waste_method' => 'required',
            'metal_waste' => 'required',
            'metal_waste_method' => 'required',
            'other_waste' => 'required',
            'other_waste_method' => 'required',   
    ];

    public function mount(EstEmppro $estrecordid)
    {
        $this->user_id = $estrecordid->user_id;
        $this->est_record_id = $estrecordid->id;
        $this->generated_inhouse = $estrecordid->generated_inhouse;
        $this->electricity_generated = $estrecordid->electricity_generated;
        $this->electricity_outsourced = $estrecordid->electricity_outsourced;
        $this->outsourced_generated = $estrecordid->outsourced_generated;
        $this->electricity_othersources = $estrecordid->electricity_othersources;
        $this->othersources_generated = $estrecordid->othersources_generated;
        $this->electricity_consumption = $estrecordid->electricity_consumption;
        $this->solargrid_energy = $estrecordid->solargrid_energy;
        $this->solargrid_production = $estrecordid->solargrid_production;
        $this->solargrid_consumption = $estrecordid->solargrid_consumption;
        $this->renewable_other = $estrecordid->renewable_other;
        $this->renewable_other_production = $estrecordid->renewable_other_production;
        $this->renewable_other_consumption = $estrecordid->renewable_other_consumption;
        $this->waterinhouse_production = $estrecordid->waterinhouse_production;
        $this->waterinhouse_monthly = $estrecordid->waterinhouse_monthly;
        $this->water_outsourced = $estrecordid->water_outsourced;
        $this->water_outsourced_monthly = $estrecordid->water_outsourced_monthly;
        $this->monthly_water_jan = $estrecordid->monthly_water_jan;
        $this->monthly_water_feb = $estrecordid->monthly_water_feb;
        $this->monthly_water_mar = $estrecordid->monthly_water_mar;
        $this->monthly_water_apr = $estrecordid->monthly_water_apr;
        $this->monthly_water_may = $estrecordid->monthly_water_may;
        $this->monthly_water_jun = $estrecordid->monthly_water_jun;
        $this->monthly_water_july = $estrecordid->monthly_water_july;
        $this->monthly_water_aug = $estrecordid->monthly_water_aug;
        $this->monthly_water_sep = $estrecordid->monthly_water_sep;
        $this->monthly_water_oct = $estrecordid->monthly_water_oct;
        $this->monthly_water_nov = $estrecordid->monthly_water_nov;
        $this->monthly_water_dec = $estrecordid->monthly_water_dec;
        $this->waste_disposedinhouse = $estrecordid->waste_disposedinhouse;
        $this->waste_disposedoutsourced = $estrecordid->waste_disposedoutsourced;
        $this->waste_disposalother = $estrecordid->waste_disposalother;
        $this->waste_monthly = $estrecordid->waste_monthly;
        $this->plastic_waste = $estrecordid->plastic_waste;
        $this->plastic_waste_method = json_decode($estrecordid->plastic_waste_method, true);
        $this->organic_waste = $estrecordid->organic_waste;
        $this->organic_waste_method = json_decode($estrecordid->organic_waste_method, true);
        $this->metal_waste = $estrecordid->metal_waste;
        $this->metal_waste_method = json_decode($estrecordid->metal_waste_method, true);
        $this->other_waste = $estrecordid->other_waste;
        $this->other_waste_method = json_decode($estrecordid->other_waste_method, true);
        $this->status = $estrecordid->status;
    }

    public function save()
    {
        $this->validate([
            'generated_inhouse' => 'required',
            'electricity_generated' => 'nullable',
            'electricity_outsourced' => 'required',
            'outsourced_generated' => 'nullable',
            'electricity_othersources' => 'required',
            'othersources_generated' => 'nullable',
            'electricity_consumption' => 'required',
            'solargrid_energy' => 'required',
            'solargrid_production' => 'nullable',
            'solargrid_consumption' => 'nullable',
            'renewable_other' => 'required',
            'renewable_other_production' => 'nullable',
            'renewable_other_consumption' => 'nullable',
            'waterinhouse_production' => 'required',
            'waterinhouse_monthly' => 'nullable',
            'water_outsourced' => 'required',
            'water_outsourced_monthly' => 'nullable',
            'monthly_water_jan' => 'required',
            'monthly_water_feb' => 'required',
            'monthly_water_mar' => 'required',
            'monthly_water_apr' => 'required',
            'monthly_water_may' => 'required',
            'monthly_water_jun' => 'required',
            'monthly_water_july' => 'required',
            'monthly_water_aug' => 'required',
            'monthly_water_sep' => 'required',
            'monthly_water_oct' => 'required',
            'monthly_water_nov' => 'required',
            'monthly_water_dec' => 'required',
            'waste_disposedinhouse' => 'required',
            'waste_disposedoutsourced' => 'required',
            'waste_disposalother' => 'required',
            'waste_monthly' => 'required',
            'plastic_waste' => 'required',
            'plastic_waste_method' => 'required',
            'organic_waste' => 'required',
            'organic_waste_method' => 'required',
            'metal_waste' => 'required',
            'metal_waste_method' => 'required',
            'other_waste' => 'required',
            'other_waste_method' => 'required',   
        ]);

        EstEmppro::where('id', $this->est_record_id)->update([
            'user_id' => $this->user_id,
            'generated_inhouse' => $this->generated_inhouse,
            'electricity_generated' => $this->electricity_generated,
            'electricity_outsourced' => $this->electricity_outsourced,
            'outsourced_generated' => $this->outsourced_generated,
            'electricity_othersources' => $this->electricity_othersources,
            'othersources_generated' => $this->othersources_generated,
            'electricity_consumption' => $this->electricity_consumption,
            'solargrid_energy' => $this->solargrid_energy,
            'solargrid_production' => $this->solargrid_production,
            'solargrid_consumption' => $this->solargrid_consumption,
            'renewable_other' => $this->renewable_other,
            'renewable_other_production' => $this->renewable_other_production,
            'renewable_other_consumption' => $this->renewable_other_consumption,
            'waterinhouse_production' => $this->waterinhouse_production,
            'waterinhouse_monthly' => $this->waterinhouse_monthly,
            'water_outsourced' => $this->water_outsourced,
            'water_outsourced_monthly' => $this->water_outsourced_monthly,
            'monthly_water_jan' => $this->monthly_water_jan,
            'monthly_water_feb' => $this->monthly_water_feb,
            'monthly_water_mar' => $this->monthly_water_mar,
            'monthly_water_apr' => $this->monthly_water_apr,
            'monthly_water_may' => $this->monthly_water_may,
            'monthly_water_jun' => $this->monthly_water_jun,
            'monthly_water_july' => $this->monthly_water_july,
            'monthly_water_aug' => $this->monthly_water_aug,
            'monthly_water_sep' => $this->monthly_water_sep,
            'monthly_water_oct' => $this->monthly_water_oct,
            'monthly_water_nov' => $this->monthly_water_nov,
            'monthly_water_dec' => $this->monthly_water_dec,
            'waste_disposedinhouse' => $this->waste_disposedinhouse,
            'waste_disposedoutsourced' => $this->waste_disposedoutsourced,
            'waste_disposalother' => $this->waste_disposalother,
            'waste_monthly' => $this->waste_monthly,
            'plastic_waste' => $this->plastic_waste,
            'plastic_waste_method' => json_encode($this->plastic_waste_method),
            'organic_waste' => $this->organic_waste,
            'organic_waste_method' => json_encode($this->organic_waste_method),
            'metal_waste' => $this->metal_waste,
            'metal_waste_method' => json_encode($this->metal_waste_method),
            'other_waste' => $this->other_waste,
            'other_waste_method' => json_encode($this->other_waste_method),
            'status' => 'completed',
        ]);
       
        

        session()->flash('success', 'Production Information Updated');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.ests.establishment-production-edit');
    }
}
