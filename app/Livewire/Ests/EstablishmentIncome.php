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
    public $estrecord;
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
            'income_boarding' => 'required|numeric|max:99999999999999999999999999.99',
            'income_food' => 'required|numeric|max:99999999999999999999999999.99',
            'income_beverage' => 'required|numeric|max:99999999999999999999999999.99',
            'income_catering' => 'required|numeric|max:99999999999999999999999999.99',
            'income_transport' => 'required|numeric|max:99999999999999999999999999.99',
            'income_spa' => 'required|numeric|max:99999999999999999999999999.99',
            'income_laundry' => 'required|numeric|max:99999999999999999999999999.99',
            'income_servicecharge' => 'required|numeric|max:99999999999999999999999999.99',
            'income_excursion' => 'required|numeric|max:99999999999999999999999999.99',
            'income_watersports' => 'required|numeric|max:99999999999999999999999999.99',
            'income_watersports_third' => 'required|numeric|max:99999999999999999999999999.99',
            'income_retailshop' => 'required|numeric|max:99999999999999999999999999.99',
            'income_retailshop_third' => 'required|numeric|max:99999999999999999999999999.99',
            'income_exchange' => 'required|numeric|max:99999999999999999999999999.99',
            'income_commission' => 'required|numeric|max:99999999999999999999999999.99',
            'income_managementfee' => 'required|numeric|max:99999999999999999999999999.99',
            'income_lease' => 'required|numeric|max:99999999999999999999999999.99',
            'income_finance' => 'required|numeric|max:99999999999999999999999999.99',
            'income_dividend' => 'required|numeric|max:99999999999999999999999999.99',
            'income_other' => 'required|numeric|max:99999999999999999999999999.99',
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
