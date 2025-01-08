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
                                    {{ $query->estname }} - Employment Information Part 2 - {{ $query->collectionyear }}
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
                                <!-- Duration data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Less Than One Year</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_male_lessthanoneyear }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Less Than One Year</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_female_lessthanoneyear }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Less Than One Year</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_male_lessthanoneyear }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Less Than One Year</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_female_lessthanoneyear }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Duration data for one to two years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male One to Two Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_male_one_two_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female One to Two Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_female_one_two_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male One to Two Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_male_one_two_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female One to Two Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_female_one_two_years }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Duration data for three to four years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Three to Four Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_male_three_four_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Three to Four Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_female_three_four_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Three to Four Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_male_three_four_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Three to Four Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_female_three_four_years }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Duration data for five to nine years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Five to Nine Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_male_five_nine_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Five to Nine Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_female_five_nine_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Five to Nine Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_male_five_nine_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Five to Nine Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_female_five_nine_years }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Duration data for ten years -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Male Ten Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_male_ten_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maldivian Female Ten Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_maldivian_female_ten_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Male Ten Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_male_ten_years }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Foreign Female Ten Years</span>
                                        <h6 class="mb-0">
                                           {{ $query->duration_foreign_female_ten_years }}
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
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Capital Male</span>
                                        <h6 class="mb-0">
                                           {{ $query->capital_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Capital Female</span>
                                        <h6 class="mb-0">
                                           {{ $query->capital_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">HA Male</span>
                                        <h6 class="mb-0">
                                           {{ $query->ha_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">HA Female</span>
                                        <h6 class="mb-0">
                                           {{ $query->ha_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">HDH Male</span>
                                        <h6 class="mb-0">
                                           {{ $query->hdh_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">HDH Female</span>
                                        <h6 class="mb-0">
                                           {{ $query->hdh_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Shaviyani Male</span>
                                        <h6 class="mb-0">
                                           {{ $query->shaviyani_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Shaviyani Female</span>
                                        <h6 class="mb-0">
                                           {{ $query->shaviyani_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Noonu Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->noonu_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Noonu Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->noonu_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Raa Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->raa_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Raa Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->raa_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Baa Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->baa_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Baa Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->baa_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lhaviyani Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->lhaviyani_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lhaviyani Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->lhaviyani_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Kaafu Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->kaafu_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Kaafu Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->kaafu_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Alif Alif Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->alifalif_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Alif Alif Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->alifalif_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Alif Dhaal Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->alifdhaal_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Alif Dhaal Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->alifdhaal_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Vaav Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->vaav_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Vaav Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->vaav_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Meem Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->meem_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Meem Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->meem_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Faaf Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->faaf_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Faaf Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->faaf_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Dhaal Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->dhaal_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Dhaal Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->dhaal_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Thaa Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->thaa_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Thaa Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->thaa_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Laam Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->laam_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Laam Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->laam_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Ga Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->ga_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Ga Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->ga_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">GDH Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->gdh_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">GDH Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->gdh_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">GN Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->gn_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">GN Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->gn_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seenu Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->seenu_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seenu Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->seenu_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Retail Shop Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->retailshop_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Retail Shop Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->retailshop_male }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Retail Shop Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->retailshop_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diving Center Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->divingcenter_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diving Center Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->divingcenter_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diving Center Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->divingcenter_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Restaurant Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->restaurant_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Restaurant Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->restaurant_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Restaurant Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->restaurant_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Spa Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->spa_outsourced }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Spa Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->spa_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Spa Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->spa_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->transport_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->transport_male }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Transport Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->transport_female }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Construction Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->construction_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Construction Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->construction_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Construction Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->construction_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->otherone_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6"> Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->otherone_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->otherone_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->othertwo_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->othertwo_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->othertwo_female }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Capital data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other Outsourced</span>
                                        <h6 class="mb-0">
                                            {{ $query->otherthree_outsourced }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other Male</span>
                                        <h6 class="mb-0">
                                            {{ $query->otherthree_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other Female</span>
                                        <h6 class="mb-0">
                                            {{ $query->otherthree_female }}
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
                    </div>
                </div>
        </div>
    </section>
</div>
