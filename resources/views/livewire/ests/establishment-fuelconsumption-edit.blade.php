<div>
    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                @if (session()->has('updated'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                            </path>
                        </svg>
                        <div>{{session('updated')}}</div>
                    </div>
                    @endif
                <!-- row -->
                <div class="col-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold">Fuel Consumption</h1>
                </div>
            </div>    
        </div>
    </section>

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

                                <h5>1. Fuel Bought</h5>
                        <small class="mb-5">Enter the fuel bought for the reporting year</small>

                        <div class="row  mb-2">
                            <div class="col-sm-2"></div>
                           

                           
                            
                           
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3 text-center">Quantity</div>
                        <div class="col-sm-3 text-center">
                            <label>Unit</label> 
                        </div>
                       
                </div>

                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Diesel</label>
                    <div class="col-sm-3">
                        <input type="number" id="diesel_bought_qty" class="form-control" placeholder="Quantity" wire:model="diesel_bought_qty">
                                    @error('diesel_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <select id="diesel_bought_year" class="form-control" wire:model="diesel_bought_year">
                            <option value="">Select</option>
                            <option value="yes">Liter</option>
                            <option value="yes">KG</option>
                            <option value="no">MT</option>
                        </select>
                        @error('diesel_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Petrol</label>
                    <div class="col-sm-3">
                        <input type="number" id="petrol_bought_qty" class="form-control" placeholder="Quantity" wire:model="petrol_bought_qty">
                                    @error('petrol_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <select id="petrol_bought_year" class="form-control" wire:model="petrol_bought_year">
                            <option value="">Select</option>
                            <option value="yes">Liter</option>
                            <option value="yes">KG</option>
                            <option value="no">MT</option>
                        </select>
                        @error('petrol_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">LPG</label>
                    <div class="col-sm-3">
                        <input type="number" id="lpg_bought_qty" class="form-control" placeholder="Quantity" wire:model="lpg_bought_qty">
                                    @error('lpg_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <select id="lpg_bought_year" class="form-control" wire:model="lpg_bought_year">
                            <option value="">Select</option>
                            <option value="yes">Liter</option>
                            <option value="yes">KG</option>
                            <option value="no">MT</option>
                        </select>
                        @error('lpg_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Others</label>
                    <div class="col-sm-3">
                        <input type="number" id="other_bought_qty" class="form-control" placeholder="Quantity" wire:model="other_bought_qty">
                                    @error('other_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <select id="other_bought_year" class="form-control" wire:model="other_bought_year">
                            <option value="">Select</option>
                            <option value="yes">Liter</option>
                            <option value="yes">KG</option>
                            <option value="no">MT</option>
                        </select>
                        @error('other_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>

                <hr class="mb-5 mt-5">
                <h5>2. Fuel Inventory</h5>
                        <small class="mb-5">State Fuel Inventory at the start of the year and at the end of the year</small>

                        <div class="row  mb-2">
                            <div class="col-sm-2"></div>
                           

                           
                            
                           
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3 text-center"><label>Unit</label></div> 
                        <div class="col-sm-3 text-center"><label>Quantity (1st January)</label></div>
                        <div class="col-sm-3 text-center"><label>Quantity (31st December)</label> </div>
                        
                       
                </div>

                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Diesel</label>
                    <div class="col-sm-3">
                        <select id="diesel_inventory_unit" class="form-control" wire:model="diesel_inventory_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('diesel_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="diesel_inventory_yearfirst" class="form-control" placeholder="Qty Year First" wire:model="diesel_inventory_yearfirst">
                                    @error('diesel_inventory_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="diesel_inventory_yearend" class="form-control" placeholder="Qty Year End" wire:model="diesel_inventory_yearend">
                                    @error('diesel_inventory_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Petrol</label>
                    <div class="col-sm-3">
                        <select id="petrol_inventory_unit" class="form-control" wire:model="petrol_inventory_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('petrol_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="petrol_inventory_yearfirst" class="form-control" placeholder="Qty Year First" wire:model="petrol_inventory_yearfirst">
                                    @error('petrol_inventory_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="petrol_inventory_yearend" class="form-control" placeholder="Qty Year End" wire:model="petrol_inventory_yearend">
                                    @error('petrol_inventory_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">LPG</label>
                    <div class="col-sm-3">
                        <select id="lpg_inventory_unit" class="form-control" wire:model="lpg_inventory_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('lpg_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="lpg_inventory_unit_yearfirst" class="form-control" placeholder="Qty Year First" wire:model="lpg_inventory_unit_yearfirst">
                                    @error('lpg_inventory_unit_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="lpg_inventory_unit_yearend" class="form-control" placeholder="Qty Year End" wire:model="lpg_inventory_unit_yearend">
                                    @error('lpg_inventory_unit_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <div class="col-sm-2">
                        
                    <input type="text" id="other_inventory_specify" class="form-control" placeholder="Specify" wire:model="other_inventory_specify">
                                @error('other_inventory_specify')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <select id="other_inventory_unit" class="form-control" wire:model="other_inventory_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('other_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="other_inventory_unit_yearfirst" class="form-control" placeholder="Qty Year First" wire:model="other_inventory_unit_yearfirst">
                                    @error('other_inventory_unit_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="other_inventory_unit_yearend" class="form-control" placeholder="Qty Year End" wire:model="other_inventory_unit_yearend">
                                    @error('other_inventory_unit_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>

                <hr class="mb-5 mt-5">
                <h5>3. Fuel Consumption by use (Annually)</h5>
                        <small class="mb-5">State Fuel consumption by use for the reporting year</small>

                        <div class="row  mb-2">
                            <div class="col-sm-2"></div>
                           

                           
                            
                           
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2 text-center"><label>Diesel Unit</label></div> 
                        <div class="col-sm-2 text-center"><label>Diesel Quantity</label></div>
                        <div class="col-sm-2 text-center"><label>Petrol Unit</label> </div>
                        <div class="col-sm-2 text-center"><label>Petrol Quantity</label> </div>
                        
                       
                </div>

                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Electricity Generation</label>
                    <div class="col-sm-2">
                        <select id="diesel_electricity_unit" class="form-control" wire:model="diesel_electricity_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('diesel_electricity_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="diesel_electricity_qty" class="form-control" placeholder="Quantity" wire:model="diesel_electricity_qty">
                                    @error('diesel_electricity_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <select id="petrol_electricity_unit" class="form-control" wire:model="petrol_electricity_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('petrol_electricity_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="petrol_electricity_qty" class="form-control" placeholder="Quantity" wire:model="petrol_electricity_qty">
                                    @error('petrol_electricity_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    
                </div>

                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Desalination</label>
                    <div class="col-sm-2">
                        <select id="diesel_desalination_unit" class="form-control" wire:model="diesel_desalination_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('diesel_desalination_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="diesel_desalination_qty" class="form-control" placeholder="Quantity" wire:model="diesel_desalination_qty">
                                    @error('diesel_desalination_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <select id="petrol_desalination_unit" class="form-control" wire:model="petrol_desalination_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('petrol_desalination_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="petrol_desalination_qty" class="form-control" placeholder="Quantity" wire:model="petrol_desalination_qty">
                                    @error('petrol_desalination_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Transport Sea</label>
                    <div class="col-sm-2">
                        <select id="diesel_transportsea_unit" class="form-control" wire:model="diesel_transportsea_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('diesel_transportsea_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="diesel_transportsea_qty" class="form-control" placeholder="Quantity" wire:model="diesel_transportsea_qty">
                                    @error('diesel_transportsea_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <select id="petrol_transportsea_unit" class="form-control" wire:model="petrol_transportsea_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('petrol_transportsea_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="petrol_transportsea_qty" class="form-control" placeholder=" Quantity" wire:model="petrol_transportsea_qty">
                                    @error('petrol_transportsea_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Transport Land</label>
                    <div class="col-sm-2">
                        <select id="diesel_transportland_unit" class="form-control" wire:model="diesel_transportland_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('diesel_transportland_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="diesel_transportland_qty" class="form-control" placeholder="Quantity" wire:model="diesel_transportland_qty">
                                    @error('diesel_transportland_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <select id="petrol_transportland_unit" class="form-control" wire:model="petrol_transportland_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('petrol_transportland_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="petrol_transportland_qty" class="form-control" placeholder="Quantity" wire:model="petrol_transportland_qty">
                                    @error('petrol_transportland_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Cooking</label>
                    <div class="col-sm-2">
                        <select id="diesel_cooking_unit" class="form-control" wire:model="diesel_cooking_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('diesel_cooking_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="diesel_cooking_qty" class="form-control" placeholder="Quantity" wire:model="diesel_cooking_qty">
                                    @error('diesel_cooking_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <select id="petrol_cooking_unit" class="form-control" wire:model="petrol_cooking_unit">
                            <option value="">Select</option>
                            <option value="Liter">Liter</option>
                            <option value="KG">KG</option>
                            <option value="MT">MT</option>
                        </select>
                        @error('petrol_cooking_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-2">
                        <input type="number" id="petrol_cooking_qty" class="form-control" placeholder="Quantity" wire:model="petrol_cooking_qty">
                                    @error('petrol_cooking_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    
                </div>

                <hr class="mb-5 mt-5">

                <div class="row mb-2">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2 text-center"><label>Specify Use</label></div> 
                    <div class="col-sm-2 text-center"><label>Unit</label></div> 
                    <div class="col-sm-2 text-center"><label>Quantity</label></div>
                   
                    
                    
                   
            </div>
            <div class="form-group row mb-2">
                <label class="col-form-label col-sm-2 text-end">LPG</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" placeholder="Cooking" disabled>
                            
                </div>
                <div class="col-sm-2">
                    <select id="lpg_cooking_unit" class="form-control" wire:model="lpg_cooking_unit">
                        <option value="">Select</option>
                        <option value="Liter">Liter</option>
                        <option value="KG">KG</option>
                        <option value="MT">MT</option>
                    </select>
                    @error('lpg_cooking_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
                <div class="col-sm-2">
                    <input type="number" id="lpg_cooking_qty" class="form-control" placeholder="qty" wire:model="lpg_cooking_qty">
                                    @error('lpg_cooking_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
               
                
            </div>

            <div class="form-group row mb-2">
                <label class="col-form-label col-sm-2 text-end">Other (Diesel)</label>
                <div class="col-sm-2">
                    <input type="text" id="diesel_other_fuelconsumption" class="form-control" placeholder="Specify Use" wire:model="diesel_other_fuelconsumption">
                                    @error('diesel_other_fuelconsumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
                <div class="col-sm-2">
                    <select id="diesel_other_fuelconsumption_unit" class="form-control" wire:model="diesel_other_fuelconsumption_unit">
                        <option value="">Select</option>
                        <option value="Liter">Liter</option>
                        <option value="KG">KG</option>
                        <option value="MT">MT</option>
                    </select>
                    @error('diesel_other_fuelconsumption_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
                <div class="col-sm-2">
                    <input type="number" id="diesel_other_fuelconsumption_qty" class="form-control" placeholder="qty" wire:model="diesel_other_fuelconsumption_qty">
                                    @error('diesel_other_fuelconsumption_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
               
                
            </div>
            <div class="form-group row mb-2">
                <label class="col-form-label col-sm-2 text-end">Other (Petrol)</label>
                <div class="col-sm-2">
                    <input type="text" id="petrol_other_fuelconsumption" class="form-control" placeholder="Specify Use" wire:model="petrol_other_fuelconsumption">
                                    @error('petrol_other_fuelconsumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
                <div class="col-sm-2">
                    <select id="petrol_other_fuelconsumption_unit" class="form-control" wire:model="petrol_other_fuelconsumption_unit">
                        <option value="">Select</option>
                        <option value="Liter">Liter</option>
                        <option value="KG">KG</option>
                        <option value="MT">MT</option>
                    </select>
                    @error('petrol_other_fuelconsumption_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
                <div class="col-sm-2">
                    <input type="number" id="petrol_other_fuelconsumption_qty" class="form-control" placeholder="qty" wire:model="petrol_other_fuelconsumption_qty">
                                    @error('petrol_other_fuelconsumption_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                </div>
               
                
            </div>
            

               
                                
                                <hr class="mb-5 mt-5">

                                <div class="mb-3 col-12 col-md-12">
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