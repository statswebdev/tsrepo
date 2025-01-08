<?php

namespace App\Livewire\Ests;

use App\Models\Estfish;
use Livewire\Component;

class EstablishmentFishEdit extends Component
{
    public $user_id;
    public $est_record_id;
    public $skipjacktuna_inhouse;
    public $skipjacktuna_inhouse_qty;
    public $yellowfin_inhouse;
    public $yellowfin_inhouse_qty;
    public $reeffish_inhouse;
    public $reeffish_inhouse_qty;
    public $seafood_inhouse;
    public $seafood_inhouse_qty;
    public $otherfish_inhouse;
    public $otherfish_inhouse_qty;
    public $skipjack_purchased;
    public $skipjack_purchased_qty;
    public $skipjack_purchased_value;
    public $yellowfin_purchased;
    public $yellowfin_purchased_qty;
    public $yellowfin_purchased_value;
    public $reeffish_purchased;
    public $reeffish_purchased_qty;
    public $reeffish_purchased_value;
    public $seafood_purchased;
    public $seafood_purchased_qty;
    public $seafood_purchased_value;
    public $otherfish_purchased;
    public $otherfish_purchased_qty;
    public $otherfish_purchased_value;
    public $status = "Completed";

    protected $rules = [
        'skipjacktuna_inhouse' => 'required',
        'skipjacktuna_inhouse_qty' => 'nullable|integer',
        'yellowfin_inhouse' => 'required',
        'yellowfin_inhouse_qty' => 'nullable|integer',
        'reeffish_inhouse' => 'required',
        'reeffish_inhouse_qty' => 'nullable|integer',
        'seafood_inhouse' => 'required',
        'seafood_inhouse_qty' => 'nullable|integer',
        'otherfish_inhouse' => 'nullable',
        'otherfish_inhouse_qty' => 'nullable|integer',
        'skipjack_purchased' => 'required',
        'skipjack_purchased_qty' => 'nullable|integer',
        'skipjack_purchased_value' => 'nullable|integer',
        'yellowfin_purchased' => 'required',
        'yellowfin_purchased_qty' => 'nullable|integer',
        'yellowfin_purchased_value' => 'nullable|integer',
        'reeffish_purchased' => 'required',
        'reeffish_purchased_qty' => 'nullable|integer',
        'reeffish_purchased_value' => 'nullable|integer',
        'seafood_purchased' => 'required',
        'seafood_purchased_qty' => 'nullable|integer',
        'seafood_purchased_value' => 'nullable|integer',
        'otherfish_purchased' => 'nullable',
        'otherfish_purchased_qty' => 'nullable|integer',
        'otherfish_purchased_value' => 'nullable|integer',
    ];

    public function mount(Estfish $estrecordid)
    {
        $this->user_id = $estrecordid->user_id;
        $this->est_record_id = $estrecordid->id;
        $this->skipjacktuna_inhouse = $estrecordid->skipjacktuna_inhouse;
        $this->skipjacktuna_inhouse_qty = $estrecordid->skipjacktuna_inhouse_qty;
        $this->yellowfin_inhouse = $estrecordid->yellowfin_inhouse;
        $this->yellowfin_inhouse_qty = $estrecordid->yellowfin_inhouse_qty;
        $this->reeffish_inhouse = $estrecordid->reeffish_inhouse;
        $this->reeffish_inhouse_qty = $estrecordid->reeffish_inhouse_qty;
        $this->seafood_inhouse = $estrecordid->seafood_inhouse;
        $this->seafood_inhouse_qty = $estrecordid->seafood_inhouse_qty;
        $this->otherfish_inhouse = $estrecordid->otherfish_inhouse;
        $this->otherfish_inhouse_qty = $estrecordid->otherfish_inhouse_qty;
        $this->skipjack_purchased = $estrecordid->skipjack_purchased;
        $this->skipjack_purchased_qty = $estrecordid->skipjack_purchased_qty;
        $this->skipjack_purchased_value = $estrecordid->skipjack_purchased_value;
        $this->yellowfin_purchased = $estrecordid->yellowfin_purchased;
        $this->yellowfin_purchased_qty = $estrecordid->yellowfin_purchased_qty;
        $this->yellowfin_purchased_value = $estrecordid->yellowfin_purchased_value;
        $this->reeffish_purchased = $estrecordid->reeffish_purchased;
        $this->reeffish_purchased_qty = $estrecordid->reeffish_purchased_qty;
        $this->reeffish_purchased_value = $estrecordid->reeffish_purchased_value;
        $this->seafood_purchased = $estrecordid->seafood_purchased;
        $this->seafood_purchased_qty = $estrecordid->seafood_purchased_qty;
        $this->seafood_purchased_value = $estrecordid->seafood_purchased_value;
        $this->otherfish_purchased = $estrecordid->otherfish_purchased;
        $this->otherfish_purchased_qty = $estrecordid->otherfish_purchased_qty;
        $this->otherfish_purchased_value = $estrecordid->otherfish_purchased_value;
        $this->status = $estrecordid->status;
    }

