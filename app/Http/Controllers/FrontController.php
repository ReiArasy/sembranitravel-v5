<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PackageTour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function index(){
        $package_tours = PackageTour::orderByDesc('id')->take(3)->get();
        return view('front.index', compact('package_tours'));
    }
}
