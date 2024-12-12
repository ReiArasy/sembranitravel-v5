<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PackageBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // View All data bookings
    public function my_bookings(){
        return view('dashboard.my_bookings');
    }

    //view details booking dari data data booking diatas 
    public function booking_details(PackageBooking $packageBooking){
        return view('dashboard.booking_details', compact('packageBooking'));
    }


}
