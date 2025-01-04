<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estexp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'est_record_id',
        'expense_salary',
        'expense_allowance',
        'expense_inkind',
        'expense_salary_foreign',
        'expense_allowance_foreign',
        'expense_inkind_foreign',
        'expense_food',
        'expense_laundry',
        'expense_transport',
        'expense_water',
        'expense_electricity',
        'expense_fuel',
        'expense_tele',
        'expense_fines',
        'expense_costofgoodssold',
        'expense_lease',
        'expense_depreciation',
        'expense_financialcost',
        'expense_marketing',
        'expense_admin',
        'expense_management',
        'expense_other',
        'status',
    ];

    public function estRecord()
    {
        return $this->belongsTo(EstRecord::class, 'est_record_id');
    }

}
