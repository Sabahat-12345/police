<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    public $timestamps = true; // Disable timestamps if not needed
    public $guarded = []; // Allow mass assignment for all fields
}
