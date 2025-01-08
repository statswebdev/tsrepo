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
                            <form wire:submit.prevent="save" class="row">

                                <h5>1. Electric Suppy Capacity</h5>
                                <small class="mb-5">Total installed diesel generators capacity</small>
        
                                
                                
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generator_capacity_unit">Diesel Generator Power</label>
                                    <input type="number" id="generator_capacity_unit" class="form-control" placeholder="Power" wire:model="generator_capacity_unit">
                                    @error('generator_capacity_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generator_capacity_qty">Unit</label>
                                    <select id="generator_capacity_qty" class="form-control" wire:model="generator_capacity_qty">
                                        <option value="kW">kW</option>
                                        <option value="MW">MW</option>
                                    </select>
                                    @error('generator_capacity_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <h5 class="mt-5 mb-5">Solar PV</h5>

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3 text-center">unit (kWp)</div>
                                   
    
                                    <div class="col-sm-3"></div>
                            </div>


                            
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Solar Rooftop</label>
                            <div class="col-sm-3">
                                <input type="number" id="solar_rooftop" class="form-control" placeholder="kWp" wire:model="solar_rooftop">
                                @error('solar_rooftop')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                           
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Solar Ground Mounted</label>
                            <div class="col-sm-3">
                                <input type="number" id="solar_groundmounted" class="form-control" placeholder="kWp" wire:model="solar_groundmounted">
                                @error('solar_groundmounted')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                           
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Solar Floating</label>
                            <div class="col-sm-3">
                                <input type="number" id="solar_floating" class="form-control" placeholder="kWp" wire:model="solar_floating">
                                @error('solar_floating')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                           
                        </div>
                        <hr class="mt-3">

                        <h5 class="mt-5 mb-5">2. Energy Storage System</h5>

                        <div class="row mb-2">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3 text-center">Name</div>
                                    <div class="col-sm-3 text-center">Power (kW)</div>
                                    <div class="col-sm-3 text-center">Energy (kWh)</div>
                           

                            <div class="col-sm-3"></div>
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col-form-label col-sm-2 text-end"></label>
                        <div class="col-sm-3">
                            <input type="text" id="energy_storage" class="form-control" placeholder="name" wire:model="energy_storage">
                            @error('energy_storage')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="energy_storage_power" class="form-control" placeholder="kW" wire:model="energy_storage_power">
                            @error('energy_storage_power')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="energy_storage_kwh" class="form-control" placeholder="kWh" wire:model="energy_storage_kwh">
                            @error('energy_storage_kwh')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                        </div>
                       
                    </div>

                    <div class="form-group row mb-2">
                        <label class="col-form-label col-sm-2 text-end"></label>
                        <div class="col-sm-3">
                            <input type="text" id="energy_storage_other" class="form-control" placeholder="name" wire:model="energy_storage_other">
                            @error('energy_storage_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="energy_storage_othertype" class="form-control" placeholder="kW" wire:model="energy_storage_othertype">
                            @error('energy_storage_othertype')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="number" id="energy_storage_othercapacity" class="form-control" placeholder="kWh" wire:model="energy_storage_othercapacity">
                            @error('energy_storage_othercapacity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                        </div>
                       
                    </div>
    
    
                              
                               
                                
                                <hr class="mt-3">


                                <h5 class="mt-5 mb-5">3. Renewable Energy for other Purposes</h5>

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3 text-center">Capacity</div>
                                    
                                   
        
                                    <div class="col-sm-3"></div>
                            </div>

                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Solar Water Heating</label>
                                <div class="col-sm-3">
                                    <input type="number" id="solar_waterheating" class="form-control" placeholder="kW" wire:model="solar_waterheating">
                                    @error('solar_waterheating')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                               
                            </div>

                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Waste Heat Recovery</label>
                                <div class="col-sm-3">
                                    <input type="number" id="waste_heatrecovery" class="form-control" placeholder="kW" wire:model="waste_heatrecovery">
                                    @error('waste_heatrecovery')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                               
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other</label>
                                <div class="col-sm-3">
                                    <input type="number" id="other_energy_capacity" class="form-control" placeholder="kW" wire:model="other_energy_capacity">
                                    @error('other_energy_capacity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                               
                            </div>
                            <hr class="mt-5 mb-5">
            
                                
                                <div class="mt-3 mb-3 col-12 col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Update
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