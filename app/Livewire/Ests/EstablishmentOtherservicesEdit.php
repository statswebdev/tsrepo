<?php

namespace App\Livewire\Ests;

use App\Models\Estotherser;
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

    public function mount()
    {
        $this->user_id = Auth::id();

        // Retrieve the record from the estopera table for the authenticated user
        $estotherservice = Estotherser::where('user_id', $this->user_id)->first();


        if ($estotherservice) {
            $this->musicbands = $estotherservice->musicbands;
            $this->musicbands_contract = $estotherservice->musicbands_contract;
            $this->dj = $estotherservice->dj;
            $this->dj_contract = $estotherservice->dj_contract;
            $this->photography = $estotherservice->photography;
            $this->photography_contract = $estotherservice->photography_contract;
            $this->casualworker = $estotherservice->casualworker;
            $this->casualworker_contract = $estotherservice->casualworker_contract;
            $this->fisherman = $estotherservice->fisherman;
            $this->fisherman_contract = $estotherservice->fisherman_contract;
            $this->farmers = $estotherservice->farmers;
            $this->farmers_contract = $estotherservice->farmers_contract;
            $this->localfood = $estotherservice->localfood;
            $this->localfood_contract = $estotherservice->localfood_contract;
            $this->otherservices = $estotherservice->otherservices;
            $this->otherservices_contract = $estotherservice->otherservices_contract;
            $this->doctor_inhouse = $estotherservice->doctor_inhouse;
            $this->nearest_healthfacility = $estotherservice->nearest_healthfacility;
            $this->onestaff_accomodation = $estotherservice->onestaff_accomodation;
            $this->onestaff_accomodation_island = $estotherservice->onestaff_accomodation_island;
            $this->onestaff_accomodation_local = $estotherservice->onestaff_accomodation_local;
            $this->onestaff_accomodation_foreign = $estotherservice->onestaff_accomodation_foreign;
            $this->twostaff_accomodation = $estotherservice->twostaff_accomodation;
            $this->twostaff_accomodation_island = $estotherservice->twostaff_accomodation_island;
            $this->twostaff_accomodation_local = $estotherservice->twostaff_accomodation_local;
            $this->twostaff_accomodation_foreign = $estotherservice->twostaff_accomodation_foreign;
            $this->three_accomodation = $estotherservice->three_accomodation;
            $this->three_accomodation_island = $estotherservice->three_accomodation_island;
            $this->three_accomodation_local = $estotherservice->three_accomodation_local;
            $this->three_accomodation_foreign = $estotherservice->three_accomodation_foreign;
        }
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

        $estotherservice = Estotherser::where('user_id', $this->user_id)->first();

        if ($estotherservice) {
            // Update the fields in the estopera record
            $estotherservice->update([
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
                'status' => $this->status,
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
