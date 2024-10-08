<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       'package_tour_id',
       'photo'
    ];
}
