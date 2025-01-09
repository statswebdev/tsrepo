<div>
    <section class="pt-6">
        <div class="container">
            <div class="row mt-0 mt-md-4">      
                    <div class="col-lg-12 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border-0">
                        <!-- Card header -->
                        <div class="card-header d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <h3 class="mb-0">
                                @if($query)
                                    {{ $query->estname }} - Stock & Inventory Information - {{ $query->collectionyear }}
                                @endif 
                            </h3>
                        </div>
                        
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="border-bottom pt-0 pb-4"> 
                                <!-- Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Fuel Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_fuel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Fuel Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_fuel_yearend }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Traded Goods Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_tradedgoods }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Traded Goods Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_tradedgoods_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Food Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_food }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Food Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_food_yearend }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Chemicals Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_chemicals }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Chemicals Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_chemicals_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Packing and Spare stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Packing Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_packing }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Packing Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_packing_yearend }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Spare Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_spare }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Spare Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_spare_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Textile and Stationary stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Textile Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_textile }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Textile Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_textile_yearend }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Stationary Stock Year First (January)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_stationary }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Stationary Stock Year End (December)</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_stationary_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Textile and Stationary stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Specify Other Stock</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_one }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year First</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_one_value }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year End</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_one_value_yearend }}
                                        </h6>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Other Stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Specify Other Stock</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_two }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year First</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_two_value }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year End</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_two_value_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Other Stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Specify Other Stock</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_three }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year First</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_three_value }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year End</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_three_value_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Other Stock data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Specify Other Stock</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_four }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year First</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_four_value }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Stock Year End</span>
                                        <h6 class="mb-0">
                                           {{ $query->stock_other_four_value_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Profit and Loss data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Profit/Loss</span>
                                        <h6 class="mb-0">
                                           {{ $query->profit_loss }}
                                        </h6>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Remarks data -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 mb-2 mb-lg-0">
                                        <span class="fs-6">Remarks</span>
                                        <h6 class="mb-0">
                                           {{ $query->remarks }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            
                            

                            

                            <div class="pt-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Form Status</span>
                                        <h6 class="mb-0"><span class="badge bg-primary mt-0">{{ $query->status }}</span></h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Form Submitted</span>
                                        <h6 class="mb-0">{{ $query->created_at }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @if(Auth::user()->role === 'admin')
                    <div class="col-lg-12 col-md-12 col-12 mt-4">
                        <!-- Card -->
                        <div class="card">
                          <!-- Card header -->
                          <div class="card-header">
                            <h3 class="mb-0">Update Status</h3>
                            <p class="mb-0">Select a status if you wish to change</p>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                              <!-- Form -->
                              <form wire:submit.prevent="updateStatus">
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="selectStatus">Select Status</label>
                                  <select class="form-select" aria-label="selectStatus" wire:model="status">
                                    <option selected>Select Status</option>
                                    <option value="completed">Completed</option>
                                    <option value="review">Review</option>
                                  </select>
                                  @error('status')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                  <!-- Button -->
                                  <button class="btn btn-primary" type="submit">Update Status</button>
                                </div>
                              </form>
                          </div>
                        </div>
                      </div>
                      @endif
                    </div>
                </div>
        </div>
    </section>
</div>