    public function save()
    {
        $this->validate([
        'skipjacktuna_inhouse' => 'required',
        'skipjacktuna_inhouse_qty' => 'nullable|integer',
        'yellowfin_inhouse' => 'required',
        'yellowfin_inhouse_qty' => 'nullable|integer',
        'reeffish_inhouse' => 'required',
        'reeffish_inhouse_qty' => 'nullable|integer',
        'seafood_inhouse' => 'required',
        'seafood_inhouse_qty' => 'nullable|integer',
        'otherfish_inhouse' => 'nullable',
        'otherfish_inhouse_qty' => 'nullable|integer',
        'skipjack_purchased' => 'required',
        'skipjack_purchased_qty' => 'nullable|integer',
        'skipjack_purchased_value' => 'nullable|integer',
        'yellowfin_purchased' => 'required',
        'yellowfin_purchased_qty' => 'nullable|integer',
        'yellowfin_purchased_value' => 'nullable|integer',
        'reeffish_purchased' => 'required',
        'reeffish_purchased_qty' => 'nullable|integer',
        'reeffish_purchased_value' => 'nullable|integer',
        'seafood_purchased' => 'required',
        'seafood_purchased_qty' => 'nullable|integer',
        'seafood_purchased_value' => 'nullable|integer',
        'otherfish_purchased' => 'nullable',
        'otherfish_purchased_qty' => 'nullable|integer',
        'otherfish_purchased_value' => 'nullable|integer',
        ]);

        Estfish::where('id', $this->est_record_id)->update([
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id,
            'skipjacktuna_inhouse' => $this->skipjacktuna_inhouse,
            'skipjacktuna_inhouse_qty' => $this->skipjacktuna_inhouse_qty,
            'yellowfin_inhouse' => $this->yellowfin_inhouse,
            'yellowfin_inhouse_qty' => $this->yellowfin_inhouse_qty,
            'reeffish_inhouse' => $this->reeffish_inhouse,
            'reeffish_inhouse_qty' => $this->reeffish_inhouse_qty,
            'seafood_inhouse' => $this->seafood_inhouse,
            'seafood_inhouse_qty' => $this->seafood_inhouse_qty,
            'otherfish_inhouse' => $this->otherfish_inhouse,
            'otherfish_inhouse_qty' => $this->otherfish_inhouse_qty,
            'skipjack_purchased' => $this->skipjack_purchased,
            'skipjack_purchased_qty' => $this->skipjack_purchased_qty,
            'skipjack_purchased_value' => $this->skipjack_purchased_value,
            'yellowfin_purchased' => $this->yellowfin_purchased,
            'yellowfin_purchased_qty' => $this->yellowfin_purchased_qty,
            'yellowfin_purchased_value' => $this->yellowfin_purchased_value,
            'reeffish_purchased' => $this->reeffish_purchased,
            'reeffish_purchased_qty' => $this->reeffish_purchased_qty,
            'reeffish_purchased_value' => $this->reeffish_purchased_value,
            'seafood_purchased' => $this->seafood_purchased,
            'seafood_purchased_qty' => $this->seafood_purchased_qty,
            'seafood_purchased_value' => $this->seafood_purchased_value,
            'otherfish_purchased' => $this->otherfish_purchased,
            'otherfish_purchased_qty' => $this->otherfish_purchased_qty,
            'otherfish_purchased_value' => $this->otherfish_purchased_value,
            'status' => $this->status,

        ]);
        

        session()->flash('success', 'Fish Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-fish-edit');
    }
}
