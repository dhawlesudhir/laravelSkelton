<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function bankaccount(): HasOne
    {
        return $this->hasOne(CustomerBankAccount::class);
    }
}
