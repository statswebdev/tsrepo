<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eststk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'stock_fuel',
        'stock_fuel_yearend',
        'stock_tradedgoods',
        'stock_tradedgoods_yearend',
        'stock_food',
        'stock_food_yearend',
        'stock_chemicals',
        'stock_chemicals_yearend',
        'stock_packing',
        'stock_packing_yearend',
        'stock_spare',
        'stock_spare_yearend',
        'stock_textile',
        'stock_textile_yearend',
        'stock_stationary',
        'stock_stationary_yearend',
        'stock_other_one',
        'stock_other_one_value',
        'stock_other_one_value_yearend',
        'stock_other_two',
        'stock_other_two_value',
        'stock_other_two_value_yearend',
        'stock_other_three',
        'stock_other_three_value',
        'stock_other_three_value_yearend',
        'stock_other_four',
        'stock_other_four_value',
        'stock_other_four_value_yearend',
        'profit_loss',
        'remarks',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }

}
