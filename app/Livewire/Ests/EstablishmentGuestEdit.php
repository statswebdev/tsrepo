<?php

namespace App\Livewire\Ests;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\EstRecord;

class EstablishmentGuestEdit extends Component
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

    protected $rules = [
            'maldivian_male' => 'required|numeric',
            'maldivian_female' => 'required|numeric',
            'foreign_male' => 'required|numeric',
            'foreign_female' => 'required|numeric',
            'maldivian_male_permanent' => 'required|numeric',
            'maldivian_female_permanent' => 'required|numeric',
            'foreign_male_permanent' => 'required|numeric',
            'foreign_female_permanent' => 'required|numeric',
            'hundred_maldivian' => 'required|numeric',
            'hundred_foreign' => 'required|numeric',
            'threehundred_maldivian' => 'required|numeric',
            'threehundred_foreign' => 'required|numeric',
            'fivehundred_maldivian' => 'required|numeric',
            'fivehundred_foreign' => 'required|numeric',
            'sevenhundred_maldivian' => 'required|numeric',
            'sevenhundred_foreign' => 'required|numeric',
            'ninehundred_maldivian' => 'required|numeric',
            'ninehundred_foreign' => 'required|numeric',
            'thausand_maldivian' => 'required|numeric',
            'thausand_foreign' => 'required|numeric',
            'threethausand_maldivian' => 'required|numeric',
            'threethausand_foreign' => 'required|numeric',
            'fivethausand_maldivian' => 'required|numeric',
            'fivethausand_foreign' => 'required|numeric',
            'seventhausand_maldivian' => 'required|numeric',
            'seventhausand_foreign' => 'required|numeric',
            'tenthausand_maldivian' => 'required|numeric',
            'tenthausand_foreign' => 'required|numeric',
            'age_eighteen_mdv_male' => 'required|numeric',
            'age_eighteen_mdv_female' => 'required|numeric',
            'age_eighteen_foreign_male' => 'required|numeric',
            'age_eighteen_foreign_female' => 'required|numeric',
            'age_twenty_mdv_male' => 'required|numeric',
            'age_twenty_mdv_female' => 'required|numeric',
            'age_twenty_foreign_male' => 'required|numeric',
            'age_twenty_foreign_female' => 'required|numeric',
            'age_thirty_mdv_male' => 'required|numeric',
            'age_thirty_mdv_female' => 'required|numeric',
            'age_thirty_foreign_male' => 'required|numeric',
            'age_thirty_foreign_female' => 'required|numeric',
            'age_sixty_mdv_male' => 'required|numeric',
            'age_sixty_mdv_female' => 'required|numeric',
            'age_sixty_foreign_male' => 'required|numeric',
            'age_sixty_foreign_female' => 'required|numeric',
            'age_old_mdv_male' => 'required|numeric',
            'age_old_mdv_female' => 'required|numeric',
            'age_old_foreign_male' => 'required|numeric',
            'age_old_foreign_female' => 'required|numeric',
    ];

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();

        $est_record = EstRecord::with('estguest')->findOrFail($estrecordid);

        if ($est_record->estguest) {
            $this->maldivian_male = $est_record->estguest->maldivian_male;
            $this->maldivian_female = $est_record->estguest->maldivian_female;
            $this->foreign_male = $est_record->estguest->foreign_male;
            $this->foreign_female = $est_record->estguest->foreign_female;
            $this->maldivian_male_permanent = $est_record->estguest->maldivian_male_permanent;
            $this->maldivian_female_permanent = $est_record->estguest->maldivian_female_permanent;
            $this->foreign_male_permanent = $est_record->estguest->foreign_male_permanent;
            $this->foreign_female_permanent = $est_record->estguest->foreign_female_permanent;
            $this->hundred_maldivian = $est_record->estguest->hundred_maldivian;
            $this->hundred_foreign = $est_record->estguest->hundred_foreign;
            $this->threehundred_maldivian = $est_record->estguest->threehundred_maldivian;
            $this->threehundred_foreign = $est_record->estguest->threehundred_foreign;
            $this->fivehundred_maldivian = $est_record->estguest->fivehundred_maldivian;
            $this->fivehundred_foreign = $est_record->estguest->fivehundred_foreign;
            $this->sevenhundred_maldivian = $est_record->estguest->sevenhundred_maldivian;
            $this->sevenhundred_foreign = $est_record->estguest->sevenhundred_foreign;
            $this->ninehundred_maldivian = $est_record->estguest->ninehundred_maldivian;
            $this->ninehundred_foreign = $est_record->estguest->ninehundred_foreign;
            $this->thausand_maldivian = $est_record->estguest->thausand_maldivian;
            $this->thausand_foreign = $est_record->estguest->thausand_foreign;
            $this->threethausand_maldivian = $est_record->estguest->threethausand_maldivian;
            $this->threethausand_foreign = $est_record->estguest->threethausand_foreign;
            $this->fivethausand_maldivian = $est_record->estguest->fivethausand_maldivian;
            $this->fivethausand_foreign = $est_record->estguest->fivethausand_foreign;
            $this->seventhausand_maldivian = $est_record->estguest->seventhausand_maldivian;
            $this->seventhausand_foreign = $est_record->estguest->seventhausand_foreign;
            $this->tenthausand_maldivian = $est_record->estguest->tenthausand_maldivian;
            $this->tenthausand_foreign = $est_record->estguest->tenthausand_foreign;
            $this->age_eighteen_mdv_male = $est_record->estguest->age_eighteen_mdv_male;
            $this->age_eighteen_mdv_female = $est_record->estguest->age_eighteen_mdv_female;
            $this->age_eighteen_foreign_male = $est_record->estguest->age_eighteen_foreign_male;
            $this->age_eighteen_foreign_female = $est_record->estguest->age_eighteen_foreign_female;
            $this->age_twenty_mdv_male = $est_record->estguest->age_twenty_mdv_male;
            $this->age_twenty_mdv_female = $est_record->estguest->age_twenty_mdv_female;
            $this->age_twenty_foreign_male = $est_record->estguest->age_twenty_foreign_male;
            $this->age_twenty_foreign_female = $est_record->estguest->age_twenty_foreign_female;
            $this->age_thirty_mdv_male = $est_record->estguest->age_thirty_mdv_male;
            $this->age_thirty_mdv_female = $est_record->estguest->age_thirty_mdv_female;
            $this->age_thirty_foreign_male = $est_record->estguest->age_thirty_foreign_male;
            $this->age_thirty_foreign_female = $est_record->estguest->age_thirty_foreign_female;
            $this->age_sixty_mdv_male = $est_record->estguest->age_sixty_mdv_male;
            $this->age_sixty_mdv_female = $est_record->estguest->age_sixty_mdv_female;
            $this->age_sixty_foreign_male = $est_record->estguest->age_sixty_foreign_male;
            $this->age_sixty_foreign_female = $est_record->estguest->age_sixty_foreign_female;
            $this->age_old_mdv_male = $est_record->estguest->age_old_mdv_male;
            $this->age_old_mdv_female = $est_record->estguest->age_old_mdv_female;
            $this->age_old_foreign_male = $est_record->estguest->age_old_foreign_male;
            $this->age_old_foreign_female = $est_record->estguest->age_old_foreign_female;
        }

        $this->est_record_id = $estrecordid;
    }

    public function save()
    {
        $this->validate([
            'maldivian_male' => 'required|numeric',
            'maldivian_female' => 'required|numeric',
            'foreign_male' => 'required|numeric',
            'foreign_female' => 'required|numeric',
            'maldivian_male_permanent' => 'required|numeric',
            'maldivian_female_permanent' => 'required|numeric',
            'foreign_male_permanent' => 'required|numeric',
            'foreign_female_permanent' => 'required|numeric',
            'hundred_maldivian' => 'required|numeric',
            'hundred_foreign' => 'required|numeric',
            'threehundred_maldivian' => 'required|numeric',
            'threehundred_foreign' => 'required|numeric',
            'fivehundred_maldivian' => 'required|numeric',
            'fivehundred_foreign' => 'required|numeric',
            'sevenhundred_maldivian' => 'required|numeric',
            'sevenhundred_foreign' => 'required|numeric',
            'ninehundred_maldivian' => 'required|numeric',
            'ninehundred_foreign' => 'required|numeric',
            'thausand_maldivian' => 'required|numeric',
            'thausand_foreign' => 'required|numeric',
            'threethausand_maldivian' => 'required|numeric',
            'threethausand_foreign' => 'required|numeric',
            'fivethausand_maldivian' => 'required|numeric',
            'fivethausand_foreign' => 'required|numeric',
            'seventhausand_maldivian' => 'required|numeric',
            'seventhausand_foreign' => 'required|numeric',
            'tenthausand_maldivian' => 'required|numeric',
            'tenthausand_foreign' => 'required|numeric',
            'age_eighteen_mdv_male' => 'required|numeric',
            'age_eighteen_mdv_female' => 'required|numeric',
            'age_eighteen_foreign_male' => 'required|numeric',
            'age_eighteen_foreign_female' => 'required|numeric',
            'age_twenty_mdv_male' => 'required|numeric',
            'age_twenty_mdv_female' => 'required|numeric',
            'age_twenty_foreign_male' => 'required|numeric',
            'age_twenty_foreign_female' => 'required|numeric',
            'age_thirty_mdv_male' => 'required|numeric',
            'age_thirty_mdv_female' => 'required|numeric',
            'age_thirty_foreign_male' => 'required|numeric',
            'age_thirty_foreign_female' => 'required|numeric',
            'age_sixty_mdv_male' => 'required|numeric',
            'age_sixty_mdv_female' => 'required|numeric',
            'age_sixty_foreign_male' => 'required|numeric',
            'age_sixty_foreign_female' => 'required|numeric',
            'age_old_mdv_male' => 'required|numeric',
            'age_old_mdv_female' => 'required|numeric',
            'age_old_foreign_male' => 'required|numeric',
            'age_old_foreign_female' => 'required|numeric',
            
        ]);

        $estRecord = EstRecord::with('estguest')->findOrFail($this->est_record_id);

        if ($estRecord->estguest) {
            // Update the fields in the related `estincome` model
            $estRecord->estguest->update([
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
                'status' => 'submitted',
            ]);
           
        }
        

        session()->flash('success', 'Employment Information Updated');
        return redirect()->route('dashboard');
    }
    
    public function render()
    {
        return view('livewire.ests.establishment-guest-edit');
    }
}
