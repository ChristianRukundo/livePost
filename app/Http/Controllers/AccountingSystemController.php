<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use App\Models\Customers;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class AccountingSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {

        $coaches  = Coaches::all();
        $restaurants = Restaurant::all();
        return view('accounting-system')->with('coaches', $coaches)->with('restaurants', $restaurants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
