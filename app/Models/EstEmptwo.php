<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstEmptwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'hundred_maldivian',
        'hundred_foreign',
        'threehundred_maldivian',
        'threehundred_foreign',
        'fivehundred_maldivian',
        'fivehundred_foreign',
        'sevenhundred_maldivian',
        'sevenhundred_foreign',
        'ninehundred_maldivian',
        'ninehundred_foreign',
        'thausand_maldivian',
        'thausand_foreign',
        'threethausand_maldivian',
        'threethausand_foreign',
        'fivethausand_maldivian',
        'fivethausand_foreign',
        'seventhausand_maldivian',
        'seventhausand_foreign',
        'tenthausand_maldivian',
        'tenthausand_foreign',
        'duration_maldivian_male_lessthanoneyear',
        'duration_maldivian_female_lessthanoneyear',
        'duration_foreign_male_lessthanoneyear',
        'duration_foreign_female_lessthanoneyear',
        'duration_maldivian_male_one_two_years',
        'duration_maldivian_female_one_two_years',
        'duration_foreign_male_one_two_years',
        'duration_foreign_female_one_two_years',
        'duration_maldivian_male_three_four_years',
        'duration_maldivian_female_three_four_years',
        'duration_foreign_male_three_four_years',
        'duration_foreign_female_three_four_years',
        'duration_maldivian_male_five_nine_years',
        'duration_maldivian_female_five_nine_years',
        'duration_foreign_male_five_nine_years',
        'duration_foreign_female_five_nine_years',
        'duration_maldivian_male_ten_years',
        'duration_maldivian_female_ten_years',
        'duration_foreign_male_ten_years',
        'duration_foreign_female_ten_years',
        'age_eighteen_mdv_male',
        'age_eighteen_mdv_female',
        'age_eighteen_foreign_male',
        'age_eighteen_foreign_female',
        'age_twenty_mdv_male',
        'age_twenty_mdv_female',
        'age_twenty_foreign_male',
        'age_twenty_foreign_female',
        'age_thirty_mdv_male',
        'age_thirty_mdv_female',
        'age_thirty_foreign_male',
        'age_thirty_foreign_female',
        'age_sixty_mdv_male',
        'age_sixty_mdv_female',
        'age_sixty_foreign_male',
        'age_sixty_foreign_female',
        'age_old_mdv_male',
        'age_old_mdv_female',
        'age_old_foreign_male',
        'age_old_foreign_female',
        'capital_male',
        'capital_female',
        'ha_male',
        'ha_female',
        'hdh_male',
        'hdh_female',
        'shaviyani_male',
        'shaviyani_female',
        'noonu_male',
        'noonu_female',
        'raa_male',
        'raa_female',
        'baa_male',
        'baa_female',
        'lhaviyani_male',
        'lhaviyani_female',
        'kaafu_male',
        'kaafu_female',
        'alifalif_male',
        'alifalif_female',
        'alifdhaal_male',
        'alifdhaal_female',
        'vaav_male',
        'vaav_female',
        'meem_male',
        'meem_female',
        'faaf_male',
        'faaf_female',
        'dhaal_male',
        'dhaal_female',
        'thaa_male',
        'thaa_female',
        'laam_male',
        'laam_female',
        'ga_male',
        'ga_female',
        'gdh_male',
        'gdh_female',
        'gn_male',
        'gn_female',
        'seenu_male',
        'seenu_female',
        'retailshop_outsourced',
        'retailshop_male',
        'retailshop_female',
        'divingcenter_outsourced',
        'divingcenter_male',
        'divingcenter_female',
        'restaurant_outsourced',
        'restaurant_male',
        'restaurant_female',
        'spa_outsourced',
        'spa_male',
        'spa_female',
        'transport_outsourced',
        'transport_male',
        'transport_female',
        'construction_outsourced',
        'construction_male',
        'construction_female',
        'otherone_name',
        'otherone_outsourced',
        'otherone_male',
        'otherone_female',
        'othertwo_name',
        'othertwo_outsourced',
        'othertwo_male',
        'othertwo_female',
        'otherthree_name',
        'otherthree_outsourced',
        'otherthree_male',
        'otherthree_female',
        'status'
    ];

    public function estrecord()
    {
        return $this->belongsTo(EstRecord::class);
    }


}
