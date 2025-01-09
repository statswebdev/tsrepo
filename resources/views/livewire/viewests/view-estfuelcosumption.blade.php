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
                                    {{ $query->estname }} - Fuel Consumption & Inventory Information - {{ $query->collectionyear }}
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
                                        <span class="fs-6">Diesel Bought qty</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_bought_qty }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Bought</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_bought_year }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Bought qty</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_bought_qty }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Bought</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_bought_year }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional fuel data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Bought qty</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_bought_qty }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Bought</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_bought_year }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fuel Bought qty</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_bought_qty }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fuel Bought</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_bought_year }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel inventory data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Inventory Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_inventory_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Inventory Year First</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_inventory_yearfirst }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Inventory Year End</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_inventory_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol inventory data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Inventory Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_inventory_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Inventory Year First</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_inventory_yearfirst }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Inventory Year End</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_inventory_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- LPG inventory data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Inventory Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_inventory_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Inventory Year First</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_inventory_unit_yearfirst }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Inventory Year End</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_inventory_unit_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Other fuel inventory data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fuel Inventory Specify</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_inventory_specify }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fuel Inventory Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_inventory_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fuel Inventory Year First</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_inventory_unit_yearfirst }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fuel Inventory Year End</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_inventory_unit_yearend }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel electricity data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Electricity Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_electricity_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Electricity Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_electricity_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol electricity data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Electricity Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_electricity_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Electricity Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_electricity_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel desalination data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Desalination Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_desalination_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Desalination Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_desalination_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol desalination data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Desalination Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_desalination_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Desalination Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_desalination_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel transport sea data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Transport Sea Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_transportsea_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Transport Sea Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_transportsea_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol transport sea data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Transport Sea Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_transportsea_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Transport Sea Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_transportsea_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel transport land data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Transport Land Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_transportland_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Transport Land Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_transportland_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol transport land data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Transport Land Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_transportland_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Transport Land Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_transportland_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- LPG cooking data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Cooking Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_cooking_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">LPG Cooking Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->lpg_cooking_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel cooking data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Cooking Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_cooking_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Cooking Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_cooking_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol cooking data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Cooking Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_cooking_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Cooking Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_cooking_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel other fuel consumption data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Other Fuel Consumption</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_other_fuelconsumption }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Other Fuel Consumption Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_other_fuelconsumption_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Other Fuel Consumption Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->diesel_other_fuelconsumption_qty }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Petrol other fuel consumption data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Other Fuel Consumption</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_other_fuelconsumption }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Other Fuel Consumption Unit</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_other_fuelconsumption_unit }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Petrol Other Fuel Consumption Quantity</span>
                                        <h6 class="mb-0">
                                            {{ $query->petrol_other_fuelconsumption_qty }}
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
