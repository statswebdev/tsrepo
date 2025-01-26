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
                                    {{ $query->estname }} - Electricity Information - {{ $query->collectionyear }}
                                @endif 
                            </h3>
                        </div>
                        
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="border-bottom pt-0 pb-4"> 
                                <!-- Pricing data -->
                                <!-- Pricing data -->
                                <div class="row">
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
                            
                            <div class="border-bottom pt-4 pb-4">
                              
                              <div class="row">
                              <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                <span class="fs-6">Renewable Other Consumption</span>
                                <h6 class="mb-0">
                                    {{ $query->renewable_other_consumption }}
                                </h6>
                            </div>
                              </div>
                            </div>

                              
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Diesel Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jan_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_feb_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_mar_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_apr_diesel }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Diesel Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_may_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jun_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jul_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_aug_diesel }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Diesel Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_sep_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_oct_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_nov_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Generated in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_dec_diesel }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Solar Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jan_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_feb_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_mar_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_apr_solar }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Solar Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_may_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jun_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jul_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_aug_solar }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Solar Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_sep_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_oct_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_nov_solar }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Solar Generated in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_dec_solar }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Renewable Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jan_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_feb_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_mar_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_apr_renewable }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Renewable Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_may_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jun_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jul_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_aug_renewable }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Renewable Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_sep_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_oct_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_nov_renewable }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Renewable Generated in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_dec_renewable }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Total Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jan_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_feb_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_mar_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_apr_total }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Total Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_may_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jun_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_jul_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_aug_total }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Total Generation data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_sep_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_oct_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_nov_total }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Total Generated in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->generate_dec_total }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Maximum Demand data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_jan_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_feb_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_mar_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_apr_max }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Maximum Demand data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_may_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_jun_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_jul_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_aug_max }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Maximum Demand data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_sep_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_oct_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_nov_max }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Maximum Demand in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_dec_max }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Minimum Demand data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_jan_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_feb_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_mar_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_apr_min }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Minimum Demand data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_may_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_jun_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_jul_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_aug_min }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Minimum Demand data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_sep_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_oct_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_nov_min }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Minimum Demand in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->demand_dec_min }}
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
