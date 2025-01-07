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
                                
                                <h5>1. Agricultural Products Inhouse Grown</h5>
                                <small class="mb-5">Enter the quantity of agricultural products grown inhouse</small>

                                <div class="row col-divider mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4 text-center">
                                        <label>Inhouse Grown (December), in KG</label> 
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
                            <label class="col-form-label col-sm-2 text-end">Watermelon</label>
                                <div class="col-sm-2">
                                    <select id="watermelon_inhouse" class="form-control" wire:model="watermelon_inhouse">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('watermelon_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    
                                    <input type="number" id="watermelon_grown" class="form-control" placeholder="KG" wire:model="watermelon_grown">
                                    @error('watermelon_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                               
                        </div>


                        
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Coconut</label>
                            <div class="col-sm-2">
                                <select id="coconut_inhouse" class="form-control" wire:model="coconut_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('coconut_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="coconut_grown" class="form-control" placeholder="KG" wire:model="coconut_grown">
                                @error('coconut_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Papaya</label>
                            <div class="col-sm-2">
                                <select id="papaya_inhouse" class="form-control" wire:model="papaya_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('papaya_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="papaya_grown" class="form-control" placeholder="KG" wire:model="papaya_grown">
                                @error('papaya_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Pumpkin</label>
                            <div class="col-sm-2">
                                <select id="pumpkin_inhouse" class="form-control" wire:model="pumpkin_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('pumpkin_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="pumpkin_grown" class="form-control" placeholder="KG" wire:model="pumpkin_grown">
                                @error('pumpkin_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Cucumber</label>
                            <div class="col-sm-2">
                                <select id="cucumber_inhouse" class="form-control" wire:model="cucumber_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('cucumber_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="cucumber_grown" class="form-control" placeholder="KG" wire:model="cucumber_grown">
                                @error('cucumber_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Banana</label>
                            <div class="col-sm-2">
                                <select id="banana_inhouse" class="form-control" wire:model="banana_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('banana_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="banana_grown" class="form-control" placeholder="KG" wire:model="banana_grown">
                                @error('banana_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Brinjal</label>
                            <div class="col-sm-2">
                                <select id="brinjal_inhouse" class="form-control" wire:model="brinjal_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('brinjal_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="brinjal_grown" class="form-control" placeholder="KG" wire:model="brinjal_grown">
                                @error('brinjal_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Chillies</label>
                            <div class="col-sm-2">
                                <select id="chillies_inhouse" class="form-control" wire:model="chillies_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('chillies_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="chillies_grown" class="form-control" placeholder="KG" wire:model="chillies_grown">
                                @error('chillies_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Bottlegourd</label>
                            <div class="col-sm-2">
                                <select id="bottlegourd_inhouse" class="form-control" wire:model="bottlegourd_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('bottlegourd_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="bottlegourd_grown" class="form-control" placeholder="KG" wire:model="bottlegourd_grown">
                                @error('bottlegourd_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Butternut</label>
                            <div class="col-sm-2">
                                <select id="butternut_inhouse" class="form-control" wire:model="butternut_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('butternut_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="butternut_grown" class="form-control" placeholder="KG" wire:model="butternut_grown">
                                @error('butternut_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Cabbage</label>
                            <div class="col-sm-2">
                                <select id="cabbage_inhouse" class="form-control" wire:model="cabbage_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('cabbage_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="cabbage_grown" class="form-control" placeholder="KG" wire:model="cabbage_grown">
                                @error('cabbage_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Mango</label>
                            <div class="col-sm-2">
                                <select id="mango_inhouse" class="form-control" wire:model="mango_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('mango_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="mango_grown" class="form-control" placeholder="KG" wire:model="mango_grown">
                                @error('mango_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Waxgourd</label>
                            <div class="col-sm-2">
                                <select id="waxgourd_inhouse" class="form-control" wire:model="waxgourd_inhouse">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('waxgourd_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="waxgourd_grown" class="form-control" placeholder="KG" wire:model="waxgourd_grown">
                                @error('waxgourd_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Other</label>
                            <div class="col-sm-2">
                                <input type="text" id="otheragrione_inhouse" class="form-control" placeholder="specify" wire:model="otheragrione_inhouse">
                                @error('otheragrione_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="otheragrione_grown" class="form-control" placeholder="KG" wire:model="otheragrione_grown">
                                @error('otheragrione_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Other</label>
                            <div class="col-sm-2">
                                <input type="text" id="otheragritwo_inhouse" class="form-control" placeholder="specify" wire:model="otheragritwo_inhouse">
                                @error('otheragritwo_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="otheragritwo_grown" class="form-control" placeholder="KG" wire:model="otheragritwo_grown">
                                @error('otheragritwo_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Other</label>
                            <div class="col-sm-2">
                                <input type="text" id="otheragrithree_inhouse" class="form-control" placeholder="specify" wire:model="otheragrithree_inhouse">
                                @error('otheragrithree_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="otheragrithree_grown" class="form-control" placeholder="KG" wire:model="otheragrithree_grown">
                                @error('otheragrithree_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Other</label>
                            <div class="col-sm-2">
                                <input type="text" id="otheragrifour_inhouse" class="form-control" placeholder="specify" wire:model="otheragrifour_inhouse">
                                @error('otheragrifour_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="otheragrifour_grown" class="form-control" placeholder="KG" wire:model="otheragrifour_grown">
                                @error('otheragrifour_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <hr class="mt-3 mb-5">
                        
                        <h5>2. Agricultural Products Purchased From Farmers</h5>
                        <small class="mb-5">Enter the quantity of agricultural products purchased and their value</small>

                        <div class="row  mb-2">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6 text-center">
                                <label>Purchased From Farmers(December), in KG</label> 
                            </div>

                           
                            
                           
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3 text-center">Yes / No</div>
                        <div class="col-sm-3 text-center">
                            <label>If Yes, Quantity Grown in KG</label> 
                        </div>
                        <div class="col-sm-3 text-center">
                            <label>Value Purchased from Farmers(December), in MVR</label> 
                        </div>
                       
                        <div class="col-sm-3"></div>
                </div>

                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Watermelon</label>
                    <div class="col-sm-3">
                        <select id="watermelon_farmers" class="form-control" wire:model="watermelon_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('watermelon_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="watermelon_farmers_qty" class="form-control" placeholder="KG" wire:model="watermelon_farmers_qty">
                        @error('watermelon_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="watermelon_farmers_value" class="form-control" placeholder="MVR" wire:model="watermelon_farmers_value">
                        @error('watermelon_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Coconut</label>
                    <div class="col-sm-3">
                        <select id="coconut_farmers" class="form-control" wire:model="coconut_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('coconut_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="coconut_farmers_qty" class="form-control" placeholder="KG" wire:model="coconut_farmers_qty">
                        @error('coconut_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="coconut_farmers_value" class="form-control" placeholder="MVR" wire:model="coconut_farmers_value">
                        @error('coconut_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Papaya</label>
                    <div class="col-sm-3">
                        <select id="papaya_farmers" class="form-control" wire:model="papaya_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('papaya_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="papaya_farmers_qty" class="form-control" placeholder="KG" wire:model="papaya_farmers_qty">
                        @error('papaya_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="papaya_farmers_value" class="form-control" placeholder="MVR" wire:model="papaya_farmers_value">
                        @error('papaya_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Pumpkin</label>
                    <div class="col-sm-3">
                        <select id="pumpkin_farmers" class="form-control" wire:model="pumpkin_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('pumpkin_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="pumpkin_farmers_qty" class="form-control" placeholder="KG" wire:model="pumpkin_farmers_qty">
                        @error('pumpkin_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="pumpkin_farmers_value" class="form-control" placeholder="MVR" wire:model="pumpkin_farmers_value">
                        @error('pumpkin_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Cucumber</label>
                    <div class="col-sm-3">
                        <select id="cucumber_farmers" class="form-control" wire:model="cucumber_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('cucumber_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="cucumber_farmers_qty" class="form-control" placeholder="KG" wire:model="cucumber_farmers_qty">
                        @error('cucumber_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="cucumber_farmers_value" class="form-control" placeholder="MVR" wire:model="cucumber_farmers_value">
                        @error('cucumber_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Banana</label>
                    <div class="col-sm-3">
                        <select id="banana_farmers" class="form-control" wire:model="banana_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('banana_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="banana_farmers_qty" class="form-control" placeholder="KG" wire:model="banana_farmers_qty">
                        @error('banana_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="banana_farmers_value" class="form-control" placeholder="MVR" wire:model="banana_farmers_value">
                        @error('banana_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Brinjal</label>
                    <div class="col-sm-3">
                        <select id="brinjal_farmers" class="form-control" wire:model="brinjal_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('brinjal_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="brinjal_farmers_qty" class="form-control" placeholder="KG" wire:model="brinjal_farmers_qty">
                        @error('brinjal_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="brinjal_farmers_value" class="form-control" placeholder="MVR" wire:model="brinjal_farmers_value">
                        @error('brinjal_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Chillies</label>
                    <div class="col-sm-3">
                        <select id="chillies_farmers" class="form-control" wire:model="chillies_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('chillies_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="chillies_farmers_qty" class="form-control" placeholder="KG" wire:model="chillies_farmers_qty">
                        @error('chillies_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="chillies_farmers_value" class="form-control" placeholder="MVR" wire:model="chillies_farmers_value">
                        @error('chillies_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Bottlegourd</label>
                    <div class="col-sm-3">
                        <select id="bottlegourd_farmers" class="form-control" wire:model="bottlegourd_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('bottlegourd_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="bottlegourd_farmers_qty" class="form-control" placeholder="KG" wire:model="bottlegourd_farmers_qty">
                        @error('bottlegourd_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="bottlegourd_farmers_value" class="form-control" placeholder="MVR" wire:model="bottlegourd_farmers_value">
                        @error('bottlegourd_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Butternut</label>
                    <div class="col-sm-3">
                        <select id="butternut_farms" class="form-control" wire:model="butternut_farms">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('butternut_farms')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="butternut_farmers_qty" class="form-control" placeholder="KG" wire:model="butternut_farmers_qty">
                        @error('butternut_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="butternut_farmers_value" class="form-control" placeholder="MVR" wire:model="butternut_farmers_value">
                        @error('butternut_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Cabbage</label>
                    <div class="col-sm-3">
                        <select id="cabbage_farmers" class="form-control" wire:model="cabbage_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('cabbage_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="cabbage_farmers_qty" class="form-control" placeholder="KG" wire:model="cabbage_farmers_qty">
                        @error('cabbage_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="cabbage_farmers_value" class="form-control" placeholder="MVR" wire:model="cabbage_farmers_value">
                        @error('cabbage_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Mango</label>
                    <div class="col-sm-3">
                        <select id="mango_farmers" class="form-control" wire:model="mango_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('mango_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="mango_farmers_qty" class="form-control" placeholder="KG" wire:model="mango_farmers_qty">
                        @error('mango_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="mango_farmers_value" class="form-control" placeholder="MVR" wire:model="mango_farmers_value">
                        @error('mango_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Waxgourd</label>
                    <div class="col-sm-3">
                        <select id="waxgourd_farmers" class="form-control" wire:model="waxgourd_farmers">
                            <option value="">Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('waxgourd_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="waxgourd_farmers_qty" class="form-control" placeholder="KG" wire:model="waxgourd_farmers_qty">
                        @error('waxgourd_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="waxgourd_farmers_value" class="form-control" placeholder="MVR" wire:model="waxgourd_farmers_value">
                        @error('waxgourd_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Other</label>
                    <div class="col-sm-3">
                        <input type="text" id="otheragrione_farmers" class="form-control" placeholder="specify" wire:model="otheragrione_farmers">
                        @error('otheragrione_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragrione_farmers_qty" class="form-control" placeholder="KG" wire:model="otheragrione_farmers_qty">
                        @error('otheragrione_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragrione_farmers_value" class="form-control" placeholder="MVR" wire:model="otheragrione_farmers_value">
                        @error('otheragrione_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Other</label>
                    <div class="col-sm-3">
                        <input type="text" id="otheragritwo_farmers" class="form-control" placeholder="specify" wire:model="otheragritwo_farmers">
                        @error('otheragritwo_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragritwo_farmers_qty" class="form-control" placeholder="KG" wire:model="otheragritwo_farmers_qty">
                        @error('otheragritwo_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragritwo_farmers_value" class="form-control" placeholder="MVR" wire:model="otheragritwo_farmers_value">
                        @error('otheragritwo_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Other</label>
                    <div class="col-sm-3">
                        <input type="text" id="otheragrithree_farmers" class="form-control" placeholder="specify" wire:model="otheragrithree_farmers">
                        @error('otheragrithree_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragrithree_farmers_qty" class="form-control" placeholder="KG" wire:model="otheragrithree_farmers_qty">
                        @error('otheragrithree_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragrithree_farmers_value" class="form-control" placeholder="MVR" wire:model="otheragrithree_farmers_value">
                        @error('otheragrithree_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-form-label col-sm-2 text-end">Other</label>
                    <div class="col-sm-3">
                        <input type="text" id="otheragrifour_farmers" class="form-control" placeholder="specify" wire:model="otheragrifour_farmers">
                        @error('otheragrifour_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragrifour_farmers_qty" class="form-control" placeholder="KG" wire:model="otheragrifour_farmers_qty">
                        @error('otheragrifour_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-3">
                        <input type="number" id="otheragrifour_farmers_value" class="form-control" placeholder="MVR" wire:model="otheragrifour_farmers_value">
                        @error('otheragrifour_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                    </div>
                </div>
                <hr class="mt-3 mb-5">

                                <div class="mb-3 mt-3 col-12 col-md-12">
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