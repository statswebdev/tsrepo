<div>

    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('created'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                            </path>
                        </svg>
                        <div>{{session('created')}}</div>
                    </div>
                    @endif
                </div>
                <!-- row -->
                <div class="col-md-12">
                    <!-- heading -->
                    <h1 class="display-4 fw-bold">Establishment Records</h1>
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
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="recordname">Record Name</label>
                                    <input type="text" id="recordname" class="form-control" placeholder="Record Name" wire:model="recordname">
                                    @error('recordname')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="collectionyear">Information Collection Year</label>
                                    <input type="text" id="collectionyear" class="form-control" placeholder="2024" wire:model="collectionyear">
                                    @error('collectionyear')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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



    <section class="pt-6">
        <div class="container px-4 px-lg-0"> 
            <div class="row">
                <!-- row -->
                <div class="col-md-12">
                      <!-- Card -->
                        <div class="card mb-4">
                            <ul class="list-group list-group-flush">
                                @foreach($listestrecords as $listestrecord)                                                                                  
                                <li class="list-group-item disabled" aria-disabled="true">
                                    <a href="#" class="d-flex justify-content-between align-items-center text-inherit">
                                        <div class="text-truncate">
                                            <span>{{ $listestrecord->recordname }}</span>
                                        </div>
                                        <div class="text-truncate">
                                            <span>{{ $listestrecord->collectionyear }}</span>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>


</div>
