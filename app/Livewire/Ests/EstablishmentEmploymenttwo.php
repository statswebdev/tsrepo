<?php

namespace App\Livewire\Ests;

use App\Models\EstEmptwo;
use Livewire\Component;
use App\Models\EstRecord;
use Illuminate\Support\Facades\Auth;

class EstablishmentEmploymenttwo extends Component
{

    public $user_id;
    public $est_record_id;
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
    public $duration_maldivian_male_lessthanoneyear;
    public $duration_maldivian_female_lessthanoneyear;
    public $duration_foreign_male_lessthanoneyear;
    public $duration_foreign_female_lessthanoneyear;
    public $duration_maldivian_male_one_two_years;
    public $duration_maldivian_female_one_two_years;
    public $duration_foreign_male_one_two_years;
    public $duration_foreign_female_one_two_years;
    public $duration_maldivian_male_three_four_years;
    public $duration_maldivian_female_three_four_years;
    public $duration_foreign_male_three_four_years;
    public $duration_foreign_female_three_four_years;
    public $duration_maldivian_male_five_nine_years;
    public $duration_maldivian_female_five_nine_years;
    public $duration_foreign_male_five_nine_years;
    public $duration_foreign_female_five_nine_years;
    public $duration_maldivian_male_ten_years;
    public $duration_maldivian_female_ten_years;
    public $duration_foreign_male_ten_years;
    public $duration_foreign_female_ten_years;
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
    public $capital_male;
    public $capital_female;
    public $ha_male;
    public $ha_female;
    public $hdh_male;
    public $hdh_female;
    public $shaviyani_male;
    public $shaviyani_female;
    public $noonu_male;
    public $noonu_female;
    public $raa_male;
    public $raa_female;
    public $baa_male;
    public $baa_female;
    public $lhaviyani_male;
    public $lhaviyani_female;
    public $kaafu_male;
    public $kaafu_female;
    public $alifalif_male;
    public $alifalif_female;
    public $alifdhaal_male;
    public $alifdhaal_female;
    public $vaav_male;
    public $vaav_female;
    public $meem_male;
    public $meem_female;
    public $faaf_male;
    public $faaf_female;
    public $dhaal_male;
    public $dhaal_female;
    public $thaa_male;
    public $thaa_female;
    public $laam_male;
    public $laam_female;
    public $ga_male;
    public $ga_female;
    public $gdh_male;
    public $gdh_female;
    public $gn_male;
    public $gn_female;
    public $seenu_male;
    public $seenu_female;
    public $retailshop_outsourced;
    public $retailshop_male;
    public $retailshop_female;
    public $divingcenter_outsourced;
    public $divingcenter_male;
    public $divingcenter_female;
    public $restaurant_outsourced;
    public $restaurant_male;
    public $restaurant_female;
    public $spa_outsourced;
    public $spa_male;
    public $spa_female;
    public $transport_outsourced;
    public $transport_male;
    public $transport_female;
    public $construction_outsourced;
    public $construction_male;
    public $construction_female;
    public $otherone_name;
    public $otherone_outsourced;
    public $otherone_male;
    public $otherone_female;
    public $othertwo_name;
    public $othertwo_outsourced;
    public $othertwo_male;
    public $othertwo_female;
    public $otherthree_name;
    public $otherthree_outsourced;
    public $otherthree_male;
    public $otherthree_female;
    public $status = 'submitted';

    public function mount($estrecordid)
    {
        $this->user_id = Auth::id();
        $this->est_record_id = EstRecord::findOrFail($estrecordid);
        
        //dd($est_record_id->id);
    }

