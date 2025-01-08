<?php

namespace App\Livewire\Ests;

use App\Models\Estagri;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentAgricultural extends Component
{
    
    public $user_id;
    public $est_record_id;
    public $months_operated;
    public $rooms_yearend;
    public $beds_yearend;
    public $roomnights_sold;
    public $bednights_sold;
    public $roomrate_annual;
    public $watermelon_inhouse;
    public $watermelon_grown;
    public $coconut_inhouse;
    public $coconut_grown;
    public $papaya_inhouse;
    public $papaya_grown;
    public $pumpkin_inhouse;
    public $pumpkin_grown;
    public $cucumber_inhouse;
    public $cucumber_grown;
    public $banana_inhouse;
    public $banana_grown;
    public $brinjal_inhouse;
    public $brinjal_grown;
    public $chillies_inhouse;
    public $chillies_grown;
    public $bottlegourd_inhouse;
    public $bottlegourd_grown;
    public $butternut_inhouse;
    public $butternut_grown;
    public $cabbage_inhouse;
    public $cabbage_grown;
    public $mango_inhouse;
    public $mango_grown;
    public $waxgourd_inhouse;
    public $waxgourd_grown;
    public $otheragrione_inhouse;
    public $otheragrione_grown;
    public $otheragritwo_inhouse;
    public $otheragritwo_grown;
    public $otheragrithree_inhouse;
    public $otheragrithree_grown;
    public $otheragrifour_inhouse;
    public $otheragrifour_grown;
    public $watermelon_farmers;
    public $watermelon_farmers_qty;
    public $watermelon_farmers_value;
    public $coconut_farmers;
    public $coconut_farmers_qty;
    public $coconut_farmers_value;
    public $papaya_farmers;
    public $papaya_farmers_qty;
    public $papaya_farmers_value;
    public $pumpkin_farmers;
    public $pumpkin_farmers_qty;
    public $pumpkin_farmers_value;
    public $cucumber_farmers;
    public $cucumber_farmers_qty;
    public $cucumber_farmers_value;
    public $banana_farmers;
    public $banana_farmers_qty;
    public $banana_farmers_value;
    public $brinjal_farmers;
    public $brinjal_farmers_qty;
    public $brinjal_farmers_value;
    public $chillies_farmers;
    public $chillies_farmers_qty;
    public $chillies_farmers_value;
    public $bottlegourd_farmers;
    public $bottlegourd_farmers_qty;
    public $bottlegourd_farmers_value;
    public $butternut_farms;
    public $butternut_farmers_qty;
    public $butternut_farmers_value;
    public $cabbage_farmers;
    public $cabbage_farmers_qty;
    public $cabbage_farmers_value;
    public $mango_farmers;
    public $mango_farmers_qty;
    public $mango_farmers_value;
    public $waxgourd_farmers;
    public $waxgourd_farmers_qty;
    public $waxgourd_farmers_value;
    public $otheragrione_farmers;
    public $otheragrione_farmers_qty;
    public $otheragrione_farmers_value;
    public $otheragritwo_farmers;
    public $otheragritwo_farmers_qty;
    public $otheragritwo_farmers_value;
    public $otheragrithree_farmers;
    public $otheragrithree_farmers_qty;
    public $otheragrithree_farmers_value;
    public $otheragrifour_farmers;
    public $otheragrifour_farmers_qty;
    public $otheragrifour_farmers_value;
    public $status = "submitted";


    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();
        $this->est_record_id = EstRecord::findOrFail($estrecordid);
        
        //dd($est_record_id->id);
    }

    public function submitRecord()
    {
        $this->validate([
            'watermelon_inhouse' => 'required',
            'watermelon_grown' => 'nullable|integer',
            'coconut_inhouse' => 'required',
            'coconut_grown' => 'nullable|integer',
            'papaya_inhouse' => 'required',
            'papaya_grown' => 'nullable|integer',
            'pumpkin_inhouse' => 'required',
            'pumpkin_grown' => 'nullable|integer',
            'cucumber_inhouse' => 'required',
            'cucumber_grown' => 'nullable|integer',
            'banana_inhouse' => 'required',
            'banana_grown' => 'nullable|integer',
            'brinjal_inhouse' => 'required',
            'brinjal_grown' => 'nullable|integer',
            'chillies_inhouse' => 'required',
            'chillies_grown' => 'nullable|integer',
            'bottlegourd_inhouse' => 'required',
            'bottlegourd_grown' => 'nullable|integer',
            'butternut_inhouse' => 'required',
            'butternut_grown' => 'nullable|integer',
            'cabbage_inhouse' => 'required',
            'cabbage_grown' => 'nullable|integer',
            'mango_inhouse' => 'required',
            'mango_grown' => 'nullable|integer',
            'waxgourd_inhouse' => 'required',
            'waxgourd_grown' => 'nullable|integer',
            'otheragrione_inhouse' => 'nullable',
            'otheragrione_grown' => 'nullable|integer',
            'otheragritwo_inhouse' => 'nullable',
            'otheragritwo_grown' => 'nullable|integer',
            'otheragrithree_inhouse' => 'nullable',
            'otheragrithree_grown' => 'nullable|integer',
            'otheragrifour_inhouse' => 'nullable',
            'otheragrifour_grown' => 'nullable|integer',
            'watermelon_farmers' => 'required',
            'watermelon_farmers_qty' => 'nullable|integer',
            'watermelon_farmers_value' => 'nullable|integer',
            'coconut_farmers' => 'required',
            'coconut_farmers_qty' => 'nullable|integer',
            'coconut_farmers_value' => 'nullable|integer',
            'papaya_farmers' => 'required',
            'papaya_farmers_qty' => 'nullable|integer',
            'papaya_farmers_value' => 'nullable|integer',
            'pumpkin_farmers' => 'required',
            'pumpkin_farmers_qty' => 'nullable|integer',
            'pumpkin_farmers_value' => 'nullable|integer',
            'cucumber_farmers' => 'required',
            'cucumber_farmers_qty' => 'nullable|integer',
            'cucumber_farmers_value' => 'nullable|integer',
            'banana_farmers' => 'required',
            'banana_farmers_qty' => 'nullable|integer',
            'banana_farmers_value' => 'nullable|integer',
            'brinjal_farmers' => 'required',
            'brinjal_farmers_qty' => 'nullable|integer',
            'brinjal_farmers_value' => 'nullable|integer',
            'chillies_farmers' => 'required',
            'chillies_farmers_qty' => 'nullable|integer',
            'chillies_farmers_value' => 'nullable|integer',
            'bottlegourd_farmers' => 'required',
            'bottlegourd_farmers_qty' => 'nullable|integer',
            'bottlegourd_farmers_value' => 'nullable|integer',
            'butternut_farms' => 'required',
            'butternut_farmers_qty' => 'nullable|integer',
            'butternut_farmers_value' => 'nullable|integer',
            'cabbage_farmers' => 'required',
            'cabbage_farmers_qty' => 'nullable|integer',
            'cabbage_farmers_value' => 'nullable|integer',
            'mango_farmers' => 'required',
            'mango_farmers_qty' => 'nullable|integer',
            'mango_farmers_value' => 'nullable|integer',
            'waxgourd_farmers' => 'required',
            'waxgourd_farmers_qty' => 'nullable|integer',
            'waxgourd_farmers_value' => 'nullable|integer',
            'otheragrione_farmers' => 'nullable',
            'otheragrione_farmers_qty' => 'nullable|integer',
            'otheragrione_farmers_value' => 'nullable|integer',
            'otheragritwo_farmers' => 'nullable',
            'otheragritwo_farmers_qty' => 'nullable|integer',
            'otheragritwo_farmers_value' => 'nullable|integer',
            'otheragrithree_farmers' => 'nullable',
            'otheragrithree_farmers_qty' => 'nullable|integer',
            'otheragrithree_farmers_value' => 'nullable|integer',
            'otheragrifour_farmers' => 'nullable',
            'otheragrifour_farmers_qty' => 'nullable|integer',
            'otheragrifour_farmers_value' => 'nullable|integer',
        ]);

        Estagri::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'watermelon_inhouse' => $this->watermelon_inhouse,
            'watermelon_grown' => $this->watermelon_grown,
            'coconut_inhouse' => $this->coconut_inhouse,
            'coconut_grown' => $this->coconut_grown,
            'papaya_inhouse' => $this->papaya_inhouse,
            'papaya_grown' => $this->papaya_grown,
            'pumpkin_inhouse' => $this->pumpkin_inhouse,
            'pumpkin_grown' => $this->pumpkin_grown,
            'cucumber_inhouse' => $this->cucumber_inhouse,
            'cucumber_grown' => $this->cucumber_grown,
            'banana_inhouse' => $this->banana_inhouse,
            'banana_grown' => $this->banana_grown,
            'brinjal_inhouse' => $this->brinjal_inhouse,
            'brinjal_grown' => $this->brinjal_grown,
            'chillies_inhouse' => $this->chillies_inhouse,
            'chillies_grown' => $this->chillies_grown,
            'bottlegourd_inhouse' => $this->bottlegourd_inhouse,
            'bottlegourd_grown' => $this->bottlegourd_grown,
            'butternut_inhouse' => $this->butternut_inhouse,
            'butternut_grown' => $this->butternut_grown,
            'cabbage_inhouse' => $this->cabbage_inhouse,
            'cabbage_grown' => $this->cabbage_grown,
            'mango_inhouse' => $this->mango_inhouse,
            'mango_grown' => $this->mango_grown,
            'waxgourd_inhouse' => $this->waxgourd_inhouse,
            'waxgourd_grown' => $this->waxgourd_grown,
            'otheragrione_inhouse' => $this->otheragrione_inhouse,
            'otheragrione_grown' => $this->otheragrione_grown,
            'otheragritwo_inhouse' => $this->otheragritwo_inhouse,
            'otheragritwo_grown' => $this->otheragritwo_grown,
            'otheragrithree_inhouse' => $this->otheragrithree_inhouse,
            'otheragrithree_grown' => $this->otheragrithree_grown,
            'otheragrifour_inhouse' => $this->otheragrifour_inhouse,
            'otheragrifour_grown' => $this->otheragrifour_grown,
            'watermelon_farmers' => $this->watermelon_farmers,
            'watermelon_farmers_qty' => $this->watermelon_farmers_qty,
            'watermelon_farmers_value' => $this->watermelon_farmers_value,
            'coconut_farmers' => $this->coconut_farmers,
            'coconut_farmers_qty' => $this->coconut_farmers_qty,
            'coconut_farmers_value' => $this->coconut_farmers_value,
            'papaya_farmers' => $this->papaya_farmers,
            'papaya_farmers_qty' => $this->papaya_farmers_qty,
            'papaya_farmers_value' => $this->papaya_farmers_value,
            'pumpkin_farmers' => $this->pumpkin_farmers,
            'pumpkin_farmers_qty' => $this->pumpkin_farmers_qty,
            'pumpkin_farmers_value' => $this->pumpkin_farmers_value,
            'cucumber_farmers' => $this->cucumber_farmers,
            'cucumber_farmers_qty' => $this->cucumber_farmers_qty,
            'cucumber_farmers_value' => $this->cucumber_farmers_value,
            'banana_farmers' => $this->banana_farmers,
            'banana_farmers_qty' => $this->banana_farmers_qty,
            'banana_farmers_value' => $this->banana_farmers_value,
            'brinjal_farmers' => $this->brinjal_farmers,
            'brinjal_farmers_qty' => $this->brinjal_farmers_qty,
            'brinjal_farmers_value' => $this->brinjal_farmers_value,
            'chillies_farmers' => $this->chillies_farmers,
            'chillies_farmers_qty' => $this->chillies_farmers_qty,
            'chillies_farmers_value' => $this->chillies_farmers_value,
            'bottlegourd_farmers' => $this->bottlegourd_farmers,
            'bottlegourd_farmers_qty' => $this->bottlegourd_farmers_qty,
            'bottlegourd_farmers_value' => $this->bottlegourd_farmers_value,
            'butternut_farms' => $this->butternut_farms,
            'butternut_farmers_qty' => $this->butternut_farmers_qty,
            'butternut_farmers_value' => $this->butternut_farmers_value,
            'cabbage_farmers' => $this->cabbage_farmers,
            'cabbage_farmers_qty' => $this->cabbage_farmers_qty,
            'cabbage_farmers_value' => $this->cabbage_farmers_value,
            'mango_farmers' => $this->mango_farmers,
            'mango_farmers_qty' => $this->mango_farmers_qty,
            'mango_farmers_value' => $this->mango_farmers_value,
            'waxgourd_farmers' => $this->waxgourd_farmers,
            'waxgourd_farmers_qty' => $this->waxgourd_farmers_qty,
            'waxgourd_farmers_value' => $this->waxgourd_farmers_value,
            'otheragrione_farmers' => $this->otheragrione_farmers,
            'otheragrione_farmers_qty' => $this->otheragrione_farmers_qty,
            'otheragrione_farmers_value' => $this->otheragrione_farmers_value,
            'otheragritwo_farmers' => $this->otheragritwo_farmers,
            'otheragritwo_farmers_qty' => $this->otheragritwo_farmers_qty,
            'otheragritwo_farmers_value' => $this->otheragritwo_farmers_value,
            'otheragrithree_farmers' => $this->otheragrithree_farmers,
            'otheragrithree_farmers_qty' => $this->otheragrithree_farmers_qty,
            'otheragrithree_farmers_value' => $this->otheragrithree_farmers_value,
            'otheragrifour_farmers' => $this->otheragrifour_farmers,
            'otheragrifour_farmers_qty' => $this->otheragrifour_farmers_qty,
            'otheragrifour_farmers_value' => $this->otheragrifour_farmers_value,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Agricultural Products Information Submitted successfully');
        return redirect()->route('dashboard');
    }

   
   
    public function render()
    {
        return view('livewire.ests.establishment-agricultural');
    }
}
