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
                                
                          
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_jan_diesel">Diesel Consumption in January</label>
                                    <input type="number" id="consume_jan_diesel" class="form-control" placeholder="Diesel Consumption in January" wire:model="consume_jan_diesel">
                                    @error('consume_jan_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_feb_diesel">Diesel Consumption in February</label>
                                    <input type="number" id="consume_feb_diesel" class="form-control" placeholder="Diesel Consumption in February" wire:model="consume_feb_diesel">
                                    @error('consume_feb_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_mar_diesel">Diesel Consumption in March</label>
                                    <input type="number" id="consume_mar_diesel" class="form-control" placeholder="Diesel Consumption in March" wire:model="consume_mar_diesel">
                                    @error('consume_mar_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_apr_diesel">Diesel Consumption in April</label>
                                    <input type="number" id="consume_apr_diesel" class="form-control" placeholder="Diesel Consumption in April" wire:model="consume_apr_diesel">
                                    @error('consume_apr_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_may_diesel">Diesel Consumption in May</label>
                                    <input type="number" id="consume_may_diesel" class="form-control" placeholder="Diesel Consumption in May" wire:model="consume_may_diesel">
                                    @error('consume_may_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_jun_diesel">Diesel Consumption in June</label>
                                    <input type="number" id="consume_jun_diesel" class="form-control" placeholder="Diesel Consumption in June" wire:model="consume_jun_diesel">
                                    @error('consume_jun_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_jul_diesel">Diesel Consumption in July</label>
                                    <input type="number" id="consume_jul_diesel" class="form-control" placeholder="Diesel Consumption in July" wire:model="consume_jul_diesel">
                                    @error('consume_jul_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_aug_diesel">Diesel Consumption in August</label>
                                    <input type="number" id="consume_aug_diesel" class="form-control" placeholder="Diesel Consumption in August" wire:model="consume_aug_diesel">
                                    @error('consume_aug_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_sep_diesel">Diesel Consumption in September</label>
                                    <input type="number" id="consume_sep_diesel" class="form-control" placeholder="Diesel Consumption in September" wire:model="consume_sep_diesel">
                                    @error('consume_sep_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_oct_diesel">Diesel Consumption in October</label>
                                    <input type="number" id="consume_oct_diesel" class="form-control" placeholder="Diesel Consumption in October" wire:model="consume_oct_diesel">
                                    @error('consume_oct_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_nov_diesel">Diesel Consumption in November</label>
                                    <input type="number" id="consume_nov_diesel" class="form-control" placeholder="Diesel Consumption in November" wire:model="consume_nov_diesel">
                                    @error('consume_nov_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_dec_diesel">Diesel Consumption in December</label>
                                    <input type="number" id="consume_dec_diesel" class="form-control" placeholder="Diesel Consumption in December" wire:model="consume_dec_diesel">
                                    @error('consume_dec_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_jan_lub">Lubricant Consumption in January</label>
                                    <input type="number" id="consume_jan_lub" class="form-control" placeholder="Lubricant Consumption in January" wire:model="consume_jan_lub">
                                    @error('consume_jan_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_feb_lub">Lubricant Consumption in February</label>
                                    <input type="number" id="consume_feb_lub" class="form-control" placeholder="Lubricant Consumption in February" wire:model="consume_feb_lub">
                                    @error('consume_feb_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_mar_lub">Lubricant Consumption in March</label>
                                    <input type="number" id="consume_mar_lub" class="form-control" placeholder="Lubricant Consumption in March" wire:model="consume_mar_lub">
                                    @error('consume_mar_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_apr_lub">Lubricant Consumption in April</label>
                                    <input type="number" id="consume_apr_lub" class="form-control" placeholder="Lubricant Consumption in April" wire:model="consume_apr_lub">
                                    @error('consume_apr_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_may_lub">Lubricant Consumption in May</label>
                                    <input type="number" id="consume_may_lub" class="form-control" placeholder="Lubricant Consumption in May" wire:model="consume_may_lub">
                                    @error('consume_may_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_jun_lub">Lubricant Consumption in June</label>
                                    <input type="number" id="consume_jun_lub" class="form-control" placeholder="Lubricant Consumption in June" wire:model="consume_jun_lub">
                                    @error('consume_jun_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_jul_lub">Lubricant Consumption in July</label>
                                    <input type="number" id="consume_jul_lub" class="form-control" placeholder="Lubricant Consumption in July" wire:model="consume_jul_lub">
                                    @error('consume_jul_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_aug_lub">Lubricant Consumption in August</label>
                                    <input type="number" id="consume_aug_lub" class="form-control" placeholder="Lubricant Consumption in August" wire:model="consume_aug_lub">
                                    @error('consume_aug_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_sep_lub">Lubricant Consumption in September</label>
                                    <input type="number" id="consume_sep_lub" class="form-control" placeholder="Lubricant Consumption in September" wire:model="consume_sep_lub">
                                    @error('consume_sep_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_oct_lub">Lubricant Consumption in October</label>
                                    <input type="number" id="consume_oct_lub" class="form-control" placeholder="Lubricant Consumption in October" wire:model="consume_oct_lub">
                                    @error('consume_oct_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_nov_lub">Lubricant Consumption in November</label>
                                    <input type="number" id="consume_nov_lub" class="form-control" placeholder="Lubricant Consumption in November" wire:model="consume_nov_lub">
                                    @error('consume_nov_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="consume_dec_lub">Lubricant Consumption in December</label>
                                    <input type="number" id="consume_dec_lub" class="form-control" placeholder="Lubricant Consumption in December" wire:model="consume_dec_lub">
                                    @error('consume_dec_lub')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jan_diesel">Diesel Generation in January</label>
                                    <input type="number" id="generate_jan_diesel" class="form-control" placeholder="Diesel Generation in January" wire:model="generate_jan_diesel">
                                    @error('generate_jan_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_feb_diesel">Diesel Generation in February</label>
                                    <input type="number" id="generate_feb_diesel" class="form-control" placeholder="Diesel Generation in February" wire:model="generate_feb_diesel">
                                    @error('generate_feb_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_mar_diesel">Diesel Generation in March</label>
                                    <input type="number" id="generate_mar_diesel" class="form-control" placeholder="Diesel Generation in March" wire:model="generate_mar_diesel">
                                    @error('generate_mar_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_apr_diesel">Diesel Generation in April</label>
                                    <input type="number" id="generate_apr_diesel" class="form-control" placeholder="Diesel Generation in April" wire:model="generate_apr_diesel">
                                    @error('generate_apr_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_may_diesel">Diesel Generation in May</label>
                                    <input type="number" id="generate_may_diesel" class="form-control" placeholder="Diesel Generation in May" wire:model="generate_may_diesel">
                                    @error('generate_may_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jun_diesel">Diesel Generation in June</label>
                                    <input type="number" id="generate_jun_diesel" class="form-control" placeholder="Diesel Generation in June" wire:model="generate_jun_diesel">
                                    @error('generate_jun_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jul_diesel">Diesel Generation in July</label>
                                    <input type="number" id="generate_jul_diesel" class="form-control" placeholder="Diesel Generation in July" wire:model="generate_jul_diesel">
                                    @error('generate_jul_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_aug_diesel">Diesel Generation in August</label>
                                    <input type="number" id="generate_aug_diesel" class="form-control" placeholder="Diesel Generation in August" wire:model="generate_aug_diesel">
                                    @error('generate_aug_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_sep_diesel">Diesel Generation in September</label>
                                    <input type="number" id="generate_sep_diesel" class="form-control" placeholder="Diesel Generation in September" wire:model="generate_sep_diesel">
                                    @error('generate_sep_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_oct_diesel">Diesel Generation in October</label>
                                    <input type="number" id="generate_oct_diesel" class="form-control" placeholder="Diesel Generation in October" wire:model="generate_oct_diesel">
                                    @error('generate_oct_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_nov_diesel">Diesel Generation in November</label>
                                    <input type="number" id="generate_nov_diesel" class="form-control" placeholder="Diesel Generation in November" wire:model="generate_nov_diesel">
                                    @error('generate_nov_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_dec_diesel">Diesel Generation in December</label>
                                    <input type="number" id="generate_dec_diesel" class="form-control" placeholder="Diesel Generation in December" wire:model="generate_dec_diesel">
                                    @error('generate_dec_diesel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jan_solar">Solar Generation in January</label>
                                    <input type="number" id="generate_jan_solar" class="form-control" placeholder="Solar Generation in January" wire:model="generate_jan_solar">
                                    @error('generate_jan_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_feb_solar">Solar Generation in February</label>
                                    <input type="number" id="generate_feb_solar" class="form-control" placeholder="Solar Generation in February" wire:model="generate_feb_solar">
                                    @error('generate_feb_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_mar_solar">Solar Generation in March</label>
                                    <input type="number" id="generate_mar_solar" class="form-control" placeholder="Solar Generation in March" wire:model="generate_mar_solar">
                                    @error('generate_mar_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_apr_solar">Solar Generation in April</label>
                                    <input type="number" id="generate_apr_solar" class="form-control" placeholder="Solar Generation in April" wire:model="generate_apr_solar">
                                    @error('generate_apr_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_may_solar">Solar Generation in May</label>
                                    <input type="number" id="generate_may_solar" class="form-control" placeholder="Solar Generation in May" wire:model="generate_may_solar">
                                    @error('generate_may_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jun_solar">Solar Generation in June</label>
                                    <input type="number" id="generate_jun_solar" class="form-control" placeholder="Solar Generation in June" wire:model="generate_jun_solar">
                                    @error('generate_jun_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jul_solar">Solar Generation in July</label>
                                    <input type="number" id="generate_jul_solar" class="form-control" placeholder="Solar Generation in July" wire:model="generate_jul_solar">
                                    @error('generate_jul_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_aug_solar">Solar Generation in August</label>
                                    <input type="number" id="generate_aug_solar" class="form-control" placeholder="Solar Generation in August" wire:model="generate_aug_solar">
                                    @error('generate_aug_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_sep_solar">Solar Generation in September</label>
                                    <input type="number" id="generate_sep_solar" class="form-control" placeholder="Solar Generation in September" wire:model="generate_sep_solar">
                                    @error('generate_sep_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_oct_solar">Solar Generation in October</label>
                                    <input type="number" id="generate_oct_solar" class="form-control" placeholder="Solar Generation in October" wire:model="generate_oct_solar">
                                    @error('generate_oct_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_nov_solar">Solar Generation in November</label>
                                    <input type="number" id="generate_nov_solar" class="form-control" placeholder="Solar Generation in November" wire:model="generate_nov_solar">
                                    @error('generate_nov_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_dec_solar">Solar Generation in December</label>
                                    <input type="number" id="generate_dec_solar" class="form-control" placeholder="Solar Generation in December" wire:model="generate_dec_solar">
                                    @error('generate_dec_solar')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jan_renewable">Renewable Generation in January</label>
                                    <input type="number" id="generate_jan_renewable" class="form-control" placeholder="Renewable Generation in January" wire:model="generate_jan_renewable">
                                    @error('generate_jan_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_feb_renewable">Renewable Generation in February</label>
                                    <input type="number" id="generate_feb_renewable" class="form-control" placeholder="Renewable Generation in February" wire:model="generate_feb_renewable">
                                    @error('generate_feb_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_mar_renewable">Renewable Generation in March</label>
                                    <input type="number" id="generate_mar_renewable" class="form-control" placeholder="Renewable Generation in March" wire:model="generate_mar_renewable">
                                    @error('generate_mar_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_apr_renewable">Renewable Generation in April</label>
                                    <input type="number" id="generate_apr_renewable" class="form-control" placeholder="Renewable Generation in April" wire:model="generate_apr_renewable">
                                    @error('generate_apr_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_may_renewable">Renewable Generation in May</label>
                                    <input type="number" id="generate_may_renewable" class="form-control" placeholder="Renewable Generation in May" wire:model="generate_may_renewable">
                                    @error('generate_may_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jun_renewable">Renewable Generation in June</label>
                                    <input type="number" id="generate_jun_renewable" class="form-control" placeholder="Renewable Generation in June" wire:model="generate_jun_renewable">
                                    @error('generate_jun_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jul_renewable">Renewable Generation in July</label>
                                    <input type="number" id="generate_jul_renewable" class="form-control" placeholder="Renewable Generation in July" wire:model="generate_jul_renewable">
                                    @error('generate_jul_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_aug_renewable">Renewable Generation in August</label>
                                    <input type="number" id="generate_aug_renewable" class="form-control" placeholder="Renewable Generation in August" wire:model="generate_aug_renewable">
                                    @error('generate_aug_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_sep_renewable">Renewable Generation in September</label>
                                    <input type="number" id="generate_sep_renewable" class="form-control" placeholder="Renewable Generation in September" wire:model="generate_sep_renewable">
                                    @error('generate_sep_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_oct_renewable">Renewable Generation in October</label>
                                    <input type="number" id="generate_oct_renewable" class="form-control" placeholder="Renewable Generation in October" wire:model="generate_oct_renewable">
                                    @error('generate_oct_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_nov_renewable">Renewable Generation in November</label>
                                    <input type="number" id="generate_nov_renewable" class="form-control" placeholder="Renewable Generation in November" wire:model="generate_nov_renewable">
                                    @error('generate_nov_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_dec_renewable">Renewable Generation in December</label>
                                    <input type="number" id="generate_dec_renewable" class="form-control" placeholder="Renewable Generation in December" wire:model="generate_dec_renewable">
                                    @error('generate_dec_renewable')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jan_total">Total Generation in January</label>
                                    <input type="number" id="generate_jan_total" class="form-control" placeholder="Total Generation in January" wire:model="generate_jan_total">
                                    @error('generate_jan_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_feb_total">Total Generation in February</label>
                                    <input type="number" id="generate_feb_total" class="form-control" placeholder="Total Generation in February" wire:model="generate_feb_total">
                                    @error('generate_feb_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_mar_total">Total Generation in March</label>
                                    <input type="number" id="generate_mar_total" class="form-control" placeholder="Total Generation in March" wire:model="generate_mar_total">
                                    @error('generate_mar_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_apr_total">Total Generation in April</label>
                                    <input type="number" id="generate_apr_total" class="form-control" placeholder="Total Generation in April" wire:model="generate_apr_total">
                                    @error('generate_apr_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_may_total">Total Generation in May</label>
                                    <input type="number" id="generate_may_total" class="form-control" placeholder="Total Generation in May" wire:model="generate_may_total">
                                    @error('generate_may_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jun_total">Total Generation in June</label>
                                    <input type="number" id="generate_jun_total" class="form-control" placeholder="Total Generation in June" wire:model="generate_jun_total">
                                    @error('generate_jun_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_jul_total">Total Generation in July</label>
                                    <input type="number" id="generate_jul_total" class="form-control" placeholder="Total Generation in July" wire:model="generate_jul_total">
                                    @error('generate_jul_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_aug_total">Total Generation in August</label>
                                    <input type="number" id="generate_aug_total" class="form-control" placeholder="Total Generation in August" wire:model="generate_aug_total">
                                    @error('generate_aug_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_sep_total">Total Generation in September</label>
                                    <input type="number" id="generate_sep_total" class="form-control" placeholder="Total Generation in September" wire:model="generate_sep_total">
                                    @error('generate_sep_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_oct_total">Total Generation in October</label>
                                    <input type="number" id="generate_oct_total" class="form-control" placeholder="Total Generation in October" wire:model="generate_oct_total">
                                    @error('generate_oct_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_nov_total">Total Generation in November</label>
                                    <input type="number" id="generate_nov_total" class="form-control" placeholder="Total Generation in November" wire:model="generate_nov_total">
                                    @error('generate_nov_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generate_dec_total">Total Generation in December</label>
                                    <input type="number" id="generate_dec_total" class="form-control" placeholder="Total Generation in December" wire:model="generate_dec_total">
                                    @error('generate_dec_total')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_jan_max">Maximum Demand in January</label>
                                    <input type="number" id="demand_jan_max" class="form-control" placeholder="Maximum Demand in January" wire:model="demand_jan_max">
                                    @error('demand_jan_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_feb_max">Maximum Demand in February</label>
                                    <input type="number" id="demand_feb_max" class="form-control" placeholder="Maximum Demand in February" wire:model="demand_feb_max">
                                    @error('demand_feb_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_mar_max">Maximum Demand in March</label>
                                    <input type="number" id="demand_mar_max" class="form-control" placeholder="Maximum Demand in March" wire:model="demand_mar_max">
                                    @error('demand_mar_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_apr_max">Maximum Demand in April</label>
                                    <input type="number" id="demand_apr_max" class="form-control" placeholder="Maximum Demand in April" wire:model="demand_apr_max">
                                    @error('demand_apr_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_may_max">Maximum Demand in May</label>
                                    <input type="number" id="demand_may_max" class="form-control" placeholder="Maximum Demand in May" wire:model="demand_may_max">
                                    @error('demand_may_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_jun_max">Maximum Demand in June</label>
                                    <input type="number" id="demand_jun_max" class="form-control" placeholder="Maximum Demand in June" wire:model="demand_jun_max">
                                    @error('demand_jun_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_jul_max">Maximum Demand in July</label>
                                    <input type="number" id="demand_jul_max" class="form-control" placeholder="Maximum Demand in July" wire:model="demand_jul_max">
                                    @error('demand_jul_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_aug_max">Maximum Demand in August</label>
                                    <input type="number" id="demand_aug_max" class="form-control" placeholder="Maximum Demand in August" wire:model="demand_aug_max">
                                    @error('demand_aug_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_sep_max">Maximum Demand in September</label>
                                    <input type="number" id="demand_sep_max" class="form-control" placeholder="Maximum Demand in September" wire:model="demand_sep_max">
                                    @error('demand_sep_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_oct_max">Maximum Demand in October</label>
                                    <input type="number" id="demand_oct_max" class="form-control" placeholder="Maximum Demand in October" wire:model="demand_oct_max">
                                    @error('demand_oct_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_nov_max">Maximum Demand in November</label>
                                    <input type="number" id="demand_nov_max" class="form-control" placeholder="Maximum Demand in November" wire:model="demand_nov_max">
                                    @error('demand_nov_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_dec_max">Maximum Demand in December</label>
                                    <input type="number" id="demand_dec_max" class="form-control" placeholder="Maximum Demand in December" wire:model="demand_dec_max">
                                    @error('demand_dec_max')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_jan_min">Minimum Demand in January</label>
                                    <input type="number" id="demand_jan_min" class="form-control" placeholder="Minimum Demand in January" wire:model="demand_jan_min">
                                    @error('demand_jan_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_feb_min">Minimum Demand in February</label>
                                    <input type="number" id="demand_feb_min" class="form-control" placeholder="Minimum Demand in February" wire:model="demand_feb_min">
                                    @error('demand_feb_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_mar_min">Minimum Demand in March</label>
                                    <input type="number" id="demand_mar_min" class="form-control" placeholder="Minimum Demand in March" wire:model="demand_mar_min">
                                    @error('demand_mar_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_apr_min">Minimum Demand in April</label>
                                    <input type="number" id="demand_apr_min" class="form-control" placeholder="Minimum Demand in April" wire:model="demand_apr_min">
                                    @error('demand_apr_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_may_min">Minimum Demand in May</label>
                                    <input type="number" id="demand_may_min" class="form-control" placeholder="Minimum Demand in May" wire:model="demand_may_min">
                                    @error('demand_may_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_jun_min">Minimum Demand in June</label>
                                    <input type="number" id="demand_jun_min" class="form-control" placeholder="Minimum Demand in June" wire:model="demand_jun_min">
                                    @error('demand_jun_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_jul_min">Minimum Demand in July</label>
                                    <input type="number" id="demand_jul_min" class="form-control" placeholder="Minimum Demand in July" wire:model="demand_jul_min">
                                    @error('demand_jul_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_aug_min">Minimum Demand in August</label>
                                    <input type="number" id="demand_aug_min" class="form-control" placeholder="Minimum Demand in August" wire:model="demand_aug_min">
                                    @error('demand_aug_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_sep_min">Minimum Demand in September</label>
                                    <input type="number" id="demand_sep_min" class="form-control" placeholder="Minimum Demand in September" wire:model="demand_sep_min">
                                    @error('demand_sep_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_oct_min">Minimum Demand in October</label>
                                    <input type="number" id="demand_oct_min" class="form-control" placeholder="Minimum Demand in October" wire:model="demand_oct_min">
                                    @error('demand_oct_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_nov_min">Minimum Demand in November</label>
                                    <input type="number" id="demand_nov_min" class="form-control" placeholder="Minimum Demand in November" wire:model="demand_nov_min">
                                    @error('demand_nov_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="demand_dec_min">Minimum Demand in December</label>
                                    <input type="number" id="demand_dec_min" class="form-control" placeholder="Minimum Demand in December" wire:model="demand_dec_min">
                                    @error('demand_dec_min')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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