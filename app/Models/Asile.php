<?php

namespace App\Models;

use App\Enums\CountryFrom;
use App\Enums\CountryTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asile extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'phone', 'email', 'from', 'to'];

    protected $casts = [
        'from' => CountryFrom::class,
        'to' => CountryTo::class,
    ];
}
