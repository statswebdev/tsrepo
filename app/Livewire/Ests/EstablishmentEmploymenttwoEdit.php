<?php

namespace App\Livewire\Ests;

use App\Models\EstEmptwo;
use Livewire\Component;

class EstablishmentEmploymenttwoEdit extends Component
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
    public $status = 'Updated';

    protected $rules = [
            'hundred_maldivian' => 'required|integer',
            'hundred_foreign' => 'required|integer',
            'threehundred_maldivian' => 'required|integer',
            'threehundred_foreign' => 'required|integer',
            'fivehundred_maldivian' => 'required|integer',
            'fivehundred_foreign' => 'required|integer',
            'sevenhundred_maldivian' => 'required|integer',
            'sevenhundred_foreign' => 'required|integer',
            'ninehundred_maldivian' => 'required|integer',
            'ninehundred_foreign' => 'required|integer',
            'thausand_maldivian' => 'required|integer',
            'thausand_foreign' => 'required|integer',
            'threethausand_maldivian' => 'required|integer',
            'threethausand_foreign' => 'required|integer',
            'fivethausand_maldivian' => 'required|integer',
            'fivethausand_foreign' => 'required|integer',
            'seventhausand_maldivian' => 'required|integer',
            'seventhausand_foreign' => 'required|integer',
            'tenthausand_maldivian' => 'required|integer',
            'tenthausand_foreign' => 'required|integer',
            'duration_maldivian_male_lessthanoneyear' => 'required|integer',
            'duration_maldivian_female_lessthanoneyear' => 'required|integer',
            'duration_foreign_male_lessthanoneyear' => 'required|integer',
            'duration_foreign_female_lessthanoneyear' => 'required|integer',
            'duration_maldivian_male_one_two_years' => 'required|integer',
            'duration_maldivian_female_one_two_years' => 'required|integer',
            'duration_foreign_male_one_two_years' => 'required|integer',
            'duration_foreign_female_one_two_years' => 'required|integer',
            'duration_maldivian_male_three_four_years' => 'required|integer',
            'duration_maldivian_female_three_four_years' => 'required|integer',
            'duration_foreign_male_three_four_years' => 'required|integer',
            'duration_foreign_female_three_four_years' => 'required|integer',
            'duration_maldivian_male_five_nine_years' => 'required|integer',
            'duration_maldivian_female_five_nine_years' => 'required|integer',
            'duration_foreign_male_five_nine_years' => 'required|integer',
            'duration_foreign_female_five_nine_years' => 'required|integer',
            'duration_maldivian_male_ten_years' => 'required|integer',
            'duration_maldivian_female_ten_years' => 'required|integer',
            'duration_foreign_male_ten_years' => 'required|integer',
            'duration_foreign_female_ten_years' => 'required|integer',
            'age_eighteen_mdv_male' => 'required|integer',
            'age_eighteen_mdv_female' => 'required|integer',
            'age_eighteen_foreign_male' => 'required|integer',
            'age_eighteen_foreign_female' => 'required|integer',
            'age_twenty_mdv_male' => 'required|integer',
            'age_twenty_mdv_female' => 'required|integer',
            'age_twenty_foreign_male' => 'required|integer',
            'age_twenty_foreign_female' => 'required|integer',
            'age_thirty_mdv_male' => 'required|integer',
            'age_thirty_mdv_female' => 'required|integer',
            'age_thirty_foreign_male' => 'required|integer',
            'age_thirty_foreign_female' => 'required|integer',
            'age_sixty_mdv_male' => 'required|integer',
            'age_sixty_mdv_female' => 'required|integer',
            'age_sixty_foreign_male' => 'required|integer',
            'age_sixty_foreign_female' => 'required|integer',
            'age_old_mdv_male' => 'required|integer',
            'age_old_mdv_female' => 'required|integer',
            'age_old_foreign_male' => 'required|integer',
            'age_old_foreign_female' => 'required|integer',
            'capital_male' => 'required|integer',
            'capital_female' => 'required|integer',
            'ha_male' => 'required|integer',
            'ha_female' => 'required|integer',
            'hdh_male' => 'required|integer',
            'hdh_female' => 'required|integer',
            'shaviyani_male' => 'required|integer',
            'shaviyani_female' => 'required|integer',
            'noonu_male' => 'required|integer',
            'noonu_female' => 'required|integer',
            'raa_male' => 'required|integer',
            'raa_female' => 'required|integer',
            'baa_male' => 'required|integer',
            'baa_female' => 'required|integer',
            'lhaviyani_male' => 'required|integer',
            'lhaviyani_female' => 'required|integer',
            'kaafu_male' => 'required|integer',
            'kaafu_female' => 'required|integer',
            'alifalif_male' => 'required|integer',
            'alifalif_female' => 'required|integer',
            'alifdhaal_male' => 'required|integer',
            'alifdhaal_female' => 'required|integer',
            'vaav_male' => 'required|integer',
            'vaav_female' => 'required|integer',
            'meem_male' => 'required|integer',
            'meem_female' => 'required|integer',
            'faaf_male' => 'required|integer',
            'faaf_female' => 'required|integer',
            'dhaal_male' => 'required|integer',
            'dhaal_female' => 'required|integer',
            'thaa_male' => 'required|integer',
            'thaa_female' => 'required|integer',
            'laam_male' => 'required|integer',
            'laam_female' => 'required|integer',
            'ga_male' => 'required|integer',
            'ga_female' => 'required|integer',
            'gdh_male' => 'required|integer',
            'gdh_female' => 'required|integer',
            'gn_male' => 'required|integer',
            'gn_female' => 'required|integer',
            'seenu_male' => 'required|integer',
            'seenu_female' => 'required|integer',
            'retailshop_outsourced' => 'required|string',
            'retailshop_male' => 'required|integer',
            'retailshop_female' => 'required|integer',
            'divingcenter_outsourced' => 'required|string',
            'divingcenter_male' => 'required|integer',
            'divingcenter_female' => 'required|integer',
            'restaurant_outsourced' => 'required|string',
            'restaurant_male' => 'required|integer',
            'restaurant_female' => 'required|integer',
            'spa_outsourced' => 'required|string',
            'spa_male' => 'required|integer',
            'spa_female' => 'required|integer',
            'transport_outsourced' => 'required|string',
            'transport_male' => 'required|integer',
            'transport_female' => 'required|integer',
            'construction_outsourced' => 'required|string',
            'construction_male' => 'required|integer',
            'construction_female' => 'required|integer',
            'otherone_name' => 'nullable|string',
            'otherone_outsourced' => 'nullable|string',
            'otherone_male' => 'nullable|integer',
            'otherone_female' => 'nullable|integer',
            'othertwo_name' => 'nullable|string',
            'othertwo_outsourced' => 'nullable|string',
            'othertwo_male' => 'nullable|integer',
            'othertwo_female' => 'nullable|integer',
            'otherthree_name' => 'nullable|string',
            'otherthree_outsourced' => 'nullable|string',
            'otherthree_male' => 'nullable|integer',
            'otherthree_female' => 'nullable|integer',
            
    ];

    public function mount(EstEmptwo $estrecordid)
    {
        $this->user_id = $estrecordid->user_id;
        $this->est_record_id = $estrecordid->id;
        $this->hundred_maldivian = $estrecordid->hundred_maldivian;
        $this->hundred_foreign = $estrecordid->hundred_foreign;
        $this->threehundred_maldivian = $estrecordid->threehundred_maldivian;
        $this->threehundred_foreign = $estrecordid->threehundred_foreign;
        $this->fivehundred_maldivian = $estrecordid->fivehundred_maldivian;
        $this->fivehundred_foreign = $estrecordid->fivehundred_foreign;
        $this->sevenhundred_maldivian = $estrecordid->sevenhundred_maldivian;
        $this->sevenhundred_foreign = $estrecordid->sevenhundred_foreign;
        $this->ninehundred_maldivian = $estrecordid->ninehundred_maldivian;
        $this->ninehundred_foreign = $estrecordid->ninehundred_foreign;
        $this->thausand_maldivian = $estrecordid->thausand_maldivian;
        $this->thausand_foreign = $estrecordid->thausand_foreign;
        $this->threethausand_maldivian = $estrecordid->threethausand_maldivian;
        $this->threethausand_foreign = $estrecordid->threethausand_foreign;
        $this->fivethausand_maldivian = $estrecordid->fivethausand_maldivian;
        $this->fivethausand_foreign = $estrecordid->fivethausand_foreign;
        $this->seventhausand_maldivian = $estrecordid->seventhausand_maldivian;
        $this->seventhausand_foreign = $estrecordid->seventhausand_foreign;
        $this->tenthausand_maldivian = $estrecordid->tenthausand_maldivian;
        $this->tenthausand_foreign = $estrecordid->tenthausand_foreign;
        $this->duration_maldivian_male_lessthanoneyear = $estrecordid->duration_maldivian_male_lessthanoneyear;
        $this->duration_maldivian_female_lessthanoneyear = $estrecordid->duration_maldivian_female_lessthanoneyear;
        $this->duration_foreign_male_lessthanoneyear = $estrecordid->duration_foreign_male_lessthanoneyear;
        $this->duration_foreign_female_lessthanoneyear = $estrecordid->duration_foreign_female_lessthanoneyear;
        $this->duration_maldivian_male_one_two_years = $estrecordid->duration_maldivian_male_one_two_years;
        $this->duration_maldivian_female_one_two_years = $estrecordid->duration_maldivian_female_one_two_years;
        $this->duration_foreign_male_one_two_years = $estrecordid->duration_foreign_male_one_two_years;
        $this->duration_foreign_female_one_two_years = $estrecordid->duration_foreign_female_one_two_years;
        $this->duration_maldivian_male_three_four_years = $estrecordid->duration_maldivian_male_three_four_years;
        $this->duration_maldivian_female_three_four_years = $estrecordid->duration_maldivian_female_three_four_years;
        $this->duration_foreign_male_three_four_years = $estrecordid->duration_foreign_male_three_four_years;
        $this->duration_foreign_female_three_four_years = $estrecordid->duration_foreign_female_three_four_years;
        $this->duration_maldivian_male_five_nine_years = $estrecordid->duration_maldivian_male_five_nine_years;
        $this->duration_maldivian_female_five_nine_years = $estrecordid->duration_maldivian_female_five_nine_years;
        $this->duration_foreign_male_five_nine_years = $estrecordid->duration_foreign_male_five_nine_years;
        $this->duration_foreign_female_five_nine_years = $estrecordid->duration_foreign_female_five_nine_years;
        $this->duration_maldivian_male_ten_years = $estrecordid->duration_maldivian_male_ten_years;
        $this->duration_maldivian_female_ten_years = $estrecordid->duration_maldivian_female_ten_years;
        $this->duration_foreign_male_ten_years = $estrecordid->duration_foreign_male_ten_years;
        $this->duration_foreign_female_ten_years = $estrecordid->duration_foreign_female_ten_years;
        $this->age_eighteen_mdv_male = $estrecordid->age_eighteen_mdv_male;
        $this->age_eighteen_mdv_female = $estrecordid->age_eighteen_mdv_female;
        $this->age_eighteen_foreign_male = $estrecordid->age_eighteen_foreign_male;
        $this->age_eighteen_foreign_female = $estrecordid->age_eighteen_foreign_female;
        $this->age_twenty_mdv_male = $estrecordid->age_twenty_mdv_male;
        $this->age_twenty_mdv_female = $estrecordid->age_twenty_mdv_female;
        $this->age_twenty_foreign_male = $estrecordid->age_twenty_foreign_male;
        $this->age_twenty_foreign_female = $estrecordid->age_twenty_foreign_female;
        $this->age_thirty_mdv_male = $estrecordid->age_thirty_mdv_male;
        $this->age_thirty_mdv_female = $estrecordid->age_thirty_mdv_female;
        $this->age_thirty_foreign_male = $estrecordid->age_thirty_foreign_male;
        $this->age_thirty_foreign_female = $estrecordid->age_thirty_foreign_female;
        $this->age_sixty_mdv_male = $estrecordid->age_sixty_mdv_male;
        $this->age_sixty_mdv_female = $estrecordid->age_sixty_mdv_female;
        $this->age_sixty_foreign_male = $estrecordid->age_sixty_foreign_male;
        $this->age_sixty_foreign_female = $estrecordid->age_sixty_foreign_female;
        $this->age_old_mdv_male = $estrecordid->age_old_mdv_male;
        $this->age_old_mdv_female = $estrecordid->age_old_mdv_female;
        $this->age_old_foreign_male = $estrecordid->age_old_foreign_male;
        $this->age_old_foreign_female = $estrecordid->age_old_foreign_female;
        $this->capital_male = $estrecordid->capital_male;
        $this->capital_female = $estrecordid->capital_female;
        $this->ha_male = $estrecordid->ha_male;
        $this->ha_female = $estrecordid->ha_female;
        $this->hdh_male = $estrecordid->hdh_male;
        $this->hdh_female = $estrecordid->hdh_female;
        $this->shaviyani_male = $estrecordid->shaviyani_male;
        $this->shaviyani_female = $estrecordid->shaviyani_female;
        $this->noonu_male = $estrecordid->noonu_male;
        $this->noonu_female = $estrecordid->noonu_female;
        $this->raa_male = $estrecordid->raa_male;
        $this->raa_female = $estrecordid->raa_female;
        $this->baa_male = $estrecordid->baa_male;
        $this->baa_female = $estrecordid->baa_female;
        $this->lhaviyani_male = $estrecordid->lhaviyani_male;
        $this->lhaviyani_female = $estrecordid->lhaviyani_female;
        $this->kaafu_male = $estrecordid->kaafu_male;
        $this->kaafu_female = $estrecordid->kaafu_female;
        $this->alifalif_male = $estrecordid->alifalif_male;
        $this->alifalif_female = $estrecordid->alifalif_female;
        $this->alifdhaal_male = $estrecordid->alifdhaal_male;
        $this->alifdhaal_female = $estrecordid->alifdhaal_female;
        $this->vaav_male = $estrecordid->vaav_male;
        $this->vaav_female = $estrecordid->vaav_female;
        $this->meem_male = $estrecordid->meem_male;
        $this->meem_female = $estrecordid->meem_female;
        $this->faaf_male = $estrecordid->faaf_male;
        $this->faaf_female = $estrecordid->faaf_female;
        $this->dhaal_male = $estrecordid->dhaal_male;
        $this->dhaal_female = $estrecordid->dhaal_female;
        $this->thaa_male = $estrecordid->thaa_male;
        $this->thaa_female = $estrecordid->thaa_female;
        $this->laam_male = $estrecordid->laam_male;
        $this->laam_female = $estrecordid->laam_female;
        $this->ga_male = $estrecordid->ga_male;
        $this->ga_female = $estrecordid->ga_female;
        $this->gdh_male = $estrecordid->gdh_male;
        $this->gdh_female = $estrecordid->gdh_female;
        $this->gn_male = $estrecordid->gn_male;
        $this->gn_female = $estrecordid->gn_female;
        $this->seenu_male = $estrecordid->seenu_male;
        $this->seenu_female = $estrecordid->seenu_female;
        $this->retailshop_outsourced = $estrecordid->retailshop_outsourced;
        $this->retailshop_male = $estrecordid->retailshop_male;
        $this->retailshop_female = $estrecordid->retailshop_female;
        $this->divingcenter_outsourced = $estrecordid->divingcenter_outsourced;
        $this->divingcenter_male = $estrecordid->divingcenter_male;
        $this->divingcenter_female = $estrecordid->divingcenter_female;
        $this->restaurant_outsourced = $estrecordid->restaurant_outsourced;
        $this->restaurant_male = $estrecordid->restaurant_male;
        $this->restaurant_female = $estrecordid->restaurant_female;
        $this->spa_outsourced = $estrecordid->spa_outsourced;
        $this->spa_male = $estrecordid->spa_male;
        $this->spa_female = $estrecordid->spa_female;
        $this->transport_outsourced = $estrecordid->transport_outsourced;
        $this->transport_male = $estrecordid->transport_male;
        $this->transport_female = $estrecordid->transport_female;
        $this->construction_outsourced = $estrecordid->construction_outsourced;
        $this->construction_male = $estrecordid->construction_male;
        $this->construction_female = $estrecordid->construction_female;
        $this->otherone_name = $estrecordid->otherone_name;
        $this->otherone_outsourced = $estrecordid->otherone_outsourced;
        $this->otherone_male = $estrecordid->otherone_male;
        $this->otherone_female = $estrecordid->otherone_female;
        $this->othertwo_name = $estrecordid->othertwo_name;
        $this->othertwo_outsourced = $estrecordid->othertwo_outsourced;
        $this->othertwo_male = $estrecordid->othertwo_male;
        $this->othertwo_female = $estrecordid->othertwo_female;
        $this->otherthree_name = $estrecordid->otherthree_name;
        $this->otherthree_outsourced = $estrecordid->otherthree_outsourced;
        $this->otherthree_male = $estrecordid->otherthree_male;
        $this->otherthree_female = $estrecordid->otherthree_female;
        $this->status = $estrecordid->status;
    }

    public function save()
    {
        $this->validate([
            'hundred_maldivian' => 'required|integer',
            'hundred_foreign' => 'required|integer',
            'threehundred_maldivian' => 'required|integer',
            'threehundred_foreign' => 'required|integer',
            'fivehundred_maldivian' => 'required|integer',
            'fivehundred_foreign' => 'required|integer',
            'sevenhundred_maldivian' => 'required|integer',
            'sevenhundred_foreign' => 'required|integer',
            'ninehundred_maldivian' => 'required|integer',
            'ninehundred_foreign' => 'required|integer',
            'thausand_maldivian' => 'required|integer',
            'thausand_foreign' => 'required|integer',
            'threethausand_maldivian' => 'required|integer',
            'threethausand_foreign' => 'required|integer',
            'fivethausand_maldivian' => 'required|integer',
            'fivethausand_foreign' => 'required|integer',
            'seventhausand_maldivian' => 'required|integer',
            'seventhausand_foreign' => 'required|integer',
            'tenthausand_maldivian' => 'required|integer',
            'tenthausand_foreign' => 'required|integer',
            'duration_maldivian_male_lessthanoneyear' => 'required|integer',
            'duration_maldivian_female_lessthanoneyear' => 'required|integer',
            'duration_foreign_male_lessthanoneyear' => 'required|integer',
            'duration_foreign_female_lessthanoneyear' => 'required|integer',
            'duration_maldivian_male_one_two_years' => 'required|integer',
            'duration_maldivian_female_one_two_years' => 'required|integer',
            'duration_foreign_male_one_two_years' => 'required|integer',
            'duration_foreign_female_one_two_years' => 'required|integer',
            'duration_maldivian_male_three_four_years' => 'required|integer',
            'duration_maldivian_female_three_four_years' => 'required|integer',
            'duration_foreign_male_three_four_years' => 'required|integer',
            'duration_foreign_female_three_four_years' => 'required|integer',
            'duration_maldivian_male_five_nine_years' => 'required|integer',
            'duration_maldivian_female_five_nine_years' => 'required|integer',
            'duration_foreign_male_five_nine_years' => 'required|integer',
            'duration_foreign_female_five_nine_years' => 'required|integer',
            'duration_maldivian_male_ten_years' => 'required|integer',
            'duration_maldivian_female_ten_years' => 'required|integer',
            'duration_foreign_male_ten_years' => 'required|integer',
            'duration_foreign_female_ten_years' => 'required|integer',
            'age_eighteen_mdv_male' => 'required|integer',
            'age_eighteen_mdv_female' => 'required|integer',
            'age_eighteen_foreign_male' => 'required|integer',
            'age_eighteen_foreign_female' => 'required|integer',
            'age_twenty_mdv_male' => 'required|integer',
            'age_twenty_mdv_female' => 'required|integer',
            'age_twenty_foreign_male' => 'required|integer',
            'age_twenty_foreign_female' => 'required|integer',
            'age_thirty_mdv_male' => 'required|integer',
            'age_thirty_mdv_female' => 'required|integer',
            'age_thirty_foreign_male' => 'required|integer',
            'age_thirty_foreign_female' => 'required|integer',
            'age_sixty_mdv_male' => 'required|integer',
            'age_sixty_mdv_female' => 'required|integer',
            'age_sixty_foreign_male' => 'required|integer',
            'age_sixty_foreign_female' => 'required|integer',
            'age_old_mdv_male' => 'required|integer',
            'age_old_mdv_female' => 'required|integer',
            'age_old_foreign_male' => 'required|integer',
            'age_old_foreign_female' => 'required|integer',
            'capital_male' => 'required|integer',
            'capital_female' => 'required|integer',
            'ha_male' => 'required|integer',
            'ha_female' => 'required|integer',
            'hdh_male' => 'required|integer',
            'hdh_female' => 'required|integer',
            'shaviyani_male' => 'required|integer',
            'shaviyani_female' => 'required|integer',
            'noonu_male' => 'required|integer',
            'noonu_female' => 'required|integer',
            'raa_male' => 'required|integer',
            'raa_female' => 'required|integer',
            'baa_male' => 'required|integer',
            'baa_female' => 'required|integer',
            'lhaviyani_male' => 'required|integer',
            'lhaviyani_female' => 'required|integer',
            'kaafu_male' => 'required|integer',
            'kaafu_female' => 'required|integer',
            'alifalif_male' => 'required|integer',
            'alifalif_female' => 'required|integer',
            'alifdhaal_male' => 'required|integer',
            'alifdhaal_female' => 'required|integer',
            'vaav_male' => 'required|integer',
            'vaav_female' => 'required|integer',
            'meem_male' => 'required|integer',
            'meem_female' => 'required|integer',
            'faaf_male' => 'required|integer',
            'faaf_female' => 'required|integer',
            'dhaal_male' => 'required|integer',
            'dhaal_female' => 'required|integer',
            'thaa_male' => 'required|integer',
            'thaa_female' => 'required|integer',
            'laam_male' => 'required|integer',
            'laam_female' => 'required|integer',
            'ga_male' => 'required|integer',
            'ga_female' => 'required|integer',
            'gdh_male' => 'required|integer',
            'gdh_female' => 'required|integer',
            'gn_male' => 'required|integer',
            'gn_female' => 'required|integer',
            'seenu_male' => 'required|integer',
            'seenu_female' => 'required|integer',
            'retailshop_outsourced' => 'required|string',
            'retailshop_male' => 'required|integer',
            'retailshop_female' => 'required|integer',
            'divingcenter_outsourced' => 'required|string',
            'divingcenter_male' => 'required|integer',
            'divingcenter_female' => 'required|integer',
            'restaurant_outsourced' => 'required|string',
            'restaurant_male' => 'required|integer',
            'restaurant_female' => 'required|integer',
            'spa_outsourced' => 'required|string',
            'spa_male' => 'required|integer',
            'spa_female' => 'required|integer',
            'transport_outsourced' => 'required|string',
            'transport_male' => 'required|integer',
            'transport_female' => 'required|integer',
            'construction_outsourced' => 'required|string',
            'construction_male' => 'required|integer',
            'construction_female' => 'required|integer',
            'otherone_name' => 'nullable|string',
            'otherone_outsourced' => 'nullable|string',
            'otherone_male' => 'nullable|integer',
            'otherone_female' => 'nullable|integer',
            'othertwo_name' => 'nullable|string',
            'othertwo_outsourced' => 'nullable|string',
            'othertwo_male' => 'nullable|integer',
            'othertwo_female' => 'nullable|integer',
            'otherthree_name' => 'nullable|string',
            'otherthree_outsourced' => 'nullable|string',
            'otherthree_male' => 'nullable|integer',
            'otherthree_female' => 'nullable|integer',
            
        ]);

        EstEmptwo::where('id', $this->est_record_id)->update([
            'user_id' => $this->user_id,
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
            'status' => $this->status
        ]);
        
        

        session()->flash('success', 'Operations Information Updated');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.ests.establishment-employmenttwo-edit');
    }
}
