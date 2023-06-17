<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use App\Models\Restaurant;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $coaches =  Coaches::all();


        $restaurants = Restaurant::all();
        return view('restaurant-profile-setting')
            ->with('restaurants', $restaurants)
            ->with('coaches', $coaches);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * p
     */
    public function store(Request $request)
    {
        $fileImage = $request->file('image');
        $pathImage = $fileImage->store('', 'public');
        $imgUrl = Storage::url($pathImage);
        $coach = new Coaches();
        $coach->name = $request->input('name');
        $coach->age = $request->input('age');
        $coach->address = $request->input('address');
        $coach->bank_account = $request->input('bank_account');
        $coach->contact_person = $request->input('contact_person');
        $coach->phone_number = $request->input('phone_number');
        $coach->price = $request->input('price');
        $coach->iban = $request->input('iban');
        $coach->imgUrl = $imgUrl;

        if ($coach->save()) {
            return new JsonResponse([
                'data' => $coach
            ]);
        } else {
            return new JsonResponse([
                'error' => 'There was an error saving a coach'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coaches  $coaches
     * @return \Illuminate\Http\Response
     */
    public function show(Coaches $coaches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coaches  $coaches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coaches $coaches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coaches  $coaches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coaches $coaches)
    {
        //
    }
}
