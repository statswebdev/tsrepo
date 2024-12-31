<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'name',
        'phone',
        'estregno',
        'estregdate',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
