<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'Firstname',
        'lastname',
        'username',
        'email',
        'password',
        'dateOfBirth',
        'gender',
        'adress',
        'country',
        'city',
        'state',
        'speciality',
        'phone',
        'image',
        'biography',
        'status',
    ];


}
