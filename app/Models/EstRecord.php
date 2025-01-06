<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'recordname',
        'collectionyear',
    ];

    // public function estInfos()
    // {
    //     return $this->hasMany(EstInfo::class, 'est_record_id');
    // }

    public function estinfo()
    {
        return $this->hasOne(EstInfo::class, 'est_record_id');
    }

}
