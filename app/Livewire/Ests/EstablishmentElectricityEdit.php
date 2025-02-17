<?php

namespace App\Livewire\Ests;

use App\Models\Estelec;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;

class EstablishmentElectricityEdit extends Component
{
    public $user_id;
    public $est_record_id;
    public $consume_jan_diesel;
    public $consume_feb_diesel;
    public $consume_mar_diesel;
    public $consume_apr_diesel;
    public $consume_may_diesel;
    public $consume_jun_diesel;
    public $consume_jul_diesel;
    public $consume_aug_diesel;
    public $consume_sep_diesel;
    public $consume_oct_diesel;
    public $consume_nov_diesel;
    public $consume_dec_diesel;
    public $consume_jan_lub;
    public $consume_feb_lub;
    public $consume_mar_lub;
    public $consume_apr_lub;
    public $consume_may_lub;
    public $consume_jun_lub;
    public $consume_jul_lub;
    public $consume_aug_lub;
    public $consume_sep_lub;
    public $consume_oct_lub;
    public $consume_nov_lub;
    public $consume_dec_lub;
    public $generate_jan_diesel;
    public $generate_feb_diesel;
    public $generate_mar_diesel;
    public $generate_apr_diesel;
    public $generate_may_diesel;
    public $generate_jun_diesel;
    public $generate_jul_diesel;
    public $generate_aug_diesel;
    public $generate_sep_diesel;
    public $generate_oct_diesel;
    public $generate_nov_diesel;
    public $generate_dec_diesel;
    public $generate_jan_solar;
    public $generate_feb_solar;
    public $generate_mar_solar;
    public $generate_apr_solar;
    public $generate_may_solar;
    public $generate_jun_solar;
    public $generate_jul_solar;
    public $generate_aug_solar;
    public $generate_sep_solar;
    public $generate_oct_solar;
    public $generate_nov_solar;
    public $generate_dec_solar;
    public $generate_jan_renewable;
    public $generate_feb_renewable;
    public $generate_mar_renewable;
    public $generate_apr_renewable;
    public $generate_may_renewable;
    public $generate_jun_renewable;
    public $generate_jul_renewable;
    public $generate_aug_renewable;
    public $generate_sep_renewable;
    public $generate_oct_renewable;
    public $generate_nov_renewable;
    public $generate_dec_renewable;
    public $generate_jan_total;
    public $generate_feb_total;
    public $generate_mar_total;
    public $generate_apr_total;
    public $generate_may_total;
    public $generate_jun_total;
    public $generate_jul_total;
    public $generate_aug_total;
    public $generate_sep_total;
    public $generate_oct_total;
    public $generate_nov_total;
    public $generate_dec_total;
    public $demand_jan_max;
    public $demand_feb_max;
    public $demand_mar_max;
    public $demand_apr_max;
    public $demand_may_max;
    public $demand_jun_max;
    public $demand_jul_max;
    public $demand_aug_max;
    public $demand_sep_max;
    public $demand_oct_max;
    public $demand_nov_max;
    public $demand_dec_max;
    public $demand_jan_min;
    public $demand_feb_min;
    public $demand_mar_min;
    public $demand_apr_min;
    public $demand_may_min;
    public $demand_jun_min;
    public $demand_jul_min;
    public $demand_aug_min;
    public $demand_sep_min;
    public $demand_oct_min;
    public $demand_nov_min;
    public $demand_dec_min;
    public $status = "completed";

