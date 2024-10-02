<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;
   
    // cek costumer yang booking siapa,tour nya apa, bank nya apa
    public function customer(){
        return $this->belongsTo(User::class);
    }

    public function tour(){
        return $this->belongsTo(PackageTour::class);
    }

    public function bank(){
        return $this->belongsTo(PackageBank::class);
    }
}
