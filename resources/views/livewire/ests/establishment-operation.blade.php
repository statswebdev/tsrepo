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
                    <h1 class="display-4 fw-bold">Operations</h1>
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
                                
                                  {{--   <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="months_operated">Select the months in operation during the reporting year</label>
                                        <input type="number" id="months_operated" class="form-control" placeholder="Months Operated" wire:model="months_operated">
                                        @error('months_operated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    </div> --}}
                                    <div class="mb-4 col-12 col-md-11">
                                    
                                        <label for="months_operated" class="form-label">1. Select the months in operation during the year {{ $this->est_record_id->collectionyear }}</label>
                                        <br>
                                        @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Not Operated','All the Months'] as $index => $month)
                                            <div class="js-form-message form-check form-check-inline">
                                                <input type="checkbox" id="formInlineCheck{{ $index + 1 }}" class="form-check-input" value="{{ $month }}" wire:model="months_operated">
                                                <label class="form-check-label" for="formInlineCheck{{ $index + 1 }}">{{ $month }}</label>
                                            </div>
                                            
                                        @endforeach
                                        @error('months_operated')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                    
                                    </div>
                                    
                                    <hr class="mt-5 mb-5">

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="rooms_yearend">2. How many rooms in total did the establishment have at the end of year {{ $this->est_record_id->collectionyear }}?</label>
                                    <input type="number" id="rooms_yearend" class="form-control" placeholder="Rooms at the End of the Year End" wire:model="rooms_yearend">
                                    @error('rooms_yearend')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="beds_yearend">3. How many beds in total did the establishment have at the end of the year {{ $this->est_record_id->collectionyear }}?</label>
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
                                    <label class="form-label" for="roomrate_annual">6. What was the average annual room rate per night? (MVR)</label>
                                    <input type="number" id="roomrate_annual" class="form-control" placeholder="Room Rate per Night (MVR)" wire:model="roomrate_annual">
                                    @error('roomrate_annual')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <hr class="mt-5 mb-5">
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