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
                                    <label class="form-label" for="diesel_bought_qty">Diesel Bought Quantity</label>
                                    <input type="number" id="diesel_bought_qty" class="form-control" placeholder="Diesel Bought Quantity" wire:model="diesel_bought_qty">
                                    @error('diesel_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_bought_year">Diesel Bought Year</label>
                                    <input type="number" id="diesel_bought_year" class="form-control" placeholder="Diesel Bought Year" wire:model="diesel_bought_year">
                                    @error('diesel_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_bought_qty">Petrol Bought Quantity</label>
                                    <input type="number" id="petrol_bought_qty" class="form-control" placeholder="Petrol Bought Quantity" wire:model="petrol_bought_qty">
                                    @error('petrol_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_bought_year">Petrol Bought Year</label>
                                    <input type="number" id="petrol_bought_year" class="form-control" placeholder="Petrol Bought Year" wire:model="petrol_bought_year">
                                    @error('petrol_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_bought_qty">LPG Bought Quantity</label>
                                    <input type="number" id="lpg_bought_qty" class="form-control" placeholder="LPG Bought Quantity" wire:model="lpg_bought_qty">
                                    @error('lpg_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_bought_year">LPG Bought Year</label>
                                    <input type="number" id="lpg_bought_year" class="form-control" placeholder="LPG Bought Year" wire:model="lpg_bought_year">
                                    @error('lpg_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_bought_qty">Other Bought Quantity</label>
                                    <input type="number" id="other_bought_qty" class="form-control" placeholder="Other Bought Quantity" wire:model="other_bought_qty">
                                    @error('other_bought_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_bought_year">Other Bought Year</label>
                                    <input type="number" id="other_bought_year" class="form-control" placeholder="Other Bought Year" wire:model="other_bought_year">
                                    @error('other_bought_year')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_inventory_unit">Diesel Inventory Unit</label>
                                    <input type="text" id="diesel_inventory_unit" class="form-control" placeholder="Diesel Inventory Unit" wire:model="diesel_inventory_unit">
                                    @error('diesel_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_inventory_yearfirst">Diesel Inventory Year First</label>
                                    <input type="number" id="diesel_inventory_yearfirst" class="form-control" placeholder="Diesel Inventory Year First" wire:model="diesel_inventory_yearfirst">
                                    @error('diesel_inventory_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_inventory_yearend">Diesel Inventory Year End</label>
                                    <input type="number" id="diesel_inventory_yearend" class="form-control" placeholder="Diesel Inventory Year End" wire:model="diesel_inventory_yearend">
                                    @error('diesel_inventory_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_inventory_unit">Petrol Inventory Unit</label>
                                    <input type="text" id="petrol_inventory_unit" class="form-control" placeholder="Petrol Inventory Unit" wire:model="petrol_inventory_unit">
                                    @error('petrol_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_inventory_yearfirst">Petrol Inventory Year First</label>
                                    <input type="number" id="petrol_inventory_yearfirst" class="form-control" placeholder="Petrol Inventory Year First" wire:model="petrol_inventory_yearfirst">
                                    @error('petrol_inventory_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_inventory_yearend">Petrol Inventory Year End</label>
                                    <input type="number" id="petrol_inventory_yearend" class="form-control" placeholder="Petrol Inventory Year End" wire:model="petrol_inventory_yearend">
                                    @error('petrol_inventory_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_inventory_unit">LPG Inventory Unit</label>
                                    <input type="text" id="lpg_inventory_unit" class="form-control" placeholder="LPG Inventory Unit" wire:model="lpg_inventory_unit">
                                    @error('lpg_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_inventory_unit_yearfirst">LPG Inventory Unit Year First</label>
                                    <input type="number" id="lpg_inventory_unit_yearfirst" class="form-control" placeholder="LPG Inventory Unit Year First" wire:model="lpg_inventory_unit_yearfirst">
                                    @error('lpg_inventory_unit_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_inventory_unit_yearend">LPG Inventory Unit Year End</label>
                                    <input type="number" id="lpg_inventory_unit_yearend" class="form-control" placeholder="LPG Inventory Unit Year End" wire:model="lpg_inventory_unit_yearend">
                                    @error('lpg_inventory_unit_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_inventory_specify">Other Inventory Specify</label>
                                    <input type="text" id="other_inventory_specify" class="form-control" placeholder="Other Inventory Specify" wire:model="other_inventory_specify">
                                    @error('other_inventory_specify')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_inventory_unit">Other Inventory Unit</label>
                                    <input type="text" id="other_inventory_unit" class="form-control" placeholder="Other Inventory Unit" wire:model="other_inventory_unit">
                                    @error('other_inventory_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_inventory_unit_yearfirst">Other Inventory Unit Year First</label>
                                    <input type="number" id="other_inventory_unit_yearfirst" class="form-control" placeholder="Other Inventory Unit Year First" wire:model="other_inventory_unit_yearfirst">
                                    @error('other_inventory_unit_yearfirst')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_inventory_unit_yearend">Other Inventory Unit Year End</label>
                                    <input type="number" id="other_inventory_unit_yearend" class="form-control" placeholder="Other Inventory Unit Year End" wire:model="other_inventory_unit_yearend">
                                    @error('other_inventory_unit_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_electricity_unit">Diesel Electricity Unit</label>
                                    <input type="text" id="diesel_electricity_unit" class="form-control" placeholder="Diesel Electricity Unit" wire:model="diesel_electricity_unit">
                                    @error('diesel_electricity_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_electricity_qty">Diesel Electricity Quantity</label>
                                    <input type="number" id="diesel_electricity_qty" class="form-control" placeholder="Diesel Electricity Quantity" wire:model="diesel_electricity_qty">
                                    @error('diesel_electricity_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_electricity_unit">Petrol Electricity Unit</label>
                                    <input type="text" id="petrol_electricity_unit" class="form-control" placeholder="Petrol Electricity Unit" wire:model="petrol_electricity_unit">
                                    @error('petrol_electricity_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_electricity_qty">Petrol Electricity Quantity</label>
                                    <input type="number" id="petrol_electricity_qty" class="form-control" placeholder="Petrol Electricity Quantity" wire:model="petrol_electricity_qty">
                                    @error('petrol_electricity_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_desalination_unit">Diesel Desalination Unit</label>
                                    <input type="text" id="diesel_desalination_unit" class="form-control" placeholder="Diesel Desalination Unit" wire:model="diesel_desalination_unit">
                                    @error('diesel_desalination_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_desalination_qty">Diesel Desalination Quantity</label>
                                    <input type="number" id="diesel_desalination_qty" class="form-control" placeholder="Diesel Desalination Quantity" wire:model="diesel_desalination_qty">
                                    @error('diesel_desalination_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_desalination_unit">Petrol Desalination Unit</label>
                                    <input type="text" id="petrol_desalination_unit" class="form-control" placeholder="Petrol Desalination Unit" wire:model="petrol_desalination_unit">
                                    @error('petrol_desalination_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_desalination_qty">Petrol Desalination Quantity</label>
                                    <input type="number" id="petrol_desalination_qty" class="form-control" placeholder="Petrol Desalination Quantity" wire:model="petrol_desalination_qty">
                                    @error('petrol_desalination_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_transportsea_unit">Diesel Transport Sea Unit</label>
                                    <input type="text" id="diesel_transportsea_unit" class="form-control" placeholder="Diesel Transport Sea Unit" wire:model="diesel_transportsea_unit">
                                    @error('diesel_transportsea_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_transportsea_qty">Diesel Transport Sea Quantity</label>
                                    <input type="number" id="diesel_transportsea_qty" class="form-control" placeholder="Diesel Transport Sea Quantity" wire:model="diesel_transportsea_qty">
                                    @error('diesel_transportsea_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_transportsea_unit">Petrol Transport Sea Unit</label>
                                    <input type="text" id="petrol_transportsea_unit" class="form-control" placeholder="Petrol Transport Sea Unit" wire:model="petrol_transportsea_unit">
                                    @error('petrol_transportsea_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_transportsea_qty">Petrol Transport Sea Quantity</label>
                                    <input type="number" id="petrol_transportsea_qty" class="form-control" placeholder="Petrol Transport Sea Quantity" wire:model="petrol_transportsea_qty">
                                    @error('petrol_transportsea_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_transportland_unit">Diesel Transport Land Unit</label>
                                    <input type="text" id="diesel_transportland_unit" class="form-control" placeholder="Diesel Transport Land Unit" wire:model="diesel_transportland_unit">
                                    @error('diesel_transportland_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_transportland_qty">Diesel Transport Land Quantity</label>
                                    <input type="number" id="diesel_transportland_qty" class="form-control" placeholder="Diesel Transport Land Quantity" wire:model="diesel_transportland_qty">
                                    @error('diesel_transportland_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_transportland_unit">Petrol Transport Land Unit</label>
                                    <input type="text" id="petrol_transportland_unit" class="form-control" placeholder="Petrol Transport Land Unit" wire:model="petrol_transportland_unit">
                                    @error('petrol_transportland_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_transportland_qty">Petrol Transport Land Quantity</label>
                                    <input type="number" id="petrol_transportland_qty" class="form-control" placeholder="Petrol Transport Land Quantity" wire:model="petrol_transportland_qty">
                                    @error('petrol_transportland_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_cooking_unit">LPG Cooking Unit</label>
                                    <input type="text" id="lpg_cooking_unit" class="form-control" placeholder="LPG Cooking Unit" wire:model="lpg_cooking_unit">
                                    @error('lpg_cooking_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lpg_cooking_qty">LPG Cooking Quantity</label>
                                    <input type="number" id="lpg_cooking_qty" class="form-control" placeholder="LPG Cooking Quantity" wire:model="lpg_cooking_qty">
                                    @error('lpg_cooking_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_cooking_unit">Diesel Cooking Unit</label>
                                    <input type="text" id="diesel_cooking_unit" class="form-control" placeholder="Diesel Cooking Unit" wire:model="diesel_cooking_unit">
                                    @error('diesel_cooking_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_cooking_qty">Diesel Cooking Quantity</label>
                                    <input type="number" id="diesel_cooking_qty" class="form-control" placeholder="Diesel Cooking Quantity" wire:model="diesel_cooking_qty">
                                    @error('diesel_cooking_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_cooking_unit">Petrol Cooking Unit</label>
                                    <input type="text" id="petrol_cooking_unit" class="form-control" placeholder="Petrol Cooking Unit" wire:model="petrol_cooking_unit">
                                    @error('petrol_cooking_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_cooking_qty">Petrol Cooking Quantity</label>
                                    <input type="number" id="petrol_cooking_qty" class="form-control" placeholder="Petrol Cooking Quantity" wire:model="petrol_cooking_qty">
                                    @error('petrol_cooking_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_other_fuelconsumption">Diesel Other Fuel Consumption</label>
                                    <input type="text" id="diesel_other_fuelconsumption" class="form-control" placeholder="Diesel Other Fuel Consumption" wire:model="diesel_other_fuelconsumption">
                                    @error('diesel_other_fuelconsumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_other_fuelconsumption_unit">Diesel Other Fuel Consumption Unit</label>
                                    <input type="text" id="diesel_other_fuelconsumption_unit" class="form-control" placeholder="Diesel Other Fuel Consumption Unit" wire:model="diesel_other_fuelconsumption_unit">
                                    @error('diesel_other_fuelconsumption_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="diesel_other_fuelconsumption_qty">Diesel Other Fuel Consumption Quantity</label>
                                    <input type="number" id="diesel_other_fuelconsumption_qty" class="form-control" placeholder="Diesel Other Fuel Consumption Quantity" wire:model="diesel_other_fuelconsumption_qty">
                                    @error('diesel_other_fuelconsumption_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_other_fuelconsumption">Petrol Other Fuel Consumption</label>
                                    <input type="text" id="petrol_other_fuelconsumption" class="form-control" placeholder="Petrol Other Fuel Consumption" wire:model="petrol_other_fuelconsumption">
                                    @error('petrol_other_fuelconsumption')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_other_fuelconsumption_unit">Petrol Other Fuel Consumption Unit</label>
                                    <input type="text" id="petrol_other_fuelconsumption_unit" class="form-control" placeholder="Petrol Other Fuel Consumption Unit" wire:model="petrol_other_fuelconsumption_unit">
                                    @error('petrol_other_fuelconsumption_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="petrol_other_fuelconsumption_qty">Petrol Other Fuel Consumption Quantity</label>
                                    <input type="number" id="petrol_other_fuelconsumption_qty" class="form-control" placeholder="Petrol Other Fuel Consumption Quantity" wire:model="petrol_other_fuelconsumption_qty">
                                    @error('petrol_other_fuelconsumption_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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