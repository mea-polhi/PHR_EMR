<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name',
        'middle_initial',
        'last_name',
        'patient_phone_no',
        'gender',
        'date_of_birth',
        'address',
        'guardian',
        'guardian_phone_no',
        'relationship',
        'payment',
    ];

    use HasFactory;

}