<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estinc extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'est_record_id',
        'income_boarding',
        'income_food',
        'income_beverage',
        'income_catering',
        'income_transport',
        'income_spa',
        'income_laundry',
        'income_servicecharge',
        'income_excursion',
        'income_watersports',
        'income_watersports_third',
        'income_retailshop',
        'income_retailshop_third',
        'income_exchange',
        'income_commission',
        'income_managementfee',
        'income_lease',
        'income_finance',
        'income_dividend',
        'income_other',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
