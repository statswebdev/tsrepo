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
                    <h1 class="display-4 fw-bold">Employment Part 2</h1>
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
                                
                               

                                <h5>1. Basic Salary Scale (in USD/month) - Year End (December) </h5>
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
                                <h5>2. Employment by duration of employment - Year End (december) </h5>
                                <small class="mb-3">Enter the number of employees</small>

                               
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-2 text-center"><label>Maldivian Male</label> </div>
                                <div class="col-sm-2 text-center"><label>Maldivian Female</label> </div>
                                <div class="col-sm-2 text-center"><label>Foreign Male</label> </div>
                                <div class="col-sm-2 text-center"><label>Foreign Female</label> </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Less than 1 year</label>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_male_lessthanoneyear" class="form-control" placeholder="" wire:model="duration_maldivian_male_lessthanoneyear">
                                    @error('duration_maldivian_male_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_female_lessthanoneyear" class="form-control" placeholder="" wire:model="duration_maldivian_female_lessthanoneyear">
                                    @error('duration_maldivian_female_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_male_lessthanoneyear" class="form-control" placeholder="" wire:model="duration_foreign_male_lessthanoneyear">
                                    @error('duration_foreign_male_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_female_lessthanoneyear" class="form-control" placeholder="" wire:model="duration_foreign_female_lessthanoneyear">
                                    @error('duration_foreign_female_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">1 - 2 Years</label>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_male_one_two_years" class="form-control" placeholder="" wire:model="duration_maldivian_male_one_two_years">
                                    @error('duration_maldivian_male_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_female_one_two_years" class="form-control" placeholder="" wire:model="duration_maldivian_female_one_two_years">
                                    @error('duration_maldivian_female_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_male_one_two_years" class="form-control" placeholder="" wire:model="duration_foreign_male_one_two_years">
                                    @error('duration_foreign_male_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_female_one_two_years" class="form-control" placeholder="" wire:model="duration_foreign_female_one_two_years">
                                    @error('duration_foreign_female_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">3 - 4 Years</label>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_male_three_four_years" class="form-control" placeholder="" wire:model="duration_maldivian_male_three_four_years">
                                    @error('duration_maldivian_male_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_female_three_four_years" class="form-control" placeholder="" wire:model="duration_maldivian_female_three_four_years">
                                    @error('duration_maldivian_female_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_male_three_four_years" class="form-control" placeholder="" wire:model="duration_foreign_male_three_four_years">
                                    @error('duration_foreign_male_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_female_three_four_years" class="form-control" placeholder="" wire:model="duration_foreign_female_three_four_years">
                                    @error('duration_foreign_female_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">5 - 9 Years</label>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_male_five_nine_years" class="form-control" placeholder="" wire:model="duration_maldivian_male_five_nine_years">
                                    @error('duration_maldivian_male_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_female_five_nine_years" class="form-control" placeholder="" wire:model="duration_maldivian_female_five_nine_years">
                                    @error('duration_maldivian_female_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_male_five_nine_years" class="form-control" placeholder="" wire:model="duration_foreign_male_five_nine_years">
                                    @error('duration_foreign_male_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_female_five_nine_years" class="form-control" placeholder="" wire:model="duration_foreign_female_five_nine_years">
                                    @error('duration_foreign_female_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">10+ Years</label>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_male_ten_years" class="form-control" placeholder="" wire:model="duration_maldivian_male_ten_years">
                                    @error('duration_maldivian_male_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_maldivian_female_ten_years" class="form-control" placeholder="" wire:model="duration_maldivian_female_ten_years">
                                    @error('duration_maldivian_female_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_male_ten_years" class="form-control" placeholder="" wire:model="duration_foreign_male_ten_years">
                                    @error('duration_foreign_male_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" id="duration_foreign_female_ten_years" class="form-control" placeholder="" wire:model="duration_foreign_female_ten_years">
                                    @error('duration_foreign_female_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
    
  
                            <hr class="mt-5 mb-5">
                                <h5>3. Employment by age - Year End (december) </h5>
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
                                <h5>4. Employment by Registered atoll of the employees - Year End (december) </h5>
                                <small class="mb-3">Enter the number of employees</small>

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4 text-center"><label>Maldivian Male</label> </div>
                                    <div class="col-sm-4 text-center"><label>Maldivian Female</label> </div>
                                    
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Capital</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="capital_male" class="form-control" placeholder=" Male" wire:model="capital_male">
                                    @error('capital_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="capital_female" class="form-control" placeholder=" Female" wire:model="capital_female">
                                    @error('capital_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">HA</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="ha_male" class="form-control" placeholder=" Male" wire:model="ha_male">
                                        @error('ha_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="ha_female" class="form-control" placeholder=" Female" wire:model="ha_female">
                                        @error('ha_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">HDH</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="hdh_male" class="form-control" placeholder=" Male" wire:model="hdh_male">
                                        @error('hdh_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="hdh_female" class="form-control" placeholder=" Female" wire:model="hdh_female">
                                        @error('hdh_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">SH</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="shaviyani_male" class="form-control" placeholder=" Male" wire:model="shaviyani_male">
                                        @error('shaviyani_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="shaviyani_female" class="form-control" placeholder=" Female" wire:model="shaviyani_female">
                                        @error('shaviyani_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Noonu</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="noonu_male" class="form-control" placeholder=" Male" wire:model="noonu_male">
                                        @error('noonu_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="noonu_female" class="form-control" placeholder=" Female" wire:model="noonu_female">
                                        @error('noonu_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Raa</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="raa_male" class="form-control" placeholder=" Male" wire:model="raa_male">
                                        @error('raa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="raa_female" class="form-control" placeholder=" Female" wire:model="raa_female">
                                        @error('raa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Baa</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="baa_male" class="form-control" placeholder=" Male" wire:model="baa_male">
                                        @error('baa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="baa_female" class="form-control" placeholder=" Female" wire:model="baa_female">
                                        @error('baa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Lhaviyani</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="lhaviyani_male" class="form-control" placeholder=" Male" wire:model="lhaviyani_male">
                                        @error('lhaviyani_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="lhaviyani_female" class="form-control" placeholder=" Female" wire:model="lhaviyani_female">
                                        @error('lhaviyani_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Kaafu</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="kaafu_male" class="form-control" placeholder=" Male" wire:model="kaafu_male">
                                        @error('kaafu_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="kaafu_female" class="form-control" placeholder="Female" wire:model="kaafu_female">
                                        @error('kaafu_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Alif Alif</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="alifalif_male" class="form-control" placeholder="Male" wire:model="alifalif_male">
                                        @error('alifalif_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="alifalif_female" class="form-control" placeholder="Female" wire:model="alifalif_female">
                                        @error('alifalif_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Alif Dhaal</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="alifdhaal_male" class="form-control" placeholder="Male" wire:model="alifdhaal_male">
                                        @error('alifdhaal_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="alifdhaal_female" class="form-control" placeholder="Female" wire:model="alifdhaal_female">
                                        @error('alifdhaal_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Vaav</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="vaav_male" class="form-control" placeholder=" Male" wire:model="vaav_male">
                                        @error('vaav_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="vaav_female" class="form-control" placeholder=" Female" wire:model="vaav_female">
                                        @error('vaav_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Meem</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="meem_male" class="form-control" placeholder=" Male" wire:model="meem_male">
                                        @error('meem_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="meem_female" class="form-control" placeholder=" Female" wire:model="meem_female">
                                        @error('meem_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Faaf</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="faaf_male" class="form-control" placeholder=" Male" wire:model="faaf_male">
                                        @error('faaf_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="faaf_female" class="form-control" placeholder=" Female" wire:model="faaf_female">
                                        @error('faaf_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Dhaal</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="dhaal_male" class="form-control" placeholder=" Male" wire:model="dhaal_male">
                                        @error('dhaal_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="dhaal_female" class="form-control" placeholder=" Female" wire:model="dhaal_female">
                                        @error('dhaal_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Thaa</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="thaa_male" class="form-control" placeholder=" Male" wire:model="thaa_male">
                                        @error('thaa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="thaa_female" class="form-control" placeholder=" Female" wire:model="thaa_female">
                                        @error('thaa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Laam</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="laam_male" class="form-control" placeholder=" Male" wire:model="laam_male">
                                        @error('laam_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="laam_female" class="form-control" placeholder=" Female" wire:model="laam_female">
                                        @error('laam_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">GA</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="ga_male" class="form-control" placeholder=" Male" wire:model="ga_male">
                                        @error('ga_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="ga_female" class="form-control" placeholder=" Female" wire:model="ga_female">
                                        @error('ga_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">GDH</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="gdh_male" class="form-control" placeholder=" Male" wire:model="gdh_male">
                                        @error('gdh_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="gdh_female" class="form-control" placeholder=" Female" wire:model="gdh_female">
                                        @error('gdh_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">GN</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="gn_male" class="form-control" placeholder=" Male" wire:model="gn_male">
                                        @error('gn_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="gn_female" class="form-control" placeholder=" Female" wire:model="gn_female">
                                        @error('gn_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Seenu</label>
                                    <div class="col-sm-4">
                                        <input type="number" id="seenu_male" class="form-control" placeholder=" Male" wire:model="seenu_male">
                                        @error('seenu_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" id="seenu_female" class="form-control" placeholder=" Female" wire:model="seenu_female">
                                        @error('seenu_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>



                                <hr class="mt-5 mb-5">
                                <h5>5. Are any of the facilities within the establishment outsourced? </h5>
                                <small class="mb-3">Please indicate number of employees at the end of reporting year (December)</small>

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3 text-center"><label>Yes/No</label> </div>
                                    <div class="col-sm-3 text-center"><label>Maldivian Male</label> </div>
                                    <div class="col-sm-3 text-center"><label>Maldivian Female</label> </div>
                                    
                                </div>

                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Retail Shop Outsourced</label>
                                    <div class="col-sm-3">
                                        <select id="retailshop_outsourced" class="form-control" wire:model="retailshop_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('retailshop_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="retailshop_male" class="form-control" placeholder="Male" wire:model="retailshop_male" :disabled="$wire.retailshop_outsourced === 'no'">
                                    @error('retailshop_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="retailshop_female" class="form-control" placeholder="Female" wire:model="retailshop_female" :disabled="$wire.retailshop_outsourced === 'no'">
                                    @error('retailshop_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Diving Center Outsourced</label>
                                    <div class="col-sm-3">
                                        <select id="divingcenter_outsourced" class="form-control" wire:model="divingcenter_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('divingcenter_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="divingcenter_male" class="form-control" placeholder="Male" wire:model="divingcenter_male" :disabled="$wire.divingcenter_outsourced === 'no'">
                                    @error('divingcenter_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="divingcenter_female" class="form-control" placeholder="Female" wire:model="divingcenter_female" :disabled="$wire.divingcenter_outsourced === 'no'">
                                    @error('divingcenter_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Restaurant Outsourced</label>
                                    <div class="col-sm-3">
                                        <select id="restaurant_outsourced" class="form-control" wire:model="restaurant_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('restaurant_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="restaurant_male" class="form-control" placeholder=" Male" wire:model="restaurant_male" :disabled="$wire.restaurant_outsourced === 'no'">
                                        @error('restaurant_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="restaurant_female" class="form-control" placeholder=" Female" wire:model="restaurant_female" :disabled="$wire.restaurant_outsourced === 'no'">
                                        @error('restaurant_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Spa Outsourced</label>
                                    <div class="col-sm-3">
                                        <select id="spa_outsourced" class="form-control" wire:model="spa_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('spa_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="spa_male" class="form-control" placeholder=" Male" wire:model="spa_male" :disabled="$wire.spa_outsourced === 'no'">
                                        @error('spa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="spa_female" class="form-control" placeholder=" Female" wire:model="spa_female" :disabled="$wire.spa_outsourced === 'no'">
                                        @error('spa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Transport Outsourced</label>
                                    <div class="col-sm-3">
                                        <select id="transport_outsourced" class="form-control" wire:model="transport_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('transport_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="transport_male" class="form-control" placeholder=" Male" wire:model="transport_male" :disabled="$wire.transport_outsourced === 'no'">
                                        @error('transport_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="transport_female" class="form-control" placeholder=" Female" wire:model="transport_female" :disabled="$wire.transport_outsourced === 'no'">
                                        @error('transport_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Construction Outsourced</label>
                                    <div class="col-sm-3">
                                        <select id="construction_outsourced" class="form-control" wire:model="construction_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('construction_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="construction_male" class="form-control" placeholder=" Male" wire:model="construction_male" :disabled="$wire.construction_outsourced === 'no'">
                                    @error('construction_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="construction_female" class="form-control" placeholder=" Female" wire:model="construction_female" :disabled="$wire.construction_outsourced === 'no'">
                                    @error('construction_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                
                                <h5 class="mt-5">Other Outsourced Services</h5>
                                <small class="mb-3">Please indicate number of employees at the end of reporting year (December)</small>

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-2 text-center"><label>Yes/No</label> </div>
                                    <div class="col-sm-2 text-center"><label>Specify Outsourced Service</label> </div>
                                    <div class="col-sm-2 text-center"><label>Maldivian Male</label> </div>
                                    <div class="col-sm-2 text-center"><label>Maldivian Female</label> </div>
                                    
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Specify</label>
                                    <div class="col-sm-2">
                                        <select id="otherone_outsourced" class="form-control" wire:model="otherone_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('otherone_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" id="otherone_name" class="form-control" placeholder="Name" wire:model="otherone_name" :disabled="$wire.otherone_outsourced === 'no'">
                                        @error('otherone_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="otherone_male" class="form-control" placeholder=" Male" wire:model="otherone_male" :disabled="$wire.otherone_outsourced === 'no'">
                                    @error('otherone_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="otherone_female" class="form-control" placeholder="Female" wire:model="otherone_female" :disabled="$wire.otherone_outsourced === 'no'">
                                    @error('otherone_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Specify</label>
                                    <div class="col-sm-2">
                                        <select id="othertwo_outsourced" class="form-control" wire:model="othertwo_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('othertwo_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" id="othertwo_name" class="form-control" placeholder="Name" wire:model="othertwo_name" :disabled="$wire.othertwo_outsourced === 'no'">
                                    @error('othertwo_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="othertwo_male" class="form-control" placeholder="Male" wire:model="othertwo_male" :disabled="$wire.othertwo_outsourced === 'no'">
                                    @error('othertwo_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="othertwo_female" class="form-control" placeholder="Female" wire:model="othertwo_female" :disabled="$wire.othertwo_outsourced === 'no'">
                                    @error('othertwo_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">Specify</label>
                                    <div class="col-sm-2">
                                        <select id="otherthree_outsourced" class="form-control" wire:model="otherthree_outsourced">
                                            <option value="">Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        @error('otherthree_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" id="otherthree_name" class="form-control" placeholder="Name" wire:model="otherthree_name" :disabled="$wire.otherthree_outsourced === 'no'">
                                    @error('otherthree_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="otherthree_male" class="form-control" placeholder="Male" wire:model="otherthree_male" :disabled="$wire.otherthree_outsourced === 'no'">
                                    @error('otherthree_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" id="otherthree_female" class="form-control" placeholder="Female" wire:model="otherthree_female" :disabled="$wire.otherthree_outsourced === 'no'">
                                    @error('otherthree_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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