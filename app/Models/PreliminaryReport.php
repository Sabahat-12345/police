<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PreliminaryReport extends Model
{
       use HasFactory;

    protected $fillable = [
        'missing_name',
        'last_seen_location',
        'disappearance_datetime',
        'contact_number',
    ];
}
