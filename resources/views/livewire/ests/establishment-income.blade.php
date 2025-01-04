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
                                    <label class="form-label" for="income_boarding">Income Boarding</label>
                                    <input type="number" id="income_boarding" class="form-control" placeholder="Income Boarding" wire:model="income_boarding">
                                    @error('income_boarding')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_food">Income Food</label>
                                    <input type="number" id="income_food" class="form-control" placeholder="Income Food" wire:model="income_food">
                                    @error('income_food')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_beverage">Income Beverage</label>
                                    <input type="number" id="income_beverage" class="form-control" placeholder="Income Beverage" wire:model="income_beverage">
                                    @error('income_beverage')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_catering">Income Catering</label>
                                    <input type="number" id="income_catering" class="form-control" placeholder="Income Catering" wire:model="income_catering">
                                    @error('income_catering')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_transport">Income Transport</label>
                                    <input type="number" id="income_transport" class="form-control" placeholder="Income Transport" wire:model="income_transport">
                                    @error('income_transport')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_spa">Income Spa</label>
                                    <input type="number" id="income_spa" class="form-control" placeholder="Income Spa" wire:model="income_spa">
                                    @error('income_spa')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_laundry">Income Laundry</label>
                                    <input type="number" id="income_laundry" class="form-control" placeholder="Income Laundry" wire:model="income_laundry">
                                    @error('income_laundry')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_servicecharge">Income Service Charge</label>
                                    <input type="number" id="income_servicecharge" class="form-control" placeholder="Income Service Charge" wire:model="income_servicecharge">
                                    @error('income_servicecharge')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_excursion">Income Excursion</label>
                                    <input type="number" id="income_excursion" class="form-control" placeholder="Income Excursion" wire:model="income_excursion">
                                    @error('income_excursion')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_watersports">Income Water Sports</label>
                                    <input type="number" id="income_watersports" class="form-control" placeholder="Income Water Sports" wire:model="income_watersports">
                                    @error('income_watersports')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_watersports_third">Income Water Sports (Third Party)</label>
                                    <input type="number" id="income_watersports_third" class="form-control" placeholder="Income Water Sports (Third Party)" wire:model="income_watersports_third">
                                    @error('income_watersports_third')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_retailshop">Income Retail Shop</label>
                                    <input type="number" id="income_retailshop" class="form-control" placeholder="Income Retail Shop" wire:model="income_retailshop">
                                    @error('income_retailshop')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_retailshop_third">Income Retail Shop (Third Party)</label>
                                    <input type="number" id="income_retailshop_third" class="form-control" placeholder="Income Retail Shop (Third Party)" wire:model="income_retailshop_third">
                                    @error('income_retailshop_third')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_exchange">Income Exchange</label>
                                    <input type="number" id="income_exchange" class="form-control" placeholder="Income Exchange" wire:model="income_exchange">
                                    @error('income_exchange')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_commission">Income Commission</label>
                                    <input type="number" id="income_commission" class="form-control" placeholder="Income Commission" wire:model="income_commission">
                                    @error('income_commission')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_managementfee">Income Management Fee</label>
                                    <input type="number" id="income_managementfee" class="form-control" placeholder="Income Management Fee" wire:model="income_managementfee">
                                    @error('income_managementfee')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_lease">Income Lease</label>
                                    <input type="number" id="income_lease" class="form-control" placeholder="Income Lease" wire:model="income_lease">
                                    @error('income_lease')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_finance">Income Finance</label>
                                    <input type="number" id="income_finance" class="form-control" placeholder="Income Finance" wire:model="income_finance">
                                    @error('income_finance')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_dividend">Income Dividend</label>
                                    <input type="number" id="income_dividend" class="form-control" placeholder="Income Dividend" wire:model="income_dividend">
                                    @error('income_dividend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="income_other">Income Other</label>
                                    <input type="number" id="income_other" class="form-control" placeholder="Income Other" wire:model="income_other">
                                    @error('income_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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