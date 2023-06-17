<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientsRequest;
use App\Http\Requests\UpdateIngredientsRequest;
use App\Http\Resources\IngredientsResource;
use App\Models\Ingredients;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;


class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *e
     */
    public function index()
    {
        return  IngredientsResource::collection(Ingredients::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIngredientsRequest  $request
     *
     */
    public function store(StoreIngredientsRequest $request)
    {

        $Ingredient = new Ingredients();
        $Ingredient->name = $request->input('name');
        $Ingredient->quantity = $request->input('quantity');
        $Ingredient->link = $request->input('link');
        $Ingredient->save();

        return IngredientsResource::make($Ingredient);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredients  $User
     *
     */
    public function show(Ingredients $ingredient)
    {
        return IngredientsResource::make($ingredient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngredientsRequest  $request
     * @param  \App\Models\Category  $category
     *
     */
    public function update(UpdateIngredientsRequest $request, Ingredients $ingredient)
    {
        $Ingredient = $ingredient;

        $Ingredient->fill($request->only(['title', 'name', 'quantity', 'link']));


        if ($request->hasFile('image')) {

            Storage::disk('public')->delete($Ingredient->imgUrl);

            $fileImage = $request->file('image');
            $pathImage = $fileImage->store('', 'public');
            $imgUrl = Storage::url($pathImage);

            $Ingredient->imgUrl = $imgUrl;
        }


        $Ingredient->save();

        return IngredientsResource::make($Ingredient);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredients  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Ingredients $ingredient)
    {
        $ingredient->delete();
        return new JsonResponse([
            'message' => 'ingredient deleted'
        ]);
    }
}
