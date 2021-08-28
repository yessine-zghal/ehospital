<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;


    protected $fillable = [
        'Firstname',
        'lastname',
        'email',
        'dateofbirth',
        'address',
        'city',
        'country',
        'state',
        'postalcode',
        'phone',
        'gendre',
        'file',
        'patientrecord',
        'covid_check',
    ];

   
} 
// Primary Key


