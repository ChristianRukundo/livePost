<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\JsonResponse;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $fileImage = $request->file('image');
        $pathImage = $fileImage->store('', 'public');
        $imgUrl = Storage::url($pathImage);
        $restaurant = new Restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->age = $request->input('age');
        $restaurant->address = $request->input('address');
        $restaurant->bank_account = $request->input('bank_account');
        $restaurant->contact_person = $request->input('contact_person');
        $restaurant->phone_number = $request->input('phone_number');
        $restaurant->iban = $request->input('iban');
        $restaurant->imgUrl = $imgUrl;
        $restaurant->price = $request->input('price');

        if ($restaurant->save()) {
            return new JsonResponse([
                'data' => $restaurant
            ]);
        } else {
            return new JsonResponse([
                'error' => 'There was an error saving a restaurant'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
