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
                                    {{ $query->estname }} - Production & Consumption Information - {{ $query->collectionyear }}
                                @endif 
                            </h3>
                        </div>
                        
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="border-bottom pt-0 pb-4"> 
                                <!-- Pricing data -->
                                {{-- <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Generated Inhouse</span>
                                        <h6 class="mb-0">
                                            {{ $query->generated_inhouse }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Electricity Generated</span>
                                        <h6 class="mb-0">
                                            {{ $query->electricity_generated }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Electricity Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->electricity_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Outsourced Generated</span>
                                        <h6 class="mb-0">
                                            {{ $query->outsourced_generated }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Electricity Other Sources</span>
                                        <h6 class="mb-0">
                                            {{ $query->electricity_othersources }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Sources Generated</span>
                                        <h6 class="mb-0">
                                            {{ $query->othersources_generated }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Electricity Consumption</span>
                                        <h6 class="mb-0">
                                            {{ $query->electricity_consumption }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Grid Energy</span>
                                        <h6 class="mb-0">
                                            {{ $query->solargrid_energy }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Renewable energy data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Grid Production</span>
                                        <h6 class="mb-0">
                                            {{ $query->solargrid_production }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Grid Consumption</span>
                                        <h6 class="mb-0">
                                            {{ $query->solargrid_consumption }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Other</span>
                                        <h6 class="mb-0">
                                            {{ $query->renewable_other }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Other Production</span>
                                        <h6 class="mb-0">
                                            {{ $query->renewable_other_production }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4">  --}}


                                <!-- Water and renewable energy consumption data -->
                                <div class="row">
                                    {{-- <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Other Consumption</span>
                                        <h6 class="mb-0">
                                            {{ $query->renewable_other_consumption }}
                                        </h6>
                                    </div> --}}
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Water Inhouse Production</span>
                                        <h6 class="mb-0">
                                            {{ $query->waterinhouse_production }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Water Inhouse Monthly</span>
                                        <h6 class="mb-0">
                                            {{ $query->waterinhouse_monthly }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Water Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->water_outsourced }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Monthly water data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Water Outsourced Monthly</span>
                                        <h6 class="mb-0">
                                            {{ $query->water_outsourced_monthly }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water January</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_jan }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water February</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_feb }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water March</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_mar }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Monthly water data continued -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water April</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_apr }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water May</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_may }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water June</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_jun }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water July</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_july }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Monthly water data continued -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water August</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_aug }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water September</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_sep }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water October</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_oct }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water November</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_nov }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Monthly water data continued -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Water December</span>
                                        <h6 class="mb-0">
                                            {{ $query->monthly_water_dec }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Waste disposal data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Waste Disposed Inhouse</span>
                                        <h6 class="mb-0">
                                            {{ $query->waste_disposedinhouse }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Waste Disposed Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->waste_disposedoutsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Waste Disposal Other</span>
                                        <h6 class="mb-0">
                                            {{ $query->waste_disposalother }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Monthly waste data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Monthly Waste</span>
                                        <h6 class="mb-0">
                                            {{ $query->waste_monthly }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Plastic Waste</span>
                                        <h6 class="mb-0">
                                            {{ $query->plastic_waste }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Plastic Waste Method</span>
                                        <h6 class="mb-0">
                                            @php
                                                $plastic = json_decode($query->plastic_waste_method);
                                            @endphp
                                            {{ implode(', ', $plastic) }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Organic Waste</span>
                                        <h6 class="mb-0">
                                            {{ $query->organic_waste }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional waste data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Organic Waste Method</span>
                                        <h6 class="mb-0">
                                            @php
                                                $organic = json_decode($query->organic_waste_method);
                                            @endphp
                                            {{ implode(', ', $organic) }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Metal Waste</span>
                                        <h6 class="mb-0">
                                            {{ $query->metal_waste }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Metal Waste Method</span>
                                        <h6 class="mb-0">
                                            @php
                                                $metal = json_decode($query->metal_waste_method);
                                            @endphp
                                            {{ implode(', ', $metal) }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Waste</span>
                                        <h6 class="mb-0">
                                            {{ $query->other_waste }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Other waste method data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Waste Method</span>
                                        <h6 class="mb-0">
                                            @php
                                                $other_waste_method = json_decode($query->other_waste_method);
                                            @endphp
                                            {{ implode(', ', $other_waste_method) }}
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
