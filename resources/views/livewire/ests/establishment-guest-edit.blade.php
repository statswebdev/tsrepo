<div>
    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                @if (session()->has('updated'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                            </path>
                        </svg>
                        <div>{{session('updated')}}</div>
                    </div>
                    @endif
                <!-- row -->
                <div class="col-md-6">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold">Employment</h1>
                </div>
            </div>    
        </div>
    </section>

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

                                


                                <h5>2. Employment (Permanent Employees - Year End) </h5>
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
                        <h5>3. Basic Salary Scale (in USD/month) - Year End (December) </h5>
                                <small class="mb-3">Enter the number of employees</small>

                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                            
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3 text-center">Maldivian</div>
                                <div class="col-sm-3 text-center">
                                    <label>Foreign</label> 
                                </div>

                                <div class="col-sm-3"></div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Less than 100</label>
                            <div class="col-sm-3">
                                <input type="number" id="hundred_maldivian" class="form-control" placeholder="number of employees" wire:model="hundred_maldivian">
                                    @error('hundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="hundred_foreign" class="form-control" placeholder="number of employees" wire:model="hundred_foreign">
                                    @error('hundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">100 - 299</label>
                            <div class="col-sm-3">
                                <input type="number" id="threehundred_maldivian" class="form-control" placeholder="number of employees" wire:model="threehundred_maldivian">
                                    @error('threehundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="threehundred_foreign" class="form-control" placeholder="number of employees" wire:model="threehundred_foreign">
                                    @error('threehundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">300 - 499</label>
                            <div class="col-sm-3">
                                <input type="number" id="fivehundred_maldivian" class="form-control" placeholder="number of employees" wire:model="fivehundred_maldivian">
                                    @error('fivehundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="fivehundred_foreign" class="form-control" placeholder="number of employees" wire:model="fivehundred_foreign">
                                    @error('fivehundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">500 - 699</label>
                            <div class="col-sm-3">
                                <input type="number" id="sevenhundred_maldivian" class="form-control" placeholder="number of employees" wire:model="sevenhundred_maldivian">
                                    @error('sevenhundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="sevenhundred_foreign" class="form-control" placeholder="number of employees" wire:model="sevenhundred_foreign">
                                    @error('sevenhundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">700 - 999</label>
                            <div class="col-sm-3">
                                <input type="number" id="ninehundred_maldivian" class="form-control" placeholder="number of employees" wire:model="ninehundred_maldivian">
                                    @error('ninehundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="ninehundred_foreign" class="form-control" placeholder="number of employees" wire:model="ninehundred_foreign">
                                    @error('ninehundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">1000 - 2999</label>
                            <div class="col-sm-3">
                                <input type="number" id="thausand_maldivian" class="form-control" placeholder="number of employees" wire:model="thausand_maldivian">
                                    @error('thausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="thausand_foreign" class="form-control" placeholder="number of employees" wire:model="thausand_foreign">
                                    @error('thausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">3000 - 4999</label>
                            <div class="col-sm-3">
                                <input type="number" id="threethausand_maldivian" class="form-control" placeholder="number of employees" wire:model="threethausand_maldivian">
                                    @error('threethausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="threethausand_foreign" class="form-control" placeholder="number of employees" wire:model="threethausand_foreign">
                                    @error('threethausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">5000 - 6999</label>
                            <div class="col-sm-3">
                                <input type="number" id="fivethausand_maldivian" class="form-control" placeholder="number of employees" wire:model="fivethausand_maldivian">
                                    @error('fivethausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="fivethausand_foreign" class="form-control" placeholder="number of employees" wire:model="fivethausand_foreign">
                                    @error('fivethausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">7000 - 9999</label>
                            <div class="col-sm-3">
                                <input type="number" id="seventhausand_maldivian" class="form-control" placeholder="number of employees" wire:model="seventhausand_maldivian">
                                    @error('seventhausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="seventhausand_foreign" class="form-control" placeholder="number of employees" wire:model="seventhausand_foreign">
                                    @error('seventhausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">10,000+</label>
                            <div class="col-sm-3">
                                <input type="number" id="tenthausand_maldivian" class="form-control" placeholder="number of employees" wire:model="tenthausand_maldivian">
                                    @error('tenthausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="tenthausand_foreign" class="form-control" placeholder="number of employees" wire:model="tenthausand_foreign">
                                    @error('tenthausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <hr class="mt-5 mb-5">
                        <h5>4. Employment by age - Year End (december) </h5>
                        <small class="mb-3">Enter the number of employees</small>

                        <div class="row mb-2">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center"><label>Maldivian Male</label> </div>
                            <div class="col-sm-2 text-center"><label>Maldivian Female</label> </div>
                            <div class="col-sm-2 text-center"><label>Foreign Male</label> </div>
                            <div class="col-sm-2 text-center"><label>Foreign Female</label> </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">Less than 18</label>
                            <div class="col-sm-2">
                                <input type="number" id="age_eighteen_mdv_male" class="form-control" placeholder="" wire:model="age_eighteen_mdv_male">
                            @error('age_eighteen_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_eighteen_mdv_female" class="form-control" placeholder="" wire:model="age_eighteen_mdv_female">
                            @error('age_eighteen_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_eighteen_foreign_male" class="form-control" placeholder="" wire:model="age_eighteen_foreign_male">
                            @error('age_eighteen_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_eighteen_foreign_female" class="form-control" placeholder="" wire:model="age_eighteen_foreign_female">
                            @error('age_eighteen_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">19 - 24</label>
                            <div class="col-sm-2">
                                <input type="number" id="age_twenty_mdv_male" class="form-control" placeholder="" wire:model="age_twenty_mdv_male">
                            @error('age_twenty_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_twenty_mdv_female" class="form-control" placeholder="" wire:model="age_twenty_mdv_female">
                            @error('age_twenty_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_twenty_foreign_male" class="form-control" placeholder="" wire:model="age_twenty_foreign_male">
                            @error('age_twenty_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_twenty_foreign_female" class="form-control" placeholder="" wire:model="age_twenty_foreign_female">
                            @error('age_twenty_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">25 - 34</label>
                            <div class="col-sm-2">
                                <input type="number" id="age_thirty_mdv_male" class="form-control" placeholder="" wire:model="age_thirty_mdv_male">
                            @error('age_thirty_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_thirty_mdv_female" class="form-control" placeholder="" wire:model="age_thirty_mdv_female">
                            @error('age_thirty_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_thirty_foreign_male" class="form-control" placeholder="" wire:model="age_thirty_foreign_male">
                            @error('age_thirty_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_thirty_foreign_female" class="form-control" placeholder="" wire:model="age_thirty_foreign_female">
                            @error('age_thirty_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">35 - 64</label>
                            <div class="col-sm-2">
                                <input type="number" id="age_sixty_mdv_male" class="form-control" placeholder="" wire:model="age_sixty_mdv_male">
                            @error('age_sixty_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_sixty_mdv_female" class="form-control" placeholder="" wire:model="age_sixty_mdv_female">
                            @error('age_sixty_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_sixty_foreign_male" class="form-control" placeholder="" wire:model="age_sixty_foreign_male">
                            @error('age_sixty_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_sixty_foreign_female" class="form-control" placeholder="" wire:model="age_sixty_foreign_female">
                            @error('age_sixty_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">65+</label>
                            <div class="col-sm-2">
                                <input type="number" id="age_old_mdv_male" class="form-control" placeholder="" wire:model="age_old_mdv_male">
                            @error('age_old_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_old_mdv_female" class="form-control" placeholder="" wire:model="age_old_mdv_female">
                            @error('age_old_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_old_foreign_male" class="form-control" placeholder="" wire:model="age_old_foreign_male">
                            @error('age_old_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="age_old_foreign_female" class="form-control" placeholder="" wire:model="age_old_foreign_female">
                            @error('age_old_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>


                        <hr class="mt-5 mb-5">

    

                                
                                <div class="mb-3 col-12 col-md-12">
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