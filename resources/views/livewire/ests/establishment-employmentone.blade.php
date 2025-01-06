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



                                <h5>1. Employment (Year End)</h5>
                                <small class="mb-3">Enter the count of employees at the end of the year. Including Resident, Permanent & Commuting Employees / Casual workers</small>


                             
        
                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                            
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3 text-center">Male</div>
                                <div class="col-sm-3 text-center">
                                    <label>Female</label> 
                                </div>

                                <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Maldivian</label>
                            <div class="col-sm-3">
                                <input type="number" id="maldivian_male" class="form-control" placeholder="number of employees" wire:model="maldivian_male">
                                @error('maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="maldivian_female" class="form-control" placeholder="number of employees" wire:model="maldivian_female">
                                @error('maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Foreign</label>
                            <div class="col-sm-3">
                                <input type="number" id="foreign_male" class="form-control" placeholder="number of employees" wire:model="foreign_male">
                                @error('foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="foreign_female" class="form-control" placeholder="number of employees" wire:model="foreign_female">
                                @error('foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>



                                
                                <hr class="mt-3">

                                <h5>2. Employment (Commuting/Casual - Year End) </h5>
                                <small class="mb-3">Enter the count of commuting employees / casual workers</small>

                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                            
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3 text-center">Male</div>
                                <div class="col-sm-3 text-center">
                                    <label>Female</label> 
                                </div>

                                <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Maldivian</label>
                            <div class="col-sm-3">
                                <input type="number" id="maldivian_male_commuting" class="form-control" placeholder="number of employees" wire:model="maldivian_male_commuting">
                                @error('maldivian_male_commuting')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="maldivian_female_commuting" class="form-control" placeholder="number of employees" wire:model="maldivian_female_commuting">
                                @error('maldivian_female_commuting')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Foreign</label>
                            <div class="col-sm-3">
                                <input type="number" id="foreign_male_commuting" class="form-control" placeholder="number of employees" wire:model="foreign_male_commuting">
                                @error('foreign_male_commuting')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="foreign_female_commuting" class="form-control" placeholder="number of employees" wire:model="foreign_female_commuting">
                                @error('foreign_female_commuting')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>




                                

                                <hr class="mt-3">

                                <h5>3. Employment (Permanent Employees - Year End) </h5>
                                <small class="mb-3">Enter the count of permanent employees only</small>


                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                            
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3 text-center">Male</div>
                                <div class="col-sm-3 text-center">
                                    <label>Female</label> 
                                </div>

                                <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Maldivian</label>
                            <div class="col-sm-3">
                                <input type="number" id="maldivian_male_permanent" class="form-control" placeholder="number of employees" wire:model="maldivian_male_permanent">
                                @error('maldivian_male_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="maldivian_female_permanent" class="form-control" placeholder="number of employees" wire:model="maldivian_female_permanent">
                                @error('maldivian_female_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Foreign</label>
                            <div class="col-sm-3">
                                <input type="number" id="foreign_male_permanent" class="form-control" placeholder="number of employees" wire:model="foreign_male_permanent">
                                @error('foreign_male_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="foreign_female_permanent" class="form-control" placeholder="number of employees" wire:model="foreign_female_permanent">
                                @error('foreign_female_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>


                                

                                <hr class="mt-3">

                                <h5>4. Employment by Type of Occupation (Year End) </h5>
                                <small class="mb-3">Enter the count of employees by type of occupation</small>


                                
                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                            
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-2 text-center">Maldivian Male</div>
                                <div class="col-sm-2 text-center">
                                    <label>Maldivian Female</label> 
                                </div>
                                <div class="col-sm-2 text-center">Foreign Male</div>
                                <div class="col-sm-2 text-center">
                                    <label>Foreign Female</label> 
                                </div>


                                <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group row mb-4 ">
                            <label class="form-label col-sm-4 text-end">Accommodation Services
                            <br>
                            <span class="text-muted small text-sm-start">Include all employees who works in the area of accomodation related services, including housekeeping, Concierge, Butler, Room cleaners, Janitors, and alike</span>    
                            </label>         
                                <div class="col-sm-2 js-form-message">
                                    <input type="text" class="form-control twofivemv" placeholder="" maxlength="10" value="2" name="accomodationmaldivianmale" id="twofivemvone" required="">
                                    <span class="invalid-feedback">Please enter the number of employees</span>
                                    </div>
                                <div class="col-sm-2 js-form-message">
                                    <input type="text" class="form-control twofivefr" placeholder="" maxlength="10" value="2" name="accomodationmaldivianfemale" id="twofivefrone" required="">
                                    <span class="invalid-feedback">Please enter the number of employees</span>
                                </div>
                            
                        <div class="col-sm-2 js-form-message">
                                    <input type="text" class="form-control twofivefr" placeholder="" maxlength="10" value="2" name="accomodationforeignmale" id="twofivefrone" required="">
                                    <span class="invalid-feedback">Please enter the number of employees</span>
                                </div><div class="col-sm-2 js-form-message">
                                    <input type="text" class="form-control twofivefr" placeholder="" maxlength="10" value="2" name="accomodationforeignfemale" id="twofivefrone" required="">
                                    <span class="invalid-feedback">Please enter the number of employees</span>
                                </div></div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Accomodation Services</label>
                            
                            <span class="text-muted small col-sm-2 text-sm-start">Include all employees who works in the area of accomodation related services, including housekeeping, Concierge, Butler, Room cleaners, Janitors, and alike</span>    
                            <div class="col-sm-2">
                                <input type="number" id="foreign_male_permanent" class="form-control" placeholder="number of employees" wire:model="foreign_male_permanent">
                                @error('foreign_male_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="foreign_female_permanent" class="form-control" placeholder="number of employees" wire:model="foreign_female_permanent">
                                @error('foreign_female_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="foreign_female_permanent" class="form-control" placeholder="number of employees" wire:model="foreign_female_permanent">
                                @error('foreign_female_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="foreign_female_permanent" class="form-control" placeholder="number of employees" wire:model="foreign_female_permanent">
                                @error('foreign_female_permanent')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>


                        


                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="accomo_maldivian_male">Accommodation Maldivian Male</label>
                                    <input type="number" id="accomo_maldivian_male" class="form-control" placeholder="Accommodation Maldivian Male" wire:model="accomo_maldivian_male">
                                    @error('accomo_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="accomo_maldivian_female">Accommodation Maldivian Female</label>
                                    <input type="number" id="accomo_maldivian_female" class="form-control" placeholder="Accommodation Maldivian Female" wire:model="accomo_maldivian_female">
                                    @error('accomo_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="accomo_foreign_male">Accommodation Foreign Male</label>
                                    <input type="number" id="accomo_foreign_male" class="form-control" placeholder="Accommodation Foreign Male" wire:model="accomo_foreign_male">
                                    @error('accomo_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="accomo_foreign_female">Accommodation Foreign Female</label>
                                    <input type="number" id="accomo_foreign_female" class="form-control" placeholder="Accommodation Foreign Female" wire:model="accomo_foreign_female">
                                    @error('accomo_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="food_maldivian_male">Food Maldivian Male</label>
                                    <input type="number" id="food_maldivian_male" class="form-control" placeholder="Food Maldivian Male" wire:model="food_maldivian_male">
                                    @error('food_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="food_maldivian_female">Food Maldivian Female</label>
                                    <input type="number" id="food_maldivian_female" class="form-control" placeholder="Food Maldivian Female" wire:model="food_maldivian_female">
                                    @error('food_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="food_foreign_male">Food Foreign Male</label>
                                    <input type="number" id="food_foreign_male" class="form-control" placeholder="Food Foreign Male" wire:model="food_foreign_male">
                                    @error('food_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="food_foreign_female">Food Foreign Female</label>
                                    <input type="number" id="food_foreign_female" class="form-control" placeholder="Food Foreign Female" wire:model="food_foreign_female">
                                    @error('food_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="transport_maldivian_male">Transport Maldivian Male</label>
                                    <input type="number" id="transport_maldivian_male" class="form-control" placeholder="Transport Maldivian Male" wire:model="transport_maldivian_male">
                                    @error('transport_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="transport_maldivian_female">Transport Maldivian Female</label>
                                    <input type="number" id="transport_maldivian_female" class="form-control" placeholder="Transport Maldivian Female" wire:model="transport_maldivian_female">
                                    @error('transport_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="transport_foreign_male">Transport Foreign Male</label>
                                    <input type="number" id="transport_foreign_male" class="form-control" placeholder="Transport Foreign Male" wire:model="transport_foreign_male">
                                    @error('transport_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="transport_foreign_female">Transport Foreign Female</label>
                                    <input type="number" id="transport_foreign_female" class="form-control" placeholder="Transport Foreign Female" wire:model="transport_foreign_female">
                                    @error('transport_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="sports_maldivian_male">Sports Maldivian Male</label>
                                    <input type="number" id="sports_maldivian_male" class="form-control" placeholder="Sports Maldivian Male" wire:model="sports_maldivian_male">
                                    @error('sports_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="sports_maldivian_female">Sports Maldivian Female</label>
                                    <input type="number" id="sports_maldivian_female" class="form-control" placeholder="Sports Maldivian Female" wire:model="sports_maldivian_female">
                                    @error('sports_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="sports_foreign_male">Sports Foreign Male</label>
                                    <input type="number" id="sports_foreign_male" class="form-control" placeholder="Sports Foreign Male" wire:model="sports_foreign_male">
                                    @error('sports_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="sports_foreign_female">Sports Foreign Female</label>
                                    <input type="number" id="sports_foreign_female" class="form-control" placeholder="Sports Foreign Female" wire:model="sports_foreign_female">
                                    @error('sports_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="admin_maldivian_male">Admin Maldivian Male</label>
                                    <input type="number" id="admin_maldivian_male" class="form-control" placeholder="Admin Maldivian Male" wire:model="admin_maldivian_male">
                                    @error('admin_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="admin_maldivian_female">Admin Maldivian Female</label>
                                    <input type="number" id="admin_maldivian_female" class="form-control" placeholder="Admin Maldivian Female" wire:model="admin_maldivian_female">
                                    @error('admin_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="admin_foreign_male">Admin Foreign Male</label>
                                    <input type="number" id="admin_foreign_male" class="form-control" placeholder="Admin Foreign Male" wire:model="admin_foreign_male">
                                    @error('admin_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="admin_foreign_female">Admin Foreign Female</label>
                                    <input type="number" id="admin_foreign_female" class="form-control" placeholder="Admin Foreign Female" wire:model="admin_foreign_female">
                                    @error('admin_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="other_maldivian_male">Other Maldivian Male</label>
                                    <input type="number" id="other_maldivian_male" class="form-control" placeholder="Other Maldivian Male" wire:model="other_maldivian_male">
                                    @error('other_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="other_maldivian_female">Other Maldivian Female</label>
                                    <input type="number" id="other_maldivian_female" class="form-control" placeholder="Other Maldivian Female" wire:model="other_maldivian_female">
                                    @error('other_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="other_foreign_male">Other Foreign Male</label>
                                    <input type="number" id="other_foreign_male" class="form-control" placeholder="Other Foreign Male" wire:model="other_foreign_male">
                                    @error('other_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="other_foreign_female">Other Foreign Female</label>
                                    <input type="number" id="other_foreign_female" class="form-control" placeholder="Other Foreign Female" wire:model="other_foreign_female">
                                    @error('other_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <hr>

                                <h5>5. Employment by Level (Year End) </h5>
                                <small class="mb-3">Enter the number of employees</small>



                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="manager_maldivian_male">Manager Maldivian Male</label>
                                    <input type="number" id="manager_maldivian_male" class="form-control" placeholder="Manager Maldivian Male" wire:model="manager_maldivian_male">
                                    @error('manager_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="manager_maldivian_female">Manager Maldivian Female</label>
                                    <input type="number" id="manager_maldivian_female" class="form-control" placeholder="Manager Maldivian Female" wire:model="manager_maldivian_female">
                                    @error('manager_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="manager_foreign_male">Manager Foreign Male</label>
                                    <input type="number" id="manager_foreign_male" class="form-control" placeholder="Manager Foreign Male" wire:model="manager_foreign_male">
                                    @error('manager_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="manager_foreign_female">Manager Foreign Female</label>
                                    <input type="number" id="manager_foreign_female" class="form-control" placeholder="Manager Foreign Female" wire:model="manager_foreign_female">
                                    @error('manager_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="professional_maldivian_male">Professional Maldivian Male</label>
                                    <input type="number" id="professional_maldivian_male" class="form-control" placeholder="Professional Maldivian Male" wire:model="professional_maldivian_male">
                                    @error('professional_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="professional_maldivian_female">Professional Maldivian Female</label>
                                    <input type="number" id="professional_maldivian_female" class="form-control" placeholder="Professional Maldivian Female" wire:model="professional_maldivian_female">
                                    @error('professional_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="professional_foreign_male">Professional Foreign Male</label>
                                    <input type="number" id="professional_foreign_male" class="form-control" placeholder="Professional Foreign Male" wire:model="professional_foreign_male">
                                    @error('professional_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="professional_foreign_female">Professional Foreign Female</label>
                                    <input type="number" id="professional_foreign_female" class="form-control" placeholder="Professional Foreign Female" wire:model="professional_foreign_female">
                                    @error('professional_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="service_maldivian_male">Service Maldivian Male</label>
                                    <input type="number" id="service_maldivian_male" class="form-control" placeholder="Service Maldivian Male" wire:model="service_maldivian_male">
                                    @error('service_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="service_maldivian_female">Service Maldivian Female</label>
                                    <input type="number" id="service_maldivian_female" class="form-control" placeholder="Service Maldivian Female" wire:model="service_maldivian_female">
                                    @error('service_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="service_foreign_male">Service Foreign Male</label>
                                    <input type="number" id="service_foreign_male" class="form-control" placeholder="Service Foreign Male" wire:model="service_foreign_male">
                                    @error('service_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="service_foreign_female">Service Foreign Female</label>
                                    <input type="number" id="service_foreign_female" class="form-control" placeholder="Service Foreign Female" wire:model="service_foreign_female">
                                    @error('service_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="elementary_maldivian_male">Elementary Maldivian Male</label>
                                    <input type="number" id="elementary_maldivian_male" class="form-control" placeholder="Elementary Maldivian Male" wire:model="elementary_maldivian_male">
                                    @error('elementary_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="elementary_maldivian_female">Elementary Maldivian Female</label>
                                    <input type="number" id="elementary_maldivian_female" class="form-control" placeholder="Elementary Maldivian Female" wire:model="elementary_maldivian_female">
                                    @error('elementary_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="elementary_foreign_male">Elementary Foreign Male</label>
                                    <input type="number" id="elementary_foreign_male" class="form-control" placeholder="Elementary Foreign Male" wire:model="elementary_foreign_male">
                                    @error('elementary_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="elementary_foreign_female">Elementary Foreign Female</label>
                                    <input type="number" id="elementary_foreign_female" class="form-control" placeholder="Elementary Foreign Female" wire:model="elementary_foreign_female">
                                    @error('elementary_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="bylevelother_maldivian_male">Other By Level Maldivian Male</label>
                                    <input type="number" id="bylevelother_maldivian_male" class="form-control" placeholder="Other By Level Maldivian Male" wire:model="bylevelother_maldivian_male">
                                    @error('bylevelother_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="bylevelother_maldivian_female">Other By Level Maldivian Female</label>
                                    <input type="number" id="bylevelother_maldivian_female" class="form-control" placeholder="Other By Level Maldivian Female" wire:model="bylevelother_maldivian_female">
                                    @error('bylevelother_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="bylevelother_foreign_male">Other By Level Foreign Male</label>
                                    <input type="number" id="bylevelother_foreign_male" class="form-control" placeholder="Other By Level Foreign Male" wire:model="bylevelother_foreign_male">
                                    @error('bylevelother_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="bylevelother_foreign_female">Other By Level Foreign Female</label>
                                    <input type="number" id="bylevelother_foreign_female" class="form-control" placeholder="Other By Level Foreign Female" wire:model="bylevelother_foreign_female">
                                    @error('bylevelother_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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