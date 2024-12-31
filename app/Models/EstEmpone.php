<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstEmpone extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'maldivian_male',
        'maldivian_female',
        'foreign_male',
        'foreign_female',
        'maldivian_male_commuting',
        'maldivian_female_commuting',
        'foreign_male_commuting',
        'foreign_female_commuting',
        'maldivian_male_permanent',
        'maldivian_female_permanent',
        'foreign_male_permanent',
        'foreign_female_permanent',
        'accomo_maldivian_male',
        'accomo_maldivian_female',
        'accomo_foreign_male',
        'accomo_foreign_female',
        'food_maldivian_male',
        'food_maldivian_female',
        'food_foreign_male',
        'food_foreign_female',
        'transport_maldivian_male',
        'transport_maldivian_female',
        'transport_foreign_male',
        'transport_foreign_female',
        'sports_maldivian_male',
        'sports_maldivian_female',
        'sports_foreign_male',
        'sports_foreign_female',
        'admin_maldivian_male',
        'admin_maldivian_female',
        'admin_foreign_male',
        'admin_foreign_female',
        'other_maldivian_male',
        'other_maldivian_female',
        'other_foreign_male',
        'other_foreign_female',
        'manager_maldivian_male',
        'manager_maldivian_female',
        'manager_foreign_male',
        'manager_foreign_female',
        'professional_maldivian_male',
        'professional_maldivian_female',
        'professional_foreign_male',
        'professional_foreign_female',
        'service_maldivian_male',
        'service_maldivian_female',
        'service_foreign_male',
        'service_foreign_female',
        'elementary_maldivian_male',
        'elementary_maldivian_female',
        'elementary_foreign_male',
        'elementary_foreign_female',
        'bylevelother_maldivian_male',
        'bylevelother_maldivian_female',
        'bylevelother_foreign_male',
        'bylevelother_foreign_female',
        'status'

    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
