<?php

namespace App\Livewire\Ests;

use App\Models\Estinc;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentIncome extends Component
{

    public $user_id;
    public $est_record_id;
    public $income_boarding;
    public $income_food;
    public $income_beverage;
    public $income_catering;
    public $income_transport;
    public $income_spa;
    public $income_laundry;
    public $income_servicecharge;
    public $income_excursion;
    public $income_watersports;
    public $income_watersports_third;
    public $income_retailshop;
    public $income_retailshop_third;
    public $income_exchange;
    public $income_commission;
    public $income_managementfee;
    public $income_lease;
    public $income_finance;
    public $income_dividend;
    public $income_other;
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
            'income_boarding' => 'required|numeric',
            'income_food' => 'required|numeric',
            'income_beverage' => 'required|numeric',
            'income_catering' => 'required|numeric',
            'income_transport' => 'required|numeric',
            'income_spa' => 'required|numeric',
            'income_laundry' => 'required|numeric',
            'income_servicecharge' => 'required|numeric',
            'income_excursion' => 'required|numeric',
            'income_watersports' => 'required|numeric',
            'income_watersports_third' => 'required|numeric',
            'income_retailshop' => 'required|numeric',
            'income_retailshop_third' => 'required|numeric',
            'income_exchange' => 'required|numeric',
            'income_commission' => 'required|numeric',
            'income_managementfee' => 'required|numeric',
            'income_lease' => 'required|numeric',
            'income_finance' => 'required|numeric',
            'income_dividend' => 'required|numeric',
            'income_other' => 'required|numeric',
        ]);

        Estinc::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'income_boarding' => $this->income_boarding,
            'income_food' => $this->income_food,
            'income_beverage' => $this->income_beverage,
            'income_catering' => $this->income_catering,
            'income_transport' => $this->income_transport,
            'income_spa' => $this->income_spa,
            'income_laundry' => $this->income_laundry,
            'income_servicecharge' => $this->income_servicecharge,
            'income_excursion' => $this->income_excursion,
            'income_watersports' => $this->income_watersports,
            'income_watersports_third' => $this->income_watersports_third,
            'income_retailshop' => $this->income_retailshop,
            'income_retailshop_third' => $this->income_retailshop_third,
            'income_exchange' => $this->income_exchange,
            'income_commission' => $this->income_commission,
            'income_managementfee' => $this->income_managementfee,
            'income_lease' => $this->income_lease,
            'income_finance' => $this->income_finance,
            'income_dividend' => $this->income_dividend,
            'income_other' => $this->income_other,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Income Information Submitted successfully');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-income');
    }
}
