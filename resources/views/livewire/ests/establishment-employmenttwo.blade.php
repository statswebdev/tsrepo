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
                                
                               

                                <h5>1. Basic Salary Scale (in USD/month) - Year End (December) </h5>
                                <small class="mb-3">Enter the number of employees</small>


                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="hundred_maldivian">100 Maldivian</label>
                                    <input type="number" id="hundred_maldivian" class="form-control" placeholder="number of employees" wire:model="hundred_maldivian">
                                    @error('hundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="hundred_foreign">100 Foreign</label>
                                    <input type="number" id="hundred_foreign" class="form-control" placeholder="number of employees" wire:model="hundred_foreign">
                                    @error('hundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="threehundred_maldivian">300 Maldivian</label>
                                    <input type="number" id="threehundred_maldivian" class="form-control" placeholder="number of employees" wire:model="threehundred_maldivian">
                                    @error('threehundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="threehundred_foreign">300 Foreign</label>
                                    <input type="number" id="threehundred_foreign" class="form-control" placeholder="number of employees" wire:model="threehundred_foreign">
                                    @error('threehundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fivehundred_maldivian">500 Maldivian</label>
                                    <input type="number" id="fivehundred_maldivian" class="form-control" placeholder="number of employees" wire:model="fivehundred_maldivian">
                                    @error('fivehundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fivehundred_foreign">500 Foreign</label>
                                    <input type="number" id="fivehundred_foreign" class="form-control" placeholder="number of employees" wire:model="fivehundred_foreign">
                                    @error('fivehundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="sevenhundred_maldivian">700 Maldivian</label>
                                    <input type="number" id="sevenhundred_maldivian" class="form-control" placeholder="number of employees" wire:model="sevenhundred_maldivian">
                                    @error('sevenhundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="sevenhundred_foreign">700 Foreign</label>
                                    <input type="number" id="sevenhundred_foreign" class="form-control" placeholder="number of employees" wire:model="sevenhundred_foreign">
                                    @error('sevenhundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="ninehundred_maldivian">900 Maldivian</label>
                                    <input type="number" id="ninehundred_maldivian" class="form-control" placeholder="number of employees" wire:model="ninehundred_maldivian">
                                    @error('ninehundred_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="ninehundred_foreign">900 Foreign</label>
                                    <input type="number" id="ninehundred_foreign" class="form-control" placeholder="number of employees" wire:model="ninehundred_foreign">
                                    @error('ninehundred_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="thausand_maldivian">1000 Maldivian</label>
                                    <input type="number" id="thausand_maldivian" class="form-control" placeholder="number of employees" wire:model="thausand_maldivian">
                                    @error('thausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="thausand_foreign">1000 Foreign</label>
                                    <input type="number" id="thausand_foreign" class="form-control" placeholder="number of employees" wire:model="thausand_foreign">
                                    @error('thausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="threethausand_maldivian">3000 Maldivian</label>
                                    <input type="number" id="threethausand_maldivian" class="form-control" placeholder="number of employees" wire:model="threethausand_maldivian">
                                    @error('threethausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="threethausand_foreign">3000 Foreign</label>
                                    <input type="number" id="threethausand_foreign" class="form-control" placeholder="number of employees" wire:model="threethausand_foreign">
                                    @error('threethausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fivethausand_maldivian">5000 Maldivian</label>
                                    <input type="number" id="fivethausand_maldivian" class="form-control" placeholder="number of employees" wire:model="fivethausand_maldivian">
                                    @error('fivethausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="fivethausand_foreign">5000 Foreign</label>
                                    <input type="number" id="fivethausand_foreign" class="form-control" placeholder="number of employees" wire:model="fivethausand_foreign">
                                    @error('fivethausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seventhausand_maldivian">7000 Maldivian</label>
                                    <input type="number" id="seventhausand_maldivian" class="form-control" placeholder="number of employees" wire:model="seventhausand_maldivian">
                                    @error('seventhausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seventhausand_foreign">7000 Foreign</label>
                                    <input type="number" id="seventhausand_foreign" class="form-control" placeholder="number of employees" wire:model="seventhausand_foreign">
                                    @error('seventhausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="tenthausand_maldivian">10000 Maldivian</label>
                                    <input type="number" id="tenthausand_maldivian" class="form-control" placeholder="number of employees" wire:model="tenthausand_maldivian">
                                    @error('tenthausand_maldivian')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="tenthausand_foreign">10000 Foreign</label>
                                    <input type="number" id="tenthausand_foreign" class="form-control" placeholder="number of employees" wire:model="tenthausand_foreign">
                                    @error('tenthausand_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr>
                                <h5>2. Employment by duration of employment - Year End (december) </h5>
                                <small class="mb-3">Enter the number of employees</small>


                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_male_lessthanoneyear">Duration Maldivian Male Less Than One Year</label>
                                    <input type="number" id="duration_maldivian_male_lessthanoneyear" class="form-control" placeholder="Duration Maldivian Male Less Than One Year" wire:model="duration_maldivian_male_lessthanoneyear">
                                    @error('duration_maldivian_male_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_female_lessthanoneyear">Duration Maldivian Female Less Than One Year</label>
                                    <input type="number" id="duration_maldivian_female_lessthanoneyear" class="form-control" placeholder="Duration Maldivian Female Less Than One Year" wire:model="duration_maldivian_female_lessthanoneyear">
                                    @error('duration_maldivian_female_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_male_lessthanoneyear">Duration Foreign Male Less Than One Year</label>
                                    <input type="number" id="duration_foreign_male_lessthanoneyear" class="form-control" placeholder="Duration Foreign Male Less Than One Year" wire:model="duration_foreign_male_lessthanoneyear">
                                    @error('duration_foreign_male_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_female_lessthanoneyear">Duration Foreign Female Less Than One Year</label>
                                    <input type="number" id="duration_foreign_female_lessthanoneyear" class="form-control" placeholder="Duration Foreign Female Less Than One Year" wire:model="duration_foreign_female_lessthanoneyear">
                                    @error('duration_foreign_female_lessthanoneyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_male_one_two_years">Duration Maldivian Male One to Two Years</label>
                                    <input type="number" id="duration_maldivian_male_one_two_years" class="form-control" placeholder="Duration Maldivian Male One to Two Years" wire:model="duration_maldivian_male_one_two_years">
                                    @error('duration_maldivian_male_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_female_one_two_years">Duration Maldivian Female One to Two Years</label>
                                    <input type="number" id="duration_maldivian_female_one_two_years" class="form-control" placeholder="Duration Maldivian Female One to Two Years" wire:model="duration_maldivian_female_one_two_years">
                                    @error('duration_maldivian_female_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_male_one_two_years">Duration Foreign Male One to Two Years</label>
                                    <input type="number" id="duration_foreign_male_one_two_years" class="form-control" placeholder="Duration Foreign Male One to Two Years" wire:model="duration_foreign_male_one_two_years">
                                    @error('duration_foreign_male_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_female_one_two_years">Duration Foreign Female One to Two Years</label>
                                    <input type="number" id="duration_foreign_female_one_two_years" class="form-control" placeholder="Duration Foreign Female One to Two Years" wire:model="duration_foreign_female_one_two_years">
                                    @error('duration_foreign_female_one_two_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_male_three_four_years">Duration Maldivian Male Three to Four Years</label>
                                    <input type="number" id="duration_maldivian_male_three_four_years" class="form-control" placeholder="Duration Maldivian Male Three to Four Years" wire:model="duration_maldivian_male_three_four_years">
                                    @error('duration_maldivian_male_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_female_three_four_years">Duration Maldivian Female Three to Four Years</label>
                                    <input type="number" id="duration_maldivian_female_three_four_years" class="form-control" placeholder="Duration Maldivian Female Three to Four Years" wire:model="duration_maldivian_female_three_four_years">
                                    @error('duration_maldivian_female_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_male_three_four_years">Duration Foreign Male Three to Four Years</label>
                                    <input type="number" id="duration_foreign_male_three_four_years" class="form-control" placeholder="Duration Foreign Male Three to Four Years" wire:model="duration_foreign_male_three_four_years">
                                    @error('duration_foreign_male_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_female_three_four_years">Duration Foreign Female Three to Four Years</label>
                                    <input type="number" id="duration_foreign_female_three_four_years" class="form-control" placeholder="Duration Foreign Female Three to Four Years" wire:model="duration_foreign_female_three_four_years">
                                    @error('duration_foreign_female_three_four_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_male_five_nine_years">Duration Maldivian Male Five to Nine Years</label>
                                    <input type="number" id="duration_maldivian_male_five_nine_years" class="form-control" placeholder="Duration Maldivian Male Five to Nine Years" wire:model="duration_maldivian_male_five_nine_years">
                                    @error('duration_maldivian_male_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_female_five_nine_years">Duration Maldivian Female Five to Nine Years</label>
                                    <input type="number" id="duration_maldivian_female_five_nine_years" class="form-control" placeholder="Duration Maldivian Female Five to Nine Years" wire:model="duration_maldivian_female_five_nine_years">
                                    @error('duration_maldivian_female_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_male_five_nine_years">Duration Foreign Male Five to Nine Years</label>
                                    <input type="number" id="duration_foreign_male_five_nine_years" class="form-control" placeholder="Duration Foreign Male Five to Nine Years" wire:model="duration_foreign_male_five_nine_years">
                                    @error('duration_foreign_male_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_female_five_nine_years">Duration Foreign Female Five to Nine Years</label>
                                    <input type="number" id="duration_foreign_female_five_nine_years" class="form-control" placeholder="Duration Foreign Female Five to Nine Years" wire:model="duration_foreign_female_five_nine_years">
                                    @error('duration_foreign_female_five_nine_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_male_ten_years">Duration Maldivian Male Ten Years</label>
                                    <input type="number" id="duration_maldivian_male_ten_years" class="form-control" placeholder="Duration Maldivian Male Ten Years" wire:model="duration_maldivian_male_ten_years">
                                    @error('duration_maldivian_male_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_maldivian_female_ten_years">Duration Maldivian Female Ten Years</label>
                                    <input type="number" id="duration_maldivian_female_ten_years" class="form-control" placeholder="Duration Maldivian Female Ten Years" wire:model="duration_maldivian_female_ten_years">
                                    @error('duration_maldivian_female_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_male_ten_years">Duration Foreign Male Ten Years</label>
                                    <input type="number" id="duration_foreign_male_ten_years" class="form-control" placeholder="Duration Foreign Male Ten Years" wire:model="duration_foreign_male_ten_years">
                                    @error('duration_foreign_male_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="duration_foreign_female_ten_years">Duration Foreign Female Ten Years</label>
                                    <input type="number" id="duration_foreign_female_ten_years" class="form-control" placeholder="Duration Foreign Female Ten Years" wire:model="duration_foreign_female_ten_years">
                                    @error('duration_foreign_female_ten_years')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <hr>
                                <h5>3. Employment by age - Year End (december) </h5>
                                <small class="mb-3">Enter the number of employees</small>


                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_eighteen_mdv_male">Age 18 Maldivian Male</label>
                                    <input type="number" id="age_eighteen_mdv_male" class="form-control" placeholder="Age 18 Maldivian Male" wire:model="age_eighteen_mdv_male">
                                    @error('age_eighteen_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_eighteen_mdv_female">Age 18 Maldivian Female</label>
                                    <input type="number" id="age_eighteen_mdv_female" class="form-control" placeholder="Age 18 Maldivian Female" wire:model="age_eighteen_mdv_female">
                                    @error('age_eighteen_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_eighteen_foreign_male">Age 18 Foreign Male</label>
                                    <input type="number" id="age_eighteen_foreign_male" class="form-control" placeholder="Age 18 Foreign Male" wire:model="age_eighteen_foreign_male">
                                    @error('age_eighteen_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_eighteen_foreign_female">Age 18 Foreign Female</label>
                                    <input type="number" id="age_eighteen_foreign_female" class="form-control" placeholder="Age 18 Foreign Female" wire:model="age_eighteen_foreign_female">
                                    @error('age_eighteen_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_twenty_mdv_male">Age 20 Maldivian Male</label>
                                    <input type="number" id="age_twenty_mdv_male" class="form-control" placeholder="Age 20 Maldivian Male" wire:model="age_twenty_mdv_male">
                                    @error('age_twenty_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_twenty_mdv_female">Age 20 Maldivian Female</label>
                                    <input type="number" id="age_twenty_mdv_female" class="form-control" placeholder="Age 20 Maldivian Female" wire:model="age_twenty_mdv_female">
                                    @error('age_twenty_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_twenty_foreign_male">Age 20 Foreign Male</label>
                                    <input type="number" id="age_twenty_foreign_male" class="form-control" placeholder="Age 20 Foreign Male" wire:model="age_twenty_foreign_male">
                                    @error('age_twenty_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_twenty_foreign_female">Age 20 Foreign Female</label>
                                    <input type="number" id="age_twenty_foreign_female" class="form-control" placeholder="Age 20 Foreign Female" wire:model="age_twenty_foreign_female">
                                    @error('age_twenty_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_thirty_mdv_male">Age 30 Maldivian Male</label>
                                    <input type="number" id="age_thirty_mdv_male" class="form-control" placeholder="Age 30 Maldivian Male" wire:model="age_thirty_mdv_male">
                                    @error('age_thirty_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_thirty_mdv_female">Age 30 Maldivian Female</label>
                                    <input type="number" id="age_thirty_mdv_female" class="form-control" placeholder="Age 30 Maldivian Female" wire:model="age_thirty_mdv_female">
                                    @error('age_thirty_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_thirty_foreign_male">Age 30 Foreign Male</label>
                                    <input type="number" id="age_thirty_foreign_male" class="form-control" placeholder="Age 30 Foreign Male" wire:model="age_thirty_foreign_male">
                                    @error('age_thirty_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_thirty_foreign_female">Age 30 Foreign Female</label>
                                    <input type="number" id="age_thirty_foreign_female" class="form-control" placeholder="Age 30 Foreign Female" wire:model="age_thirty_foreign_female">
                                    @error('age_thirty_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_sixty_mdv_male">Age 60 Maldivian Male</label>
                                    <input type="number" id="age_sixty_mdv_male" class="form-control" placeholder="Age 60 Maldivian Male" wire:model="age_sixty_mdv_male">
                                    @error('age_sixty_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_sixty_mdv_female">Age 60 Maldivian Female</label>
                                    <input type="number" id="age_sixty_mdv_female" class="form-control" placeholder="Age 60 Maldivian Female" wire:model="age_sixty_mdv_female">
                                    @error('age_sixty_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_sixty_foreign_male">Age 60 Foreign Male</label>
                                    <input type="number" id="age_sixty_foreign_male" class="form-control" placeholder="Age 60 Foreign Male" wire:model="age_sixty_foreign_male">
                                    @error('age_sixty_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_sixty_foreign_female">Age 60 Foreign Female</label>
                                    <input type="number" id="age_sixty_foreign_female" class="form-control" placeholder="Age 60 Foreign Female" wire:model="age_sixty_foreign_female">
                                    @error('age_sixty_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_old_mdv_male">Age Old Maldivian Male</label>
                                    <input type="number" id="age_old_mdv_male" class="form-control" placeholder="Age Old Maldivian Male" wire:model="age_old_mdv_male">
                                    @error('age_old_mdv_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_old_mdv_female">Age Old Maldivian Female</label>
                                    <input type="number" id="age_old_mdv_female" class="form-control" placeholder="Age Old Maldivian Female" wire:model="age_old_mdv_female">
                                    @error('age_old_mdv_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_old_foreign_male">Age Old Foreign Male</label>
                                    <input type="number" id="age_old_foreign_male" class="form-control" placeholder="Age Old Foreign Male" wire:model="age_old_foreign_male">
                                    @error('age_old_foreign_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="age_old_foreign_female">Age Old Foreign Female</label>
                                    <input type="number" id="age_old_foreign_female" class="form-control" placeholder="Age Old Foreign Female" wire:model="age_old_foreign_female">
                                    @error('age_old_foreign_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>


                                <hr>
                                <h5>4. Employment by Registered atoll of the employees - Year End (december) </h5>
                                <small class="mb-3">Enter the number of employees</small>


                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="capital_male">Capital Male</label>
                                    <input type="number" id="capital_male" class="form-control" placeholder="Capital Male" wire:model="capital_male">
                                    @error('capital_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="capital_female">Capital Female</label>
                                    <input type="number" id="capital_female" class="form-control" placeholder="Capital Female" wire:model="capital_female">
                                    @error('capital_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="ha_male">HA Male</label>
                                    <input type="number" id="ha_male" class="form-control" placeholder="HA Male" wire:model="ha_male">
                                    @error('ha_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="ha_female">HA Female</label>
                                    <input type="number" id="ha_female" class="form-control" placeholder="HA Female" wire:model="ha_female">
                                    @error('ha_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="hdh_male">HDH Male</label>
                                    <input type="number" id="hdh_male" class="form-control" placeholder="HDH Male" wire:model="hdh_male">
                                    @error('hdh_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="hdh_female">HDH Female</label>
                                    <input type="number" id="hdh_female" class="form-control" placeholder="HDH Female" wire:model="hdh_female">
                                    @error('hdh_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="shaviyani_male">Shaviyani Male</label>
                                    <input type="number" id="shaviyani_male" class="form-control" placeholder="Shaviyani Male" wire:model="shaviyani_male">
                                    @error('shaviyani_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="shaviyani_female">Shaviyani Female</label>
                                    <input type="number" id="shaviyani_female" class="form-control" placeholder="Shaviyani Female" wire:model="shaviyani_female">
                                    @error('shaviyani_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="noonu_male">Noonu Male</label>
                                    <input type="number" id="noonu_male" class="form-control" placeholder="Noonu Male" wire:model="noonu_male">
                                    @error('noonu_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="noonu_female">Noonu Female</label>
                                    <input type="number" id="noonu_female" class="form-control" placeholder="Noonu Female" wire:model="noonu_female">
                                    @error('noonu_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="raa_male">Raa Male</label>
                                    <input type="number" id="raa_male" class="form-control" placeholder="Raa Male" wire:model="raa_male">
                                    @error('raa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="raa_female">Raa Female</label>
                                    <input type="number" id="raa_female" class="form-control" placeholder="Raa Female" wire:model="raa_female">
                                    @error('raa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="baa_male">Baa Male</label>
                                    <input type="number" id="baa_male" class="form-control" placeholder="Baa Male" wire:model="baa_male">
                                    @error('baa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="baa_female">Baa Female</label>
                                    <input type="number" id="baa_female" class="form-control" placeholder="Baa Female" wire:model="baa_female">
                                    @error('baa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lhaviyani_male">Lhaviyani Male</label>
                                    <input type="number" id="lhaviyani_male" class="form-control" placeholder="Lhaviyani Male" wire:model="lhaviyani_male">
                                    @error('lhaviyani_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="lhaviyani_female">Lhaviyani Female</label>
                                    <input type="number" id="lhaviyani_female" class="form-control" placeholder="Lhaviyani Female" wire:model="lhaviyani_female">
                                    @error('lhaviyani_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="kaafu_male">Kaafu Male</label>
                                    <input type="number" id="kaafu_male" class="form-control" placeholder="Kaafu Male" wire:model="kaafu_male">
                                    @error('kaafu_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="kaafu_female">Kaafu Female</label>
                                    <input type="number" id="kaafu_female" class="form-control" placeholder="Kaafu Female" wire:model="kaafu_female">
                                    @error('kaafu_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="alifalif_male">Alif Alif Male</label>
                                    <input type="number" id="alifalif_male" class="form-control" placeholder="Alif Alif Male" wire:model="alifalif_male">
                                    @error('alifalif_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="alifalif_female">Alif Alif Female</label>
                                    <input type="number" id="alifalif_female" class="form-control" placeholder="Alif Alif Female" wire:model="alifalif_female">
                                    @error('alifalif_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="alifdhaal_male">Alif Dhaal Male</label>
                                    <input type="number" id="alifdhaal_male" class="form-control" placeholder="Alif Dhaal Male" wire:model="alifdhaal_male">
                                    @error('alifdhaal_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="alifdhaal_female">Alif Dhaal Female</label>
                                    <input type="number" id="alifdhaal_female" class="form-control" placeholder="Alif Dhaal Female" wire:model="alifdhaal_female">
                                    @error('alifdhaal_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="vaav_male">Vaav Male</label>
                                    <input type="number" id="vaav_male" class="form-control" placeholder="Vaav Male" wire:model="vaav_male">
                                    @error('vaav_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="vaav_female">Vaav Female</label>
                                    <input type="number" id="vaav_female" class="form-control" placeholder="Vaav Female" wire:model="vaav_female">
                                    @error('vaav_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="meem_male">Meem Male</label>
                                    <input type="number" id="meem_male" class="form-control" placeholder="Meem Male" wire:model="meem_male">
                                    @error('meem_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="meem_female">Meem Female</label>
                                    <input type="number" id="meem_female" class="form-control" placeholder="Meem Female" wire:model="meem_female">
                                    @error('meem_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="faaf_male">Faaf Male</label>
                                    <input type="number" id="faaf_male" class="form-control" placeholder="Faaf Male" wire:model="faaf_male">
                                    @error('faaf_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="faaf_female">Faaf Female</label>
                                    <input type="number" id="faaf_female" class="form-control" placeholder="Faaf Female" wire:model="faaf_female">
                                    @error('faaf_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="dhaal_male">Dhaal Male</label>
                                    <input type="number" id="dhaal_male" class="form-control" placeholder="Dhaal Male" wire:model="dhaal_male">
                                    @error('dhaal_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="dhaal_female">Dhaal Female</label>
                                    <input type="number" id="dhaal_female" class="form-control" placeholder="Dhaal Female" wire:model="dhaal_female">
                                    @error('dhaal_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="thaa_male">Thaa Male</label>
                                    <input type="number" id="thaa_male" class="form-control" placeholder="Thaa Male" wire:model="thaa_male">
                                    @error('thaa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="thaa_female">Thaa Female</label>
                                    <input type="number" id="thaa_female" class="form-control" placeholder="Thaa Female" wire:model="thaa_female">
                                    @error('thaa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="laam_male">Laam Male</label>
                                    <input type="number" id="laam_male" class="form-control" placeholder="Laam Male" wire:model="laam_male">
                                    @error('laam_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="laam_female">Laam Female</label>
                                    <input type="number" id="laam_female" class="form-control" placeholder="Laam Female" wire:model="laam_female">
                                    @error('laam_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="ga_male">GA Male</label>
                                    <input type="number" id="ga_male" class="form-control" placeholder="GA Male" wire:model="ga_male">
                                    @error('ga_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="ga_female">GA Female</label>
                                    <input type="number" id="ga_female" class="form-control" placeholder="GA Female" wire:model="ga_female">
                                    @error('ga_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="gdh_male">GDH Male</label>
                                    <input type="number" id="gdh_male" class="form-control" placeholder="GDH Male" wire:model="gdh_male">
                                    @error('gdh_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="gdh_female">GDH Female</label>
                                    <input type="number" id="gdh_female" class="form-control" placeholder="GDH Female" wire:model="gdh_female">
                                    @error('gdh_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="gn_male">GN Male</label>
                                    <input type="number" id="gn_male" class="form-control" placeholder="GN Male" wire:model="gn_male">
                                    @error('gn_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="gn_female">GN Female</label>
                                    <input type="number" id="gn_female" class="form-control" placeholder="GN Female" wire:model="gn_female">
                                    @error('gn_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seenu_male">Seenu Male</label>
                                    <input type="number" id="seenu_male" class="form-control" placeholder="Seenu Male" wire:model="seenu_male">
                                    @error('seenu_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seenu_female">Seenu Female</label>
                                    <input type="number" id="seenu_female" class="form-control" placeholder="Seenu Female" wire:model="seenu_female">
                                    @error('seenu_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr>


                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="retailshop_outsourced">Retail Shop Outsourced</label>
                                    <input type="checkbox" id="retailshop_outsourced" class="form-check-input" wire:model="retailshop_outsourced">
                                    @error('retailshop_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="retailshop_male">Retail Shop Male</label>
                                    <input type="number" id="retailshop_male" class="form-control" placeholder="Retail Shop Male" wire:model="retailshop_male">
                                    @error('retailshop_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="retailshop_female">Retail Shop Female</label>
                                    <input type="number" id="retailshop_female" class="form-control" placeholder="Retail Shop Female" wire:model="retailshop_female">
                                    @error('retailshop_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="divingcenter_outsourced">Diving Center Outsourced</label>
                                    <input type="checkbox" id="divingcenter_outsourced" class="form-check-input" wire:model="divingcenter_outsourced">
                                    @error('divingcenter_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="divingcenter_male">Diving Center Male</label>
                                    <input type="number" id="divingcenter_male" class="form-control" placeholder="Diving Center Male" wire:model="divingcenter_male">
                                    @error('divingcenter_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="divingcenter_female">Diving Center Female</label>
                                    <input type="number" id="divingcenter_female" class="form-control" placeholder="Diving Center Female" wire:model="divingcenter_female">
                                    @error('divingcenter_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="restaurant_outsourced">Restaurant Outsourced</label>
                                    <input type="checkbox" id="restaurant_outsourced" class="form-check-input" wire:model="restaurant_outsourced">
                                    @error('restaurant_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="restaurant_male">Restaurant Male</label>
                                    <input type="number" id="restaurant_male" class="form-control" placeholder="Restaurant Male" wire:model="restaurant_male">
                                    @error('restaurant_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="restaurant_female">Restaurant Female</label>
                                    <input type="number" id="restaurant_female" class="form-control" placeholder="Restaurant Female" wire:model="restaurant_female">
                                    @error('restaurant_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="spa_outsourced">Spa Outsourced</label>
                                    <input type="checkbox" id="spa_outsourced" class="form-check-input" wire:model="spa_outsourced">
                                    @error('spa_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="spa_male">Spa Male</label>
                                    <input type="number" id="spa_male" class="form-control" placeholder="Spa Male" wire:model="spa_male">
                                    @error('spa_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="spa_female">Spa Female</label>
                                    <input type="number" id="spa_female" class="form-control" placeholder="Spa Female" wire:model="spa_female">
                                    @error('spa_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="transport_outsourced">Transport Outsourced</label>
                                    <input type="checkbox" id="transport_outsourced" class="form-check-input" wire:model="transport_outsourced">
                                    @error('transport_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="transport_male">Transport Male</label>
                                    <input type="number" id="transport_male" class="form-control" placeholder="Transport Male" wire:model="transport_male">
                                    @error('transport_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="transport_female">Transport Female</label>
                                    <input type="number" id="transport_female" class="form-control" placeholder="Transport Female" wire:model="transport_female">
                                    @error('transport_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="construction_outsourced">Construction Outsourced</label>
                                    <input type="checkbox" id="construction_outsourced" class="form-check-input" wire:model="construction_outsourced">
                                    @error('construction_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="construction_male">Construction Male</label>
                                    <input type="number" id="construction_male" class="form-control" placeholder="Construction Male" wire:model="construction_male">
                                    @error('construction_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-4">
                                    <label class="form-label" for="construction_female">Construction Female</label>
                                    <input type="number" id="construction_female" class="form-control" placeholder="Construction Female" wire:model="construction_female">
                                    @error('construction_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                

                                <div class="mb-3 col-12 col-md-2">
                                    <label class="form-label" for="otherone_outsourced">Other One Outsourced</label>
                                    <input type="checkbox" id="otherone_outsourced" class="form-check-input" wire:model="otherone_outsourced">
                                    @error('otherone_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="otherone_name">Other One Name</label>
                                    <input type="text" id="otherone_name" class="form-control" placeholder="Other One Name" wire:model="otherone_name">
                                    @error('otherone_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="otherone_male">Other One Male</label>
                                    <input type="number" id="otherone_male" class="form-control" placeholder="Other One Male" wire:model="otherone_male">
                                    @error('otherone_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="otherone_female">Other One Female</label>
                                    <input type="number" id="otherone_female" class="form-control" placeholder="Other One Female" wire:model="otherone_female">
                                    @error('otherone_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                

                                <div class="mb-3 col-12 col-md-2">
                                    <label class="form-label" for="othertwo_outsourced">Other Two Outsourced</label>
                                    <input type="checkbox" id="othertwo_outsourced" class="form-check-input" wire:model="othertwo_outsourced">
                                    @error('othertwo_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="othertwo_name">Other Two Name</label>
                                    <input type="text" id="othertwo_name" class="form-control" placeholder="Other Two Name" wire:model="othertwo_name">
                                    @error('othertwo_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="othertwo_male">Other Two Male</label>
                                    <input type="number" id="othertwo_male" class="form-control" placeholder="Other Two Male" wire:model="othertwo_male">
                                    @error('othertwo_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="othertwo_female">Other Two Female</label>
                                    <input type="number" id="othertwo_female" class="form-control" placeholder="Other Two Female" wire:model="othertwo_female">
                                    @error('othertwo_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                               

                                <div class="mb-3 col-12 col-md-2">
                                    <label class="form-label" for="otherthree_outsourced">Other Three Outsourced</label>
                                    <input type="checkbox" id="otherthree_outsourced" class="form-check-input" wire:model="otherthree_outsourced">
                                    @error('otherthree_outsourced')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="otherthree_name">Other Three Name</label>
                                    <input type="text" id="otherthree_name" class="form-control" placeholder="Other Three Name" wire:model="otherthree_name">
                                    @error('otherthree_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="otherthree_male">Other Three Male</label>
                                    <input type="number" id="otherthree_male" class="form-control" placeholder="Other Three Male" wire:model="otherthree_male">
                                    @error('otherthree_male')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-3">
                                    <label class="form-label" for="otherthree_female">Other Three Female</label>
                                    <input type="number" id="otherthree_female" class="form-control" placeholder="Other Three Female" wire:model="otherthree_female">
                                    @error('otherthree_female')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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