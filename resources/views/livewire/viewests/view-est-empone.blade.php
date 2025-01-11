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
                                    {{ $query->estname }} - Employment Information Part 1 - {{ $query->collectionyear }}
                                @endif 
                            </h3>
                        </div>
                        
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male (Total Employees)</span>
                                        <h6 class="mb-0">{{ $query->maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female (Total Employees)</span>
                                        <h6 class="mb-0">{{ $query->maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male (Total Employees)</span>
                                        <h6 class="mb-0">{{ $query->foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female (Total Employees)</span>
                                        <h6 class="mb-0">{{ $query->foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom pt-0 pb-4"> 
                                <!-- Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Commuting</span>
                                        <h6 class="mb-0">
                                            {{ $query->maldivian_male_commuting }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Commuting</span>
                                        <h6 class="mb-0">{{ $query->maldivian_female_commuting }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Commuting</span>
                                        <h6 class="mb-0">{{ $query->foreign_male_commuting }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Commuting</span>
                                        <h6 class="mb-0">{{ $query->foreign_female_commuting }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Permanent</span>
                                        <h6 class="mb-0">
                                            {{ $query->maldivian_male_permanent }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Permanent</span>
                                        <h6 class="mb-0">{{ $query->maldivian_female_permanent }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Permanent</span>
                                        <h6 class="mb-0">{{ $query->foreign_male_permanent }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Permanent</span>
                                        <h6 class="mb-0">{{ $query->foreign_female_permanent }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Accomo Maldivian Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->accomo_maldivian_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Accomo Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->accomo_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Accomo Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->accomo_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Accomo Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->accomo_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Food Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->food_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Food Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->food_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Food Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->food_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Food Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->food_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->transport_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->transport_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->transport_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->transport_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Sports Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->sports_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Sports Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->sports_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Sports Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->sports_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Sports Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->sports_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Admin Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->admin_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Admin Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->admin_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Admin Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->admin_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Admin Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->admin_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->other_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->other_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->other_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->other_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Manager Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->manager_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Manager Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->manager_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Manager Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->manager_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Manager Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->manager_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Professional Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->professional_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Professional Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->professional_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Professional Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->professional_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Professional Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->professional_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Service Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->service_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Service Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->service_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Service Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->service_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Service Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->service_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Elementary Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->elementary_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Elementary Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->elementary_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Elementary Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->elementary_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Elementary Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->elementary_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Bylevelother Maldivian Male</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Bylevelother Maldivian Female</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Bylevelother Foreign Male</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Bylevelother Foreign Female</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_foreign_female }}</h6>
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
