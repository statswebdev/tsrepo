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
                                    <label class="form-label" for="stock_fuel">Stock Fuel</label>
                                    <input type="number" id="stock_fuel" class="form-control" placeholder="Stock Fuel" wire:model="stock_fuel">
                                    @error('stock_fuel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_fuel_yearend">Stock Fuel Year End</label>
                                    <input type="number" id="stock_fuel_yearend" class="form-control" placeholder="Stock Fuel Year End" wire:model="stock_fuel_yearend">
                                    @error('stock_fuel_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_tradedgoods">Stock Traded Goods</label>
                                    <input type="number" id="stock_tradedgoods" class="form-control" placeholder="Stock Traded Goods" wire:model="stock_tradedgoods">
                                    @error('stock_tradedgoods')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_tradedgoods_yearend">Stock Traded Goods Year End</label>
                                    <input type="number" id="stock_tradedgoods_yearend" class="form-control" placeholder="Stock Traded Goods Year End" wire:model="stock_tradedgoods_yearend">
                                    @error('stock_tradedgoods_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_food">Stock Food</label>
                                    <input type="number" id="stock_food" class="form-control" placeholder="Stock Food" wire:model="stock_food">
                                    @error('stock_food')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_food_yearend">Stock Food Year End</label>
                                    <input type="number" id="stock_food_yearend" class="form-control" placeholder="Stock Food Year End" wire:model="stock_food_yearend">
                                    @error('stock_food_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_chemicals">Stock Chemicals</label>
                                    <input type="number" id="stock_chemicals" class="form-control" placeholder="Stock Chemicals" wire:model="stock_chemicals">
                                    @error('stock_chemicals')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_chemicals_yearend">Stock Chemicals Year End</label>
                                    <input type="number" id="stock_chemicals_yearend" class="form-control" placeholder="Stock Chemicals Year End" wire:model="stock_chemicals_yearend">
                                    @error('stock_chemicals_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_packing">Stock Packing</label>
                                    <input type="number" id="stock_packing" class="form-control" placeholder="Stock Packing" wire:model="stock_packing">
                                    @error('stock_packing')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_packing_yearend">Stock Packing Year End</label>
                                    <input type="number" id="stock_packing_yearend" class="form-control" placeholder="Stock Packing Year End" wire:model="stock_packing_yearend">
                                    @error('stock_packing_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_spare">Stock Spare</label>
                                    <input type="number" id="stock_spare" class="form-control" placeholder="Stock Spare" wire:model="stock_spare">
                                    @error('stock_spare')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_spare_yearend">Stock Spare Year End</label>
                                    <input type="number" id="stock_spare_yearend" class="form-control" placeholder="Stock Spare Year End" wire:model="stock_spare_yearend">
                                    @error('stock_spare_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_textile">Stock Textile</label>
                                    <input type="number" id="stock_textile" class="form-control" placeholder="Stock Textile" wire:model="stock_textile">
                                    @error('stock_textile')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_textile_yearend">Stock Textile Year End</label>
                                    <input type="number" id="stock_textile_yearend" class="form-control" placeholder="Stock Textile Year End" wire:model="stock_textile_yearend">
                                    @error('stock_textile_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_stationary">Stock Stationary</label>
                                    <input type="number" id="stock_stationary" class="form-control" placeholder="Stock Stationary" wire:model="stock_stationary">
                                    @error('stock_stationary')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_stationary_yearend">Stock Stationary Year End</label>
                                    <input type="number" id="stock_stationary_yearend" class="form-control" placeholder="Stock Stationary Year End" wire:model="stock_stationary_yearend">
                                    @error('stock_stationary_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_one">Stock Other One</label>
                                    <input type="text" id="stock_other_one" class="form-control" placeholder="Stock Other One" wire:model="stock_other_one">
                                    @error('stock_other_one')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_one_value">Stock Other One Value</label>
                                    <input type="number" id="stock_other_one_value" class="form-control" placeholder="Stock Other One Value" wire:model="stock_other_one_value">
                                    @error('stock_other_one_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_one_value_yearend">Stock Other One Value Year End</label>
                                    <input type="number" id="stock_other_one_value_yearend" class="form-control" placeholder="Stock Other One Value Year End" wire:model="stock_other_one_value_yearend">
                                    @error('stock_other_one_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_two">Stock Other Two</label>
                                    <input type="text" id="stock_other_two" class="form-control" placeholder="Stock Other Two" wire:model="stock_other_two">
                                    @error('stock_other_two')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_two_value">Stock Other Two Value</label>
                                    <input type="number" id="stock_other_two_value" class="form-control" placeholder="Stock Other Two Value" wire:model="stock_other_two_value">
                                    @error('stock_other_two_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_two_value_yearend">Stock Other Two Value Year End</label>
                                    <input type="number" id="stock_other_two_value_yearend" class="form-control" placeholder="Stock Other Two Value Year End" wire:model="stock_other_two_value_yearend">
                                    @error('stock_other_two_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_three">Stock Other Three</label>
                                    <input type="text" id="stock_other_three" class="form-control" placeholder="Stock Other Three" wire:model="stock_other_three">
                                    @error('stock_other_three')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_three_value">Stock Other Three Value</label>
                                    <input type="number" id="stock_other_three_value" class="form-control" placeholder="Stock Other Three Value" wire:model="stock_other_three_value">
                                    @error('stock_other_three_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_three_value_yearend">Stock Other Three Value Year End</label>
                                    <input type="number" id="stock_other_three_value_yearend" class="form-control" placeholder="Stock Other Three Value Year End" wire:model="stock_other_three_value_yearend">
                                    @error('stock_other_three_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_four">Stock Other Four</label>
                                    <input type="text" id="stock_other_four" class="form-control" placeholder="Stock Other Four" wire:model="stock_other_four">
                                    @error('stock_other_four')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_four_value">Stock Other Four Value</label>
                                    <input type="number" id="stock_other_four_value" class="form-control" placeholder="Stock Other Four Value" wire:model="stock_other_four_value">
                                    @error('stock_other_four_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="stock_other_four_value_yearend">Stock Other Four Value Year End</label>
                                    <input type="number" id="stock_other_four_value_yearend" class="form-control" placeholder="Stock Other Four Value Year End" wire:model="stock_other_four_value_yearend">
                                    @error('stock_other_four_value_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="profit_loss">Profit/Loss</label>
                                    <input type="number" id="profit_loss" class="form-control" placeholder="Profit/Loss" wire:model="profit_loss">
                                    @error('profit_loss')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-12">
                                    <label class="form-label" for="remarks">Remarks</label>
                                    <textarea id="remarks" class="form-control" placeholder="Remarks" wire:model="remarks"></textarea>
                                    @error('remarks')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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