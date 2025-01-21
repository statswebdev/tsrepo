<?php

namespace App\Livewire\Ests;

use App\Models\EstEmppro;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EstablishmentProductionEdit extends Component
{
    public $user_id;
    public $est_record_id;
    // public $generated_inhouse;
    // public $electricity_generated;
    // public $electricity_outsourced;
    // public $outsourced_generated;
    // public $electricity_othersources;
    // public $othersources_generated;
    // public $electricity_consumption;
    // public $solargrid_energy;
    // public $solargrid_production;
    // public $solargrid_consumption;
    // public $renewable_other;
    // public $renewable_other_production;
    // public $renewable_other_consumption;
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
    public $status="submitted";

    protected $rules = [
            // 'generated_inhouse' => 'required|string',
            // 'electricity_generated' => 'nullable|integer',
            // 'electricity_outsourced' => 'required|string',
            // 'outsourced_generated' => 'nullable|integer',
            // 'electricity_othersources' => 'required|string',
            // 'othersources_generated' => 'nullable|integer',
            // 'electricity_consumption' => 'required|integer',
            // 'solargrid_energy' => 'required|string',
            // 'solargrid_production' => 'nullable|integer',
            // 'solargrid_consumption' => 'nullable|integer',
            // 'renewable_other' => 'required|string',
            // 'renewable_other_production' => 'nullable|integer',
            // 'renewable_other_consumption' => 'nullable|integer',
            'waterinhouse_production' => 'required|string',
            'waterinhouse_monthly' => 'nullable|integer',
            'water_outsourced' => 'required|string',
            'water_outsourced_monthly' => 'nullable|integer',
            'monthly_water_jan' => 'required|integer',
            'monthly_water_feb' => 'required|integer',
            'monthly_water_mar' => 'required|integer',
            'monthly_water_apr' => 'required|integer',
            'monthly_water_may' => 'required|integer',
            'monthly_water_jun' => 'required|integer',
            'monthly_water_july' => 'required|integer',
            'monthly_water_aug' => 'required|integer',
            'monthly_water_sep' => 'required|integer',
            'monthly_water_oct' => 'required|integer',
            'monthly_water_nov' => 'required|integer',
            'monthly_water_dec' => 'required|integer',
            'waste_disposedinhouse' => 'required|string',
            'waste_disposedoutsourced' => 'required|string',
            'waste_disposalother' => 'required|string',
            'waste_monthly' => 'required|integer',
            'plastic_waste' => 'required|integer',
            'plastic_waste_method' => 'required|string',
            'organic_waste' => 'required|integer',
            'organic_waste_method' => 'required|string',
            'metal_waste' => 'required|integer',
            'metal_waste_method' => 'required|string',
            'other_waste' => 'required|integer',
            'other_waste_method' => 'required|string', 
    ];

    public function mount()
    {
        // Get the authenticated user's ID
        $this->user_id = Auth::id();

        // Retrieve the record from the estopera table for the authenticated user
        $production = EstEmppro::where('user_id', $this->user_id)->first();
    if ($production) {
        $this->est_record_id = $production->id;
        // $this->generated_inhouse = $production->generated_inhouse;
        // $this->electricity_generated = $production->electricity_generated;
        // $this->electricity_outsourced = $production->electricity_outsourced;
        // $this->outsourced_generated = $production->outsourced_generated;
        // $this->electricity_othersources = $production->electricity_othersources;
        // $this->othersources_generated = $production->othersources_generated;
        // $this->electricity_consumption = $production->electricity_consumption;
        // $this->solargrid_energy = $production->solargrid_energy;
        // $this->solargrid_production = $production->solargrid_production;
        // $this->solargrid_consumption = $production->solargrid_consumption;
        // $this->renewable_other = $production->renewable_other;
        // $this->renewable_other_production = $production->renewable_other_production;
        // $this->renewable_other_consumption = $production->renewable_other_consumption;
        $this->waterinhouse_production = $production->waterinhouse_production;
        $this->waterinhouse_monthly = $production->waterinhouse_monthly;
        $this->water_outsourced = $production->water_outsourced;
        $this->water_outsourced_monthly = $production->water_outsourced_monthly;
        $this->monthly_water_jan = $production->monthly_water_jan;
        $this->monthly_water_feb = $production->monthly_water_feb;
        $this->monthly_water_mar = $production->monthly_water_mar;
        $this->monthly_water_apr = $production->monthly_water_apr;
        $this->monthly_water_may = $production->monthly_water_may;
        $this->monthly_water_jun = $production->monthly_water_jun;
        $this->monthly_water_july = $production->monthly_water_july;
        $this->monthly_water_aug = $production->monthly_water_aug;
        $this->monthly_water_sep = $production->monthly_water_sep;
        $this->monthly_water_oct = $production->monthly_water_oct;
        $this->monthly_water_nov = $production->monthly_water_nov;
        $this->monthly_water_dec = $production->monthly_water_dec;
        $this->waste_disposedinhouse = $production->waste_disposedinhouse;
        $this->waste_disposedoutsourced = $production->waste_disposedoutsourced;
        $this->waste_disposalother = $production->waste_disposalother;
        $this->waste_monthly = $production->waste_monthly;
        $this->plastic_waste = $production->plastic_waste;
        $this->plastic_waste_method = json_decode($production->plastic_waste_method, true);
        $this->organic_waste = $production->organic_waste;
        $this->organic_waste_method = json_decode($production->organic_waste_method, true);
        $this->metal_waste = $production->metal_waste;
        $this->metal_waste_method = json_decode($production->metal_waste_method, true);
        $this->other_waste = $production->other_waste;
        $this->other_waste_method = json_decode($production->other_waste_method, true);
    }
}

    public function save()
    {
        $this->validate([
            // 'generated_inhouse' => 'required|string',
            // 'electricity_generated' => 'nullable|integer',
            // 'electricity_outsourced' => 'required|string',
            // 'outsourced_generated' => 'nullable|integer',
            // 'electricity_othersources' => 'required|string',
            // 'othersources_generated' => 'nullable|integer',
            // 'electricity_consumption' => 'required|integer',
            // 'solargrid_energy' => 'required|string',
            // 'solargrid_production' => 'nullable|integer',
            // 'solargrid_consumption' => 'nullable|integer',
            // 'renewable_other' => 'required|string',
            // 'renewable_other_production' => 'nullable|integer',
            // 'renewable_other_consumption' => 'nullable|integer',
            'waterinhouse_production' => 'required|string',
            'waterinhouse_monthly' => 'nullable|integer',
            'water_outsourced' => 'required|string',
            'water_outsourced_monthly' => 'nullable|integer',
            'monthly_water_jan' => 'required|integer',
            'monthly_water_feb' => 'required|integer',
            'monthly_water_mar' => 'required|integer',
            'monthly_water_apr' => 'required|integer',
            'monthly_water_may' => 'required|integer',
            'monthly_water_jun' => 'required|integer',
            'monthly_water_july' => 'required|integer',
            'monthly_water_aug' => 'required|integer',
            'monthly_water_sep' => 'required|integer',
            'monthly_water_oct' => 'required|integer',
            'monthly_water_nov' => 'required|integer',
            'monthly_water_dec' => 'required|integer',
            'waste_disposedinhouse' => 'required|string',
            'waste_disposedoutsourced' => 'required|string',
            'waste_disposalother' => 'required|string',
            'waste_monthly' => 'required|integer',
            'plastic_waste' => 'required|integer',
            'plastic_waste_method' => 'required',
            'organic_waste' => 'required|integer',
            'organic_waste_method' => 'required',
            'metal_waste' => 'required|integer',
            'metal_waste_method' => 'required',
            'other_waste' => 'required|integer',
            'other_waste_method' => 'required',
        ]);

        $production = EstEmppro::where('user_id', $this->user_id)->first();

        if ($production) {
            // Update the fields in the estopera record
            $production->update([
            // 'generated_inhouse' => $this->generated_inhouse,
            // 'electricity_generated' => $this->electricity_generated !== null ? (int) $this->electricity_generated : null,
            // 'electricity_outsourced' => $this->electricity_outsourced,
            // 'outsourced_generated' => $this->outsourced_generated !== null ? (int) $this->outsourced_generated : null,
            // 'electricity_othersources' => $this->electricity_othersources,
            // 'othersources_generated' => $this->othersources_generated !== null ? (int) $this->othersources_generated : null,
            // 'electricity_consumption' => $this->electricity_consumption,
            // 'solargrid_energy' => $this->solargrid_energy,
            // 'solargrid_production' => $this->solargrid_production !== null ? (int) $this->solargrid_production : null,
            // 'solargrid_consumption' => $this->solargrid_consumption !== null ? (int) $this->solargrid_consumption : null,
            // 'renewable_other' => $this->renewable_other,
            // 'renewable_other_production' => $this->renewable_other_production !== null ? (int) $this->renewable_other_production : null,
            // 'renewable_other_consumption' => $this->renewable_other_consumption !== null ? (int) $this->renewable_other_consumption : null,
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
            'status' => $this->status,
        ]);
       
    }

        session()->flash('success', 'Production & Consumptions Updated');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.ests.establishment-production-edit');
    }
}
