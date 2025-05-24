<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristRegistration extends Model
{
 use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'nationality',
        'arrival_date',
        'departure_date',
        'itinerary',
        'group_size',
        'guide',
        'emergency_name',
        'emergency_phone',
        'terms',
    ];
}
