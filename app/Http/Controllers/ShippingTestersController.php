<?php

namespace App\Http\Controllers;

use App\Models\ShippingTesters;
use Illuminate\Http\Request;

class ShippingTestersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('functions.shipping-tester.index');
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
    public function show(ShippingTesters $shippingTesters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShippingTesters $shippingTesters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShippingTesters $shippingTesters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShippingTesters $shippingTesters)
    {
        //
    }
}
