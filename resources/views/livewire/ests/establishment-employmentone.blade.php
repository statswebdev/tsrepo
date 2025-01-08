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
                                <small class="mb-3">Enter the count of employees at the end of the year. Including Resident, Permanent & Commuting Employees / Casual workers  (december)</small>


                             
        
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



                                
                                <hr class="mt-5 mb-5">

                                <h5>2. Employment (Commuting/Casual - Year End) </h5>
                                <small class="mb-3">Enter the count of commuting employees / casual workers  (december)</small>

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




                                

                        <hr class="mt-5 mb-5">

                                <h5>3. Employment (Permanent Employees - Year End) </h5>
                                <small class="mb-3">Enter the count of permanent employees only  (december)</small>


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


                                

                        <hr class="mt-5 mb-5">

                                <h5>4. Employment by Type of Occupation (Year End) </h5>
                                <small class="mb-3">Enter the count of employees by type of occupation  (december)</small>


                                
                                <div class="row mb-4">        
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-2 text-center">
                                        <label>Maldivian Male</label> 
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <label>Maldivian Female</label> 
                                    </div>
                            <div class="col-sm-2 text-center">
                                        <label>Foreign Male</label> 
                                    </div><div class="col-sm-2 text-center">
                                        <label>Foreign Female</label> 
                                    </div></div>

                        <div class="form-group row mb-4 ">
                            <label class="label col-sm-4 text-end">Accommodation Services
                            <br>
                            <small>Include all employees who works in the area of accomodation related services, including housekeeping, Concierge, Butler, Room cleaners, Janitors, and alike</small>    
                            </label>         
                                <div class="col-sm-2">
                                    <input type="number" id="accomo_maldivian_male" class="form-control" placeholder="number of employees" wire:model="accomo_maldivian_male">
                                    @error('accomo_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                <div class="col-sm-2 js-form-message">
                                    <input type="number" id="accomo_maldivian_female" class="form-control" placeholder="number of employees" wire:model="accomo_maldivian_female">
                                    @error('accomo_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            
                                <div class="col-sm-2">
                                    <input type="number" id="accomo_foreign_male" class="form-control" placeholder="number of employees" wire:model="accomo_foreign_male">
                                    @error('accomo_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                <div class="col-sm-2">
                                    <input type="number" id="accomo_foreign_female" class="form-control" placeholder="number of employees" wire:model="accomo_foreign_female">
                                    @error('accomo_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>


                            <div class="form-group row mb-4 ">
                                <label class="label col-sm-4 text-end">Food & Beverage Services
                                <br>
                                <small>Include all employees who works in the area of Food preparations and helping the food preparation including Chefs, cooks, Stewards, annd alike</small>    
                                </label>         
                                    <div class="col-sm-2">
                                        <input type="number" id="food_maldivian_male" class="form-control" placeholder="number of employees" wire:model="food_maldivian_male">
                                    @error('food_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                    <div class="col-sm-2 js-form-message">
                                        <input type="number" id="food_maldivian_female" class="form-control" placeholder="number of employees" wire:model="food_maldivian_female">
                                        @error('food_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                
                                    <div class="col-sm-2">
                                        <input type="number" id="food_foreign_male" class="form-control" placeholder="number of employees" wire:model="food_foreign_male">
                                    @error('food_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="food_foreign_female" class="form-control" placeholder="number of employees" wire:model="food_foreign_female">
                                    @error('food_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4 ">
                                    <label class="label col-sm-4 text-end">Passenger Transport Services
                                    <br>
                                    <small>Include all employees who works in the area of transport services including Launch/Buggy/Ferry drivers and crews</small>    
                                    </label>         
                                        <div class="col-sm-2">
                                            <input type="number" id="transport_maldivian_male" class="form-control" placeholder="number of employees" wire:model="transport_maldivian_male">
                                    @error('transport_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                        <div class="col-sm-2 js-form-message">
                                            <input type="number" id="transport_maldivian_female" class="form-control" placeholder="number of employees" wire:model="transport_maldivian_female">
                                            @error('transport_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                    
                                        <div class="col-sm-2">
                                            <input type="number" id="transport_foreign_male" class="form-control" placeholder="number of employees" wire:model="transport_foreign_male">
                                    @error('transport_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                        <div class="col-sm-2">
                                            <input type="number" id="transport_foreign_female" class="form-control" placeholder="number of employees" wire:model="transport_foreign_female">
                                    @error('transport_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4 ">
                                        <label class="label col-sm-4 text-end">Sports, Cultural, recreational etc
                                        <br>
                                        <small>Include all employees who works in the area of sports and recreational activities including sports and fitness instructors, dive instructors/masters, water sport instructors alike</small>    
                                        </label>         
                                            <div class="col-sm-2">
                                                <input type="number" id="sports_maldivian_male" class="form-control" placeholder="number of employees" wire:model="sports_maldivian_male">
                                    @error('sports_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                            <div class="col-sm-2 js-form-message">
                                                <input type="number" id="sports_maldivian_female" class="form-control" placeholder="number of employees" wire:model="sports_maldivian_female">
                                    @error('sports_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                        
                                            <div class="col-sm-2">
                                                <input type="number" id="sports_foreign_male" class="form-control" placeholder="number of employees" wire:model="sports_foreign_male">
                                                @error('sports_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                            <div class="col-sm-2">
                                                <input type="number" id="sports_foreign_female" class="form-control" placeholder="number of employees" wire:model="sports_foreign_female">
                                                @error('sports_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4 ">
                                            <label class="label col-sm-4 text-end">Administrative Services
                                            <br>
                                            <small>Include all employees who works in the management area including reservations, front desks, guest relations, HR, Finance, Sales and Marketing and alike</small>    
                                            </label>         
                                                <div class="col-sm-2">
                                                    <input type="number" id="admin_maldivian_male" class="form-control" placeholder="number of employees" wire:model="admin_maldivian_male">
                                    @error('admin_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                <div class="col-sm-2 js-form-message">
                                                    <input type="number" id="admin_maldivian_female" class="form-control" placeholder="number of employees" wire:model="admin_maldivian_female">
                                    @error('admin_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                            
                                                <div class="col-sm-2">
                                                    <input type="number" id="admin_foreign_male" class="form-control" placeholder="number of employees" wire:model="admin_foreign_male">
                                    @error('admin_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                <div class="col-sm-2">
                                                    <input type="number" id="admin_foreign_female" class="form-control" placeholder="number of employees" wire:model="admin_foreign_female">
                                    @error('admin_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4 ">
                                                <label class="label col-sm-4 text-end">Other Services
                                                <br>
                                                <small>Include all that does not all any of the above categories including maintenance officers, security, hair dressers, child care, spa, engineers and alike</small>    
                                                </label>         
                                                    <div class="col-sm-2">
                                                        <input type="number" id="other_maldivian_male" class="form-control" placeholder="number of employees" wire:model="other_maldivian_male">
                                    @error('other_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                        </div>
                                                    <div class="col-sm-2 js-form-message">
                                                        <input type="number" id="other_maldivian_female" class="form-control" placeholder="number of employees" wire:model="other_maldivian_female">
                                    @error('other_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                
                                                    <div class="col-sm-2">
                                                        <input type="number" id="other_foreign_male" class="form-control" placeholder="number of employees" wire:model="other_foreign_male">
                                    @error('other_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                        </div>
                                                    <div class="col-sm-2">
                                                        <input type="number" id="other_foreign_female" class="form-control" placeholder="number of employees" wire:model="other_foreign_female">
                                    @error('other_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>

                                                <hr class="mt-5 mb-5">
    

                                <h5>5. Employment by Level (Year End) </h5>
                                <small class="mb-3">Enter the count of employees by employment by level (december)</small>

                                <div class="row mb-4">        
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-2 text-center">
                                        <label>Maldivian Male</label> 
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <label>Maldivian Female</label> 
                                    </div>
                            <div class="col-sm-2 text-center">
                                        <label>Foreign Male</label> 
                                    </div><div class="col-sm-2 text-center">
                                        <label>Foreign Female</label> 
                                    </div></div>


                                <div class="form-group row mb-4 ">
                                    <label class="label col-sm-4 text-end">Managerial
                                    <br>
                                    <small>To include all employees who works at managerial/supervisory role in all areas including GMs, CEO, Managers </small>    
                                    </label>         
                                        <div class="col-sm-2">
                                            <input type="number" id="manager_maldivian_male" class="form-control" placeholder="number of employees" wire:model="manager_maldivian_male">
                                    @error('manager_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-sm-2 js-form-message">
                                            <input type="number" id="manager_maldivian_female" class="form-control" placeholder="number of employees" wire:model="manager_maldivian_female">
                                    @error('manager_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" id="manager_foreign_male" class="form-control" placeholder="number of employees" wire:model="manager_foreign_male">
                                    @error('manager_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" id="manager_foreign_female" class="form-control" placeholder="number of employees" wire:model="manager_foreign_female">
                                    @error('manager_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4 ">
                                        <label class="label col-sm-4 text-end">Professionals
                                        <br>
                                        <small>To include all service workers who are  professionals including Accountants, Chefs, Doctors, Engineers, Dive Masters</small>    
                                        </label>         
                                            <div class="col-sm-2">
                                                <input type="number" id="professional_maldivian_male" class="form-control" placeholder="Pnumber of employees" wire:model="professional_maldivian_male">
                                    @error('professional_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-sm-2 js-form-message">
                                                <input type="number" id="professional_maldivian_female" class="form-control" placeholder="number of employees" wire:model="professional_maldivian_female">
                                    @error('professional_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" id="professional_foreign_male" class="form-control" placeholder="number of employees" wire:model="professional_foreign_male">
                                    @error('professional_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" id="professional_foreign_female" class="form-control" placeholder="number of employees" wire:model="professional_foreign_female">
                                                @error('professional_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4 ">
                                            <label class="label col-sm-4 text-end">Service workers
                                            <br>
                                            <small>To include all service workers including technicians, housekeepers, Butlers, stewards, drivers front desk officers,reservation assistants, Dive instructors</small>    
                                            </label>         
                                                <div class="col-sm-2">
                                                    <input type="number" id="service_maldivian_male" class="form-control" placeholder="number of employees" wire:model="service_maldivian_male">
                                    @error('service_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                                <div class="col-sm-2 js-form-message">
                                                    <input type="number" id="service_maldivian_female" class="form-control" placeholder="number of employees" wire:model="service_maldivian_female">
                                    @error('service_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="number" id="service_foreign_male" class="form-control" placeholder="number of employees" wire:model="service_foreign_male">
                                    @error('service_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="number" id="service_foreign_female" class="form-control" placeholder="number of employees" wire:model="service_foreign_female">
                                    @error('service_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4 ">
                                                <label class="label col-sm-4 text-end">Elementary occupations
                                                <br>
                                                <small>Elementary occupations consist of simple and routinetasks which mainly require the use of hand-held toold and often some physical effort. Include laborers, helpers, cleaners, room boys</small>    
                                                </label>         
                                                    <div class="col-sm-2">
                                                        <input type="number" id="elementary_maldivian_male" class="form-control" placeholder="number of employees" wire:model="elementary_maldivian_male">
                                    @error('elementary_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                    <div class="col-sm-2 js-form-message">
                                                        <input type="number" id="elementary_maldivian_female" class="form-control" placeholder="number of employees" wire:model="elementary_maldivian_female">
                                    @error('elementary_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="number" id="elementary_foreign_male" class="form-control" placeholder="number of employees" wire:model="elementary_foreign_male">
                                    @error('elementary_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="number" id="elementary_foreign_female" class="form-control" placeholder="number of employees" wire:model="elementary_foreign_female">
                                    @error('elementary_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4 ">
                                                    <label class="label col-sm-4 text-end">Other Occupations
                                                    <br>
                                                    <small>To include all the other workers who does not fit to any above category</small>    
                                                    </label>         
                                                        <div class="col-sm-2">
                                                            <input type="number" id="bylevelother_maldivian_male" class="form-control" placeholder="number of employees" wire:model="bylevelother_maldivian_male">
                                    @error('bylevelother_maldivian_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                        </div>
                                                        <div class="col-sm-2 js-form-message">
                                                            <input type="number" id="bylevelother_maldivian_female" class="form-control" placeholder="number of employees" wire:model="bylevelother_maldivian_female">
                                    @error('bylevelother_maldivian_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input type="number" id="bylevelother_foreign_male" class="form-control" placeholder="number of employees" wire:model="bylevelother_foreign_male">
                                    @error('bylevelother_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input type="number" id="bylevelother_foreign_female" class="form-control" placeholder="number of employees" wire:model="bylevelother_foreign_female">
                                    @error('bylevelother_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                                        </div>
                                                    </div>

                                                    <hr class="mt-5 mb-5">
                                    


                                
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