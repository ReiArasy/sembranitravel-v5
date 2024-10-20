<?php

namespace App\Http\Controllers;

use app\Http\Requests\PackageBankRequest;
use App\Models\PackageBank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        return view('admin.package_banks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageBankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageBank $packageBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageBank $packageBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageBank $packageBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageBank $packageBank)
    {
        //
    }
}
