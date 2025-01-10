<?php

namespace App\Livewire\Ests;

use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentOtherservicesEdit extends Component
{
    public $user_id;
    public $est_record_id;
    public $musicbands;
    public $musicbands_contract;
    public $dj;
    public $dj_contract;
    public $photography;
    public $photography_contract;
    public $casualworker;
    public $casualworker_contract;
    public $fisherman;
    public $fisherman_contract;
    public $farmers;
    public $farmers_contract;
    public $localfood;
    public $localfood_contract;
    public $otherservices;
    public $otherservices_contract;
    public $doctor_inhouse;
    public $nearest_healthfacility;
    public $onestaff_accomodation;
    public $onestaff_accomodation_island;
    public $onestaff_accomodation_local;
    public $onestaff_accomodation_foreign;
    public $twostaff_accomodation;
    public $twostaff_accomodation_island;
    public $twostaff_accomodation_local;
    public $twostaff_accomodation_foreign;
    public $three_accomodation;
    public $three_accomodation_island;
    public $three_accomodation_local;
    public $three_accomodation_foreign;
    public $status = "submitted";

    protected $rules = [
            'musicbands' => 'required',
                'musicbands_contract' => 'required',
                'dj' => 'required',
                'dj_contract' => 'required',
                'photography' => 'required',
                'photography_contract' => 'required',
                'casualworker' => 'required',
                'casualworker_contract' => 'required',
                'fisherman' => 'required',
                'fisherman_contract' => 'required',
                'farmers' => 'required',
                'farmers_contract' => 'required',
                'localfood' => 'required',
                'localfood_contract' => 'required',
                'otherservices' => 'required',
                'otherservices_contract' => 'required',
                'doctor_inhouse' => 'required',
                'nearest_healthfacility' => 'nullable',
                'onestaff_accomodation' => 'nullable',
                'onestaff_accomodation_island' => 'nullable',
                'onestaff_accomodation_local' => 'nullable',
                'onestaff_accomodation_foreign' => 'nullable',
                'twostaff_accomodation' => 'nullable',
                'twostaff_accomodation_island' => 'nullable',
                'twostaff_accomodation_local' => 'nullable',
                'twostaff_accomodation_foreign' => 'nullable',
                'three_accomodation' => 'nullable',
                'three_accomodation_island' => 'nullable',
                'three_accomodation_local' => 'nullable',
                'three_accomodation_foreign' => 'nullable',
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        $est_record = EstRecord::with('estotherservice')->findOrFail($estrecordid);

        if ($est_record->estotherservice) {
            $this->musicbands = $est_record->estotherservice->musicbands;
            $this->musicbands_contract = $est_record->estotherservice->musicbands_contract;
            $this->dj = $est_record->estotherservice->dj;
            $this->dj_contract = $est_record->estotherservice->dj_contract;
            $this->photography = $est_record->estotherservice->photography;
            $this->photography_contract = $est_record->estotherservice->photography_contract;
            $this->casualworker = $est_record->estotherservice->casualworker;
            $this->casualworker_contract = $est_record->estotherservice->casualworker_contract;
            $this->fisherman = $est_record->estotherservice->fisherman;
            $this->fisherman_contract = $est_record->estotherservice->fisherman_contract;
            $this->farmers = $est_record->estotherservice->farmers;
            $this->farmers_contract = $est_record->estotherservice->farmers_contract;
            $this->localfood = $est_record->estotherservice->localfood;
            $this->localfood_contract = $est_record->estotherservice->localfood_contract;
            $this->otherservices = $est_record->estotherservice->otherservices;
            $this->otherservices_contract = $est_record->estotherservice->otherservices_contract;
            $this->doctor_inhouse = $est_record->estotherservice->doctor_inhouse;
            $this->nearest_healthfacility = $est_record->estotherservice->nearest_healthfacility;
            $this->onestaff_accomodation = $est_record->estotherservice->onestaff_accomodation;
            $this->onestaff_accomodation_island = $est_record->estotherservice->onestaff_accomodation_island;
            $this->onestaff_accomodation_local = $est_record->estotherservice->onestaff_accomodation_local;
            $this->onestaff_accomodation_foreign = $est_record->estotherservice->onestaff_accomodation_foreign;
            $this->twostaff_accomodation = $est_record->estotherservice->twostaff_accomodation;
            $this->twostaff_accomodation_island = $est_record->estotherservice->twostaff_accomodation_island;
            $this->twostaff_accomodation_local = $est_record->estotherservice->twostaff_accomodation_local;
            $this->twostaff_accomodation_foreign = $est_record->estotherservice->twostaff_accomodation_foreign;
            $this->three_accomodation = $est_record->estotherservice->three_accomodation;
            $this->three_accomodation_island = $est_record->estotherservice->three_accomodation_island;
            $this->three_accomodation_local = $est_record->estotherservice->three_accomodation_local;
            $this->three_accomodation_foreign = $est_record->estotherservice->three_accomodation_foreign;
            $this->status = $est_record->estotherservice->status;
        }

        $this->est_record_id = $estrecordid;
    }

    public function save()
    {
        $this->validate([
            'musicbands' => 'required',
                'musicbands_contract' => 'required',
                'dj' => 'required',
                'dj_contract' => 'required',
                'photography' => 'required',
                'photography_contract' => 'required',
                'casualworker' => 'required',
                'casualworker_contract' => 'required',
                'fisherman' => 'required',
                'fisherman_contract' => 'required',
                'farmers' => 'required',
                'farmers_contract' => 'required',
                'localfood' => 'required',
                'localfood_contract' => 'required',
                'otherservices' => 'nullable',
                'otherservices_contract' => 'nullable',
                'doctor_inhouse' => 'required',
                'nearest_healthfacility' => 'nullable',
                'onestaff_accomodation' => 'nullable',
                'onestaff_accomodation_island' => 'nullable',
                'onestaff_accomodation_local' => 'nullable',
                'onestaff_accomodation_foreign' => 'nullable',
                'twostaff_accomodation' => 'nullable',
                'twostaff_accomodation_island' => 'nullable',
                'twostaff_accomodation_local' => 'nullable',
                'twostaff_accomodation_foreign' => 'nullable',
                'three_accomodation' => 'nullable',
                'three_accomodation_island' => 'nullable',
                'three_accomodation_local' => 'nullable',
                'three_accomodation_foreign' => 'nullable',
            
        ]);

        $estRecord = EstRecord::with('estotherservice')->findOrFail($this->est_record_id);

        if ($estRecord->estotherservice) {
            // Update the fields in the related `estopera` model
            $estRecord->estotherservice->update([
                'musicbands' => $this->musicbands,
                'musicbands_contract' => $this->musicbands_contract,
                'dj' => $this->dj,
                'dj_contract' => $this->dj_contract,
                'photography' => $this->photography,
                'photography_contract' => $this->photography_contract,
                'casualworker' => $this->casualworker,
                'casualworker_contract' => $this->casualworker_contract,
                'fisherman' => $this->fisherman,
                'fisherman_contract' => $this->fisherman_contract,
                'farmers' => $this->farmers,
                'farmers_contract' => $this->farmers_contract,
                'localfood' => $this->localfood,
                'localfood_contract' => $this->localfood_contract,
                'otherservices' => $this->otherservices,
                'otherservices_contract' => $this->otherservices_contract,
                'doctor_inhouse' => $this->doctor_inhouse,
                'nearest_healthfacility' => $this->nearest_healthfacility,
                'onestaff_accomodation' => $this->onestaff_accomodation,
                'onestaff_accomodation_island' => $this->onestaff_accomodation_island,
                'onestaff_accomodation_local' => $this->onestaff_accomodation_local,
                'onestaff_accomodation_foreign' => $this->onestaff_accomodation_foreign,
                'twostaff_accomodation' => $this->twostaff_accomodation,
                'twostaff_accomodation_island' => $this->twostaff_accomodation_island,
                'twostaff_accomodation_local' => $this->twostaff_accomodation_local,
                'twostaff_accomodation_foreign' => $this->twostaff_accomodation_foreign,
                'three_accomodation' => $this->three_accomodation,
                'three_accomodation_island' => $this->three_accomodation_island,
                'three_accomodation_local' => $this->three_accomodation_local,
                'three_accomodation_foreign' => $this->three_accomodation_foreign,
                'status' => 'submitted',
            ]);
            
        }
        

        session()->flash('success', 'Other Services Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-otherservices-edit');
    }
}
