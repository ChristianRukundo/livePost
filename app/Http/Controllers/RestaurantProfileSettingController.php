<?php

namespace App\Http\Controllers;

use App\Models\ApplicationList;
use App\Models\Coaches;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $coaches = Coaches::all();
        $restaurants = Restaurant::all();
        return view('restaurant-profile-setting')->with('coaches', $coaches)
            ->with('restaurants', $restaurants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicationList  $applicationList
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationList $applicationList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationList  $applicationList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationList $applicationList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationList  $applicationList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationList $applicationList)
    {
        //
    }
}
