<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_id',
        'ifsc_code',
        'micr_code',
        'address',
        'branch',
        'phone_number',
        'branch_code',
        'zipcode',
        'country_id',
        'state_id',
        'city_id',
    ];

    /**
     * Get the bank that owns the BankDetail.
     */
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    /**
     * Get the country associated with the BankDetail.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the state associated with the BankDetail.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Get the city associated with the BankDetail.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
