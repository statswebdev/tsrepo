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
                                    <label class="form-label" for="months_operated">Months Operated</label>
                                    <input type="number" id="months_operated" class="form-control" placeholder="Months Operated" wire:model="months_operated">
                                    @error('months_operated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="rooms_yearend">Rooms at Year End</label>
                                    <input type="number" id="rooms_yearend" class="form-control" placeholder="Rooms at Year End" wire:model="rooms_yearend">
                                    @error('rooms_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="beds_yearend">Beds at Year End</label>
                                    <input type="number" id="beds_yearend" class="form-control" placeholder="Beds at Year End" wire:model="beds_yearend">
                                    @error('beds_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="roomnights_sold">Room Nights Sold</label>
                                    <input type="number" id="roomnights_sold" class="form-control" placeholder="Room Nights Sold" wire:model="roomnights_sold">
                                    @error('roomnights_sold')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bednights_sold">Bed Nights Sold</label>
                                    <input type="number" id="bednights_sold" class="form-control" placeholder="Bed Nights Sold" wire:model="bednights_sold">
                                    @error('bednights_sold')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="roomrate_annual">Annual Room Rate</label>
                                    <input type="number" id="roomrate_annual" class="form-control" placeholder="Annual Room Rate" wire:model="roomrate_annual">
                                    @error('roomrate_annual')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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