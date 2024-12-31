<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstEmppro extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'est_record_id',
            'generated_inhouse',
            'electricity_generated',
            'electricity_outsourced',
            'outsourced_generated',
            'electricity_othersources',
            'othersources_generated',
            'electricity_consumption',
            'solargrid_energy',
            'solargrid_production',
            'solargrid_consumption',
            'renewable_other',
            'renewable_other_production',
            'renewable_other_consumption',
            'waterinhouse_production',
            'waterinhouse_monthly',
            'water_outsourced',
            'water_outsourced_monthly',
            'monthly_water_jan',
            'monthly_water_feb',
            'monthly_water_mar',
            'monthly_water_apr',
            'monthly_water_may',
            'monthly_water_jun',
            'monthly_water_july',
            'monthly_water_aug',
            'monthly_water_sep',
            'monthly_water_oct',
            'monthly_water_nov',
            'monthly_water_dec',
            'waste_disposedinhouse',
            'waste_disposedoutsourced',
            'waste_disposalother',
            'waste_monthly',
            'plastic_waste',
            'plastic_waste_method',
            'organic_waste',
            'organic_waste_method',
            'metal_waste',
            'metal_waste_method',
            'other_waste',
            'other_waste_method',
            'status'
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
