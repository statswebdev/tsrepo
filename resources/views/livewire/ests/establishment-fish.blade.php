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

                                <h5>1. Fish Products</h5>
                                <small class="mb-5">Enter the quantity of Fish catch</small>

                                <div class="row col-divider mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4 text-center">
                                        <label>Inhouse Catch (December), in KG</label> 
                                    </div>
                                    
                                   
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-2 text-center">Yes / No</div>
                                <div class="col-sm-2 text-center">
                                    <label>If Yes, Quantity Grown in KG</label> 
                                </div>
                               
                                <div class="col-sm-2"></div>
                        </div>


                    
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Skipjack Tuna</label>
                            <div class="col-sm-2">
                                <input type="text" id="skipjacktuna_inhouse" class="form-control" placeholder="Skipjack Tuna" wire:model="skipjacktuna_inhouse">
                                @error('skipjacktuna_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="skipjacktuna_inhouse_qty" class="form-control" placeholder="KG" wire:model="skipjacktuna_inhouse_qty">
                                @error('skipjacktuna_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Yellowfin Tuna</label>
                            <div class="col-sm-2">
                                <input type="text" id="yellowfin_inhouse" class="form-control" placeholder="Yellowfin Tuna" wire:model="yellowfin_inhouse">
                                @error('yellowfin_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="yellowfin_inhouse_qty" class="form-control" placeholder="KG" wire:model="yellowfin_inhouse_qty">
                                @error('yellowfin_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Reef Fish</label>
                            <div class="col-sm-2">
                                <input type="text" id="reeffish_inhouse" class="form-control" placeholder="Reef Fish" wire:model="reeffish_inhouse">
                                @error('reeffish_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="reeffish_inhouse_qty" class="form-control" placeholder="KG" wire:model="reeffish_inhouse_qty">
                                @error('reeffish_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Seafood</label>
                            <div class="col-sm-2">
                                <input type="text" id="seafood_inhouse" class="form-control" placeholder="Seafood Inhouse" wire:model="seafood_inhouse">
                                @error('seafood_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="seafood_inhouse_qty" class="form-control" placeholder="KG" wire:model="seafood_inhouse_qty">
                                @error('seafood_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Other</label>
                            <div class="col-sm-2">
                                <input type="text" id="otherfish_inhouse" class="form-control" placeholder="specify" wire:model="otherfish_inhouse">
                                @error('otherfish_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="otherfish_inhouse_qty" class="form-control" placeholder="KG" wire:model="otherfish_inhouse_qty">
                                @error('otherfish_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        
                        <hr>
                        
                        <h5>2. Fish Purchased From Fisherman</h5>
                        <small class="mb-5">Enter the quantity of fish purchased and their value</small>

                        <div class="row  mb-2">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6 text-center">
                                <label>Purchased From Fisherman(December), in KG</label> 
                            </div>

                           
                            
                           
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3 text-center">Yes / No</div>
                        <div class="col-sm-3 text-center">
                            <label>If Yes, Quantity Purchased in KG</label> 
                        </div>
                        <div class="col-sm-3 text-center">
                            <label>Value Purchased from Fisherman(December), in MVR</label> 
                        </div>
                       
                        <div class="col-sm-3"></div>
                </div>

                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Skipjack Purchased</label>
                    <div class="col-sm-3">
                        <input type="text" id="skipjack_purchased" class="form-control" placeholder="Skipjack Purchased" wire:model="skipjack_purchased">
                        @error('skipjack_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="skipjack_purchased_qty" class="form-control" placeholder="KG" wire:model="skipjack_purchased_qty">
                        @error('skipjack_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="skipjack_purchased_value" class="form-control" placeholder="MVR" wire:model="skipjack_purchased_value">
                        @error('skipjack_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Yellowfin Purchased</label>
                                    <div class="col-sm-3">
                                        <input type="text" id="yellowfin_purchased" class="form-control" placeholder="Yellowfin Purchased" wire:model="yellowfin_purchased">
                                        @error('yellowfin_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="yellowfin_purchased_qty" class="form-control" placeholder="KG" wire:model="yellowfin_purchased_qty">
                                        @error('yellowfin_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="yellowfin_purchased_value" class="form-control" placeholder="MVR" wire:model="yellowfin_purchased_value">
                                        @error('yellowfin_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Reef Fish Purchased</label>
                                    <div class="col-sm-3">
                                        <input type="text" id="reeffish_purchased" class="form-control" placeholder="Reef Fish Purchased" wire:model="reeffish_purchased">
                                        @error('reeffish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="reeffish_purchased_qty" class="form-control" placeholder="KG" wire:model="reeffish_purchased_qty">
                                        @error('reeffish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="reeffish_purchased_value" class="form-control" placeholder="MVR" wire:model="reeffish_purchased_value">
                                        @error('reeffish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Seafood Purchased</label>
                                    <div class="col-sm-3">
                                        <input type="text" id="seafood_purchased" class="form-control" placeholder="Seafood Purchased" wire:model="seafood_purchased">
                                        @error('seafood_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="seafood_purchased_qty" class="form-control" placeholder="KG" wire:model="seafood_purchased_qty">
                                        @error('seafood_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="seafood_purchased_value" class="form-control" placeholder="MVR" wire:model="seafood_purchased_value">
                                        @error('seafood_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Other Fish Purchased</label>
                                    <div class="col-sm-3">
                                        <input type="text" id="otherfish_purchased" class="form-control" placeholder="Other Fish Purchased" wire:model="otherfish_purchased">
                                        @error('otherfish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="otherfish_purchased_qty" class="form-control" placeholder="KG" wire:model="otherfish_purchased_qty">
                                        @error('otherfish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="otherfish_purchased_value" class="form-control" placeholder="MVR" wire:model="otherfish_purchased_value">
                                        @error('otherfish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                
                                
                         
                              
                              
                              
                                
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_purchased">Yellowfin Purchased</label>
                                    <input type="text" id="yellowfin_purchased" class="form-control" placeholder="Yellowfin Purchased" wire:model="yellowfin_purchased">
                                    @error('yellowfin_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_purchased_qty">Yellowfin Purchased Quantity</label>
                                    <input type="number" id="yellowfin_purchased_qty" class="form-control" placeholder="Yellowfin Purchased Quantity" wire:model="yellowfin_purchased_qty">
                                    @error('yellowfin_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_purchased_value">Yellowfin Purchased Value</label>
                                    <input type="number" id="yellowfin_purchased_value" class="form-control" placeholder="Yellowfin Purchased Value" wire:model="yellowfin_purchased_value">
                                    @error('yellowfin_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_purchased">Reef Fish Purchased</label>
                                    <input type="text" id="reeffish_purchased" class="form-control" placeholder="Reef Fish Purchased" wire:model="reeffish_purchased">
                                    @error('reeffish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_purchased_qty">Reef Fish Purchased Quantity</label>
                                    <input type="number" id="reeffish_purchased_qty" class="form-control" placeholder="Reef Fish Purchased Quantity" wire:model="reeffish_purchased_qty">
                                    @error('reeffish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_purchased_value">Reef Fish Purchased Value</label>
                                    <input type="number" id="reeffish_purchased_value" class="form-control" placeholder="Reef Fish Purchased Value" wire:model="reeffish_purchased_value">
                                    @error('reeffish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_purchased">Seafood Purchased</label>
                                    <input type="text" id="seafood_purchased" class="form-control" placeholder="Seafood Purchased" wire:model="seafood_purchased">
                                    @error('seafood_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_purchased_qty">Seafood Purchased Quantity</label>
                                    <input type="number" id="seafood_purchased_qty" class="form-control" placeholder="Seafood Purchased Quantity" wire:model="seafood_purchased_qty">
                                    @error('seafood_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_purchased_value">Seafood Purchased Value</label>
                                    <input type="number" id="seafood_purchased_value" class="form-control" placeholder="Seafood Purchased Value" wire:model="seafood_purchased_value">
                                    @error('seafood_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_purchased">Other Fish Purchased</label>
                                    <input type="text" id="otherfish_purchased" class="form-control" placeholder="Other Fish Purchased" wire:model="otherfish_purchased">
                                    @error('otherfish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_purchased_qty">Other Fish Purchased Quantity</label>
                                    <input type="number" id="otherfish_purchased_qty" class="form-control" placeholder="Other Fish Purchased Quantity" wire:model="otherfish_purchased_qty">
                                    @error('otherfish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_purchased_value">Other Fish Purchased Value</label>
                                    <input type="number" id="otherfish_purchased_value" class="form-control" placeholder="Other Fish Purchased Value" wire:model="otherfish_purchased_value">
                                    @error('otherfish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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