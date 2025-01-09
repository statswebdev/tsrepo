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
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_jan_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_feb_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_mar_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_apr_diesel }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_may_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_jun_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_jul_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_aug_diesel }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_sep_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_oct_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_nov_diesel }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Diesel Consumed in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_dec_diesel }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Lubricant Consumption data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in January</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_jan_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in February</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_feb_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in March</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_mar_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in April</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_apr_lub }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Lubricant Consumption data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in May</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_may_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in June</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_jun_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in July</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_jul_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in August</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_aug_lub }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional Lubricant Consumption data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in September</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_sep_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in October</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_oct_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in November</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_nov_lub }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Lubricant Consumed in December</span>
                                        <h6 class="mb-0">
                                          {{ $query->consume_dec_lub }}
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
                    </div>
                </div>
        </div>
    </section>
</div>
