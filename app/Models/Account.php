<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
        'terms',
    ];

    // Hide sensitive fields when returning JSON
    protected $hidden = [
        'password',
    ];
}
