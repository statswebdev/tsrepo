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
                            <form wire:submit.prevent="save" class="row">
                                
                                  {{--   <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="months_operated">Select the months in operation during the reporting year</label>
                                        <input type="number" id="months_operated" class="form-control" placeholder="Months Operated" wire:model="months_operated">
                                        @error('months_operated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div> --}}

                                    <div class="mb-4">
                                        <label for="months_operated" class="form-label">1. Select the months in operation during the reporting year</label>
                                        <br>
                                        @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $index => $month)
                                            <div class="js-form-message form-check form-check-inline">
                                                <input type="checkbox" id="formInlineCheck{{ $index + 1 }}" class="form-check-input" value="{{ $month }}" wire:model="months_operated">
                                                <label class="form-check-label" for="formInlineCheck{{ $index + 1 }}">{{ $month }}</label>
                                            </div>
                                            
                                        @endforeach
                                        @error('months_operated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div>
                                    
                                        <hr>

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="rooms_yearend">2. How many rooms in total did the establishment have at the end of year?</label>
                                    <input type="number" id="rooms_yearend" class="form-control" placeholder="Rooms at the End of the Year End" wire:model="rooms_yearend">
                                    @error('rooms_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="beds_yearend">3. How many beds in total did the establishment have at the end of the year?</label>
                                    <input type="number" id="beds_yearend" class="form-control" placeholder="Beds at the End of the Year End" wire:model="beds_yearend">
                                    @error('beds_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="roomnights_sold">4. What was the total number of room nights sold & occupied?</label>
                                    <input type="number" id="roomnights_sold" class="form-control" placeholder="Room Nights Sold" wire:model="roomnights_sold">
                                    @error('roomnights_sold')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bednights_sold">5. What was the total number of bed nights sold?</label>
                                    <input type="number" id="bednights_sold" class="form-control" placeholder="Bed Nights Sold" wire:model="bednights_sold">
                                    @error('bednights_sold')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="roomrate_annual">6. What was the average annual room rate per night?</label>
                                    <input type="number" id="roomrate_annual" class="form-control" placeholder="Room Rate per Night (MVR)" wire:model="roomrate_annual">
                                    @error('roomrate_annual')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
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