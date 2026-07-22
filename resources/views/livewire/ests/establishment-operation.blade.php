<div>
    <section class="pt-6">
        <div class="container px-4 px-lg-0">
            <div class="row align-items-center">
                @if (session()->has('updated'))
                    <div class="col-12">
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-check-circle-fill me-2 flex-shrink-0" viewBox="0 0 16 16" aria-hidden="true">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg>
                            <div>{{ session('updated') }}</div>
                        </div>
                    </div>
                @endif

                <div class="col-lg-8">
                    <span class="badge bg-light-primary text-primary mb-3">Annual tourism survey</span>
                    <h1 class="display-5 fw-bold mb-2">Operations</h1>
                    <p class="lead mb-0">Add operating months, room and bed inventory, occupancy, and average room rate details.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6">
        <div class="container px-4 px-lg-0">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex flex-column flex-md-row justify-content-between gap-2">
                            <div>
                                <h3 class="mb-1">Fill the information</h3>
                                <p class="mb-0 text-muted">Report values for the year {{ $this->est_record_id->collectionyear }}.</p>
                            </div>
                            <span class="badge bg-light text-dark align-self-md-center">6 questions</span>
                        </div>

                        <div class="card-body">
                            <form wire:submit.prevent="submitRecord" class="row g-4">
                                <div class="col-12">
                                    <div class="border-bottom pb-2">
                                        <h4 class="mb-1">Operating Period</h4>
                                        <p class="mb-0 text-muted">Select all months the establishment operated during the reporting year.</p>
                                    </div>
                                </div>

                                <div class="col-12 ">
                                    <fieldset>
                                        <legend class="form-label">1. Months in operation during {{ $this->est_record_id->collectionyear }}</legend>

                                        <div class="row g-2">
                                            @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Not Operated', 'All the Months'] as $index => $month)
                                                <div class="col-6 col-md-4 col-lg-3">
                                                    <div class="form-check border rounded px-3 py-2 h-100">
                                                        <input type="checkbox" id="months_operated_{{ $index + 1 }}"
                                                            class="form-check-input ms-0 me-2 @error('months_operated') is-invalid @enderror"
                                                            value="{{ $month }}" wire:model="months_operated">
                                                        <label class="form-check-label" for="months_operated_{{ $index + 1 }}">{{ $month }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        @error('months_operated')<div class="text-danger small mt-2">{{ $message }}</div>@enderror
                                    </fieldset>
                                </div>

                                <div class="col-12">
                                    <div class="border-bottom pb-2 mt-2">
                                        <h4 class="mb-1">Inventory at Year End</h4>
                                        <p class="mb-0 text-muted">Rooms and beds available at the end of {{ $this->est_record_id->collectionyear }}.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="rooms_yearend">2. Total rooms at year end</label>
                                    <input type="number" id="rooms_yearend" class="form-control @error('rooms_yearend') is-invalid @enderror"
                                        placeholder="Rooms at year end" wire:model.blur="rooms_yearend" min="0" max="2500" step="1" required>
                                    @error('rooms_yearend')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="beds_yearend">3. Total beds at year end</label>
                                    <input type="number" id="beds_yearend" class="form-control @error('beds_yearend') is-invalid @enderror"
                                        placeholder="Beds at year end" wire:model.blur="beds_yearend" min="0" max="2500" step="1" required>
                                    @error('beds_yearend')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="border-bottom pb-2 mt-2">
                                        <h4 class="mb-1">Nights Sold and Rate</h4>
                                        <p class="mb-0 text-muted">Enter annual room nights, bed nights, and average room rate.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="roomnights_sold">4. Total room nights sold and occupied</label>
                                    <input type="number" id="roomnights_sold" class="form-control @error('roomnights_sold') is-invalid @enderror"
                                        placeholder="Room nights sold" wire:model.blur="roomnights_sold" min="0" step="1" required>
                                    <div class="form-text">Must not exceed rooms at year end multiplied by 365.</div>
                                    @error('roomnights_sold')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="bednights_sold">5. Total bed nights sold</label>
                                    <input type="number" id="bednights_sold" class="form-control @error('bednights_sold') is-invalid @enderror"
                                        placeholder="Bed nights sold" wire:model.blur="bednights_sold" min="0" step="1" required>
                                    <div class="form-text">Must not exceed beds at year end multiplied by 365.</div>
                                    @error('bednights_sold')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="roomrate_annual">6. Average annual room rate per night (MVR)</label>
                                    <input type="number" id="roomrate_annual" class="form-control @error('roomrate_annual') is-invalid @enderror"
                                        placeholder="Room rate per night" wire:model.blur="roomrate_annual" min="0" max="100000" step="1" required>
                                    @error('roomrate_annual')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="d-flex flex-column flex-sm-row justify-content-end gap-2 border-top pt-4 mt-2">
                                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="submitRecord">
                                            <span wire:loading.remove wire:target="submitRecord">Submit operations</span>
                                            <span wire:loading wire:target="submitRecord">
                                                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                                Submitting...
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