    protected $rules = [
            'consume_jan_diesel' => 'required',
                'consume_feb_diesel' => 'required',
                'consume_mar_diesel' => 'required',
                'consume_apr_diesel' => 'required',
                'consume_may_diesel' => 'required',
                'consume_jun_diesel' => 'required',
                'consume_jul_diesel' => 'required',
                'consume_aug_diesel' => 'required',
                'consume_sep_diesel' => 'required',
                'consume_oct_diesel' => 'required',
                'consume_nov_diesel' => 'required',
                'consume_dec_diesel' => 'required',
                'consume_jan_lub' => 'required',
                'consume_feb_lub' => 'required',
                'consume_mar_lub' => 'required',
                'consume_apr_lub' => 'required',
                'consume_may_lub' => 'required',
                'consume_jun_lub' => 'required',
                'consume_jul_lub' => 'required',
                'consume_aug_lub' => 'required',
                'consume_sep_lub' => 'required',
                'consume_oct_lub' => 'required',
                'consume_nov_lub' => 'required',
                'consume_dec_lub' => 'required',
                'generate_jan_diesel' => 'required',
                'generate_feb_diesel' => 'required',
                'generate_mar_diesel' => 'required',
                'generate_apr_diesel' => 'required',
                'generate_may_diesel' => 'required',
                'generate_jun_diesel' => 'required',
                'generate_jul_diesel' => 'required',
                'generate_aug_diesel' => 'required',
                'generate_sep_diesel' => 'required',
                'generate_oct_diesel' => 'required',
                'generate_nov_diesel' => 'required',
                'generate_dec_diesel' => 'required',
                'generate_jan_solar' => 'required',
                'generate_feb_solar' => 'required',
                'generate_mar_solar' => 'required',
                'generate_apr_solar' => 'required',
                'generate_may_solar' => 'required',
                'generate_jun_solar' => 'required',
                'generate_jul_solar' => 'required',
                'generate_aug_solar' => 'required',
                'generate_sep_solar' => 'required',
                'generate_oct_solar' => 'required',
                'generate_nov_solar' => 'required',
                'generate_dec_solar' => 'required',
                'generate_jan_renewable' => 'required',
                'generate_feb_renewable' => 'required',
                'generate_mar_renewable' => 'required',
                'generate_apr_renewable' => 'required',
                'generate_may_renewable' => 'required',
                'generate_jun_renewable' => 'required',
                'generate_jul_renewable' => 'required',
                'generate_aug_renewable' => 'required',
                'generate_sep_renewable' => 'required',
                'generate_oct_renewable' => 'required',
                'generate_nov_renewable' => 'required',
                'generate_dec_renewable' => 'required',
                'generate_jan_total' => 'required',
                'generate_feb_total' => 'required',
                'generate_mar_total' => 'required',
                'generate_apr_total' => 'required',
                'generate_may_total' => 'required',
                'generate_jun_total' => 'required',
                'generate_jul_total' => 'required',
                'generate_aug_total' => 'required',
                'generate_sep_total' => 'required',
                'generate_oct_total' => 'required',
                'generate_nov_total' => 'required',
                'generate_dec_total' => 'required',
                'demand_jan_max' => 'required',
                'demand_feb_max' => 'required',
                'demand_mar_max' => 'required',
                'demand_apr_max' => 'required',
                'demand_may_max' => 'required',
                'demand_jun_max' => 'required',
                'demand_jul_max' => 'required',
                'demand_aug_max' => 'required',
                'demand_sep_max' => 'required',
                'demand_oct_max' => 'required',
                'demand_nov_max' => 'required',
                'demand_dec_max' => 'required',
                'demand_jan_min' => 'required',
                'demand_feb_min' => 'required',
                'demand_mar_min' => 'required',
                'demand_apr_min' => 'required',
                'demand_may_min' => 'required',
                'demand_jun_min' => 'required',
                'demand_jul_min' => 'required',
                'demand_aug_min' => 'required',
                'demand_sep_min' => 'required',
                'demand_oct_min' => 'required',
                'demand_nov_min' => 'required',
                'demand_dec_min' => 'required',
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        $est_record = EstRecord::with('estelec')->findOrFail($estrecordid);

        if ($est_record->estelec) {
            $this->consume_jan_diesel = $est_record->estelec->consume_jan_diesel;
            $this->consume_feb_diesel = $est_record->estelec->consume_feb_diesel;
            $this->consume_mar_diesel = $est_record->estelec->consume_mar_diesel;
            $this->consume_apr_diesel = $est_record->estelec->consume_apr_diesel;
            $this->consume_may_diesel = $est_record->estelec->consume_may_diesel;
            $this->consume_jun_diesel = $est_record->estelec->consume_jun_diesel;
            $this->consume_jul_diesel = $est_record->estelec->consume_jul_diesel;
            $this->consume_aug_diesel = $est_record->estelec->consume_aug_diesel;
            $this->consume_sep_diesel = $est_record->estelec->consume_sep_diesel;
            $this->consume_oct_diesel = $est_record->estelec->consume_oct_diesel;
            $this->consume_nov_diesel = $est_record->estelec->consume_nov_diesel;
            $this->consume_dec_diesel = $est_record->estelec->consume_dec_diesel;
            $this->consume_jan_lub = $est_record->estelec->consume_jan_lub;
            $this->consume_feb_lub = $est_record->estelec->consume_feb_lub;
            $this->consume_mar_lub = $est_record->estelec->consume_mar_lub;
            $this->consume_apr_lub = $est_record->estelec->consume_apr_lub;
            $this->consume_may_lub = $est_record->estelec->consume_may_lub;
            $this->consume_jun_lub = $est_record->estelec->consume_jun_lub;
            $this->consume_jul_lub = $est_record->estelec->consume_jul_lub;
            $this->consume_aug_lub = $est_record->estelec->consume_aug_lub;
            $this->consume_sep_lub = $est_record->estelec->consume_sep_lub;
            $this->consume_oct_lub = $est_record->estelec->consume_oct_lub;
            $this->consume_nov_lub = $est_record->estelec->consume_nov_lub;
            $this->consume_dec_lub = $est_record->estelec->consume_dec_lub;
            $this->generate_jan_diesel = $est_record->estelec->generate_jan_diesel;
            $this->generate_feb_diesel = $est_record->estelec->generate_feb_diesel;
            $this->generate_mar_diesel = $est_record->estelec->generate_mar_diesel;
            $this->generate_apr_diesel = $est_record->estelec->generate_apr_diesel;
            $this->generate_may_diesel = $est_record->estelec->generate_may_diesel;
            $this->generate_jun_diesel = $est_record->estelec->generate_jun_diesel;
            $this->generate_jul_diesel = $est_record->estelec->generate_jul_diesel;
            $this->generate_aug_diesel = $est_record->estelec->generate_aug_diesel;
            $this->generate_sep_diesel = $est_record->estelec->generate_sep_diesel;
            $this->generate_oct_diesel = $est_record->estelec->generate_oct_diesel;
            $this->generate_nov_diesel = $est_record->estelec->generate_nov_diesel;
            $this->generate_dec_diesel = $est_record->estelec->generate_dec_diesel;
            $this->generate_jan_solar = $est_record->estelec->generate_jan_solar;
            $this->generate_feb_solar = $est_record->estelec->generate_feb_solar;
            $this->generate_mar_solar = $est_record->estelec->generate_mar_solar;
            $this->generate_apr_solar = $est_record->estelec->generate_apr_solar;
            $this->generate_may_solar = $est_record->estelec->generate_may_solar;
            $this->generate_jun_solar = $est_record->estelec->generate_jun_solar;
            $this->generate_jul_solar = $est_record->estelec->generate_jul_solar;
            $this->generate_aug_solar = $est_record->estelec->generate_aug_solar;
            $this->generate_sep_solar = $est_record->estelec->generate_sep_solar;
            $this->generate_oct_solar = $est_record->estelec->generate_oct_solar;
            $this->generate_nov_solar = $est_record->estelec->generate_nov_solar;
            $this->generate_dec_solar = $est_record->estelec->generate_dec_solar;
            $this->generate_jan_renewable = $est_record->estelec->generate_jan_renewable;
            $this->generate_feb_renewable = $est_record->estelec->generate_feb_renewable;
            $this->generate_mar_renewable = $est_record->estelec->generate_mar_renewable;
            $this->generate_apr_renewable = $est_record->estelec->generate_apr_renewable;
            $this->generate_may_renewable = $est_record->estelec->generate_may_renewable;
            $this->generate_jun_renewable = $est_record->estelec->generate_jun_renewable;
            $this->generate_jul_renewable = $est_record->estelec->generate_jul_renewable;
            $this->generate_aug_renewable = $est_record->estelec->generate_aug_renewable;
            $this->generate_sep_renewable = $est_record->estelec->generate_sep_renewable;
            $this->generate_oct_renewable = $est_record->estelec->generate_oct_renewable;
            $this->generate_nov_renewable = $est_record->estelec->generate_nov_renewable;
            $this->generate_dec_renewable = $est_record->estelec->generate_dec_renewable;
            $this->generate_jan_total = $est_record->estelec->generate_jan_total;
            $this->generate_feb_total = $est_record->estelec->generate_feb_total;
            $this->generate_mar_total = $est_record->estelec->generate_mar_total;
            $this->generate_apr_total = $est_record->estelec->generate_apr_total;
            $this->generate_may_total = $est_record->estelec->generate_may_total;
            $this->generate_jun_total = $est_record->estelec->generate_jun_total;
            $this->generate_jul_total = $est_record->estelec->generate_jul_total;
            $this->generate_aug_total = $est_record->estelec->generate_aug_total;
            $this->generate_sep_total = $est_record->estelec->generate_sep_total;
            $this->generate_oct_total = $est_record->estelec->generate_oct_total;
            $this->generate_nov_total = $est_record->estelec->generate_nov_total;
            $this->generate_dec_total = $est_record->estelec->generate_dec_total;
            $this->demand_jan_max = $est_record->estelec->demand_jan_max;
            $this->demand_feb_max = $est_record->estelec->demand_feb_max;
            $this->demand_mar_max = $est_record->estelec->demand_mar_max;
            $this->demand_apr_max = $est_record->estelec->demand_apr_max;
            $this->demand_may_max = $est_record->estelec->demand_may_max;
            $this->demand_jun_max = $est_record->estelec->demand_jun_max;
            $this->demand_jul_max = $est_record->estelec->demand_jul_max;
            $this->demand_aug_max = $est_record->estelec->demand_aug_max;
            $this->demand_sep_max = $est_record->estelec->demand_sep_max;
            $this->demand_oct_max = $est_record->estelec->demand_oct_max;
            $this->demand_nov_max = $est_record->estelec->demand_nov_max;
            $this->demand_dec_max = $est_record->estelec->demand_dec_max;
            $this->demand_jan_min = $est_record->estelec->demand_jan_min;
            $this->demand_feb_min = $est_record->estelec->demand_feb_min;
            $this->demand_mar_min = $est_record->estelec->demand_mar_min;
            $this->demand_apr_min = $est_record->estelec->demand_apr_min;
            $this->demand_may_min = $est_record->estelec->demand_may_min;
            $this->demand_jun_min = $est_record->estelec->demand_jun_min;
            $this->demand_jul_min = $est_record->estelec->demand_jul_min;
            $this->demand_aug_min = $est_record->estelec->demand_aug_min;
            $this->demand_sep_min = $est_record->estelec->demand_sep_min;
            $this->demand_oct_min = $est_record->estelec->demand_oct_min;
            $this->demand_nov_min = $est_record->estelec->demand_nov_min;
            $this->demand_dec_min = $est_record->estelec->demand_dec_min;
            $this->status = $est_record->estelec->status;
        }

        $this->est_record_id = $estrecordid;
    }

