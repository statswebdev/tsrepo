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
                                    <label class="form-label" for="generator_capacity_unit">Generator Capacity Unit</label>
                                    <input type="number" id="generator_capacity_unit" class="form-control" placeholder="Generator Capacity Unit" wire:model="generator_capacity_unit">
                                    @error('generator_capacity_unit')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="generator_capacity_qty">Generator Capacity Quantity</label>
                                    <input type="number" id="generator_capacity_qty" class="form-control" placeholder="Generator Capacity Quantity" wire:model="generator_capacity_qty">
                                    @error('generator_capacity_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="solar_rooftop">Solar Rooftop</label>
                                    <input type="number" id="solar_rooftop" class="form-control" placeholder="Solar Rooftop" wire:model="solar_rooftop">
                                    @error('solar_rooftop')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="solar_groundmounted">Solar Ground Mounted</label>
                                    <input type="number" id="solar_groundmounted" class="form-control" placeholder="Solar Ground Mounted" wire:model="solar_groundmounted">
                                    @error('solar_groundmounted')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="solar_floating">Solar Floating</label>
                                    <input type="number" id="solar_floating" class="form-control" placeholder="Solar Floating" wire:model="solar_floating">
                                    @error('solar_floating')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="energy_storage">Energy Storage</label>
                                    <input type="text" id="energy_storage" class="form-control" placeholder="Energy Storage" wire:model="energy_storage">
                                    @error('energy_storage')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="energy_storage_power">Energy Storage Power</label>
                                    <input type="number" id="energy_storage_power" class="form-control" placeholder="Energy Storage Power" wire:model="energy_storage_power">
                                    @error('energy_storage_power')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="energy_storage_kwh">Energy Storage kWh</label>
                                    <input type="number" id="energy_storage_kwh" class="form-control" placeholder="Energy Storage kWh" wire:model="energy_storage_kwh">
                                    @error('energy_storage_kwh')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="energy_storage_other">Other Energy Storage</label>
                                    <input type="text" id="energy_storage_other" class="form-control" placeholder="Other Energy Storage" wire:model="energy_storage_other">
                                    @error('energy_storage_other')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="energy_storage_othertype">Other Energy Storage Type</label>
                                    <input type="text" id="energy_storage_othertype" class="form-control" placeholder="Other Energy Storage Type" wire:model="energy_storage_othertype">
                                    @error('energy_storage_othertype')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="energy_storage_othercapacity">Other Energy Storage Capacity</label>
                                    <input type="number" id="energy_storage_othercapacity" class="form-control" placeholder="Other Energy Storage Capacity" wire:model="energy_storage_othercapacity">
                                    @error('energy_storage_othercapacity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="solar_waterheating">Solar Water Heating</label>
                                    <input type="number" id="solar_waterheating" class="form-control" placeholder="Solar Water Heating" wire:model="solar_waterheating">
                                    @error('solar_waterheating')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="waste_heatrecovery">Waste Heat Recovery</label>
                                    <input type="number" id="waste_heatrecovery" class="form-control" placeholder="Waste Heat Recovery" wire:model="waste_heatrecovery">
                                    @error('waste_heatrecovery')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="other_energy_capacity">Other Energy Capacity</label>
                                    <input type="number" id="other_energy_capacity" class="form-control" placeholder="Other Energy Capacity" wire:model="other_energy_capacity">
                                    @error('other_energy_capacity')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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