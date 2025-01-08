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
                                <select id="skipjacktuna_inhouse" class="form-control" wire:model="skipjacktuna_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('skipjacktuna_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="skipjacktuna_inhouse_qty" class="form-control" placeholder="KG" wire:model="skipjacktuna_inhouse_qty" :disabled="$wire.skipjacktuna_inhouse == 'no'">
                                @error('skipjacktuna_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Yellowfin Tuna</label>
                            <div class="col-sm-2">
                                <select id="yellowfin_inhouse" class="form-control" wire:model="yellowfin_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('yellowfin_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="yellowfin_inhouse_qty" class="form-control" placeholder="KG" wire:model="yellowfin_inhouse_qty" :disabled="$wire.yellowfin_inhouse == 'no'">
                                @error('yellowfin_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Reef Fish</label>
                            <div class="col-sm-2">
                                <select id="reeffish_inhouse" class="form-control" wire:model="reeffish_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('reeffish_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="reeffish_inhouse_qty" class="form-control" placeholder="KG" wire:model="reeffish_inhouse_qty" :disabled="$wire.reeffish_inhouse == 'no'">
                                @error('reeffish_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Seafood</label>
                            <div class="col-sm-2">
                                <select id="seafood_inhouse" class="form-control" wire:model="seafood_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('seafood_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="seafood_inhouse_qty" class="form-control" placeholder="KG" wire:model="seafood_inhouse_qty" :disabled="$wire.seafood_inhouse == 'no'">
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
                        
                        <hr class="mt-5 mb-5">
                        
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
                        <select id="skipjack_purchased" class="form-control" wire:model="skipjack_purchased">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('skipjack_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="skipjack_purchased_qty" class="form-control" placeholder="KG" wire:model="skipjack_purchased_qty" :disabled="$wire.skipjack_purchased == 'no'">
                        @error('skipjack_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="skipjack_purchased_value" class="form-control" placeholder="MVR" wire:model="skipjack_purchased_value" :disabled="$wire.skipjack_purchased == 'no'">
                        @error('skipjack_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Yellowfin Purchased</label>
                                    <div class="col-sm-3">
                                        <select id="yellowfin_purchased" class="form-control" wire:model="yellowfin_purchased">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('yellowfin_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="yellowfin_purchased_qty" class="form-control" placeholder="KG" wire:model="yellowfin_purchased_qty" :disabled="$wire.yellowfin_purchased == 'no'">
                                        @error('yellowfin_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="yellowfin_purchased_value" class="form-control" placeholder="MVR" wire:model="yellowfin_purchased_value" :disabled="$wire.yellowfin_purchased == 'no'">
                                        @error('yellowfin_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Reef Fish Purchased</label>
                                    <div class="col-sm-3">
                                        <select id="reeffish_purchased" class="form-control" wire:model="reeffish_purchased">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('reeffish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="reeffish_purchased_qty" class="form-control" placeholder="KG" wire:model="reeffish_purchased_qty" :disabled="$wire.reeffish_purchased == 'no'">
                                        @error('reeffish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="reeffish_purchased_value" class="form-control" placeholder="MVR" wire:model="reeffish_purchased_value" :disabled="$wire.reeffish_purchased == 'no'">
                                        @error('reeffish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Seafood Purchased</label>
                                    <div class="col-sm-3">
                                        <select id="seafood_purchased" class="form-control" wire:model="seafood_purchased">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('seafood_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="seafood_purchased_qty" class="form-control" placeholder="KG" wire:model="seafood_purchased_qty" :disabled="$wire.seafood_purchased == 'no'">
                                        @error('seafood_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="seafood_purchased_value" class="form-control" placeholder="MVR" wire:model="seafood_purchased_value" :disabled="$wire.seafood_purchased == 'no'">
                                        @error('seafood_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Other Fish Purchased</label>
                                    <div class="col-sm-3">
                                        <input type="text" id="otherfish_purchased" class="form-control" placeholder="Specify" wire:model="otherfish_purchased">
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