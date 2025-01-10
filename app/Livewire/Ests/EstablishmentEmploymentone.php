<?php

namespace App\Livewire\Ests;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;
use App\Models\EstEmpone;


class EstablishmentEmploymentone extends Component
{

    public $user_id;
    public $est_record_id;
    public $maldivian_male;
    public $maldivian_female;
    public $foreign_male;
    public $foreign_female;
    public $maldivian_male_commuting;
    public $maldivian_female_commuting;
    public $foreign_male_commuting;
    public $foreign_female_commuting;
    public $maldivian_male_permanent;
    public $maldivian_female_permanent;
    public $foreign_male_permanent;
    public $foreign_female_permanent;
    public $accomo_maldivian_male;
    public $accomo_maldivian_female;
    public $accomo_foreign_male;
    public $accomo_foreign_female;
    public $food_maldivian_male;
    public $food_maldivian_female;
    public $food_foreign_male;
    public $food_foreign_female;
    public $transport_maldivian_male;
    public $transport_maldivian_female;
    public $transport_foreign_male;
    public $transport_foreign_female;
    public $sports_maldivian_male;
    public $sports_maldivian_female;
    public $sports_foreign_male;
    public $sports_foreign_female;
    public $admin_maldivian_male;
    public $admin_maldivian_female;
    public $admin_foreign_male;
    public $admin_foreign_female;
    public $other_maldivian_male;
    public $other_maldivian_female;
    public $other_foreign_male;
    public $other_foreign_female;
    public $manager_maldivian_male;
    public $manager_maldivian_female;
    public $manager_foreign_male;
    public $manager_foreign_female;
    public $professional_maldivian_male;
    public $professional_maldivian_female;
    public $professional_foreign_male;
    public $professional_foreign_female;
    public $service_maldivian_male;
    public $service_maldivian_female;
    public $service_foreign_male;
    public $service_foreign_female;
    public $elementary_maldivian_male;
    public $elementary_maldivian_female;
    public $elementary_foreign_male;
    public $elementary_foreign_female;
    public $bylevelother_maldivian_male;
    public $bylevelother_maldivian_female;
    public $bylevelother_foreign_male;
    public $bylevelother_foreign_female;
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
        'maldivian_male' => 'required|integer|max:3000',
        'maldivian_female' => 'required|integer|max:3000',
        'foreign_male' => 'required|integer|max:3000',
        'foreign_female' => 'required|integer|max:3000',
        'maldivian_male_commuting' => 'required|integer|max:3000',
        'maldivian_female_commuting' => 'required|integer|max:3000',
        'foreign_male_commuting' => 'required|integer|max:3000',
        'foreign_female_commuting' => 'required|integer|max:3000',
        'maldivian_male_permanent' => 'required|integer|max:3000',
        'maldivian_female_permanent' => 'required|integer|max:3000',
        'foreign_male_permanent' => 'required|integer|max:3000',
        'foreign_female_permanent' => 'required|integer|max:3000',
        'accomo_maldivian_male' => 'required|integer|max:3000',
        'accomo_maldivian_female' => 'required|integer|max:3000',
        'accomo_foreign_male' => 'required|integer|max:3000',
        'accomo_foreign_female' => 'required|integer|max:3000',
        'food_maldivian_male' => 'required|integer|max:3000',
        'food_maldivian_female' => 'required|integer|max:3000',
        'food_foreign_male' => 'required|integer|max:3000',
        'food_foreign_female' => 'required|integer|max:3000',
        'transport_maldivian_male' => 'required|integer|max:3000',
        'transport_maldivian_female' => 'required|integer|max:3000',
        'transport_foreign_male' => 'required|integer|max:3000',
        'transport_foreign_female' => 'required|integer|max:3000',
        'sports_maldivian_male' => 'required|integer|max:3000',
        'sports_maldivian_female' => 'required|integer|max:3000',
        'sports_foreign_male' => 'required|integer|max:3000',
        'sports_foreign_female' => 'required|integer|max:3000',
        'admin_maldivian_male' => 'required|integer|max:3000',
        'admin_maldivian_female' => 'required|integer|max:3000',
        'admin_foreign_male' => 'required|integer|max:3000',
        'admin_foreign_female' => 'required|integer|max:3000',
        'other_maldivian_male' => 'required|integer|max:3000',
        'other_maldivian_female' => 'required|integer|max:3000',
        'other_foreign_male' => 'required|integer|max:3000',
        'other_foreign_female' => 'required|integer|max:3000',
        'manager_maldivian_male' => 'required|integer|max:3000',
        'manager_maldivian_female' => 'required|integer|max:3000',
        'manager_foreign_male' => 'required|integer|max:3000',
        'manager_foreign_female' => 'required|integer|max:3000',
        'professional_maldivian_male' => 'required|integer|max:3000',
        'professional_maldivian_female' => 'required|integer|max:3000',
        'professional_foreign_male' => 'required|integer|max:3000',
        'professional_foreign_female' => 'required|integer|max:3000',
        'service_maldivian_male' => 'required|integer|max:3000',
        'service_maldivian_female' => 'required|integer|max:3000',
        'service_foreign_male' => 'required|integer|max:3000',
        'service_foreign_female' => 'required|integer|max:3000',
        'elementary_maldivian_male' => 'required|integer|max:3000',
        'elementary_maldivian_female' => 'required|integer|max:3000',
        'elementary_foreign_male' => 'required|integer|max:3000',
        'elementary_foreign_female' => 'required|integer|max:3000',
        'bylevelother_maldivian_male' => 'required|integer|max:3000',
        'bylevelother_maldivian_female' => 'required|integer|max:3000',
        'bylevelother_foreign_male' => 'required|integer|max:3000',
        'bylevelother_foreign_female' => 'required|integer|max:3000',
        'status' => 'required|string',
            ]);

        EstEmpone::create([ 
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'maldivian_male' => $this->maldivian_male,
            'maldivian_female' => $this->maldivian_female,
            'foreign_male' => $this->foreign_male,
            'foreign_female' => $this->foreign_female,
            'maldivian_male_commuting' => $this->maldivian_male_commuting,
            'maldivian_female_commuting' => $this->maldivian_female_commuting,
            'foreign_male_commuting' => $this->foreign_male_commuting,
            'foreign_female_commuting' => $this->foreign_female_commuting,
            'maldivian_male_permanent' => $this->maldivian_male_permanent,
            'maldivian_female_permanent' => $this->maldivian_female_permanent,
            'foreign_male_permanent' => $this->foreign_male_permanent,
            'foreign_female_permanent' => $this->foreign_female_permanent,
            'accomo_maldivian_male' => $this->accomo_maldivian_male,
            'accomo_maldivian_female' => $this->accomo_maldivian_female,
            'accomo_foreign_male' => $this->accomo_foreign_male,
            'accomo_foreign_female' => $this->accomo_foreign_female,
            'food_maldivian_male' => $this->food_maldivian_male,
            'food_maldivian_female' => $this->food_maldivian_female,
            'food_foreign_male' => $this->food_foreign_male,
            'food_foreign_female' => $this->food_foreign_female,
            'transport_maldivian_male' => $this->transport_maldivian_male,
            'transport_maldivian_female' => $this->transport_maldivian_female,
            'transport_foreign_male' => $this->transport_foreign_male,
            'transport_foreign_female' => $this->transport_foreign_female,
            'sports_maldivian_male' => $this->sports_maldivian_male,
            'sports_maldivian_female' => $this->sports_maldivian_female,
            'sports_foreign_male' => $this->sports_foreign_male,
            'sports_foreign_female' => $this->sports_foreign_female,
            'admin_maldivian_male' => $this->admin_maldivian_male,
            'admin_maldivian_female' => $this->admin_maldivian_female,
            'admin_foreign_male' => $this->admin_foreign_male,
            'admin_foreign_female' => $this->admin_foreign_female,
            'other_maldivian_male' => $this->other_maldivian_male,
            'other_maldivian_female' => $this->other_maldivian_female,
            'other_foreign_male' => $this->other_foreign_male,
            'other_foreign_female' => $this->other_foreign_female,
            'manager_maldivian_male' => $this->manager_maldivian_male,
            'manager_maldivian_female' => $this->manager_maldivian_female,
            'manager_foreign_male' => $this->manager_foreign_male,
            'manager_foreign_female' => $this->manager_foreign_female,
            'professional_maldivian_male' => $this->professional_maldivian_male,
            'professional_maldivian_female' => $this->professional_maldivian_female,
            'professional_foreign_male' => $this->professional_foreign_male,
            'professional_foreign_female' => $this->professional_foreign_female,
            'service_maldivian_male' => $this->service_maldivian_male,
            'service_maldivian_female' => $this->service_maldivian_female,
            'service_foreign_male' => $this->service_foreign_male,
            'service_foreign_female' => $this->service_foreign_female,
            'elementary_maldivian_male' => $this->elementary_maldivian_male,
            'elementary_maldivian_female' => $this->elementary_maldivian_female,
            'elementary_foreign_male' => $this->elementary_foreign_male,
            'elementary_foreign_female' => $this->elementary_foreign_female,
            'bylevelother_maldivian_male' => $this->bylevelother_maldivian_male,
            'bylevelother_maldivian_female' => $this->bylevelother_maldivian_female,
            'bylevelother_foreign_male' => $this->bylevelother_foreign_male,
            'bylevelother_foreign_female' => $this->bylevelother_foreign_female,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Employment Part 1 Submitted successfully');
        return redirect()->route('dashboard');
        
    
        }


    public function render()
    {
        return view('livewire.ests.establishment-employmentone');
    }
}
