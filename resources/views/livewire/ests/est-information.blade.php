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
                    <h1 class="display-5 fw-bold mb-2">Establishment Information</h1>
                    <p class="lead mb-0">Add the operator, ownership, tax, and capacity details for this establishment.</p>
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
                                <p class="mb-0 text-muted">Fields marked as optional can be left blank when they do not apply.</p>
                            </div>
                            <span class="badge bg-light text-dark align-self-md-center">11 questions</span>
                        </div>

                        <div class="card-body">
                            <form wire:submit.prevent="submitRecord" class="row g-4">
                                <div class="col-12">
                                    <div class="border-bottom pb-2">
                                        <h4 class="mb-1">Information Provider</h4>
                                        <p class="mb-0 text-muted">Who can be contacted if this submission needs clarification?</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="info_provider">1. Information provider name</label>
                                    <input type="text" id="info_provider" class="form-control @error('info_provider') is-invalid @enderror"
                                        placeholder="Full name" wire:model.blur="info_provider" autocomplete="name" required>
                                    @error('info_provider')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact_number">2. Information provider contact number</label>
                                    <input type="tel" id="contact_number" class="form-control @error('contact_number') is-invalid @enderror"
                                        placeholder="7 digit mobile number" wire:model.blur="contact_number" inputmode="numeric"
                                        pattern="[97][0-9]{6}" maxlength="7" autocomplete="tel" required>
                                    <div class="form-text">Must start with 7 or 9.</div>
                                    @error('contact_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="border-bottom pb-2 mt-2">
                                        <h4 class="mb-1">Operator Details</h4>
                                        <p class="mb-0 text-muted">Legal registration and ownership details for the operator.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="type_organisation">3. Legal type of organisation</label>
                                    <select id="type_organisation" class="form-select @error('type_organisation') is-invalid @enderror"
                                        wire:model.blur="type_organisation" required>
                                        <option value="">Select legal type</option>
                                        <option value="Private Limited Company">Private Limited Company</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Establishment under a Company">Establishment under a Company</option>
                                        <option value="Cooperative Societies">Cooperative Societies</option>
                                        <option value="Foreign Company (100% Owned)">Foreign Company (100% Owned)</option>
                                        <option value="Sole Proprietorship">Sole Proprietorship</option>
                                    </select>
                                    @error('type_organisation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="operator_name">4. Operator name</label>
                                    <input type="text" id="operator_name" class="form-control @error('operator_name') is-invalid @enderror"
                                        placeholder="Registered operator name" wire:model.blur="operator_name" autocomplete="organization" required>
                                    @error('operator_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="operator_register">5. Operator registration number</label>
                                    <input type="text" id="operator_register" class="form-control text-uppercase @error('operator_register') is-invalid @enderror"
                                        placeholder="SP-1234/2025 or C-1234/2025" wire:model.blur="operator_register"
                                        pattern="(SP|C)-[0-9]{4}/[0-9]{4}" required>
                                    <div class="form-text">Use SP-1234/2025 for sole proprietorships or C-1234/2025 for companies.</div>
                                    @error('operator_register')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="bg-light rounded p-3">
                                        <h5 class="mb-1">6. Owners of the establishment</h5>
                                        <p class="mb-0 text-muted">List up to 2 owners. For establishments under a company, record the establishment owner if different; otherwise record the parent company owner.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="owner_one">Owner 1 name</label>
                                    <input type="text" id="owner_one" class="form-control @error('owner_one') is-invalid @enderror"
                                        placeholder="Full name" wire:model.blur="owner_one" required>
                                    @error('owner_one')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="owner_two">Owner 2 name <span class="text-muted">(optional)</span></label>
                                    <input type="text" id="owner_two" class="form-control @error('owner_two') is-invalid @enderror"
                                        placeholder="Full name" wire:model.blur="owner_two">
                                    @error('owner_two')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="border-bottom pb-2 mt-2">
                                        <h4 class="mb-1">Operator Contact</h4>
                                        <p class="mb-0 text-muted">If there is more than one operator, enter the main operator contact.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="operator_contact">7. Operator contact number</label>
                                    <input type="tel" id="operator_contact" class="form-control @error('operator_contact') is-invalid @enderror"
                                        placeholder="7 digit phone number" wire:model.blur="operator_contact" inputmode="numeric"
                                        pattern="[34697][0-9]{6}" maxlength="7" autocomplete="tel" required>
                                    <div class="form-text">Must start with 3, 4, 6, 7, or 9.</div>
                                    @error('operator_contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="operator_email">Operator email</label>
                                    <input type="email" id="operator_email" class="form-control @error('operator_email') is-invalid @enderror"
                                        placeholder="name@example.com" wire:model.blur="operator_email" autocomplete="email" required>
                                    @error('operator_email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="border-bottom pb-2 mt-2">
                                        <h4 class="mb-1">Ownership Share</h4>
                                        <p class="mb-0 text-muted">8. Share of ownership of operator at the end of the year.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="government_share">Government share (%)</label>
                                    <input type="number" id="government_share" class="form-control @error('government_share') is-invalid @enderror"
                                        placeholder="0" wire:model.blur="government_share" min="0" max="100" step="1" required>
                                    @error('government_share')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="maldivian_share">Maldivian share (%)</label>
                                    <input type="number" id="maldivian_share" class="form-control @error('maldivian_share') is-invalid @enderror"
                                        placeholder="0" wire:model.blur="maldivian_share" min="0" max="100" step="1" required>
                                    @error('maldivian_share')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-4">
                                    <label class="form-label" for="foreign_share">Foreign share (%)</label>
                                    <input type="number" id="foreign_share" class="form-control @error('foreign_share') is-invalid @enderror"
                                        placeholder="0" wire:model.blur="foreign_share" min="0" max="100" step="1" required>
                                    @error('foreign_share')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                @if ($errors->has('total_share'))
                                    <div class="col-12">
                                        <div class="alert alert-danger mb-0">{{ $errors->first('total_share') }}</div>
                                    </div>
                                @endif

                                <div class="col-12">
                                    <div class="border-bottom pb-2 mt-2">
                                        <h4 class="mb-1">Tax and Capacity</h4>
                                        <p class="mb-0 text-muted">Registration, taxpayer, and bed capacity details.</p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="taxpayer_number">9. Taxpayer identification number</label>
                                    <input type="text" id="taxpayer_number" class="form-control text-uppercase @error('taxpayer_number') is-invalid @enderror"
                                        placeholder="1234567GST123" wire:model.blur="taxpayer_number" pattern="[0-9]{7}(GST|GRT)[0-9]{3}" required>
                                    <div class="form-text">Use the TIN format 1234567GST123.</div>
                                    @error('taxpayer_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="establishment_regdate">10. Establishment registration date</label>
                                    <input type="date" id="establishment_regdate" class="form-control @error('establishment_regdate') is-invalid @enderror"
                                        wire:model.blur="establishment_regdate" required>
                                    @error('establishment_regdate')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="bedcapacity">11. Registered bed capacity at end of year</label>
                                    <input type="number" id="bedcapacity" class="form-control @error('bedcapacity') is-invalid @enderror"
                                        placeholder="Bed capacity" wire:model.blur="bedcapacity" min="0" max="1500" step="1" required>
                                    @error('bedcapacity')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="d-flex flex-column flex-sm-row justify-content-end gap-2 border-top pt-4 mt-2">
                                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="submitRecord">
                                            <span wire:loading.remove wire:target="submitRecord">Submit information</span>
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
