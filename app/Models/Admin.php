<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fileable = [
        'name',
        'email',
        'address',
        'role_id',
        'phone',
        'password',
        'image',
        'uuid',
        'status',

    ];

}
