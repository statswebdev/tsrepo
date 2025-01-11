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
                                    {{ $query->estname }} - Employment Information - {{ $query->collectionyear }}
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
                                        <span class="fs-6">Maldivian Male</span>
                                        <h6 class="mb-0">
                                        {{ $query->maldivian_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian female</span>
                                        <h6 class="mb-0"> {{ $query->maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign male</span>
                                        <h6 class="mb-0">{{ $query->foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_female</span>
                                        <h6 class="mb-0">{{ $query->foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Permanent Employment data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Permanent</span>
                                        <h6 class="mb-0">{{ $query->maldivian_male_permanent }}</h6>
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
                                <!-- Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Hundred Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->hundred_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Hundred Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->hundred_foreign }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Three Hundred Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->threehundred_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Three Hundred Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->threehundred_foreign }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Five Hundred Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->fivehundred_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Five Hundred Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->fivehundred_foreign }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seven Hundred Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->sevenhundred_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seven Hundred Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->sevenhundred_foreign }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Nine Hundred Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->ninehundred_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Nine Hundred Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->ninehundred_foreign }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Thousand Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->thausand_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Thousand Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->thausand_foreign }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Three Thousand Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->threethausand_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Three Thousand Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->threethausand_foreign }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Five Thousand Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->fivethausand_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Five Thousand Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->fivethausand_foreign }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seven Thousand Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->seventhausand_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seven Thousand Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->seventhausand_foreign }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Ten Thousand Maldivian</span>
                                        <h6 class="mb-0">
                                           {{ $query->tenthausand_maldivian }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Ten Thousand Foreign</span>
                                        <h6 class="mb-0">
                                           {{ $query->tenthausand_foreign }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Age data for eighteen years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Eighteen Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_eighteen_mdv_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Eighteen Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_eighteen_mdv_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Eighteen Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_eighteen_foreign_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Eighteen Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_eighteen_foreign_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Age data for twenty years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Twenty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_twenty_mdv_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Twenty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_twenty_mdv_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Twenty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_twenty_foreign_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Twenty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_twenty_foreign_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Age data for thirty years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Thirty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_thirty_mdv_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Thirty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_thirty_mdv_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Thirty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_thirty_foreign_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Thirty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_thirty_foreign_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Age data for sixty years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Sixty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_sixty_mdv_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Sixty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_sixty_mdv_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Sixty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_sixty_foreign_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Sixty Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_sixty_foreign_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Age data for old age -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Old Age</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_old_mdv_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Old Age</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_old_mdv_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Old Age</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_old_foreign_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Old Age</span>
                                        <h6 class="mb-0">
                                           {{ $query->age_old_foreign_female }}
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