    public function submitRecord()
    {
        $this->validate([
            'hundred_maldivian' => 'required|integer|max:3000',
            'hundred_foreign' => 'required|integer|max:3000',
            'threehundred_maldivian' => 'required|integer|max:3000',
            'threehundred_foreign' => 'required|integer|max:3000',
            'fivehundred_maldivian' => 'required|integer|max:3000',
            'fivehundred_foreign' => 'required|integer|max:3000',
            'sevenhundred_maldivian' => 'required|integer|max:3000',
            'sevenhundred_foreign' => 'required|integer|max:3000',
            'ninehundred_maldivian' => 'required|integer|max:3000',
            'ninehundred_foreign' => 'required|integer|max:3000',
            'thausand_maldivian' => 'required|integer|max:3000',
            'thausand_foreign' => 'required|integer|max:3000',
            'threethausand_maldivian' => 'required|integer|max:3000',
            'threethausand_foreign' => 'required|integer|max:3000',
            'fivethausand_maldivian' => 'required|integer|max:3000',
            'fivethausand_foreign' => 'required|integer|max:3000',
            'seventhausand_maldivian' => 'required|integer|max:3000',
            'seventhausand_foreign' => 'required|integer|max:3000',
            'tenthausand_maldivian' => 'required|integer|max:3000',
            'tenthausand_foreign' => 'required|integer|max:3000',
            'duration_maldivian_male_lessthanoneyear' => 'required|integer|max:3000',
            'duration_maldivian_female_lessthanoneyear' => 'required|integer|max:3000',
            'duration_foreign_male_lessthanoneyear' => 'required|integer|max:3000',
            'duration_foreign_female_lessthanoneyear' => 'required|integer|max:3000',
            'duration_maldivian_male_one_two_years' => 'required|integer|max:3000',
            'duration_maldivian_female_one_two_years' => 'required|integer|max:3000',
            'duration_foreign_male_one_two_years' => 'required|integer|max:3000',
            'duration_foreign_female_one_two_years' => 'required|integer|max:3000',
            'duration_maldivian_male_three_four_years' => 'required|integer|max:3000',
            'duration_maldivian_female_three_four_years' => 'required|integer|max:3000',
            'duration_foreign_male_three_four_years' => 'required|integer|max:3000',
            'duration_foreign_female_three_four_years' => 'required|integer|max:3000',
            'duration_maldivian_male_five_nine_years' => 'required|integer|max:3000',
            'duration_maldivian_female_five_nine_years' => 'required|integer|max:3000',
            'duration_foreign_male_five_nine_years' => 'required|integer|max:3000',
            'duration_foreign_female_five_nine_years' => 'required|integer|max:3000',
            'duration_maldivian_male_ten_years' => 'required|integer|max:3000',
            'duration_maldivian_female_ten_years' => 'required|integer|max:3000',
            'duration_foreign_male_ten_years' => 'required|integer|max:3000',
            'duration_foreign_female_ten_years' => 'required|integer|max:3000',
            'age_eighteen_mdv_male' => 'required|integer|max:3000',
            'age_eighteen_mdv_female' => 'required|integer|max:3000',
            'age_eighteen_foreign_male' => 'required|integer|max:3000',
            'age_eighteen_foreign_female' => 'required|integer|max:3000',
            'age_twenty_mdv_male' => 'required|integer|max:3000',
            'age_twenty_mdv_female' => 'required|integer|max:3000',
            'age_twenty_foreign_male' => 'required|integer|max:3000',
            'age_twenty_foreign_female' => 'required|integer|max:3000',
            'age_thirty_mdv_male' => 'required|integer|max:3000',
            'age_thirty_mdv_female' => 'required|integer|max:3000',
            'age_thirty_foreign_male' => 'required|integer|max:3000',
            'age_thirty_foreign_female' => 'required|integer|max:3000',
            'age_sixty_mdv_male' => 'required|integer|max:3000',
            'age_sixty_mdv_female' => 'required|integer|max:3000',
            'age_sixty_foreign_male' => 'required|integer|max:3000',
            'age_sixty_foreign_female' => 'required|integer|max:3000',
            'age_old_mdv_male' => 'required|integer|max:3000',
            'age_old_mdv_female' => 'required|integer|max:3000',
            'age_old_foreign_male' => 'required|integer|max:3000',
            'age_old_foreign_female' => 'required|integer|max:3000',
            'capital_male' => 'required|integer|max:3000',
            'capital_female' => 'required|integer|max:3000',
            'ha_male' => 'required|integer|max:3000',
            'ha_female' => 'required|integer|max:3000',
            'hdh_male' => 'required|integer|max:3000',
            'hdh_female' => 'required|integer|max:3000',
            'shaviyani_male' => 'required|integer|max:3000',
            'shaviyani_female' => 'required|integer|max:3000',
            'noonu_male' => 'required|integer|max:3000',
            'noonu_female' => 'required|integer|max:3000',
            'raa_male' => 'required|integer|max:3000',
            'raa_female' => 'required|integer|max:3000',
            'baa_male' => 'required|integer|max:3000',
            'baa_female' => 'required|integer|max:3000',
            'lhaviyani_male' => 'required|integer|max:3000',
            'lhaviyani_female' => 'required|integer|max:3000',
            'kaafu_male' => 'required|integer|max:3000',
            'kaafu_female' => 'required|integer|max:3000',
            'alifalif_male' => 'required|integer|max:3000',
            'alifalif_female' => 'required|integer|max:3000',
            'alifdhaal_male' => 'required|integer|max:3000',
            'alifdhaal_female' => 'required|integer|max:3000',
            'vaav_male' => 'required|integer|max:3000',
            'vaav_female' => 'required|integer|max:3000',
            'meem_male' => 'required|integer|max:3000',
            'meem_female' => 'required|integer|max:3000',
            'faaf_male' => 'required|integer|max:3000',
            'faaf_female' => 'required|integer|max:3000',
            'dhaal_male' => 'required|integer|max:3000',
            'dhaal_female' => 'required|integer|max:3000',
            'thaa_male' => 'required|integer|max:3000',
            'thaa_female' => 'required|integer|max:3000',
            'laam_male' => 'required|integer|max:3000',
            'laam_female' => 'required|integer|max:3000',
            'ga_male' => 'required|integer|max:3000',
            'ga_female' => 'required|integer|max:3000',
            'gdh_male' => 'required|integer|max:3000',
            'gdh_female' => 'required|integer|max:3000',
            'gn_male' => 'required|integer|max:3000',
            'gn_female' => 'required|integer|max:3000',
            'seenu_male' => 'required|integer|max:3000',
            'seenu_female' => 'required|integer|max:3000',
            'retailshop_outsourced' => 'required|string',
            'retailshop_male' => 'nullable|integer|max:3000',
            'retailshop_female' => 'nullable|integer|max:3000',
            'divingcenter_outsourced' => 'required|string',
            'divingcenter_male' => 'nullable|integer|max:3000',
            'divingcenter_female' => 'nullable|integer|max:3000',
            'restaurant_outsourced' => 'required|string',
            'restaurant_male' => 'nullable|integer|max:3000',
            'restaurant_female' => 'nullable|integer|max:3000',
            'spa_outsourced' => 'required|string',
            'spa_male' => 'nullable|integer|max:3000',
            'spa_female' => 'nullable|integer|max:3000',
            'transport_outsourced' => 'required|string',
            'transport_male' => 'nullable|integer|max:3000',
            'transport_female' => 'nullable|integer|max:3000',
            'construction_outsourced' => 'required|string',
            'construction_male' => 'nullable|integer|max:3000',
            'construction_female' => 'nullable|integer|max:3000',
            'otherone_name' => 'nullable|string',
            'otherone_outsourced' => 'nullable|string',
            'otherone_male' => 'nullable|integer|max:3000',
            'otherone_female' => 'nullable|integer|max:3000',
            'othertwo_name' => 'nullable|string',
            'othertwo_outsourced' => 'nullable|string',
            'othertwo_male' => 'nullable|integer|max:3000',
            'othertwo_female' => 'nullable|integer|max:3000',
            'otherthree_name' => 'nullable|string',
            'otherthree_outsourced' => 'nullable|string',
            'otherthree_male' => 'nullable|integer|max:3000',
            'otherthree_female' => 'nullable|integer|max:3000',
            'status' => 'required|string',
            ]);

            EstEmptwo::create([
                'user_id' => $this->user_id,
                'est_record_id' => $this->est_record_id->id,
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
                'duration_maldivian_male_lessthanoneyear' => $this->duration_maldivian_male_lessthanoneyear,
                'duration_maldivian_female_lessthanoneyear' => $this->duration_maldivian_female_lessthanoneyear,
                'duration_foreign_male_lessthanoneyear' => $this->duration_foreign_male_lessthanoneyear,
                'duration_foreign_female_lessthanoneyear' => $this->duration_foreign_female_lessthanoneyear,
                'duration_maldivian_male_one_two_years' => $this->duration_maldivian_male_one_two_years,
                'duration_maldivian_female_one_two_years' => $this->duration_maldivian_female_one_two_years,
                'duration_foreign_male_one_two_years' => $this->duration_foreign_male_one_two_years,
                'duration_foreign_female_one_two_years' => $this->duration_foreign_female_one_two_years,
                'duration_maldivian_male_three_four_years' => $this->duration_maldivian_male_three_four_years,
                'duration_maldivian_female_three_four_years' => $this->duration_maldivian_female_three_four_years,
                'duration_foreign_male_three_four_years' => $this->duration_foreign_male_three_four_years,
                'duration_foreign_female_three_four_years' => $this->duration_foreign_female_three_four_years,
                'duration_maldivian_male_five_nine_years' => $this->duration_maldivian_male_five_nine_years,
                'duration_maldivian_female_five_nine_years' => $this->duration_maldivian_female_five_nine_years,
                'duration_foreign_male_five_nine_years' => $this->duration_foreign_male_five_nine_years,
                'duration_foreign_female_five_nine_years' => $this->duration_foreign_female_five_nine_years,
                'duration_maldivian_male_ten_years' => $this->duration_maldivian_male_ten_years,
                'duration_maldivian_female_ten_years' => $this->duration_maldivian_female_ten_years,
                'duration_foreign_male_ten_years' => $this->duration_foreign_male_ten_years,
                'duration_foreign_female_ten_years' => $this->duration_foreign_female_ten_years,
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
                'capital_male' => $this->capital_male,
                'capital_female' => $this->capital_female,
                'ha_male' => $this->ha_male,
                'ha_female' => $this->ha_female,
                'hdh_male' => $this->hdh_male,
                'hdh_female' => $this->hdh_female,
                'shaviyani_male' => $this->shaviyani_male,
                'shaviyani_female' => $this->shaviyani_female,
                'noonu_male' => $this->noonu_male,
                'noonu_female' => $this->noonu_female,
                'raa_male' => $this->raa_male,
                'raa_female' => $this->raa_female,
                'baa_male' => $this->baa_male,
                'baa_female' => $this->baa_female,
                'lhaviyani_male' => $this->lhaviyani_male,
                'lhaviyani_female' => $this->lhaviyani_female,
                'kaafu_male' => $this->kaafu_male,
                'kaafu_female' => $this->kaafu_female,
                'alifalif_male' => $this->alifalif_male,
                'alifalif_female' => $this->alifalif_female,
                'alifdhaal_male' => $this->alifdhaal_male,
                'alifdhaal_female' => $this->alifdhaal_female,
                'vaav_male' => $this->vaav_male,
                'vaav_female' => $this->vaav_female,
                'meem_male' => $this->meem_male,
                'meem_female' => $this->meem_female,
                'faaf_male' => $this->faaf_male,
                'faaf_female' => $this->faaf_female,
                'dhaal_male' => $this->dhaal_male,
                'dhaal_female' => $this->dhaal_female,
                'thaa_male' => $this->thaa_male,
                'thaa_female' => $this->thaa_female,
                'laam_male' => $this->laam_male,
                'laam_female' => $this->laam_female,
                'ga_male' => $this->ga_male,
                'ga_female' => $this->ga_female,
                'gdh_male' => $this->gdh_male,
                'gdh_female' => $this->gdh_female,
                'gn_male' => $this->gn_male,
                'gn_female' => $this->gn_female,
                'seenu_male' => $this->seenu_male,
                'seenu_female' => $this->seenu_female,
                'retailshop_outsourced' => $this->retailshop_outsourced,
                'retailshop_male' => $this->retailshop_male,
                'retailshop_female' => $this->retailshop_female,
                'divingcenter_outsourced' => $this->divingcenter_outsourced,
                'divingcenter_male' => $this->divingcenter_male,
                'divingcenter_female' => $this->divingcenter_female,
                'restaurant_outsourced' => $this->restaurant_outsourced,
                'restaurant_male' => $this->restaurant_male,
                'restaurant_female' => $this->restaurant_female,
                'spa_outsourced' => $this->spa_outsourced,
                'spa_male' => $this->spa_male,
                'spa_female' => $this->spa_female,
                'transport_outsourced' => $this->transport_outsourced,
                'transport_male' => $this->transport_male,
                'transport_female' => $this->transport_female,
                'construction_outsourced' => $this->construction_outsourced,
                'construction_male' => $this->construction_male,
                'construction_female' => $this->construction_female,
                'otherone_name' => $this->otherone_name,
                'otherone_outsourced' => $this->otherone_outsourced,
                'otherone_male' => $this->otherone_male,
                'otherone_female' => $this->otherone_female,
                'othertwo_name' => $this->othertwo_name,
                'othertwo_outsourced' => $this->othertwo_outsourced,
                'othertwo_male' => $this->othertwo_male,
                'othertwo_female' => $this->othertwo_female,
                'otherthree_name' => $this->otherthree_name,
                'otherthree_outsourced' => $this->otherthree_outsourced,
                'otherthree_male' => $this->otherthree_male,
                'otherthree_female' => $this->otherthree_female,
                'status' => 'submitted',

            ]);

        session()->flash('success', 'Employment Part 2 Submitted successfully');
        return redirect()->route('dashboard');
        
    
        }





    public function render()
    {
        return view('livewire.ests.establishment-employmenttwo');
    }
}
