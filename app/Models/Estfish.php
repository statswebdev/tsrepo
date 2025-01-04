<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estfish extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'skipjacktuna_inhouse',
        'skipjacktuna_inhouse_qty',
        'yellowfin_inhouse',
        'yellowfin_inhouse_qty',
        'reeffish_inhouse',
        'reeffish_inhouse_qty',
        'seafood_inhouse',
        'seafood_inhouse_qty',
        'otherfish_inhouse',
        'otherfish_inhouse_qty',
        'skipjack_purchased',
        'skipjack_purchased_qty',
        'skipjack_purchased_value',
        'yellowfin_purchased',
        'yellowfin_purchased_qty',
        'yellowfin_purchased_value',
        'reeffish_purchased',
        'reeffish_purchased_qty',
        'reeffish_purchased_value',
        'seafood_purchased',
        'seafood_purchased_qty',
        'seafood_purchased_value',
        'otherfish_purchased',
        'otherfish_purchased_qty',
        'otherfish_purchased_value',
        'status',

    ];

}
