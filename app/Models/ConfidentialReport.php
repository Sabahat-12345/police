<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConfidentialReport extends Model
{
     use HasFactory;

    protected $fillable = [
        'incident_type',
        'observation_date',
        'details',
        'evidence',
        'status',
    ];
}
