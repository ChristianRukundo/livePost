<?php

namespace App\Http\Controllers;

use App\Models\PointSystem;
use Illuminate\Http\Request;


class PointSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = PointSystem::all();

        return view('manage-point-system')->with('points', $points);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {


        $point = new PointSystem();
        $point->name = $request->input('name');
        $point->discount = $request->input('discount');
        $point->number = $request->input('number');
        if ($point->save()) {
            return redirect()->route('manage-point-system')->with('success', 'point successfully added');
        } else {
            return redirect()->back()->with('error', 'Failed to create point');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointSystem  $pointSystem
     * @return \Illuminate\Http\Response
     */
    public function show(PointSystem $pointSystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointSystem  $pointSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointSystem $pointSystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointSystem  $pointSystem
     *
     */
    public function destroy(PointSystem $point)
    {
        if ($point->delete()) {
            return redirect()->route('manage-point-system')->with('success', 'point successfully deleted');
        } else {
            return redirect()->back()->with('error', 'Failed to delet point');
        }
    }
}
