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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function estinfo()
    {
        return $this->hasOne(EstInfo::class, 'est_record_id', 'id');
    }

    public function estopera()
    {
        return $this->hasOne(EstOpera::class, 'est_record_id', 'id');
    }

    public function estempone()
    {
        return $this->hasOne(EstEmpone::class, 'est_record_id');
    }

    public function estemptwo()
    {
        return $this->hasOne(EstEmptwo::class, 'est_record_id');
    }

    public function estprod()
    {
        return $this->hasOne(EstEmppro::class, 'est_record_id');
    }

    public function estagri()
    {
        return $this->hasOne(Estagri::class, 'est_record_id');
    }

    public function estfish()
    {
        return $this->hasOne(Estfish::class, 'est_record_id');
    }

    public function estelec()
    {
        return $this->hasOne(Estelec::class, 'est_record_id');
    }

    public function estfuel()
    {
        return $this->hasOne(Estfue::class, 'est_record_id');
    }

    public function estfuelconsumption()
    {
        return $this->hasOne(Estfuelconsum::class, 'est_record_id');
    }

    public function estotherservice()
    {
        return $this->hasOne(Estotherser::class, 'est_record_id');
    }

    public function estincome()
    {
        return $this->hasOne(Estinc::class, 'est_record_id');
    }

    public function estexpenses()
    {
        return $this->hasOne(Estexp::class, 'est_record_id');
    }

    public function eststock()
    {
        return $this->hasOne(Eststk::class, 'est_record_id');
    }

}
