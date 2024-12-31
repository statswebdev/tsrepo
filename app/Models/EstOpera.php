<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstOpera extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'months_operated',
        'rooms_yearend',
        'beds_yearend',
        'roomnights_sold',
        'bednights_sold',
        'roomrate_annual',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }

   
}
