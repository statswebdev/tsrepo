<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estotherser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'musicbands',
        'musicbands_contract',
        'dj',
        'dj_contract',
        'photography',
        'photography_contract',
        'casualworker',
        'casualworker_contract',
        'fisherman',
        'fisherman_contract',
        'farmers',
        'farmers_contract',
        'localfood',
        'localfood_contract',
        'otherservices',
        'otherservices_contract',
        'doctor_inhouse',
        'nearest_healthfacility',
        'onestaff_accomodation',
        'onestaff_accomodation_island',
        'onestaff_accomodation_local',
        'onestaff_accomodation_foreign',
        'twostaff_accomodation',
        'twostaff_accomodation_island',
        'twostaff_accomodation_local',
        'twostaff_accomodation_foreign',
        'three_accomodation',
        'three_accomodation_island',
        'three_accomodation_local',
        'three_accomodation_foreign',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
