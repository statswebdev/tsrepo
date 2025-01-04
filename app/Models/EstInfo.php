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
        'info_provider',
        'contact_number',
        'type_organisation',
        'operator_name',
        'operator_register',
        'owner_one',
        'owner_two',
        'operator_contact',
        'operator_email',
        'government_share',
        'maldivian_share',
        'foreign_share',
        'taxpayer_number',
        'establishment_regdate',
        'bedcapacity',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }
}
