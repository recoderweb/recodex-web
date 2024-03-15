<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('service');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceModel $serviceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceModel $serviceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceModel $serviceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceModel $serviceModel)
    {
        //
    }
}
