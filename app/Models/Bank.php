<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name'
    ];

    public function bankDetails()
    {
        return $this->hasMany(BankDetail::class);
    }
}
