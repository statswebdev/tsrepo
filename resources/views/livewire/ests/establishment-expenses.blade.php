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
                                    <label class="form-label" for="expense_salary">Expense Salary</label>
                                    <input type="number" id="expense_salary" class="form-control" placeholder="Expense Salary" wire:model="expense_salary">
                                    @error('expense_salary')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_allowance">Expense Allowance</label>
                                    <input type="number" id="expense_allowance" class="form-control" placeholder="Expense Allowance" wire:model="expense_allowance">
                                    @error('expense_allowance')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_inkind">Expense In-Kind</label>
                                    <input type="number" id="expense_inkind" class="form-control" placeholder="Expense In-Kind" wire:model="expense_inkind">
                                    @error('expense_inkind')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_salary_foreign">Expense Salary (Foreign)</label>
                                    <input type="number" id="expense_salary_foreign" class="form-control" placeholder="Expense Salary (Foreign)" wire:model="expense_salary_foreign">
                                    @error('expense_salary_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_allowance_foreign">Expense Allowance (Foreign)</label>
                                    <input type="number" id="expense_allowance_foreign" class="form-control" placeholder="Expense Allowance (Foreign)" wire:model="expense_allowance_foreign">
                                    @error('expense_allowance_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_inkind_foreign">Expense In-Kind (Foreign)</label>
                                    <input type="number" id="expense_inkind_foreign" class="form-control" placeholder="Expense In-Kind (Foreign)" wire:model="expense_inkind_foreign">
                                    @error('expense_inkind_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_food">Expense Food</label>
                                    <input type="number" id="expense_food" class="form-control" placeholder="Expense Food" wire:model="expense_food">
                                    @error('expense_food')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_laundry">Expense Laundry</label>
                                    <input type="number" id="expense_laundry" class="form-control" placeholder="Expense Laundry" wire:model="expense_laundry">
                                    @error('expense_laundry')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_transport">Expense Transport</label>
                                    <input type="number" id="expense_transport" class="form-control" placeholder="Expense Transport" wire:model="expense_transport">
                                    @error('expense_transport')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_water">Expense Water</label>
                                    <input type="number" id="expense_water" class="form-control" placeholder="Expense Water" wire:model="expense_water">
                                    @error('expense_water')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_electricity">Expense Electricity</label>
                                    <input type="number" id="expense_electricity" class="form-control" placeholder="Expense Electricity" wire:model="expense_electricity">
                                    @error('expense_electricity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_fuel">Expense Fuel</label>
                                    <input type="number" id="expense_fuel" class="form-control" placeholder="Expense Fuel" wire:model="expense_fuel">
                                    @error('expense_fuel')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_tele">Expense Telecommunication</label>
                                    <input type="number" id="expense_tele" class="form-control" placeholder="Expense Telecommunication" wire:model="expense_tele">
                                    @error('expense_tele')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_fines">Expense Fines</label>
                                    <input type="number" id="expense_fines" class="form-control" placeholder="Expense Fines" wire:model="expense_fines">
                                    @error('expense_fines')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_costofgoodssold">Expense Cost of Goods Sold</label>
                                    <input type="number" id="expense_costofgoodssold" class="form-control" placeholder="Expense Cost of Goods Sold" wire:model="expense_costofgoodssold">
                                    @error('expense_costofgoodssold')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_lease">Expense Lease</label>
                                    <input type="number" id="expense_lease" class="form-control" placeholder="Expense Lease" wire:model="expense_lease">
                                    @error('expense_lease')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_depreciation">Expense Depreciation</label>
                                    <input type="number" id="expense_depreciation" class="form-control" placeholder="Expense Depreciation" wire:model="expense_depreciation">
                                    @error('expense_depreciation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_financialcost">Expense Financial Cost</label>
                                    <input type="number" id="expense_financialcost" class="form-control" placeholder="Expense Financial Cost" wire:model="expense_financialcost">
                                    @error('expense_financialcost')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_marketing">Expense Marketing</label>
                                    <input type="number" id="expense_marketing" class="form-control" placeholder="Expense Marketing" wire:model="expense_marketing">
                                    @error('expense_marketing')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_admin">Expense Administration</label>
                                    <input type="number" id="expense_admin" class="form-control" placeholder="Expense Administration" wire:model="expense_admin">
                                    @error('expense_admin')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_management">Expense Management</label>
                                    <input type="number" id="expense_management" class="form-control" placeholder="Expense Management" wire:model="expense_management">
                                    @error('expense_management')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="expense_other">Other Expenses</label>
                                    <input type="number" id="expense_other" class="form-control" placeholder="Other Expenses" wire:model="expense_other">
                                    @error('expense_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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