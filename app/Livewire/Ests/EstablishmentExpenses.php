<?php

namespace App\Livewire\Ests;

use App\Models\Estexp;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentExpenses extends Component
{
    
    public $user_id;
    public $est_record_id;
    public $expense_salary;
    public $expense_allowance;
    public $expense_inkind;
    public $expense_salary_foreign;
    public $expense_allowance_foreign;
    public $expense_inkind_foreign;
    public $expense_food;
    public $expense_laundry;
    public $expense_transport;
    public $expense_water;
    public $expense_electricity;
    public $expense_fuel;
    public $expense_tele;
    public $expense_fines;
    public $expense_costofgoodssold;
    public $expense_lease;
    public $expense_depreciation;
    public $expense_financialcost;
    public $expense_marketing;
    public $expense_admin;
    public $expense_management;
    public $expense_other;
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
            'expense_salary' => 'required|numeric',
            'expense_allowance' => 'required|numeric',
            'expense_inkind' => 'required|numeric',
            'expense_salary_foreign' => 'required|numeric',
            'expense_allowance_foreign' => 'required|numeric',
            'expense_inkind_foreign' => 'required|numeric',
            'expense_food' => 'required|numeric',
            'expense_laundry' => 'required|numeric',
            'expense_transport' => 'required|numeric',
            'expense_water' => 'required|numeric',
            'expense_electricity' => 'required|numeric',
            'expense_fuel' => 'required|numeric',
            'expense_tele' => 'required|numeric',
            'expense_fines' => 'required|numeric',
            'expense_costofgoodssold' => 'required|numeric',
            'expense_lease' => 'required|numeric',
            'expense_depreciation' => 'required|numeric',
            'expense_financialcost' => 'required|numeric',
            'expense_marketing' => 'required|numeric',
            'expense_admin' => 'required|numeric',
            'expense_management' => 'required|numeric',
            'expense_other' => 'required|numeric',
        ]);

        Estexp::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'expense_salary' => $this->expense_salary,
            'expense_allowance' => $this->expense_allowance,
            'expense_inkind' => $this->expense_inkind,
            'expense_salary_foreign' => $this->expense_salary_foreign,
            'expense_allowance_foreign' => $this->expense_allowance_foreign,
            'expense_inkind_foreign' => $this->expense_inkind_foreign,
            'expense_food' => $this->expense_food,
            'expense_laundry' => $this->expense_laundry,
            'expense_transport' => $this->expense_transport,
            'expense_water' => $this->expense_water,
            'expense_electricity' => $this->expense_electricity,
            'expense_fuel' => $this->expense_fuel,
            'expense_tele' => $this->expense_tele,
            'expense_fines' => $this->expense_fines,
            'expense_costofgoodssold' => $this->expense_costofgoodssold,
            'expense_lease' => $this->expense_lease,
            'expense_depreciation' => $this->expense_depreciation,
            'expense_financialcost' => $this->expense_financialcost,
            'expense_marketing' => $this->expense_marketing,
            'expense_admin' => $this->expense_admin,
            'expense_management' => $this->expense_management,
            'expense_other' => $this->expense_other,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Expenditure Information Submitted successfully');
        return redirect()->route('dashboard');
    }

   
    public function render()
    {
        return view('livewire.ests.establishment-expenses');
    }
}
