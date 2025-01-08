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
                                        <span class="fs-6">maldivian_male</span>
                                        <h6 class="mb-0">
                                            
                                            {{ $query->maldivian_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_male</span>
                                        <h6 class="mb-0">{{ $query->foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_female</span>
                                        <h6 class="mb-0">{{ $query->foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom pt-0 pb-4"> 
                               
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">maldivian_male_commuting</span>
                                        <h6 class="mb-0">
                                            {{ $query->maldivian_male_commuting }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">maldivian_female_commuting</span>
                                        <h6 class="mb-0">{{ $query->maldivian_female_commuting }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_male_commuting</span>
                                        <h6 class="mb-0">{{ $query->foreign_male_commuting }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_female_commuting</span>
                                        <h6 class="mb-0">{{ $query->foreign_female_commuting }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">maldivian_male_permanent</span>
                                        <h6 class="mb-0">
                                            {{ $query->maldivian_male_permanent }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">maldivian_female_permanent</span>
                                        <h6 class="mb-0">{{ $query->maldivian_female_permanent }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_male_permanent</span>
                                        <h6 class="mb-0">{{ $query->foreign_male_permanent }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">foreign_female_permanent</span>
                                        <h6 class="mb-0">{{ $query->foreign_female_permanent }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">accomo_maldivian_male</span>
                                        <h6 class="mb-0">
                                            {{ $query->accomo_maldivian_male }}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">accomo_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->accomo_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">accomo_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->accomo_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">accomo_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->accomo_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">food_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->food_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">food_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->food_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">food_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->food_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">food_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->food_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">transport_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->transport_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">transport_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->transport_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">transport_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->transport_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">transport_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->transport_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">sports_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->sports_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">sports_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->sports_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">sports_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->sports_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">sports_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->sports_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">admin_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->admin_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">admin_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->admin_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">admin_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->admin_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">admin_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->admin_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->other_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->other_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->other_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">other_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->other_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">manager_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->manager_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">manager_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->manager_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">manager_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->manager_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">manager_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->manager_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">professional_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->professional_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">professional_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->professional_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">professional_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->professional_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">professional_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->professional_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">service_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->service_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">service_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->service_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">service_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->service_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">service_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->service_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">elementary_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->elementary_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">elementary_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->elementary_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">elementary_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->elementary_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">elementary_foreign_female</span>
                                        <h6 class="mb-0">{{ $query->elementary_foreign_female }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 pb-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">bylevelother_maldivian_male</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_maldivian_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">bylevelother_maldivian_female</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_maldivian_female }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">bylevelother_foreign_male</span>
                                        <h6 class="mb-0">{{ $query->bylevelother_foreign_male }}</h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">bylevelother_foreign_female</span>
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
                    </div>
                </div>
        </div>
    </section>
</div>
