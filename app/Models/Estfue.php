<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estfue extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'generator_capacity_unit',
        'generator_capacity_qty',
        'solar_rooftop',
        'solar_groundmounted',
        'solar_floating',
        'energy_storage',
        'energy_storage_power',
        'energy_storage_kwh',
        'energy_storage_other',
        'energy_storage_othertype',
        'energy_storage_othercapacity',
        'solar_waterheating',
        'waste_heatrecovery',
        'other_energy_capacity',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }

}
