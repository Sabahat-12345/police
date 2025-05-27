<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Gallery extends Model
{
   use HasFactory;

    protected $fillable = ['image_path', 'is_active'];
}
