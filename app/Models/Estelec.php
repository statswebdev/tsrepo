<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estelec extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'est_record_id',
        'consume_jan_diesel',
        'consume_feb_diesel',
        'consume_mar_diesel',
        'consume_apr_diesel',
        'consume_may_diesel',
        'consume_jun_diesel',
        'consume_jul_diesel',
        'consume_aug_diesel',
        'consume_sep_diesel',
        'consume_oct_diesel',
        'consume_nov_diesel',
        'consume_dec_diesel',
        'consume_jan_lub',
        'consume_feb_lub',
        'consume_mar_lub',
        'consume_apr_lub',
        'consume_may_lub',
        'consume_jun_lub',
        'consume_jul_lub',
        'consume_aug_lub',
        'consume_sep_lub',
        'consume_oct_lub',
        'consume_nov_lub',
        'consume_dec_lub',
        'generate_jan_diesel',
        'generate_feb_diesel',
        'generate_mar_diesel',
        'generate_apr_diesel',
        'generate_may_diesel',
        'generate_jun_diesel',
        'generate_jul_diesel',
        'generate_aug_diesel',
        'generate_sep_diesel',
        'generate_oct_diesel',
        'generate_nov_diesel',
        'generate_dec_diesel',
        'generate_jan_solar',
        'generate_feb_solar',
        'generate_mar_solar',
        'generate_apr_solar',
        'generate_may_solar',
        'generate_jun_solar',
        'generate_jul_solar',
        'generate_aug_solar',
        'generate_sep_solar',
        'generate_oct_solar',
        'generate_nov_solar',
        'generate_dec_solar',
        'generate_jan_renewable',
        'generate_feb_renewable',
        'generate_mar_renewable',
        'generate_apr_renewable',
        'generate_may_renewable',
        'generate_jun_renewable',
        'generate_jul_renewable',
        'generate_aug_renewable',
        'generate_sep_renewable',
        'generate_oct_renewable',
        'generate_nov_renewable',
        'generate_dec_renewable',
        'generate_jan_total',
        'generate_feb_total',
        'generate_mar_total',
        'generate_apr_total',
        'generate_may_total',
        'generate_jun_total',
        'generate_jul_total',
        'generate_aug_total',
        'generate_sep_total',
        'generate_oct_total',
        'generate_nov_total',
        'generate_dec_total',
        'demand_jan_max',
        'demand_feb_max',
        'demand_mar_max',
        'demand_apr_max',
        'demand_may_max',
        'demand_jun_max',
        'demand_jul_max',
        'demand_aug_max',
        'demand_sep_max',
        'demand_oct_max',
        'demand_nov_max',
        'demand_dec_max',
        'demand_jan_min',
        'demand_feb_min',
        'demand_mar_min',
        'demand_apr_min',
        'demand_may_min',
        'demand_jun_min',
        'demand_jul_min',
        'demand_aug_min',
        'demand_sep_min',
        'demand_oct_min',
        'demand_nov_min',
        'demand_dec_min',     
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }

}
