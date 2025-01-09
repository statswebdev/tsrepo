<div>
    <section class="pt-6">
        <div class="container">
            <div class="row mt-0 mt-md-4">      
                    <div class="col-lg-12 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border-0">
                        <!-- Card header -->
                        <div class="card-header d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <h3 class="mb-0">
                                @if($query)
                                    {{ $query->estname }} - Fish Products Information - {{ $query->collectionyear }}
                                @endif 
                            </h3>
                        </div>
                        
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="border-bottom pt-0 pb-4"> 
                                <!-- Pricing data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Skipjack Tuna Inhouse Catch</span>
                                        <h6 class="mb-0">
                                           {{$query->skipjacktuna_inhouse}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Skipjack Tuna Inhouse Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->skipjacktuna_inhouse_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Yellowfin Inhouse Catch</span>
                                        <h6 class="mb-0">
                                           {{$query->yellowfin_inhouse}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Yellowfin Inhouse Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->yellowfin_inhouse_qty}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Additional fish data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Reef Fish Inhouse Catch</span>
                                        <h6 class="mb-0">
                                           {{$query->reeffish_inhouse}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Reef Fish Inhouse Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->reeffish_inhouse_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seafood Inhouse Catch</span>
                                        <h6 class="mb-0">
                                           {{$query->seafood_inhouse}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seafood Inhouse Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->seafood_inhouse_qty}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Other fish data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fish Inhouse Catch</span>
                                        <h6 class="mb-0">
                                           {{$query->otherfish_inhouse}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fish Inhouse Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->otherfish_inhouse_qty}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Purchased fish data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Skipjack Tuna Purchased</span>
                                        <h6 class="mb-0">
                                           {{$query->skipjack_purchased}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Skipjack Tuna Purchased Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->skipjack_purchased_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Skipjack Tuna Purchased Value</span>
                                        <h6 class="mb-0">
                                           {{$query->skipjack_purchased_value}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Yellowfin purchased data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Yellowfin Purchased</span>
                                        <h6 class="mb-0">
                                           {{$query->yellowfin_purchased}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Yellowfin Purchased Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->yellowfin_purchased_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Yellowfin Purchased Value</span>
                                        <h6 class="mb-0">
                                           {{$query->yellowfin_purchased_value}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Reef fish purchased data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Reef Fish Purchased</span>
                                        <h6 class="mb-0">
                                           {{$query->reeffish_purchased}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Reef Fish Purchased Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->reeffish_purchased_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Reef Fish Purchased Value</span>
                                        <h6 class="mb-0">
                                           {{$query->reeffish_purchased_value}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Seafood purchased data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seafood Purchased</span>
                                        <h6 class="mb-0">
                                           {{$query->seafood_purchased}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seafood Purchased Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->seafood_purchased_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Seafood Purchased Value</span>
                                        <h6 class="mb-0">
                                           {{$query->seafood_purchased_value}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pt-4 pb-4"> 
                                <!-- Other fish purchased data -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fish Purchased</span>
                                        <h6 class="mb-0">
                                           {{$query->otherfish_purchased}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fish Purchased Quantity</span>
                                        <h6 class="mb-0">
                                           {{$query->otherfish_purchased_qty}}
                                        </h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Other Fish Purchased Value</span>
                                        <h6 class="mb-0">
                                           {{$query->otherfish_purchased_value}}
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="pt-4"> 
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Form Status</span>
                                        <h6 class="mb-0"><span class="badge bg-primary mt-0">{{ $query->status }}</span></h6>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6 mb-2 mb-lg-0">
                                        <span class="fs-6">Form Submitted</span>
                                        <h6 class="mb-0">{{ $query->created_at }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @if(Auth::user()->role === 'admin')
                    <div class="col-lg-12 col-md-12 col-12 mt-4">
                        <!-- Card -->
                        <div class="card">
                          <!-- Card header -->
                          <div class="card-header">
                            <h3 class="mb-0">Update Status</h3>
                            <p class="mb-0">Select a status if you wish to change</p>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                              <!-- Form -->
                              <form wire:submit.prevent="updateStatus">
                                <div class="mb-3 col-12 col-md-6">
                                  <label class="form-label" for="selectStatus">Select Status</label>
                                  <select class="form-select" aria-label="selectStatus" wire:model="status">
                                    <option selected>Select Status</option>
                                    <option value="completed">Completed</option>
                                    <option value="review">Review</option>
                                  </select>
                                  @error('status')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                  <!-- Button -->
                                  <button class="btn btn-primary" type="submit">Update Status</button>
                                </div>
                              </form>
                          </div>
                        </div>
                      </div>
                      @endif
                    </div>
                </div>
        </div>
    </section>
</div>
