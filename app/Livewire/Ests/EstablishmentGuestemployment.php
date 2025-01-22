<?php

namespace App\Livewire\Ests;

use App\Models\Estguest;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;

class EstablishmentGuestemployment extends Component
{
    public $user_id;
    public $est_record_id;
    public $maldivian_male;
    public $maldivian_female;
    public $foreign_male;
    public $foreign_female;
    public $maldivian_male_permanent;
    public $maldivian_female_permanent;
    public $foreign_male_permanent;
    public $foreign_female_permanent;

    public $hundred_maldivian;
    public $hundred_foreign;
    public $threehundred_maldivian;
    public $threehundred_foreign;
    public $fivehundred_maldivian;
    public $fivehundred_foreign;
    public $sevenhundred_maldivian;
    public $sevenhundred_foreign;
    public $ninehundred_maldivian;
    public $ninehundred_foreign;
    public $thausand_maldivian;
    public $thausand_foreign;
    public $threethausand_maldivian;
    public $threethausand_foreign;
    public $fivethausand_maldivian;
    public $fivethausand_foreign;
    public $seventhausand_maldivian;
    public $seventhausand_foreign;
    public $tenthausand_maldivian;
    public $tenthausand_foreign;

    public $age_eighteen_mdv_male;
    public $age_eighteen_mdv_female;
    public $age_eighteen_foreign_male;
    public $age_eighteen_foreign_female;
    public $age_twenty_mdv_male;
    public $age_twenty_mdv_female;
    public $age_twenty_foreign_male;
    public $age_twenty_foreign_female;
    public $age_thirty_mdv_male;
    public $age_thirty_mdv_female;
    public $age_thirty_foreign_male;
    public $age_thirty_foreign_female;
    public $age_sixty_mdv_male;
    public $age_sixty_mdv_female;
    public $age_sixty_foreign_male;
    public $age_sixty_foreign_female;
    public $age_old_mdv_male;
    public $age_old_mdv_female;
    public $age_old_foreign_male;
    public $age_old_foreign_female;
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
            'maldivian_male' => 'required|numeric|max:3000',
            'maldivian_female' => 'required|numeric|max:3000',
            'foreign_male' => 'required|numeric|max:3000',
            'foreign_female' => 'required|numeric|max:3000',
            'maldivian_male_permanent' => 'required|numeric|max:3000',
            'maldivian_female_permanent' => 'required|numeric|max:3000',
            'foreign_male_permanent' => 'required|numeric|max:3000',
            'foreign_female_permanent' => 'required|numeric|max:3000',
            'hundred_maldivian' => 'required|numeric|max:3000',
            'hundred_foreign' => 'required|numeric|max:3000',
            'threehundred_maldivian' => 'required|numeric|max:3000',
            'threehundred_foreign' => 'required|numeric|max:3000',
            'fivehundred_maldivian' => 'required|numeric|max:3000',
            'fivehundred_foreign' => 'required|numeric|max:3000',
            'sevenhundred_maldivian' => 'required|numeric|max:3000',
            'sevenhundred_foreign' => 'required|numeric|max:3000',
            'ninehundred_maldivian' => 'required|numeric|max:3000',
            'ninehundred_foreign' => 'required|numeric|max:3000',
            'thausand_maldivian' => 'required|numeric|max:3000',
            'thausand_foreign' => 'required|numeric|max:3000',
            'threethausand_maldivian' => 'required|numeric|max:3000',
            'threethausand_foreign' => 'required|numeric|max:3000',
            'fivethausand_maldivian' => 'required|numeric|max:3000',
            'fivethausand_foreign' => 'required|numeric|max:3000',
            'seventhausand_maldivian' => 'required|numeric|max:3000',
            'seventhausand_foreign' => 'required|numeric|max:3000',
            'tenthausand_maldivian' => 'required|numeric|max:3000',
            'tenthausand_foreign' => 'required|numeric|max:3000',
            'age_eighteen_mdv_male' => 'required|numeric|max:3000',
            'age_eighteen_mdv_female' => 'required|numeric|max:3000',
            'age_eighteen_foreign_male' => 'required|numeric|max:3000',
            'age_eighteen_foreign_female' => 'required|numeric|max:3000',
            'age_twenty_mdv_male' => 'required|numeric|max:3000',
            'age_twenty_mdv_female' => 'required|numeric|max:3000',
            'age_twenty_foreign_male' => 'required|numeric|max:3000',
            'age_twenty_foreign_female' => 'required|numeric|max:3000',
            'age_thirty_mdv_male' => 'required|numeric|max:3000',
            'age_thirty_mdv_female' => 'required|numeric|max:3000',
            'age_thirty_foreign_male' => 'required|numeric|max:3000',
            'age_thirty_foreign_female' => 'required|numeric|max:3000',
            'age_sixty_mdv_male' => 'required|numeric|max:3000',
            'age_sixty_mdv_female' => 'required|numeric|max:3000',
            'age_sixty_foreign_male' => 'required|numeric|max:3000',
            'age_sixty_foreign_female' => 'required|numeric|max:3000',
            'age_old_mdv_male' => 'required|numeric|max:3000',
            'age_old_mdv_female' => 'required|numeric|max:3000',
            'age_old_foreign_male' => 'required|numeric|max:3000',
            'age_old_foreign_female' => 'required|numeric|max:3000',
        ]);
    

        if ($this->maldivian_male_commuting > $this->maldivian_male) {
            $this->addError('maldivian_male_commuting', 'Commuting values should not exceed the total values.');
        }
        if ($this->maldivian_female_commuting > $this->maldivian_female) {
            $this->addError('maldivian_female_commuting', 'Commuting values should not exceed the total values.');
        }
        if ($this->foreign_male_commuting > $this->foreign_male) {
            $this->addError('foreign_male_commuting', 'Commuting values should not exceed the total values.');
        }
        if ($this->foreign_female_commuting > $this->foreign_female) {
            $this->addError('foreign_female_commuting', 'Commuting values should not exceed the total values.');
        }
        if ($this->maldivian_male_permanent > $this->maldivian_male) {
            $this->addError('maldivian_male_permanent', 'Permanent values should not exceed the total values.');
        }
        if ($this->maldivian_female_permanent > $this->maldivian_female) {
            $this->addError('maldivian_female_permanent', 'Permanent values should not exceed the total values.');
        }
        if ($this->foreign_male_permanent > $this->foreign_male) {
            $this->addError('foreign_male_permanent', 'Permanent values should not exceed the total values.');
        }
        if ($this->foreign_female_permanent > $this->foreign_female) {
            $this->addError('foreign_female_permanent', 'Permanent values should not exceed the total values.');
        }
        if ($this->getErrorBag()->isNotEmpty()) {
            return;
        }
        

        Estguest::create([ // Use the aliased model
            'user_id' => $this->user_id,
            'est_record_id' => $this->est_record_id->id,
            'maldivian_male' => $this->maldivian_male,
            'maldivian_female' => $this->maldivian_female,
            'foreign_male' => $this->foreign_male,
            'foreign_female' => $this->foreign_female,
            'maldivian_male_permanent' => $this->maldivian_male_permanent,
            'maldivian_female_permanent' => $this->maldivian_female_permanent,
            'foreign_male_permanent' => $this->foreign_male_permanent,
            'foreign_female_permanent' => $this->foreign_female_permanent,
            'hundred_maldivian' => $this->hundred_maldivian,
            'hundred_foreign' => $this->hundred_foreign,
            'threehundred_maldivian' => $this->threehundred_maldivian,
            'threehundred_foreign' => $this->threehundred_foreign,
            'fivehundred_maldivian' => $this->fivehundred_maldivian,
            'fivehundred_foreign' => $this->fivehundred_foreign,
            'sevenhundred_maldivian' => $this->sevenhundred_maldivian,
            'sevenhundred_foreign' => $this->sevenhundred_foreign,
            'ninehundred_maldivian' => $this->ninehundred_maldivian,
            'ninehundred_foreign' => $this->ninehundred_foreign,
            'thausand_maldivian' => $this->thausand_maldivian,
            'thausand_foreign' => $this->thausand_foreign,
            'threethausand_maldivian' => $this->threethausand_maldivian,
            'threethausand_foreign' => $this->threethausand_foreign,
            'fivethausand_maldivian' => $this->fivethausand_maldivian,
            'fivethausand_foreign' => $this->fivethausand_foreign,
            'seventhausand_maldivian' => $this->seventhausand_maldivian,
            'seventhausand_foreign' => $this->seventhausand_foreign,
            'tenthausand_maldivian' => $this->tenthausand_maldivian,
            'tenthausand_foreign' => $this->tenthausand_foreign,
            'age_eighteen_mdv_male' => $this->age_eighteen_mdv_male,
            'age_eighteen_mdv_female' => $this->age_eighteen_mdv_female,
            'age_eighteen_foreign_male' => $this->age_eighteen_foreign_male,
            'age_eighteen_foreign_female' => $this->age_eighteen_foreign_female,
            'age_twenty_mdv_male' => $this->age_twenty_mdv_male,
            'age_twenty_mdv_female' => $this->age_twenty_mdv_female,
            'age_twenty_foreign_male' => $this->age_twenty_foreign_male,
            'age_twenty_foreign_female' => $this->age_twenty_foreign_female,
            'age_thirty_mdv_male' => $this->age_thirty_mdv_male,
            'age_thirty_mdv_female' => $this->age_thirty_mdv_female,
            'age_thirty_foreign_male' => $this->age_thirty_foreign_male,
            'age_thirty_foreign_female' => $this->age_thirty_foreign_female,
            'age_sixty_mdv_male' => $this->age_sixty_mdv_male,
            'age_sixty_mdv_female' => $this->age_sixty_mdv_female,
            'age_sixty_foreign_male' => $this->age_sixty_foreign_male,
            'age_sixty_foreign_female' => $this->age_sixty_foreign_female,
            'age_old_mdv_male' => $this->age_old_mdv_male,
            'age_old_mdv_female' => $this->age_old_mdv_female,
            'age_old_foreign_male' => $this->age_old_foreign_male,
            'age_old_foreign_female' => $this->age_old_foreign_female,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Employment Information Submitted successfully');
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.ests.establishment-guestemployment');
    }
}
