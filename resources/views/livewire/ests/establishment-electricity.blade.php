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

                                <h5>1. Fuel Consumption</h5>
                                <small class="mb-5">Enter the fuel consumption in Liters</small>
        
                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                   
        
                                       
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3 text-center">Diesel</div>
                                <div class="col-sm-3 text-center">
                                    <label>Lubricant</label> 
                                </div>
                               
                               
                                <div class="col-sm-3"></div>
                        </div>


                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">January</label>
                            <div class="col-sm-3">
                                <input type="number" id="consume_jan_diesel" class="form-control" placeholder="Liters" wire:model="consume_jan_diesel">
                                @error('consume_jan_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="consume_jan_lub" class="form-control" placeholder="Liters" wire:model="consume_jan_lub">
                                @error('consume_jan_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>

                        </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">February</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_feb_diesel" class="form-control" placeholder="Liters" wire:model="consume_feb_diesel">
                                        @error('consume_feb_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_feb_lub" class="form-control" placeholder="Liters" wire:model="consume_feb_lub">
                                        @error('consume_feb_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">March</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_mar_diesel" class="form-control" placeholder="Liters" wire:model="consume_mar_diesel">
                                        @error('consume_mar_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_mar_lub" class="form-control" placeholder="Liters" wire:model="consume_mar_lub">
                                        @error('consume_mar_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">April</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_apr_diesel" class="form-control" placeholder="Liters" wire:model="consume_apr_diesel">
                                        @error('consume_apr_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_apr_lub" class="form-control" placeholder="Liters" wire:model="consume_apr_lub">
                                        @error('consume_apr_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">May</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_may_diesel" class="form-control" placeholder="Liters" wire:model="consume_may_diesel">
                                        @error('consume_may_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_may_lub" class="form-control" placeholder="Liters" wire:model="consume_may_lub">
                                        @error('consume_may_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">June</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_jun_diesel" class="form-control" placeholder="Liters" wire:model="consume_jun_diesel">
                                        @error('consume_jun_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_jun_lub" class="form-control" placeholder="Liters" wire:model="consume_jun_lub">
                                        @error('consume_jun_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">July</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_jul_diesel" class="form-control" placeholder="Liters" wire:model="consume_jul_diesel">
                                        @error('consume_jul_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_jul_lub" class="form-control" placeholder="Liters" wire:model="consume_jul_lub">
                                        @error('consume_jul_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">August</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_aug_diesel" class="form-control" placeholder="Liters" wire:model="consume_aug_diesel">
                                        @error('consume_aug_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_aug_lub" class="form-control" placeholder="Liters" wire:model="consume_aug_lub">
                                        @error('consume_aug_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">September</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_sep_diesel" class="form-control" placeholder="Liters" wire:model="consume_sep_diesel">
                                        @error('consume_sep_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_sep_lub" class="form-control" placeholder="Liters" wire:model="consume_sep_lub">
                                        @error('consume_sep_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">October</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_oct_diesel" class="form-control" placeholder="Liters" wire:model="consume_oct_diesel">
                                        @error('consume_oct_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_oct_lub" class="form-control" placeholder="Liters" wire:model="consume_oct_lub">
                                        @error('consume_oct_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">November</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_nov_diesel" class="form-control" placeholder="Liters" wire:model="consume_nov_diesel">
                                        @error('consume_nov_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_nov_lub" class="form-control" placeholder="Liters" wire:model="consume_nov_lub">
                                        @error('consume_nov_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-form-label col-sm-2 text-end">December</label>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_dec_diesel" class="form-control" placeholder="Liters" wire:model="consume_dec_diesel">
                                        @error('consume_dec_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="number" id="consume_dec_lub" class="form-control" placeholder="Liters" wire:model="consume_dec_lub">
                                        @error('consume_dec_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <hr class="mt-5 mb-5">

                                <h5>2. Electric Power Generation by sources (kWh)</h5>
                                <small class="mb-5">Enter the values in kWh for the reporting year</small>
        
                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                   
        
                                       
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-2 text-center">Diesel</div>
                                <div class="col-sm-2 text-center">
                                    <label>Renewable - Solar</label> 
                                </div>
                                <div class="col-sm-2 text-center">
                                    <label>Renewable - Other</label> 
                                </div>
                                <div class="col-sm-2 text-center">
                                    <label>Total Electricity Generation</label> 
                                </div>
                             
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">January</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jan_diesel" class="form-control" placeholder="kWh" wire:model="generate_jan_diesel">
                                @error('generate_jan_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jan_solar" class="form-control" placeholder="kWh" wire:model="generate_jan_solar">
                                @error('generate_jan_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jan_renewable" class="form-control" placeholder="kWh" wire:model="generate_jan_renewable">
                                @error('generate_jan_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jan_total" class="form-control" placeholder="kWh" wire:model="generate_jan_total">
                                @error('generate_jan_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">February</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_feb_diesel" class="form-control" placeholder="kWh" wire:model="generate_feb_diesel">
                                @error('generate_feb_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_feb_solar" class="form-control" placeholder="kWh" wire:model="generate_feb_solar">
                                @error('generate_feb_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_feb_renewable" class="form-control" placeholder="kWh" wire:model="generate_feb_renewable">
                                @error('generate_feb_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_feb_total" class="form-control" placeholder="kWh" wire:model="generate_feb_total">
                                @error('generate_feb_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">March</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_mar_diesel" class="form-control" placeholder="kWh" wire:model="generate_mar_diesel">
                                @error('generate_mar_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_mar_solar" class="form-control" placeholder="kWh" wire:model="generate_mar_solar">
                                @error('generate_mar_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_mar_renewable" class="form-control" placeholder="kWh" wire:model="generate_mar_renewable">
                                @error('generate_mar_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_mar_total" class="form-control" placeholder="kWh" wire:model="generate_mar_total">
                                @error('generate_mar_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">April</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_apr_diesel" class="form-control" placeholder="kWh" wire:model="generate_apr_diesel">
                                @error('generate_apr_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_apr_solar" class="form-control" placeholder="kWh" wire:model="generate_apr_solar">
                                @error('generate_apr_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_apr_renewable" class="form-control" placeholder="kWh" wire:model="generate_apr_renewable">
                                @error('generate_apr_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_apr_total" class="form-control" placeholder="kWh" wire:model="generate_apr_total">
                                @error('generate_apr_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">May</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_may_diesel" class="form-control" placeholder="kWh" wire:model="generate_may_diesel">
                                @error('generate_may_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_may_solar" class="form-control" placeholder="kWh" wire:model="generate_may_solar">
                                @error('generate_may_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_may_renewable" class="form-control" placeholder="kWh" wire:model="generate_may_renewable">
                                @error('generate_may_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_may_total" class="form-control" placeholder="kWh" wire:model="generate_may_total">
                                @error('generate_may_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">June</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jun_diesel" class="form-control" placeholder="kWh" wire:model="generate_jun_diesel">
                                @error('generate_jun_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jun_solar" class="form-control" placeholder="kWh" wire:model="generate_jun_solar">
                                @error('generate_jun_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jun_renewable" class="form-control" placeholder="kWh" wire:model="generate_jun_renewable">
                                @error('generate_jun_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jun_total" class="form-control" placeholder="kWh" wire:model="generate_jun_total">
                                @error('generate_jun_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">July</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jul_diesel" class="form-control" placeholder="kWh" wire:model="generate_jul_diesel">
                                @error('generate_jul_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jul_solar" class="form-control" placeholder="kWh" wire:model="generate_jul_solar">
                                @error('generate_jul_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jul_renewable" class="form-control" placeholder="kWh" wire:model="generate_jul_renewable">
                                @error('generate_jul_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_jul_total" class="form-control" placeholder="kWh" wire:model="generate_jul_total">
                                @error('generate_jul_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">August</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_aug_diesel" class="form-control" placeholder="kWh" wire:model="generate_aug_diesel">
                                @error('generate_aug_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_aug_solar" class="form-control" placeholder="kWh" wire:model="generate_aug_solar">
                                @error('generate_aug_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_aug_renewable" class="form-control" placeholder="kWh" wire:model="generate_aug_renewable">
                                @error('generate_aug_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_aug_total" class="form-control" placeholder="kWh" wire:model="generate_aug_total">
                                @error('generate_aug_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">September</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_sep_diesel" class="form-control" placeholder="kWh" wire:model="generate_sep_diesel">
                                @error('generate_sep_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_sep_solar" class="form-control" placeholder="kWh" wire:model="generate_sep_solar">
                                @error('generate_sep_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_sep_renewable" class="form-control" placeholder="kWh" wire:model="generate_sep_renewable">
                                @error('generate_sep_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_sep_total" class="form-control" placeholder="kWh" wire:model="generate_sep_total">
                                @error('generate_sep_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">October</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_oct_diesel" class="form-control" placeholder="kWh" wire:model="generate_oct_diesel">
                                @error('generate_oct_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_oct_solar" class="form-control" placeholder="kWh" wire:model="generate_oct_solar">
                                @error('generate_oct_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_oct_renewable" class="form-control" placeholder="kWh" wire:model="generate_oct_renewable">
                                @error('generate_oct_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_oct_total" class="form-control" placeholder="kWh" wire:model="generate_oct_total">
                                @error('generate_oct_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">November</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_nov_diesel" class="form-control" placeholder="kWh" wire:model="generate_nov_diesel">
                                @error('generate_nov_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_nov_solar" class="form-control" placeholder="kWh" wire:model="generate_nov_solar">
                                @error('generate_nov_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_nov_renewable" class="form-control" placeholder="kWh" wire:model="generate_nov_renewable">
                                @error('generate_nov_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_nov_total" class="form-control" placeholder="kWh" wire:model="generate_nov_total">
                                @error('generate_nov_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">December</label>
                            <div class="col-sm-2">
                                <input type="number" id="generate_dec_diesel" class="form-control" placeholder="kWh" wire:model="generate_dec_diesel">
                                @error('generate_dec_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_dec_solar" class="form-control" placeholder="kWh" wire:model="generate_dec_solar">
                                @error('generate_dec_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_dec_renewable" class="form-control" placeholder="kWh" wire:model="generate_dec_renewable">
                                @error('generate_dec_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="number" id="generate_dec_total" class="form-control" placeholder="kWh" wire:model="generate_dec_total">
                                @error('generate_dec_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
  

                                <hr class="mt-5 mb-5">

                                <h5>3. Electricity Demand</h5>
                                <small class="mb-5">Electricity Demand for the reporting year (kW)</small>
        
                                <div class="row  mb-2">
                                    <div class="col-sm-2"></div>
                                   
        
                                       
                                   
                            </div>
        
                            <div class="row mb-2">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3 text-center">Average Maximum</div>
                                <div class="col-sm-3 text-center">
                                    <label>Average Minimum</label> 
                                </div>

                                <div class="col-sm-3"></div>
                        </div>


                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">January</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_jan_max" class="form-control" placeholder="kW" wire:model="demand_jan_max">
                                @error('demand_jan_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_jan_min" class="form-control" placeholder="kW" wire:model="demand_jan_min">
                                @error('demand_jan_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">February</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_feb_max" class="form-control" placeholder="kW" wire:model="demand_feb_max">
                                @error('demand_feb_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_feb_min" class="form-control" placeholder="kW" wire:model="demand_feb_min">
                                @error('demand_feb_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">March</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_mar_max" class="form-control" placeholder="kW" wire:model="demand_mar_max">
                                @error('demand_mar_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_mar_min" class="form-control" placeholder="kW" wire:model="demand_mar_min">
                                @error('demand_mar_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">April</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_apr_max" class="form-control" placeholder="kW" wire:model="demand_apr_max">
                                @error('demand_apr_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_apr_min" class="form-control" placeholder="kW" wire:model="demand_apr_min">
                                @error('demand_apr_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">May</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_may_max" class="form-control" placeholder="kW" wire:model="demand_may_max">
                                @error('demand_may_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_may_min" class="form-control" placeholder="kW" wire:model="demand_may_min">
                                @error('demand_may_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">June</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_jun_max" class="form-control" placeholder="kW" wire:model="demand_jun_max">
                                @error('demand_jun_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_jun_min" class="form-control" placeholder="kW" wire:model="demand_jun_min">
                                @error('demand_jun_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">July</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_jul_max" class="form-control" placeholder="kW" wire:model="demand_jul_max">
                                @error('demand_jul_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_jul_min" class="form-control" placeholder="kW" wire:model="demand_jul_min">
                                @error('demand_jul_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">August</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_aug_max" class="form-control" placeholder="kW" wire:model="demand_aug_max">
                                @error('demand_aug_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_aug_min" class="form-control" placeholder="kW" wire:model="demand_aug_min">
                                @error('demand_aug_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">September</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_sep_max" class="form-control" placeholder="kW" wire:model="demand_sep_max">
                                @error('demand_sep_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_sep_min" class="form-control" placeholder="kW" wire:model="demand_sep_min">
                                @error('demand_sep_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">October</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_oct_max" class="form-control" placeholder="kW" wire:model="demand_oct_max">
                                @error('demand_oct_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_oct_min" class="form-control" placeholder="kW" wire:model="demand_oct_min">
                                @error('demand_oct_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">November</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_nov_max" class="form-control" placeholder="kW" wire:model="demand_nov_max">
                                @error('demand_nov_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_nov_min" class="form-control" placeholder="kW" wire:model="demand_nov_min">
                                @error('demand_nov_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-form-label col-sm-2 text-end">December</label>
                            <div class="col-sm-3">
                                <input type="number" id="demand_dec_max" class="form-control" placeholder="kW" wire:model="demand_dec_max">
                                @error('demand_dec_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-sm-3">
                                <input type="number" id="demand_dec_min" class="form-control" placeholder="kW" wire:model="demand_dec_min">
                                @error('demand_dec_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <hr class="mt-5 mb-5">



                                <div class="mt-3 mb-3 col-12 col-md-12">
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