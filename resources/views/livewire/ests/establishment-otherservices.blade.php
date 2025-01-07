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
                                    <input type="text" id="musicbands" class="form-control" placeholder="Music Bands" wire:model="musicbands">
                                    @error('musicbands')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="musicbands_contract" class="form-control" placeholder="Music Bands Contract" wire:model="musicbands_contract">
                                    @error('musicbands_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">DJ</label>
                                <div class="col-sm-3">
                                    <input type="text" id="dj" class="form-control" placeholder="DJ" wire:model="dj">
                                    @error('dj')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="dj_contract" class="form-control" placeholder="DJ Contract" wire:model="dj_contract">
                                    @error('dj_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Photography</label>
                                <div class="col-sm-3">
                                    <input type="text" id="photography" class="form-control" placeholder="Photography" wire:model="photography">
                                    @error('photography')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="photography_contract" class="form-control" placeholder="Photography Contract" wire:model="photography_contract">
                                    @error('photography_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Casual Workers (Sweepers/Gardeners)</label>
                                <div class="col-sm-3">
                                    <input type="text" id="casualworker" class="form-control" placeholder="Casual Worker" wire:model="casualworker">
                                    @error('casualworker')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="casualworker_contract" class="form-control" placeholder="Casual Worker Contract" wire:model="casualworker_contract">
                                    @error('casualworker_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Fisherman</label>
                                <div class="col-sm-3">
                                    <input type="text" id="fisherman" class="form-control" placeholder="Fisherman" wire:model="fisherman">
                                    @error('fisherman')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="fisherman_contract" class="form-control" placeholder="Fisherman Contract" wire:model="fisherman_contract">
                                    @error('fisherman_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Farmers</label>
                                <div class="col-sm-3">
                                    <input type="text" id="farmers" class="form-control" placeholder="Farmers" wire:model="farmers">
                                    @error('farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="farmers_contract" class="form-control" placeholder="Farmers Contract" wire:model="farmers_contract">
                                    @error('farmers_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Local Food</label>
                                <div class="col-sm-3">
                                    <input type="text" id="localfood" class="form-control" placeholder="Local Food" wire:model="localfood">
                                    @error('localfood')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="localfood_contract" class="form-control" placeholder="Local Food Contract" wire:model="localfood_contract">
                                    @error('localfood_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label class="col-form-label col-sm-2 text-end">Other Services</label>
                                <div class="col-sm-3">
                                    <input type="text" id="otherservices" class="form-control" placeholder="Other Services" wire:model="otherservices">
                                    @error('otherservices')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="otherservices_contract" class="form-control" placeholder="Other Services Contract" wire:model="otherservices_contract">
                                    @error('otherservices_contract')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>

                        <hr class="mb-5 mt-5">


                                <h5>2. Health Facility</h5>
                                <small class="mb-5">Health facility services during the year</small>
                                

                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="doctor_inhouse">Do you have a Inhouse Doctor and a Nurse</label>
                                    <input type="text" id="doctor_inhouse" class="form-control" placeholder="Doctor In-house" wire:model="doctor_inhouse">
                                    @error('doctor_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="nearest_healthfacility">Nearest Health Facility Used Normally</label>
                                    <input type="text" id="nearest_healthfacility" class="form-control" placeholder="Nearest Health Facility" wire:model="nearest_healthfacility">
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
                                    <input type="text" id="onestaff_accomodation" class="form-control" placeholder="One Staff Accommodation" wire:model="onestaff_accomodation">
                                    @error('onestaff_accomodation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="onestaff_accomodation_island" class="form-control" placeholder="One Staff Accommodation Island" wire:model="onestaff_accomodation_island">
                                    @error('onestaff_accomodation_island')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="onestaff_accomodation_local" class="form-control" placeholder="One Staff Accommodation Local" wire:model="onestaff_accomodation_local">
                                    @error('onestaff_accomodation_local')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="onestaff_accomodation_foreign" class="form-control" placeholder="One Staff Accommodation Foreign" wire:model="onestaff_accomodation_foreign">
                                    @error('onestaff_accomodation_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation" class="form-control" placeholder="Two Staff Accommodation" wire:model="twostaff_accomodation">
                                    @error('twostaff_accomodation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation_island" class="form-control" placeholder="Two Staff Accommodation Island" wire:model="twostaff_accomodation_island">
                                    @error('twostaff_accomodation_island')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation_local" class="form-control" placeholder="Two Staff Accommodation Local" wire:model="twostaff_accomodation_local">
                                    @error('twostaff_accomodation_local')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="twostaff_accomodation_foreign" class="form-control" placeholder="Two Staff Accommodation Foreign" wire:model="twostaff_accomodation_foreign">
                                    @error('twostaff_accomodation_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation" class="form-control" placeholder="Three Accommodation" wire:model="three_accomodation">
                                    @error('three_accomodation')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation_island" class="form-control" placeholder="Three Accommodation Island" wire:model="three_accomodation_island">
                                    @error('three_accomodation_island')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation_local" class="form-control" placeholder="Three Accommodation Local" wire:model="three_accomodation_local">
                                    @error('three_accomodation_local')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" id="three_accomodation_foreign" class="form-control" placeholder="Three Accommodation Foreign" wire:model="three_accomodation_foreign">
                                    @error('three_accomodation_foreign')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                            </div>

                            <hr class="mb-5 mt-5">

  
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