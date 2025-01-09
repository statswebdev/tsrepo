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

                                <h5>1. Other Services</h5>
                                <small class="mb-5">Did you rely on freelance locals for any services? - YEAR END (December)</small>

                                <div class="row mb-2">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-3 text-center"><label>Yes/No</label></div> 
                                    <div class="col-sm-3 text-center"><label>If Yes, Type of Contract</label></div>
 
                            </div>

                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Music Bands</label>
                                <div class="col-sm-3">
                                    <select id="musicbands" class="form-control" wire:model="musicbands">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('musicbands')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="musicbands_contract" class="form-control" wire:model="musicbands_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('musicbands_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">DJ</label>
                                <div class="col-sm-3">
                                    <select id="dj" class="form-control" wire:model="dj">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('dj')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="dj_contract" class="form-control" wire:model="dj_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('dj_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Photography</label>
                                <div class="col-sm-3">
                                    <select id="photography" class="form-control" wire:model="photography">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('photography')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="photography_contract" class="form-control" wire:model="photography_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('photography_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Casual Workers (Sweepers/Gardeners)</label>
                                <div class="col-sm-3">
                                    <select id="casualworker" class="form-control" wire:model="casualworker">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('casualworker')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="casualworker_contract" class="form-control" wire:model="casualworker_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('casualworker_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Fisherman</label>
                                <div class="col-sm-3">
                                    <select id="fisherman" class="form-control" wire:model="fisherman">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('fisherman')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="fisherman_contract" class="form-control" wire:model="fisherman_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('fisherman_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Farmers</label>
                                <div class="col-sm-3">
                                    <select id="farmers" class="form-control" wire:model="farmers">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="farmers_contract" class="form-control" wire:model="farmers_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('farmers_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Local Food</label>
                                <div class="col-sm-3">
                                    <select id="localfood" class="form-control" wire:model="localfood">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('localfood')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="localfood_contract" class="form-control" wire:model="localfood_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('localfood_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other Services</label>
                                <div class="col-sm-3">
                                    <input type="text" id="otherservices" class="form-control" placeholder="Specify" wire:model="otherservices">
                                    @error('otherservices')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <select id="otherservices_contract" class="form-control" wire:model="otherservices_contract">
                                        <option value="">Select</option>
                                        <option value="written">Written</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="no_contract">No Contract</option>
                                    </select>
                                    @error('otherservices_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>

                        <hr class="mb-5 mt-5">


                                <h5>2. Health Facility</h5>
                                <small class="mb-5">Health facility services during the year</small>
                                

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="doctor_inhouse">Do you have an Inhouse Doctor and a Nurse</label>
                                    <select id="doctor_inhouse" class="form-control" wire:model="doctor_inhouse">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('doctor_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="nearest_healthfacility">Nearest Health Facility Used Normally</label>
                                    <input type="text" id="nearest_healthfacility" class="form-control" placeholder="Name of the Health Facility" wire:model="nearest_healthfacility">
                                    @error('nearest_healthfacility')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>

                                <hr class="mb-5 mt-5">
                                <h5>3. Staff Accomodations</h5>
                                <small class="mb-5">Do you have staff accommodation in nearby island? Please state the number of staffs.</small>


                                <div class="row mb-2">
                                    <div class="col-sm-12"></div>
                                    <div class="col-sm-3 text-center"><label>Yes/No</label></div> 
                                    <div class="col-sm-3 text-center"><label>Atoll/Island</label></div>
                                    <div class="col-sm-3 text-center"><label>No. of Local Staff</label></div>
                                    <div class="col-sm-3 text-center"><label>No. of Foreign Staff</label></div>
 
                            </div>

                            <div class="form-group row mb-2">
                                
                                <div class="col-sm-3">
                                    <select id="onestaff_accomodation" class="form-control" wire:model="onestaff_accomodation">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('onestaff_accomodation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="onestaff_accomodation_island" class="form-control" placeholder="Atoll/Island Name" wire:model="onestaff_accomodation_island" :disabled="$wire.onestaff_accomodation === 'no'">
                                    @error('onestaff_accomodation_island')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="onestaff_accomodation_local" class="form-control" placeholder="number of employees" wire:model="onestaff_accomodation_local" :disabled="$wire.onestaff_accomodation === 'no'">
                                    @error('onestaff_accomodation_local')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="onestaff_accomodation_foreign" class="form-control" placeholder="number of employees" wire:model="onestaff_accomodation_foreign" :disabled="$wire.onestaff_accomodation === 'no'">
                                    @error('onestaff_accomodation_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                
                                <div class="col-sm-3">
                                    <select id="twostaff_accomodation" class="form-control" wire:model="twostaff_accomodation">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('twostaff_accomodation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation_island" class="form-control" placeholder="Atoll/Island Name" wire:model="twostaff_accomodation_island" :disabled="$wire.twostaff_accomodation === 'no'">
                                    @error('twostaff_accomodation_island')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation_local" class="form-control" placeholder="number of employees" wire:model="twostaff_accomodation_local" :disabled="$wire.twostaff_accomodation === 'no'">
                                    @error('twostaff_accomodation_local')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation_foreign" class="form-control" placeholder="number of employees" wire:model="twostaff_accomodation_foreign" :disabled="$wire.twostaff_accomodation === 'no'">
                                    @error('twostaff_accomodation_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                
                                <div class="col-sm-3">
                                    <select id="three_accomodation" class="form-control" wire:model="three_accomodation">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    @error('three_accomodation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation_island" class="form-control" placeholder="Atoll/Island Name" wire:model="three_accomodation_island" :disabled="$wire.three_accomodation === 'no'">
                                    @error('three_accomodation_island')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation_local" class="form-control" placeholder="number of employees" wire:model="three_accomodation_local" :disabled="$wire.three_accomodation === 'no'">
                                    @error('three_accomodation_local')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation_foreign" class="form-control" placeholder="number of employees" wire:model="three_accomodation_foreign" :disabled="$wire.three_accomodation === 'no'">
                                    @error('three_accomodation_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <hr class="mb-5 mt-5">

  
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