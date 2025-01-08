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
                    <h1 class="display-4 fw-bold">Establishment Information</h1>
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
                                    <label class="form-label" for="info_provider">1. Information Provider Name</label>
                                    <input type="text" id="info_provider" class="form-control" placeholder="Name" wire:model="info_provider">
                                    @error('info_provider')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="contact_number">2. Information Providers Contact Number</label>
                                    <input type="number" id="contact_number" class="form-control" placeholder="Mobile Number" wire:model="contact_number">
                                    @error('contact_number')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                               
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="type_organisation">3. Legal type of organisation</label>
                                    <select id="type_organisation" class="form-control" wire:model="type_organisation">
                                        <option value="">Select Type</option>
                                        <option value="Private Limited Company">Private Limited Company</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Establishment under a Company">Establishment under a Company</option>
                                        <option value="Cooperative Societies">Cooperative Societies</option>
                                        <option value="Foreign Company (100% Owned)">Foreign Company (100% Owned)</option>
                                    </select>
                                    @error('type_organisation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="operator_name">4. What is the name of operator?</label>
                                    <input type="text" id="operator_name" class="form-control" placeholder="Name" wire:model="operator_name">
                                    @error('operator_name')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="operator_register">5. What is the registration number of operator?</label>
                                    <input type="number" id="operator_register" class="form-control" placeholder="Register Number" wire:model="operator_register">
                                    @error('operator_register')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <hr class="mt-5 mb-5">
                                
                                    <h5 class="mb-2">6. What are the name of the owners for this establishment?</h5>
                                    <small>list upto 2 owners, except for soletrade. If under a company, record owner of the establishment if different, otherwise the owner of the parent company</small>
                                 
                                <div class="mt-3 mb-3 col-12 col-md-6">
                                    <label class="form-label" for="owner_one">Name of the owner 1</label>
                                    <input type="text" id="owner_one" class="form-control" placeholder="Name" wire:model="owner_one">
                                    @error('owner_one')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mt-3 mb-3 col-12 col-md-6">
                                    <label class="form-label" for="owner_two">Name of the owner 2</label>
                                    <input type="text" id="owner_two" class="form-control" placeholder="Name" wire:model="owner_two">
                                    @error('owner_two')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr class="mt-5 mb-5">
                                <h5 class="mb-2">7. Operator Contact Information</h5>
                                <small>Only for establishment under a company</small>

                                <div class="mt-3 mb-3 col-12 col-md-6">
                                    <label class="form-label" for="operator_contact">Contact Number of the Operator</label>
                                    <input type="text" id="operator_contact" class="form-control" placeholder="Phone Number" wire:model="operator_contact">
                                    @error('operator_contact')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mt-3 mb-3 col-12 col-md-6">
                                    <label class="form-label" for="operator_email">Email of Operator</label>
                                    <input type="email" id="operator_email" class="form-control" placeholder="Email" wire:model="operator_email">
                                    @error('operator_email')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr class="mt-5 mb-5">
                                <h5 class="mb-2">8. Share of Ownership of operator (End of the year)</h5>

                                <div class="mt-3 mb-3 col-12 col-md-4">
                                    <label class="form-label" for="government_share">Government Share (%)</label>
                                    <input type="number" id="government_share" class="form-control" placeholder="% Share " wire:model="government_share">
                                    @error('government_share')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mt-3 mb-3 col-12 col-md-4">
                                    <label class="form-label" for="maldivian_share">Maldivian Share (%)</label>
                                    <input type="number" id="maldivian_share" class="form-control" placeholder="% Share" wire:model="maldivian_share">
                                    @error('maldivian_share')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mt-3 mb-3 col-12 col-md-4">
                                    <label class="form-label" for="foreign_share">Foreign Share (%)</label>
                                    <input type="number" id="foreign_share" class="form-control" placeholder="% Share" wire:model="foreign_share">
                                    @error('foreign_share')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr class="mt-5 mb-5">


                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="taxpayer_number">9. Taxpayer Identification Number</label>
                                    <input type="text" id="taxpayer_number" class="form-control" placeholder="TIN" wire:model="taxpayer_number">
                                    @error('taxpayer_number')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="establishment_regdate">10. Establishment Registration Date</label>
                                    <input type="date" id="establishment_regdate" class="form-control" wire:model="establishment_regdate">
                                    @error('establishment_regdate')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bedcapacity">11. Registered Bed Capacity (End of the year)</label>
                                    <input type="number" id="bedcapacity" class="form-control" placeholder="Bed Capacity" wire:model="bedcapacity">
                                    @error('bedcapacity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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
