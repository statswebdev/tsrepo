<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estguest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'est_record_id',
        'maldivian_male',
        'maldivian_female',
        'foreign_male',
        'foreign_female',
        'maldivian_male_permanent',
        'maldivian_female_permanent',
        'foreign_male_permanent',
        'foreign_female_permanent',
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
        'status',
    ];
    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
  
}
