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
                                    <label class="form-label" for="skipjacktuna_inhouse">Skipjack Tuna Inhouse</label>
                                    <input type="text" id="skipjacktuna_inhouse" class="form-control" placeholder="Skipjack Tuna Inhouse" wire:model="skipjacktuna_inhouse">
                                    @error('skipjacktuna_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="skipjacktuna_inhouse_qty">Skipjack Tuna Inhouse Quantity</label>
                                    <input type="number" id="skipjacktuna_inhouse_qty" class="form-control" placeholder="Skipjack Tuna Inhouse Quantity" wire:model="skipjacktuna_inhouse_qty">
                                    @error('skipjacktuna_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_inhouse">Yellowfin Inhouse</label>
                                    <input type="text" id="yellowfin_inhouse" class="form-control" placeholder="Yellowfin Inhouse" wire:model="yellowfin_inhouse">
                                    @error('yellowfin_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_inhouse_qty">Yellowfin Inhouse Quantity</label>
                                    <input type="number" id="yellowfin_inhouse_qty" class="form-control" placeholder="Yellowfin Inhouse Quantity" wire:model="yellowfin_inhouse_qty">
                                    @error('yellowfin_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_inhouse">Reef Fish Inhouse</label>
                                    <input type="text" id="reeffish_inhouse" class="form-control" placeholder="Reef Fish Inhouse" wire:model="reeffish_inhouse">
                                    @error('reeffish_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_inhouse_qty">Reef Fish Inhouse Quantity</label>
                                    <input type="number" id="reeffish_inhouse_qty" class="form-control" placeholder="Reef Fish Inhouse Quantity" wire:model="reeffish_inhouse_qty">
                                    @error('reeffish_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_inhouse">Seafood Inhouse</label>
                                    <input type="text" id="seafood_inhouse" class="form-control" placeholder="Seafood Inhouse" wire:model="seafood_inhouse">
                                    @error('seafood_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_inhouse_qty">Seafood Inhouse Quantity</label>
                                    <input type="number" id="seafood_inhouse_qty" class="form-control" placeholder="Seafood Inhouse Quantity" wire:model="seafood_inhouse_qty">
                                    @error('seafood_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_inhouse">Other Fish Inhouse</label>
                                    <input type="text" id="otherfish_inhouse" class="form-control" placeholder="Other Fish Inhouse" wire:model="otherfish_inhouse">
                                    @error('otherfish_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_inhouse_qty">Other Fish Inhouse Quantity</label>
                                    <input type="number" id="otherfish_inhouse_qty" class="form-control" placeholder="Other Fish Inhouse Quantity" wire:model="otherfish_inhouse_qty">
                                    @error('otherfish_inhouse_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="skipjack_purchased">Skipjack Purchased</label>
                                    <input type="text" id="skipjack_purchased" class="form-control" placeholder="Skipjack Purchased" wire:model="skipjack_purchased">
                                    @error('skipjack_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="skipjack_purchased_qty">Skipjack Purchased Quantity</label>
                                    <input type="number" id="skipjack_purchased_qty" class="form-control" placeholder="Skipjack Purchased Quantity" wire:model="skipjack_purchased_qty">
                                    @error('skipjack_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="skipjack_purchased_value">Skipjack Purchased Value</label>
                                    <input type="number" id="skipjack_purchased_value" class="form-control" placeholder="Skipjack Purchased Value" wire:model="skipjack_purchased_value">
                                    @error('skipjack_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_purchased">Yellowfin Purchased</label>
                                    <input type="text" id="yellowfin_purchased" class="form-control" placeholder="Yellowfin Purchased" wire:model="yellowfin_purchased">
                                    @error('yellowfin_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_purchased_qty">Yellowfin Purchased Quantity</label>
                                    <input type="number" id="yellowfin_purchased_qty" class="form-control" placeholder="Yellowfin Purchased Quantity" wire:model="yellowfin_purchased_qty">
                                    @error('yellowfin_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="yellowfin_purchased_value">Yellowfin Purchased Value</label>
                                    <input type="number" id="yellowfin_purchased_value" class="form-control" placeholder="Yellowfin Purchased Value" wire:model="yellowfin_purchased_value">
                                    @error('yellowfin_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_purchased">Reef Fish Purchased</label>
                                    <input type="text" id="reeffish_purchased" class="form-control" placeholder="Reef Fish Purchased" wire:model="reeffish_purchased">
                                    @error('reeffish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_purchased_qty">Reef Fish Purchased Quantity</label>
                                    <input type="number" id="reeffish_purchased_qty" class="form-control" placeholder="Reef Fish Purchased Quantity" wire:model="reeffish_purchased_qty">
                                    @error('reeffish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="reeffish_purchased_value">Reef Fish Purchased Value</label>
                                    <input type="number" id="reeffish_purchased_value" class="form-control" placeholder="Reef Fish Purchased Value" wire:model="reeffish_purchased_value">
                                    @error('reeffish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_purchased">Seafood Purchased</label>
                                    <input type="text" id="seafood_purchased" class="form-control" placeholder="Seafood Purchased" wire:model="seafood_purchased">
                                    @error('seafood_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_purchased_qty">Seafood Purchased Quantity</label>
                                    <input type="number" id="seafood_purchased_qty" class="form-control" placeholder="Seafood Purchased Quantity" wire:model="seafood_purchased_qty">
                                    @error('seafood_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="seafood_purchased_value">Seafood Purchased Value</label>
                                    <input type="number" id="seafood_purchased_value" class="form-control" placeholder="Seafood Purchased Value" wire:model="seafood_purchased_value">
                                    @error('seafood_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_purchased">Other Fish Purchased</label>
                                    <input type="text" id="otherfish_purchased" class="form-control" placeholder="Other Fish Purchased" wire:model="otherfish_purchased">
                                    @error('otherfish_purchased')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_purchased_qty">Other Fish Purchased Quantity</label>
                                    <input type="number" id="otherfish_purchased_qty" class="form-control" placeholder="Other Fish Purchased Quantity" wire:model="otherfish_purchased_qty">
                                    @error('otherfish_purchased_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otherfish_purchased_value">Other Fish Purchased Value</label>
                                    <input type="number" id="otherfish_purchased_value" class="form-control" placeholder="Other Fish Purchased Value" wire:model="otherfish_purchased_value">
                                    @error('otherfish_purchased_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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