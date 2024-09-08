<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash; // Pastikan Hash diimpor

class Logins extends Authenticatable // Mengikuti konvensi Laravel, model biasanya singular
{
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function password(): Attribute
    {
        return new Attribute(
            null,
            function ($value) {
                return Hash::make($value);
            }
        );
    }
}
