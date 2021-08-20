<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    protected $fillable = [
        'Appointment_ID',
        'Patient_Name',
        'Department',
        'Doctor',
        'Date',
        'Time',
        'Patient_Email',
        'Patient_Phone_Number',
        'Message',
        'Appointment_Status',
    ];
}
