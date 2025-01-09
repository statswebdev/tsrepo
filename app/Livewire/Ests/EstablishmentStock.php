<?php

namespace App\Livewire\Ests;

use App\Models\Eststk;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentStock extends Component
{

    public $user_id;
    public $est_record_id;
    public $stock_fuel;
    public $stock_fuel_yearend;
    public $stock_tradedgoods;
    public $stock_tradedgoods_yearend;
    public $stock_food;
    public $stock_food_yearend;
    public $stock_chemicals;
    public $stock_chemicals_yearend;
    public $stock_packing;
    public $stock_packing_yearend;
    public $stock_spare;
    public $stock_spare_yearend;
    public $stock_textile;
    public $stock_textile_yearend;
    public $stock_stationary;
    public $stock_stationary_yearend;
    public $stock_other_one;
    public $stock_other_one_value;
    public $stock_other_one_value_yearend;
    public $stock_other_two;
    public $stock_other_two_value;
    public $stock_other_two_value_yearend;
    public $stock_other_three;
    public $stock_other_three_value;
    public $stock_other_three_value_yearend;
    public $stock_other_four;
    public $stock_other_four_value;
    public $stock_other_four_value_yearend;
    public $profit_loss;
    public $remarks;
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
            'stock_fuel' => 'required|numeric',
            'stock_fuel_yearend' => 'required|numeric',
            'stock_tradedgoods' => 'required|numeric',
            'stock_tradedgoods_yearend' => 'required|numeric',
            'stock_food' => 'required|numeric',
            'stock_food_yearend' => 'required|numeric',
            'stock_chemicals' => 'required|numeric',
            'stock_chemicals_yearend' => 'required|numeric',
            'stock_packing' => 'required|numeric',
            'stock_packing_yearend' => 'required|numeric',
            'stock_spare' => 'required|numeric',
            'stock_spare_yearend' => 'required|numeric',
            'stock_textile' => 'required|numeric',
            'stock_textile_yearend' => 'required|numeric',
            'stock_stationary' => 'required|numeric',
            'stock_stationary_yearend' => 'required|numeric',
            'stock_other_one' => 'nullable|string',
            'stock_other_one_value' => 'nullable|numeric',
            'stock_other_one_value_yearend' => 'nullable|numeric',
            'stock_other_two' => 'nullable|string',
            'stock_other_two_value' => 'nullable|numeric',
            'stock_other_two_value_yearend' => 'nullable|numeric',
            'stock_other_three' => 'nullable|string',
            'stock_other_three_value' => 'nullable|numeric',
            'stock_other_three_value_yearend' => 'nullable|numeric',
            'stock_other_four' => 'nullable|string',
            'stock_other_four_value' => 'nullable|numeric',
            'stock_other_four_value_yearend' => 'nullable|numeric',
            'profit_loss' => 'required|numeric',
            'remarks' => 'nullable|string'
        ]);

        Eststk::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'stock_fuel' => $this->stock_fuel,
            'stock_fuel_yearend' => $this->stock_fuel_yearend,
            'stock_tradedgoods' => $this->stock_tradedgoods,
            'stock_tradedgoods_yearend' => $this->stock_tradedgoods_yearend,
            'stock_food' => $this->stock_food,
            'stock_food_yearend' => $this->stock_food_yearend,
            'stock_chemicals' => $this->stock_chemicals,
            'stock_chemicals_yearend' => $this->stock_chemicals_yearend,
            'stock_packing' => $this->stock_packing,
            'stock_packing_yearend' => $this->stock_packing_yearend,
            'stock_spare' => $this->stock_spare,
            'stock_spare_yearend' => $this->stock_spare_yearend,
            'stock_textile' => $this->stock_textile,
            'stock_textile_yearend' => $this->stock_textile_yearend,
            'stock_stationary' => $this->stock_stationary,
            'stock_stationary_yearend' => $this->stock_stationary_yearend,
            'stock_other_one' => $this->stock_other_one,
            'stock_other_one_value' => $this->stock_other_one_value,
            'stock_other_one_value_yearend' => $this->stock_other_one_value_yearend,
            'stock_other_two' => $this->stock_other_two,
            'stock_other_two_value' => $this->stock_other_two_value,
            'stock_other_two_value_yearend' => $this->stock_other_two_value_yearend,
            'stock_other_three' => $this->stock_other_three,
            'stock_other_three_value' => $this->stock_other_three_value,
            'stock_other_three_value_yearend' => $this->stock_other_three_value_yearend,
            'stock_other_four' => $this->stock_other_four,
            'stock_other_four_value' => $this->stock_other_four_value,
            'stock_other_four_value_yearend' => $this->stock_other_four_value_yearend,
            'profit_loss' => $this->profit_loss,
            'remarks' => $this->remarks,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Stock & Inventory Information Submitted successfully');
        return redirect()->route('dashboard');
    }

   
    public function render()
    {
        return view('livewire.ests.establishment-stock');
    }
}