    public function save()
    {
        $this->validate([
            'consume_jan_diesel' => 'required',
                'consume_feb_diesel' => 'required',
                'consume_mar_diesel' => 'required',
                'consume_apr_diesel' => 'required',
                'consume_may_diesel' => 'required',
                'consume_jun_diesel' => 'required',
                'consume_jul_diesel' => 'required',
                'consume_aug_diesel' => 'required',
                'consume_sep_diesel' => 'required',
                'consume_oct_diesel' => 'required',
                'consume_nov_diesel' => 'required',
                'consume_dec_diesel' => 'required',
                'consume_jan_lub' => 'required',
                'consume_feb_lub' => 'required',
                'consume_mar_lub' => 'required',
                'consume_apr_lub' => 'required',
                'consume_may_lub' => 'required',
                'consume_jun_lub' => 'required',
                'consume_jul_lub' => 'required',
                'consume_aug_lub' => 'required',
                'consume_sep_lub' => 'required',
                'consume_oct_lub' => 'required',
                'consume_nov_lub' => 'required',
                'consume_dec_lub' => 'required',
                'generate_jan_diesel' => 'required',
                'generate_feb_diesel' => 'required',
                'generate_mar_diesel' => 'required',
                'generate_apr_diesel' => 'required',
                'generate_may_diesel' => 'required',
                'generate_jun_diesel' => 'required',
                'generate_jul_diesel' => 'required',
                'generate_aug_diesel' => 'required',
                'generate_sep_diesel' => 'required',
                'generate_oct_diesel' => 'required',
                'generate_nov_diesel' => 'required',
                'generate_dec_diesel' => 'required',
                'generate_jan_solar' => 'required',
                'generate_feb_solar' => 'required',
                'generate_mar_solar' => 'required',
                'generate_apr_solar' => 'required',
                'generate_may_solar' => 'required',
                'generate_jun_solar' => 'required',
                'generate_jul_solar' => 'required',
                'generate_aug_solar' => 'required',
                'generate_sep_solar' => 'required',
                'generate_oct_solar' => 'required',
                'generate_nov_solar' => 'required',
                'generate_dec_solar' => 'required',
                'generate_jan_renewable' => 'required',
                'generate_feb_renewable' => 'required',
                'generate_mar_renewable' => 'required',
                'generate_apr_renewable' => 'required',
                'generate_may_renewable' => 'required',
                'generate_jun_renewable' => 'required',
                'generate_jul_renewable' => 'required',
                'generate_aug_renewable' => 'required',
                'generate_sep_renewable' => 'required',
                'generate_oct_renewable' => 'required',
                'generate_nov_renewable' => 'required',
                'generate_dec_renewable' => 'required',
                'generate_jan_total' => 'required',
                'generate_feb_total' => 'required',
                'generate_mar_total' => 'required',
                'generate_apr_total' => 'required',
                'generate_may_total' => 'required',
                'generate_jun_total' => 'required',
                'generate_jul_total' => 'required',
                'generate_aug_total' => 'required',
                'generate_sep_total' => 'required',
                'generate_oct_total' => 'required',
                'generate_nov_total' => 'required',
                'generate_dec_total' => 'required',
                'demand_jan_max' => 'required',
                'demand_feb_max' => 'required',
                'demand_mar_max' => 'required',
                'demand_apr_max' => 'required',
                'demand_may_max' => 'required',
                'demand_jun_max' => 'required',
                'demand_jul_max' => 'required',
                'demand_aug_max' => 'required',
                'demand_sep_max' => 'required',
                'demand_oct_max' => 'required',
                'demand_nov_max' => 'required',
                'demand_dec_max' => 'required',
                'demand_jan_min' => 'required',
                'demand_feb_min' => 'required',
                'demand_mar_min' => 'required',
                'demand_apr_min' => 'required',
                'demand_may_min' => 'required',
                'demand_jun_min' => 'required',
                'demand_jul_min' => 'required',
                'demand_aug_min' => 'required',
                'demand_sep_min' => 'required',
                'demand_oct_min' => 'required',
                'demand_nov_min' => 'required',
                'demand_dec_min' => 'required',
        ]);

        $estRecord = EstRecord::with('estelec')->findOrFail($this->est_record_id);

        if ($estRecord->estelec) {
            // Update the fields in the related `estelec` model
            $estRecord->estelec->update([
                'consume_jan_diesel' => $this->consume_jan_diesel,
                'consume_feb_diesel' => $this->consume_feb_diesel,
                'consume_mar_diesel' => $this->consume_mar_diesel,
                'consume_apr_diesel' => $this->consume_apr_diesel,
                'consume_may_diesel' => $this->consume_may_diesel,
                'consume_jun_diesel' => $this->consume_jun_diesel,
                'consume_jul_diesel' => $this->consume_jul_diesel,
                'consume_aug_diesel' => $this->consume_aug_diesel,
                'consume_sep_diesel' => $this->consume_sep_diesel,
                'consume_oct_diesel' => $this->consume_oct_diesel,
                'consume_nov_diesel' => $this->consume_nov_diesel,
                'consume_dec_diesel' => $this->consume_dec_diesel,
                'consume_jan_lub' => $this->consume_jan_lub,
                'consume_feb_lub' => $this->consume_feb_lub,
                'consume_mar_lub' => $this->consume_mar_lub,
                'consume_apr_lub' => $this->consume_apr_lub,
                'consume_may_lub' => $this->consume_may_lub,
                'consume_jun_lub' => $this->consume_jun_lub,
                'consume_jul_lub' => $this->consume_jul_lub,
                'consume_aug_lub' => $this->consume_aug_lub,
                'consume_sep_lub' => $this->consume_sep_lub,
                'consume_oct_lub' => $this->consume_oct_lub,
                'consume_nov_lub' => $this->consume_nov_lub,
                'consume_dec_lub' => $this->consume_dec_lub,
                'generate_jan_diesel' => $this->generate_jan_diesel,
                'generate_feb_diesel' => $this->generate_feb_diesel,
                'generate_mar_diesel' => $this->generate_mar_diesel,
                'generate_apr_diesel' => $this->generate_apr_diesel,
                'generate_may_diesel' => $this->generate_may_diesel,
                'generate_jun_diesel' => $this->generate_jun_diesel,
                'generate_jul_diesel' => $this->generate_jul_diesel,
                'generate_aug_diesel' => $this->generate_aug_diesel,
                'generate_sep_diesel' => $this->generate_sep_diesel,
                'generate_oct_diesel' => $this->generate_oct_diesel,
                'generate_nov_diesel' => $this->generate_nov_diesel,
                'generate_dec_diesel' => $this->generate_dec_diesel,
                'generate_jan_solar' => $this->generate_jan_solar,
                'generate_feb_solar' => $this->generate_feb_solar,
                'generate_mar_solar' => $this->generate_mar_solar,
                'generate_apr_solar' => $this->generate_apr_solar,
                'generate_may_solar' => $this->generate_may_solar,
                'generate_jun_solar' => $this->generate_jun_solar,
                'generate_jul_solar' => $this->generate_jul_solar,
                'generate_aug_solar' => $this->generate_aug_solar,
                'generate_sep_solar' => $this->generate_sep_solar,
                'generate_oct_solar' => $this->generate_oct_solar,
                'generate_nov_solar' => $this->generate_nov_solar,
                'generate_dec_solar' => $this->generate_dec_solar,
                'generate_jan_renewable' => $this->generate_jan_renewable,
                'generate_feb_renewable' => $this->generate_feb_renewable,
                'generate_mar_renewable' => $this->generate_mar_renewable,
                'generate_apr_renewable' => $this->generate_apr_renewable,
                'generate_may_renewable' => $this->generate_may_renewable,
                'generate_jun_renewable' => $this->generate_jun_renewable,
                'generate_jul_renewable' => $this->generate_jul_renewable,
                'generate_aug_renewable' => $this->generate_aug_renewable,
                'generate_sep_renewable' => $this->generate_sep_renewable,
                'generate_oct_renewable' => $this->generate_oct_renewable,
                'generate_nov_renewable' => $this->generate_nov_renewable,
                'generate_dec_renewable' => $this->generate_dec_renewable,
                'generate_jan_total' => $this->generate_jan_total,
                'generate_feb_total' => $this->generate_feb_total,
                'generate_mar_total' => $this->generate_mar_total,
                'generate_apr_total' => $this->generate_apr_total,
                'generate_may_total' => $this->generate_may_total,
                'generate_jun_total' => $this->generate_jun_total,
                'generate_jul_total' => $this->generate_jul_total,
                'generate_aug_total' => $this->generate_aug_total,
                'generate_sep_total' => $this->generate_sep_total,
                'generate_oct_total' => $this->generate_oct_total,
                'generate_nov_total' => $this->generate_nov_total,
                'generate_dec_total' => $this->generate_dec_total,
                'demand_jan_max' => $this->demand_jan_max,
                'demand_feb_max' => $this->demand_feb_max,
                'demand_mar_max' => $this->demand_mar_max,
                'demand_apr_max' => $this->demand_apr_max,
                'demand_may_max' => $this->demand_may_max,
                'demand_jun_max' => $this->demand_jun_max,
                'demand_jul_max' => $this->demand_jul_max,
                'demand_aug_max' => $this->demand_aug_max,
                'demand_sep_max' => $this->demand_sep_max,
                'demand_oct_max' => $this->demand_oct_max,
                'demand_nov_max' => $this->demand_nov_max,
                'demand_dec_max' => $this->demand_dec_max,
                'demand_jan_min' => $this->demand_jan_min,
                'demand_feb_min' => $this->demand_feb_min,
                'demand_mar_min' => $this->demand_mar_min,
                'demand_apr_min' => $this->demand_apr_min,
                'demand_may_min' => $this->demand_may_min,
                'demand_jun_min' => $this->demand_jun_min,
                'demand_jul_min' => $this->demand_jul_min,
                'demand_aug_min' => $this->demand_aug_min,
                'demand_sep_min' => $this->demand_sep_min,
                'demand_oct_min' => $this->demand_oct_min,
                'demand_nov_min' => $this->demand_nov_min,
                'demand_dec_min' => $this->demand_dec_min,
                'status' => 'submitted',
            ]);
            
        }
        

        session()->flash('success', 'Electricity Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-electricity-edit');
    }
}
