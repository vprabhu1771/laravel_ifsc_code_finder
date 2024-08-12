<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';

    protected $fillable = [
        'name',
    ];

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public function bankDetails()
    {
        return $this->hasMany(BankDetail::class);
    }
}