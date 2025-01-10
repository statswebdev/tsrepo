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
                    <h1 class="display-4 fw-bold">Income</h1>
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

                                <h5>1. Income</h5>
                                <small class="mb-5">Please state the earnings for the reporting, accounting year</small>

                                <div class="row mb-2">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3 text-center"><label>Accounting Year</label></div> 
                                    
 
                            </div>

                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Boarding and lodging services (excluding GST)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_boarding" class="form-control" placeholder="MVR" wire:model="income_boarding" step="0.01">
                                    @error('income_boarding')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Food (Including mini bar)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_food" class="form-control" placeholder="MVR" wire:model="income_food">
                                    @error('income_food')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Beverage (Including mini bar)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_beverage" class="form-control" placeholder="MVR" wire:model="income_beverage">
                                    @error('income_beverage')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Catering services</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_catering" class="form-control" placeholder="MVR" wire:model="income_catering">
                                    @error('income_catering')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Transfer of guests / Transportation</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_transport" class="form-control" placeholder="MVR" wire:model="income_transport">
                                    @error('income_transport')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Spa Income</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_spa" class="form-control" placeholder="MVR" wire:model="income_spa">
                                    @error('income_spa')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Laundry service</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_laundry" class="form-control" placeholder="MVR" wire:model="income_laundry">
                                    @error('income_laundry')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Service charge</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_servicecharge" class="form-control" placeholder="MVR" wire:model="income_servicecharge">
                                    @error('income_servicecharge')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Excursion income (State the income If operated by the resort/safari, otherwise state only the margin)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_excursion" class="form-control" placeholder="MVR" wire:model="income_excursion">
                                    @error('income_excursion')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Diving and water sports (If operated by the resort/safari)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_watersports" class="form-control" placeholder="MVR" wire:model="income_watersports">
                                    @error('income_watersports')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Diving and water sports operated by third parties (excluding rent)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_watersports_third" class="form-control" placeholder="MVR" wire:model="income_watersports_third">
                                    @error('income_watersports_third')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Retail sales of shops (If operated by the resort)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_retailshop" class="form-control" placeholder="MVR" wire:model="income_retailshop">
                                    @error('income_retailshop')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_retailshop_third">Shop Income operated by third parties (excluding rent)</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_retailshop_third" class="form-control" placeholder="MVR" wire:model="income_retailshop_third">
                                    @error('income_retailshop_third')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_exchange">Foreign exchange gain</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_exchange" class="form-control" placeholder="MVR" wire:model="income_exchange">
                                    @error('income_exchange')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_commission">Commissions</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_commission" class="form-control" placeholder="MVR" wire:model="income_commission">
                                    @error('income_commission')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_commission">Management fee</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_managementfee" class="form-control" placeholder="MVR" wire:model="income_managementfee">
                                    @error('income_managementfee')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_commission">Lease income</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_lease" class="form-control" placeholder="MVR" wire:model="income_lease">
                                    @error('income_lease')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_commission">Finance income</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_finance" class="form-control" placeholder="MVR" wire:model="income_finance">
                                    @error('income_finance')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_commission">Dividend Income</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_dividend" class="form-control" placeholder="MVR" wire:model="income_dividend">
                                    @error('income_dividend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end" for="income_commission">Other Income</label>
                                <div class="col-sm-3">
                                    <input type="number" id="income_other" class="form-control" placeholder="MVR" wire:model="income_other">
                                    @error('income_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <hr class="mb-5 mt-5">


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