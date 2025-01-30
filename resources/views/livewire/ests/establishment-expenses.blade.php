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
                    <h1 class="display-4 fw-bold">Expenditure</h1>
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
                            <form wire:submit.prevent="submitRecord" class="row">

                                <h5>1. Expenditure</h5>
                                <small class="mb-5">Please state expenses for the year {{ $this->est_record_id->collectionyear }}</small>

                                <div class="row mb-2">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3 text-center"><label>Accounting Year {{ $this->est_record_id->collectionyear }}</label></div> 
                                    
 
                            </div>

                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Salaries and wages paid to Maldivians (excluding allowances and in-kind benefits)</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01"  id="expense_salary" class="form-control" placeholder="MVR" wire:model="expense_salary">
                                    @error('expense_salary')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Allowances paid to Maldivians</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_allowance" class="form-control" placeholder="MVR" wire:model="expense_allowance">
                                    @error('expense_allowance')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">In-kind benefit paid to Maldivians</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_inkind" class="form-control" placeholder="MVR" wire:model="expense_inkind">
                                    @error('expense_inkind')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Salaries and wages paid to foreigners (excluding allowances and in-kind benefits)</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_salary_foreign" class="form-control" placeholder="MVR" wire:model="expense_salary_foreign">
                                    @error('expense_salary_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Allowances paid to foreigners</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_allowance_foreign" class="form-control" placeholder="MVR" wire:model="expense_allowance_foreign">
                                    @error('expense_allowance_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">In-kind benefit paid to foreigners</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_inkind_foreign" class="form-control" placeholder="MVR" wire:model="expense_inkind_foreign">
                                    @error('expense_inkind_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Food and Beverages</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_food" class="form-control" placeholder="MVR" wire:model="expense_food">
                                    @error('expense_food')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Expense Laundry</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_laundry" class="form-control" placeholder="MVR" wire:model="expense_laundry">
                                    @error('expense_laundry')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Transportation</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_transport" class="form-control" placeholder="MVR" wire:model="expense_transport">
                                    @error('expense_transport')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Water</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_water" class="form-control" placeholder="MVR" wire:model="expense_water">
                                    @error('expense_water')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Electricity</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_electricity" class="form-control" placeholder="MVR" wire:model="expense_electricity">
                                    @error('expense_electricity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Fuel (petrol / diesel / gas..etc)</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_fuel" class="form-control" placeholder="MVR" wire:model="expense_fuel">
                                    @error('expense_fuel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Telecommunication and internet</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_tele" class="form-control" placeholder="MVR" wire:model="expense_tele">
                                    @error('expense_tele')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Annual Fee /other charges/ fine to government</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_fines" class="form-control" placeholder="MVR" wire:model="expense_fines">
                                    @error('expense_fines')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Cost of sold goods (goods bought and sold in the same condition)</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_costofgoodssold" class="form-control" placeholder="MVR" wire:model="expense_costofgoodssold">
                                    @error('expense_costofgoodssold')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Expense Lease</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_lease" class="form-control" placeholder="MVR" wire:model="expense_lease">
                                    @error('expense_lease')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Depreciation</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_depreciation" class="form-control" placeholder="MVR" wire:model="expense_depreciation">
                                    @error('expense_depreciation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Financial Cost</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_financialcost" class="form-control" placeholder="MVR" wire:model="expense_financialcost">
                                    @error('expense_financialcost')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Marketing expenses</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_marketing" class="form-control" placeholder="MVR" wire:model="expense_marketing">
                                    @error('expense_marketing')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Administrative expenses</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_admin" class="form-control" placeholder="MVR" wire:model="expense_admin">
                                    @error('expense_admin')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Management Fee</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_management" class="form-control" placeholder="MVR" wire:model="expense_management">
                                    @error('expense_management')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-6 text-end">Other expenses</label>
                                <div class="col-sm-3">
                                    <input type="number" step="0.01" id="expense_other" class="form-control" placeholder="MVR" wire:model="expense_other">
                                    @error('expense_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <hr class="mb-5 mt-5">

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