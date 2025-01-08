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

                                <h5>1. Stock & Inventory</h5>
                                <small class="mb-5">Supply of finished goods available for sale, and both finished goods and components that create a finished product</small>

                                <div class="row mb-2">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3 text-center"><label>Year First (January)</label></div> 
                                    <div class="col-sm-3 text-center"><label>Year End (December)</label></div>

                            </div>


                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Fuel (petrol / diesel / gas..etc)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_fuel" class="form-control" placeholder="MVR" wire:model="stock_fuel">
                                    @error('stock_fuel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_fuel_yearend" class="form-control" placeholder="MVR" wire:model="stock_fuel_yearend">
                                    @error('stock_fuel_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Traded goods (goods bought to sold in the same condition)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_tradedgoods" class="form-control" placeholder="MVR" wire:model="stock_tradedgoods">
                                    @error('stock_tradedgoods')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_tradedgoods_yearend" class="form-control" placeholder="MVR" wire:model="stock_tradedgoods_yearend">
                                    @error('stock_tradedgoods_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Food and beverages</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_food" class="form-control" placeholder="MVR" wire:model="stock_food">
                                    @error('stock_food')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_food_yearend" class="form-control" placeholder="MVR" wire:model="stock_food_yearend">
                                    @error('stock_food_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Chemicals and dyes</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_chemicals" class="form-control" placeholder="MVR" wire:model="stock_chemicals">
                                    @error('stock_chemicals')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_chemicals_yearend" class="form-control" placeholder="MVR" wire:model="stock_chemicals_yearend">
                                    @error('stock_chemicals_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Packing material</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_packing" class="form-control" placeholder="MVR" wire:model="stock_packing">
                                    @error('stock_packing')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_packing_yearend" class="form-control" placeholder="MVR" wire:model="stock_packing_yearend">
                                    @error('stock_packing_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Spare parts</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_spare" class="form-control" placeholder="MVR" wire:model="stock_spare">
                                    @error('stock_spare')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_spare_yearend" class="form-control" placeholder="MVR" wire:model="stock_spare_yearend">
                                    @error('stock_spare_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Uniform linen & textile products</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_textile" class="form-control" placeholder="MVR" wire:model="stock_textile">
                                    @error('stock_textile')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_textile_yearend" class="form-control" placeholder="MVR" wire:model="stock_textile_yearend">
                                    @error('stock_textile_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Stationaries, paper, printing & publishing materials</label>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_stationary" class="form-control" placeholder="MVR" wire:model="stock_stationary">
                                    @error('stock_stationary')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_stationary_yearend" class="form-control" placeholder="MVR" wire:model="stock_stationary_yearend">
                                    @error('stock_stationary_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other (Specify)</label>
                                <div class="col-sm-4">
                                    <input type="text" id="stock_other_one" class="form-control" placeholder="Specify" wire:model="stock_other_one">
                                    @error('stock_other_one')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_one_value" class="form-control" placeholder="MVR" wire:model="stock_other_one_value">
                                    @error('stock_other_one_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_one_value_yearend" class="form-control" placeholder="MVR" wire:model="stock_other_one_value_yearend">
                                    @error('stock_other_one_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other (Specify)</label>
                                <div class="col-sm-4">
                                    <input type="text" id="stock_other_two" class="form-control" placeholder="Specify" wire:model="stock_other_two">
                                    @error('stock_other_two')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_two_value" class="form-control" placeholder="MVR" wire:model="stock_other_two_value">
                                    @error('stock_other_two_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_two_value_yearend" class="form-control" placeholder="MVR" wire:model="stock_other_two_value_yearend">
                                    @error('stock_other_two_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other (Specify)</label>
                                <div class="col-sm-4">
                                    <input type="text" id="stock_other_three" class="form-control" placeholder="Specify" wire:model="stock_other_three">
                                    @error('stock_other_three')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_three_value" class="form-control" placeholder="MVR" wire:model="stock_other_three_value">
                                    @error('stock_other_three_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_three_value_yearend" class="form-control" placeholder="MVR" wire:model="stock_other_three_value_yearend">
                                    @error('stock_other_three_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other (Specify)</label>
                                <div class="col-sm-4">
                                    <input type="text" id="stock_other_four" class="form-control" placeholder="Specify" wire:model="stock_other_four">
                                    @error('stock_other_four')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_four_value" class="form-control" placeholder="MVR" wire:model="stock_other_four_value">
                                    @error('stock_other_four_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" id="stock_other_four_value_yearend" class="form-control" placeholder="MVR" wire:model="stock_other_four_value_yearend">
                                    @error('stock_other_four_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <hr class="mt-5 mb-5">

                            <h5>2. Profit & Loss (Accounting Year)</h5>
                                
                                <small class="mb-5">Please state the total profit/loss for the reporting year</small>
            
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="profit_loss">Profit/Loss</label>
                                    <input type="number" id="profit_loss" class="form-control" placeholder="MVR" wire:model="profit_loss">
                                    @error('profit_loss')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr class="mt-5 mb-5">

                                <h5>3. Remarks</h5>


                                <div class="mb-3 col-12 col-md-12">
                                    <textarea id="remarks" class="form-control" placeholder="Remarks" wire:model="remarks"></textarea>
                                    @error('remarks')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr class="mt-5 mb-5">
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