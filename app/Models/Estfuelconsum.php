<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estfuelconsum extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'est_record_id',
        'diesel_bought_qty',
        'diesel_bought_year',
        'diesel_bought_qty',
        'diesel_bought_year',
        'petrol_bought_qty',
        'petrol_bought_year',
        'lpg_bought_qty',
        'lpg_bought_year',
        'other_bought_qty',
        'other_bought_year',
        'diesel_inventory_unit',
        'diesel_inventory_yearfirst',
        'diesel_inventory_yearend',
        'petrol_inventory_unit',
        'petrol_inventory_yearfirst',
        'petrol_inventory_yearend',
        'lpg_inventory_unit',
        'lpg_inventory_unit_yearfirst',
        'lpg_inventory_unit_yearend',
        'other_inventory_specify',
        'other_inventory_unit',
        'other_inventory_unit_yearfirst',
        'other_inventory_unit_yearend',
        'diesel_electricity_unit',
        'diesel_electricity_qty',
        'petrol_electricity_unit',
        'petrol_electricity_qty',
        'diesel_desalination_unit',
        'diesel_desalination_qty',
        'petrol_desalination_unit',
        'petrol_desalination_qty',
        'diesel_transportsea_unit',
        'diesel_transportsea_qty',
        'petrol_transportsea_unit',
        'petrol_transportsea_qty',
        'diesel_transportland_unit',
        'diesel_transportland_qty',
        'petrol_transportland_unit',
        'petrol_transportland_qty',
        'lpg_cooking_unit',
        'lpg_cooking_qty',
        'diesel_cooking_unit',
        'diesel_cooking_qty',
        'petrol_cooking_unit',
        'petrol_cooking_qty',
        'diesel_other_fuelconsumption',
        'diesel_other_fuelconsumption_unit',
        'diesel_other_fuelconsumption_qty',
        'petrol_other_fuelconsumption',
        'petrol_other_fuelconsumption_unit',
        'petrol_other_fuelconsumption_qty', 
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
