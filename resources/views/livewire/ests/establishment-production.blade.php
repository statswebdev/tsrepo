<div>

    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                <!-- row -->
                <div class="col-md-12">
                      <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card Header -->
                            <div class="card-header">
                            <h3 class="mb-0">Fill the information</h3>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                            <!-- Form -->
                            <form wire:submit.prevent="submitRecord" class="row">
                                
                                
                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="generated_inhouse">Generated Inhouse</label>
                                <select id="generated_inhouse" class="form-control" wire:model="generated_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('generated_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="electricity_generated">Electricity Generated</label>
                                <input type="number" id="electricity_generated" class="form-control" placeholder="Electricity Generated" wire:model="electricity_generated">
                                @error('electricity_generated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="electricity_outsourced">Electricity Outsourced</label>
                                <input type="text" id="electricity_outsourced" class="form-control" placeholder="Electricity Outsourced" wire:model="electricity_outsourced">
                                @error('electricity_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="outsourced_generated">Outsourced Generated</label>
                                <input type="number" id="outsourced_generated" class="form-control" placeholder="Outsourced Generated" wire:model="outsourced_generated">
                                @error('outsourced_generated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="electricity_othersources">Electricity Other Sources</label>
                                <input type="text" id="electricity_othersources" class="form-control" placeholder="Electricity Other Sources" wire:model="electricity_othersources">
                                @error('electricity_othersources')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="othersources_generated">Other Sources Generated</label>
                                <input type="number" id="othersources_generated" class="form-control" placeholder="Other Sources Generated" wire:model="othersources_generated">
                                @error('othersources_generated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="electricity_consumption">Electricity Consumption</label>
                                <input type="number" id="electricity_consumption" class="form-control" placeholder="Electricity Consumption" wire:model="electricity_consumption">
                                @error('electricity_consumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="solargrid_energy">Solar Grid Energy</label>
                                <input type="text" id="solargrid_energy" class="form-control" placeholder="Solar Grid Energy" wire:model="solargrid_energy">
                                @error('solargrid_energy')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="solargrid_production">Solar Grid Production</label>
                                <input type="number" id="solargrid_production" class="form-control" placeholder="Solar Grid Production" wire:model="solargrid_production">
                                @error('solargrid_production')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="solargrid_consumption">Solar Grid Consumption</label>
                                <input type="number" id="solargrid_consumption" class="form-control" placeholder="Solar Grid Consumption" wire:model="solargrid_consumption">
                                @error('solargrid_consumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="renewable_other">Renewable Other</label>
                                <input type="text" id="renewable_other" class="form-control" placeholder="Renewable Other" wire:model="renewable_other">
                                @error('renewable_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="renewable_other_production">Renewable Other Production</label>
                                <input type="number" id="renewable_other_production" class="form-control" placeholder="Renewable Other Production" wire:model="renewable_other_production">
                                @error('renewable_other_production')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="renewable_other_consumption">Renewable Other Consumption</label>
                                <input type="number" id="renewable_other_consumption" class="form-control" placeholder="Renewable Other Consumption" wire:model="renewable_other_consumption">
                                @error('renewable_other_consumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="waterinhouse_production">Water Inhouse Production</label>
                                <input type="text" id="waterinhouse_production" class="form-control" placeholder="Water Inhouse Production" wire:model="waterinhouse_production">
                                @error('waterinhouse_production')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="waterinhouse_monthly">Water Inhouse Monthly</label>
                                <input type="number" id="waterinhouse_monthly" class="form-control" placeholder="Water Inhouse Monthly" wire:model="waterinhouse_monthly">
                                @error('waterinhouse_monthly')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="water_outsourced">Water Outsourced</label>
                                <input type="text" id="water_outsourced" class="form-control" placeholder="Water Outsourced" wire:model="water_outsourced">
                                @error('water_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="water_outsourced_monthly">Water Outsourced Monthly</label>
                                <input type="number" id="water_outsourced_monthly" class="form-control" placeholder="Water Outsourced Monthly" wire:model="water_outsourced_monthly">
                                @error('water_outsourced_monthly')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_jan">Monthly Water January</label>
                                <input type="number" id="monthly_water_jan" class="form-control" placeholder="Monthly Water January" wire:model="monthly_water_jan">
                                @error('monthly_water_jan')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_feb">Monthly Water February</label>
                                <input type="number" id="monthly_water_feb" class="form-control" placeholder="Monthly Water February" wire:model="monthly_water_feb">
                                @error('monthly_water_feb')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_mar">Monthly Water March</label>
                                <input type="number" id="monthly_water_mar" class="form-control" placeholder="Monthly Water March" wire:model="monthly_water_mar">
                                @error('monthly_water_mar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_apr">Monthly Water April</label>
                                <input type="number" id="monthly_water_apr" class="form-control" placeholder="Monthly Water April" wire:model="monthly_water_apr">
                                @error('monthly_water_apr')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_may">Monthly Water May</label>
                                <input type="number" id="monthly_water_may" class="form-control" placeholder="Monthly Water May" wire:model="monthly_water_may">
                                @error('monthly_water_may')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_jun">Monthly Water June</label>
                                <input type="number" id="monthly_water_jun" class="form-control" placeholder="Monthly Water June" wire:model="monthly_water_jun">
                                @error('monthly_water_jun')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_july">Monthly Water July</label>
                                <input type="number" id="monthly_water_july" class="form-control" placeholder="Monthly Water July" wire:model="monthly_water_july">
                                @error('monthly_water_july')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_aug">Monthly Water August</label>
                                <input type="number" id="monthly_water_aug" class="form-control" placeholder="Monthly Water August" wire:model="monthly_water_aug">
                                @error('monthly_water_aug')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_sep">Monthly Water September</label>
                                <input type="number" id="monthly_water_sep" class="form-control" placeholder="Monthly Water September" wire:model="monthly_water_sep">
                                @error('monthly_water_sep')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_oct">Monthly Water October</label>
                                <input type="number" id="monthly_water_oct" class="form-control" placeholder="Monthly Water October" wire:model="monthly_water_oct">
                                @error('monthly_water_oct')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_nov">Monthly Water November</label>
                                <input type="number" id="monthly_water_nov" class="form-control" placeholder="Monthly Water November" wire:model="monthly_water_nov">
                                @error('monthly_water_nov')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="monthly_water_dec">Monthly Water December</label>
                                <input type="number" id="monthly_water_dec" class="form-control" placeholder="Monthly Water December" wire:model="monthly_water_dec">
                                @error('monthly_water_dec')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="waste_disposedinhouse">Waste Disposed Inhouse</label>
                                <input type="text" id="waste_disposedinhouse" class="form-control" placeholder="Waste Disposed Inhouse" wire:model="waste_disposedinhouse">
                                @error('waste_disposedinhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="waste_disposedoutsourced">Waste Disposed Outsourced</label>
                                <input type="text" id="waste_disposedoutsourced" class="form-control" placeholder="Waste Disposed Outsourced" wire:model="waste_disposedoutsourced">
                                @error('waste_disposedoutsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="waste_disposalother">Waste Disposal Other</label>
                                <input type="text" id="waste_disposalother" class="form-control" placeholder="Waste Disposal Other" wire:model="waste_disposalother">
                                @error('waste_disposalother')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="waste_monthly">Waste Monthly</label>
                                <input type="number" id="waste_monthly" class="form-control" placeholder="Waste Monthly" wire:model="waste_monthly">
                                @error('waste_monthly')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="plastic_waste">Plastic Waste</label>
                                <input type="number" id="plastic_waste" class="form-control" placeholder="Plastic Waste" wire:model="plastic_waste">
                                @error('plastic_waste')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="plastic_waste_method">Plastic Waste Method</label>
                                <input type="text" id="plastic_waste_method" class="form-control" placeholder="Plastic Waste Method" wire:model="plastic_waste_method">
                                @error('plastic_waste_method')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="organic_waste">Organic Waste</label>
                                <input type="number" id="organic_waste" class="form-control" placeholder="Organic Waste" wire:model="organic_waste">
                                @error('organic_waste')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="organic_waste_method">Organic Waste Method</label>
                                <input type="text" id="organic_waste_method" class="form-control" placeholder="Organic Waste Method" wire:model="organic_waste_method">
                                @error('organic_waste_method')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="metal_waste">Metal Waste</label>
                                <input type="number" id="metal_waste" class="form-control" placeholder="Metal Waste" wire:model="metal_waste">
                                @error('metal_waste')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="metal_waste_method">Metal Waste Method</label>
                                <input type="text" id="metal_waste_method" class="form-control" placeholder="Metal Waste Method" wire:model="metal_waste_method">
                                @error('metal_waste_method')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="other_waste">Other Waste</label>
                                <input type="number" id="other_waste" class="form-control" placeholder="Other Waste" wire:model="other_waste">
                                @error('other_waste')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                                <label class="form-label" for="other_waste_method">Other Waste Method</label>
                                <input type="text" id="other_waste_method" class="form-control" placeholder="Other Waste Method" wire:model="other_waste_method">
                                @error('other_waste_method')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                                <div class="mb-3 col-12 col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                </div>
                            </form>
                            </div>
                        </div>
                </div>
            </div>    
        </div>
    </section>


</div>