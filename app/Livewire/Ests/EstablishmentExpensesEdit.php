<?php

namespace App\Livewire\Ests;

use App\Models\Estexp;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;


class EstablishmentExpensesEdit extends Component
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

    protected $rules = [
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
    ];

    public function mount()
    {
        // Get the authenticated user's ID
        $this->user_id = Auth::id();

        // Retrieve the record from the estopera table for the authenticated user
        $estexp = Estexp::where('user_id', $this->user_id)->first();

        if ($estexp) {
            $this->expense_salary = $estexp->expense_salary;
            $this->expense_allowance = $estexp->expense_allowance;
            $this->expense_inkind = $estexp->expense_inkind;
            $this->expense_salary_foreign = $estexp->expense_salary_foreign;
            $this->expense_allowance_foreign = $estexp->expense_allowance_foreign;
            $this->expense_inkind_foreign = $estexp->expense_inkind_foreign;
            $this->expense_food = $estexp->expense_food;
            $this->expense_laundry = $estexp->expense_laundry;
            $this->expense_transport = $estexp->expense_transport;
            $this->expense_water = $estexp->expense_water;
            $this->expense_electricity = $estexp->expense_electricity;
            $this->expense_fuel = $estexp->expense_fuel;
            $this->expense_tele = $estexp->expense_tele;
            $this->expense_fines = $estexp->expense_fines;
            $this->expense_costofgoodssold = $estexp->expense_costofgoodssold;
            $this->expense_lease = $estexp->expense_lease;
            $this->expense_depreciation = $estexp->expense_depreciation;
            $this->expense_financialcost = $estexp->expense_financialcost;
            $this->expense_marketing = $estexp->expense_marketing;
            $this->expense_admin = $estexp->expense_admin;
            $this->expense_management = $estexp->expense_management;
            $this->expense_other = $estexp->expense_other;
        }
    }

    public function save()
    {
        $this->validate([
            'expense_salary' => 'required|numeric|max:9999999999',
            'expense_allowance' => 'required|numeric|max:9999999999',
            'expense_inkind' => 'required|numeric|max:9999999999',
            'expense_salary_foreign' => 'required|numeric|max:9999999999',
            'expense_allowance_foreign' => 'required|numeric|max:9999999999',
            'expense_inkind_foreign' => 'required|numeric|max:9999999999',
            'expense_food' => 'required|numeric|max:9999999999',
            'expense_laundry' => 'required|numeric|max:9999999999',
            'expense_transport' => 'required|numeric|max:9999999999',
            'expense_water' => 'required|numeric|max:9999999999',
            'expense_electricity' => 'required|numeric|max:9999999999',
            'expense_fuel' => 'required|numeric|max:9999999999',
            'expense_tele' => 'required|numeric|max:9999999999',
            'expense_fines' => 'required|numeric|max:9999999999',
            'expense_costofgoodssold' => 'required|numeric|max:9999999999',
            'expense_lease' => 'required|numeric|max:9999999999',
            'expense_depreciation' => 'required|numeric|max:9999999999',
            'expense_financialcost' => 'required|numeric|max:9999999999',
            'expense_marketing' => 'required|numeric|max:9999999999',
            'expense_admin' => 'required|numeric|max:9999999999',
            'expense_management' => 'required|numeric|max:9999999999',
            'expense_other' => 'required|numeric|max:9999999999',
            
        ]);

        $estexp = Estexp::where('user_id', $this->user_id)->first();

        if ($estexp) {
            // Update the fields in the estopera record
            $estexp->update([
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
            
        }
        

        session()->flash('success', 'Expenditure Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-expenses-edit');
    }
}
