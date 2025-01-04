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
                                    <label class="form-label" for="watermelon_inhouse">Watermelon Inhouse</label>
                                    <input type="text" id="watermelon_inhouse" class="form-control" placeholder="Watermelon Inhouse" wire:model="watermelon_inhouse">
                                    @error('watermelon_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="watermelon_grown">Watermelon Grown</label>
                                    <input type="number" id="watermelon_grown" class="form-control" placeholder="Watermelon Grown" wire:model="watermelon_grown">
                                    @error('watermelon_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="coconut_inhouse">Coconut Inhouse</label>
                                    <input type="text" id="coconut_inhouse" class="form-control" placeholder="Coconut Inhouse" wire:model="coconut_inhouse">
                                    @error('coconut_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="coconut_grown">Coconut Grown</label>
                                    <input type="number" id="coconut_grown" class="form-control" placeholder="Coconut Grown" wire:model="coconut_grown">
                                    @error('coconut_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="papaya_inhouse">Papaya Inhouse</label>
                                    <input type="text" id="papaya_inhouse" class="form-control" placeholder="Papaya Inhouse" wire:model="papaya_inhouse">
                                    @error('papaya_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="papaya_grown">Papaya Grown</label>
                                    <input type="number" id="papaya_grown" class="form-control" placeholder="Papaya Grown" wire:model="papaya_grown">
                                    @error('papaya_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="pumpkin_inhouse">Pumpkin Inhouse</label>
                                    <input type="text" id="pumpkin_inhouse" class="form-control" placeholder="Pumpkin Inhouse" wire:model="pumpkin_inhouse">
                                    @error('pumpkin_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="pumpkin_grown">Pumpkin Grown</label>
                                    <input type="number" id="pumpkin_grown" class="form-control" placeholder="Pumpkin Grown" wire:model="pumpkin_grown">
                                    @error('pumpkin_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cucumber_inhouse">Cucumber Inhouse</label>
                                    <input type="text" id="cucumber_inhouse" class="form-control" placeholder="Cucumber Inhouse" wire:model="cucumber_inhouse">
                                    @error('cucumber_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cucumber_grown">Cucumber Grown</label>
                                    <input type="number" id="cucumber_grown" class="form-control" placeholder="Cucumber Grown" wire:model="cucumber_grown">
                                    @error('cucumber_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="banana_inhouse">Banana Inhouse</label>
                                    <input type="text" id="banana_inhouse" class="form-control" placeholder="Banana Inhouse" wire:model="banana_inhouse">
                                    @error('banana_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="banana_grown">Banana Grown</label>
                                    <input type="number" id="banana_grown" class="form-control" placeholder="Banana Grown" wire:model="banana_grown">
                                    @error('banana_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="brinjal_inhouse">Brinjal Inhouse</label>
                                    <input type="text" id="brinjal_inhouse" class="form-control" placeholder="Brinjal Inhouse" wire:model="brinjal_inhouse">
                                    @error('brinjal_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="brinjal_grown">Brinjal Grown</label>
                                    <input type="number" id="brinjal_grown" class="form-control" placeholder="Brinjal Grown" wire:model="brinjal_grown">
                                    @error('brinjal_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="chillies_inhouse">Chillies Inhouse</label>
                                    <input type="text" id="chillies_inhouse" class="form-control" placeholder="Chillies Inhouse" wire:model="chillies_inhouse">
                                    @error('chillies_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="chillies_grown">Chillies Grown</label>
                                    <input type="number" id="chillies_grown" class="form-control" placeholder="Chillies Grown" wire:model="chillies_grown">
                                    @error('chillies_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bottlegourd_inhouse">Bottlegourd Inhouse</label>
                                    <input type="text" id="bottlegourd_inhouse" class="form-control" placeholder="Bottlegourd Inhouse" wire:model="bottlegourd_inhouse">
                                    @error('bottlegourd_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bottlegourd_grown">Bottlegourd Grown</label>
                                    <input type="number" id="bottlegourd_grown" class="form-control" placeholder="Bottlegourd Grown" wire:model="bottlegourd_grown">
                                    @error('bottlegourd_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="butternut_inhouse">Butternut Inhouse</label>
                                    <input type="text" id="butternut_inhouse" class="form-control" placeholder="Butternut Inhouse" wire:model="butternut_inhouse">
                                    @error('butternut_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="butternut_grown">Butternut Grown</label>
                                    <input type="number" id="butternut_grown" class="form-control" placeholder="Butternut Grown" wire:model="butternut_grown">
                                    @error('butternut_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cabbage_inhouse">Cabbage Inhouse</label>
                                    <input type="text" id="cabbage_inhouse" class="form-control" placeholder="Cabbage Inhouse" wire:model="cabbage_inhouse">
                                    @error('cabbage_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cabbage_grown">Cabbage Grown</label>
                                    <input type="number" id="cabbage_grown" class="form-control" placeholder="Cabbage Grown" wire:model="cabbage_grown">
                                    @error('cabbage_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="mango_inhouse">Mango Inhouse</label>
                                    <input type="text" id="mango_inhouse" class="form-control" placeholder="Mango Inhouse" wire:model="mango_inhouse">
                                    @error('mango_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="mango_grown">Mango Grown</label>
                                    <input type="number" id="mango_grown" class="form-control" placeholder="Mango Grown" wire:model="mango_grown">
                                    @error('mango_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="waxgourd_inhouse">Waxgourd Inhouse</label>
                                    <input type="text" id="waxgourd_inhouse" class="form-control" placeholder="Waxgourd Inhouse" wire:model="waxgourd_inhouse">
                                    @error('waxgourd_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="waxgourd_grown">Waxgourd Grown</label>
                                    <input type="number" id="waxgourd_grown" class="form-control" placeholder="Waxgourd Grown" wire:model="waxgourd_grown">
                                    @error('waxgourd_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrione_inhouse">Other Agri One Inhouse</label>
                                    <input type="text" id="otheragrione_inhouse" class="form-control" placeholder="Other Agri One Inhouse" wire:model="otheragrione_inhouse">
                                    @error('otheragrione_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrione_grown">Other Agri One Grown</label>
                                    <input type="number" id="otheragrione_grown" class="form-control" placeholder="Other Agri One Grown" wire:model="otheragrione_grown">
                                    @error('otheragrione_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragritwo_inhouse">Other Agri Two Inhouse</label>
                                    <input type="text" id="otheragritwo_inhouse" class="form-control" placeholder="Other Agri Two Inhouse" wire:model="otheragritwo_inhouse">
                                    @error('otheragritwo_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragritwo_grown">Other Agri Two Grown</label>
                                    <input type="number" id="otheragritwo_grown" class="form-control" placeholder="Other Agri Two Grown" wire:model="otheragritwo_grown">
                                    @error('otheragritwo_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrithree_inhouse">Other Agri Three Inhouse</label>
                                    <input type="text" id="otheragrithree_inhouse" class="form-control" placeholder="Other Agri Three Inhouse" wire:model="otheragrithree_inhouse">
                                    @error('otheragrithree_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrithree_grown">Other Agri Three Grown</label>
                                    <input type="number" id="otheragrithree_grown" class="form-control" placeholder="Other Agri Three Grown" wire:model="otheragrithree_grown">
                                    @error('otheragrithree_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrifour_inhouse">Other Agri Four Inhouse</label>
                                    <input type="text" id="otheragrifour_inhouse" class="form-control" placeholder="Other Agri Four Inhouse" wire:model="otheragrifour_inhouse">
                                    @error('otheragrifour_inhouse')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrifour_grown">Other Agri Four Grown</label>
                                    <input type="number" id="otheragrifour_grown" class="form-control" placeholder="Other Agri Four Grown" wire:model="otheragrifour_grown">
                                    @error('otheragrifour_grown')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="watermelon_farmers">Watermelon Farmers</label>
                                    <input type="text" id="watermelon_farmers" class="form-control" placeholder="Watermelon Farmers" wire:model="watermelon_farmers">
                                    @error('watermelon_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="watermelon_farmers_qty">Watermelon Farmers Quantity</label>
                                    <input type="number" id="watermelon_farmers_qty" class="form-control" placeholder="Watermelon Farmers Quantity" wire:model="watermelon_farmers_qty">
                                    @error('watermelon_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="watermelon_farmers_value">Watermelon Farmers Value</label>
                                    <input type="number" id="watermelon_farmers_value" class="form-control" placeholder="Watermelon Farmers Value" wire:model="watermelon_farmers_value">
                                    @error('watermelon_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="coconut_farmers">Coconut Farmers</label>
                                    <input type="text" id="coconut_farmers" class="form-control" placeholder="Coconut Farmers" wire:model="coconut_farmers">
                                    @error('coconut_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="coconut_farmers_qty">Coconut Farmers Quantity</label>
                                    <input type="number" id="coconut_farmers_qty" class="form-control" placeholder="Coconut Farmers Quantity" wire:model="coconut_farmers_qty">
                                    @error('coconut_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="coconut_farmers_value">Coconut Farmers Value</label>
                                    <input type="number" id="coconut_farmers_value" class="form-control" placeholder="Coconut Farmers Value" wire:model="coconut_farmers_value">
                                    @error('coconut_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="papaya_farmers">Papaya Farmers</label>
                                    <input type="text" id="papaya_farmers" class="form-control" placeholder="Papaya Farmers" wire:model="papaya_farmers">
                                    @error('papaya_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="papaya_farmers_qty">Papaya Farmers Quantity</label>
                                    <input type="number" id="papaya_farmers_qty" class="form-control" placeholder="Papaya Farmers Quantity" wire:model="papaya_farmers_qty">
                                    @error('papaya_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="papaya_farmers_value">Papaya Farmers Value</label>
                                    <input type="number" id="papaya_farmers_value" class="form-control" placeholder="Papaya Farmers Value" wire:model="papaya_farmers_value">
                                    @error('papaya_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="pumpkin_farmers">Pumpkin Farmers</label>
                                    <input type="text" id="pumpkin_farmers" class="form-control" placeholder="Pumpkin Farmers" wire:model="pumpkin_farmers">
                                    @error('pumpkin_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="pumpkin_farmers_qty">Pumpkin Farmers Quantity</label>
                                    <input type="number" id="pumpkin_farmers_qty" class="form-control" placeholder="Pumpkin Farmers Quantity" wire:model="pumpkin_farmers_qty">
                                    @error('pumpkin_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="pumpkin_farmers_value">Pumpkin Farmers Value</label>
                                    <input type="number" id="pumpkin_farmers_value" class="form-control" placeholder="Pumpkin Farmers Value" wire:model="pumpkin_farmers_value">
                                    @error('pumpkin_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cucumber_farmers">Cucumber Farmers</label>
                                    <input type="text" id="cucumber_farmers" class="form-control" placeholder="Cucumber Farmers" wire:model="cucumber_farmers">
                                    @error('cucumber_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cucumber_farmers_qty">Cucumber Farmers Quantity</label>
                                    <input type="number" id="cucumber_farmers_qty" class="form-control" placeholder="Cucumber Farmers Quantity" wire:model="cucumber_farmers_qty">
                                    @error('cucumber_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cucumber_farmers_value">Cucumber Farmers Value</label>
                                    <input type="number" id="cucumber_farmers_value" class="form-control" placeholder="Cucumber Farmers Value" wire:model="cucumber_farmers_value">
                                    @error('cucumber_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="banana_farmers">Banana Farmers</label>
                                    <input type="text" id="banana_farmers" class="form-control" placeholder="Banana Farmers" wire:model="banana_farmers">
                                    @error('banana_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="banana_farmers_qty">Banana Farmers Quantity</label>
                                    <input type="number" id="banana_farmers_qty" class="form-control" placeholder="Banana Farmers Quantity" wire:model="banana_farmers_qty">
                                    @error('banana_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="banana_farmers_value">Banana Farmers Value</label>
                                    <input type="number" id="banana_farmers_value" class="form-control" placeholder="Banana Farmers Value" wire:model="banana_farmers_value">
                                    @error('banana_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="brinjal_farmers">Brinjal Farmers</label>
                                    <input type="text" id="brinjal_farmers" class="form-control" placeholder="Brinjal Farmers" wire:model="brinjal_farmers">
                                    @error('brinjal_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="brinjal_farmers_qty">Brinjal Farmers Quantity</label>
                                    <input type="number" id="brinjal_farmers_qty" class="form-control" placeholder="Brinjal Farmers Quantity" wire:model="brinjal_farmers_qty">
                                    @error('brinjal_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="brinjal_farmers_value">Brinjal Farmers Value</label>
                                    <input type="number" id="brinjal_farmers_value" class="form-control" placeholder="Brinjal Farmers Value" wire:model="brinjal_farmers_value">
                                    @error('brinjal_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="chillies_farmers">Chillies Farmers</label>
                                    <input type="text" id="chillies_farmers" class="form-control" placeholder="Chillies Farmers" wire:model="chillies_farmers">
                                    @error('chillies_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="chillies_farmers_qty">Chillies Farmers Quantity</label>
                                    <input type="number" id="chillies_farmers_qty" class="form-control" placeholder="Chillies Farmers Quantity" wire:model="chillies_farmers_qty">
                                    @error('chillies_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="chillies_farmers_value">Chillies Farmers Value</label>
                                    <input type="number" id="chillies_farmers_value" class="form-control" placeholder="Chillies Farmers Value" wire:model="chillies_farmers_value">
                                    @error('chillies_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bottlegourd_farmers">Bottlegourd Farmers</label>
                                    <input type="text" id="bottlegourd_farmers" class="form-control" placeholder="Bottlegourd Farmers" wire:model="bottlegourd_farmers">
                                    @error('bottlegourd_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bottlegourd_farmers_qty">Bottlegourd Farmers Quantity</label>
                                    <input type="number" id="bottlegourd_farmers_qty" class="form-control" placeholder="Bottlegourd Farmers Quantity" wire:model="bottlegourd_farmers_qty">
                                    @error('bottlegourd_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="bottlegourd_farmers_value">Bottlegourd Farmers Value</label>
                                    <input type="number" id="bottlegourd_farmers_value" class="form-control" placeholder="Bottlegourd Farmers Value" wire:model="bottlegourd_farmers_value">
                                    @error('bottlegourd_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="butternut_farms">Butternut Farms</label>
                                    <input type="text" id="butternut_farms" class="form-control" placeholder="Butternut Farms" wire:model="butternut_farms">
                                    @error('butternut_farms')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="butternut_farmers_qty">Butternut Farmers Quantity</label>
                                    <input type="number" id="butternut_farmers_qty" class="form-control" placeholder="Butternut Farmers Quantity" wire:model="butternut_farmers_qty">
                                    @error('butternut_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="butternut_farmers_value">Butternut Farmers Value</label>
                                    <input type="number" id="butternut_farmers_value" class="form-control" placeholder="Butternut Farmers Value" wire:model="butternut_farmers_value">
                                    @error('butternut_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cabbage_farmers">Cabbage Farmers</label>
                                    <input type="text" id="cabbage_farmers" class="form-control" placeholder="Cabbage Farmers" wire:model="cabbage_farmers">
                                    @error('cabbage_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cabbage_farmers_qty">Cabbage Farmers Quantity</label>
                                    <input type="number" id="cabbage_farmers_qty" class="form-control" placeholder="Cabbage Farmers Quantity" wire:model="cabbage_farmers_qty">
                                    @error('cabbage_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="cabbage_farmers_value">Cabbage Farmers Value</label>
                                    <input type="number" id="cabbage_farmers_value" class="form-control" placeholder="Cabbage Farmers Value" wire:model="cabbage_farmers_value">
                                    @error('cabbage_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="mango_farmers">Mango Farmers</label>
                                    <input type="text" id="mango_farmers" class="form-control" placeholder="Mango Farmers" wire:model="mango_farmers">
                                    @error('mango_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="mango_farmers_qty">Mango Farmers Quantity</label>
                                    <input type="number" id="mango_farmers_qty" class="form-control" placeholder="Mango Farmers Quantity" wire:model="mango_farmers_qty">
                                    @error('mango_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="mango_farmers_value">Mango Farmers Value</label>
                                    <input type="number" id="mango_farmers_value" class="form-control" placeholder="Mango Farmers Value" wire:model="mango_farmers_value">
                                    @error('mango_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="waxgourd_farmers">Waxgourd Farmers</label>
                                    <input type="text" id="waxgourd_farmers" class="form-control" placeholder="Waxgourd Farmers" wire:model="waxgourd_farmers">
                                    @error('waxgourd_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="waxgourd_farmers_qty">Waxgourd Farmers Quantity</label>
                                    <input type="number" id="waxgourd_farmers_qty" class="form-control" placeholder="Waxgourd Farmers Quantity" wire:model="waxgourd_farmers_qty">
                                    @error('waxgourd_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="waxgourd_farmers_value">Waxgourd Farmers Value</label>
                                    <input type="number" id="waxgourd_farmers_value" class="form-control" placeholder="Waxgourd Farmers Value" wire:model="waxgourd_farmers_value">
                                    @error('waxgourd_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrione_farmers">Other Agri One Farmers</label>
                                    <input type="text" id="otheragrione_farmers" class="form-control" placeholder="Other Agri One Farmers" wire:model="otheragrione_farmers">
                                    @error('otheragrione_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrione_farmers_qty">Other Agri One Farmers Quantity</label>
                                    <input type="number" id="otheragrione_farmers_qty" class="form-control" placeholder="Other Agri One Farmers Quantity" wire:model="otheragrione_farmers_qty">
                                    @error('otheragrione_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrione_farmers_value">Other Agri One Farmers Value</label>
                                    <input type="number" id="otheragrione_farmers_value" class="form-control" placeholder="Other Agri One Farmers Value" wire:model="otheragrione_farmers_value">
                                    @error('otheragrione_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragritwo_farmers">Other Agri Two Farmers</label>
                                    <input type="text" id="otheragritwo_farmers" class="form-control" placeholder="Other Agri Two Farmers" wire:model="otheragritwo_farmers">
                                    @error('otheragritwo_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragritwo_farmers_qty">Other Agri Two Farmers Quantity</label>
                                    <input type="number" id="otheragritwo_farmers_qty" class="form-control" placeholder="Other Agri Two Farmers Quantity" wire:model="otheragritwo_farmers_qty">
                                    @error('otheragritwo_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragritwo_farmers_value">Other Agri Two Farmers Value</label>
                                    <input type="number" id="otheragritwo_farmers_value" class="form-control" placeholder="Other Agri Two Farmers Value" wire:model="otheragritwo_farmers_value">
                                    @error('otheragritwo_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrithree_farmers">Other Agri Three Farmers</label>
                                    <input type="text" id="otheragrithree_farmers" class="form-control" placeholder="Other Agri Three Farmers" wire:model="otheragrithree_farmers">
                                    @error('otheragrithree_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrithree_farmers_qty">Other Agri Three Farmers Quantity</label>
                                    <input type="number" id="otheragrithree_farmers_qty" class="form-control" placeholder="Other Agri Three Farmers Quantity" wire:model="otheragrithree_farmers_qty">
                                    @error('otheragrithree_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrithree_farmers_value">Other Agri Three Farmers Value</label>
                                    <input type="number" id="otheragrithree_farmers_value" class="form-control" placeholder="Other Agri Three Farmers Value" wire:model="otheragrithree_farmers_value">
                                    @error('otheragrithree_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrifour_farmers">Other Agri Four Farmers</label>
                                    <input type="text" id="otheragrifour_farmers" class="form-control" placeholder="Other Agri Four Farmers" wire:model="otheragrifour_farmers">
                                    @error('otheragrifour_farmers')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrifour_farmers_qty">Other Agri Four Farmers Quantity</label>
                                    <input type="number" id="otheragrifour_farmers_qty" class="form-control" placeholder="Other Agri Four Farmers Quantity" wire:model="otheragrifour_farmers_qty">
                                    @error('otheragrifour_farmers_qty')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="otheragrifour_farmers_value">Other Agri Four Farmers Value</label>
                                    <input type="number" id="otheragrifour_farmers_value" class="form-control" placeholder="Other Agri Four Farmers Value" wire:model="otheragrifour_farmers_value">
                                    @error('otheragrifour_farmers_value')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
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