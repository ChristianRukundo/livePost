<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Resources\RecipeResource;
use App\Models\Recipes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $recipes = RecipeResource::collection(Recipes::all());
        return view('recipe')->with('recipes', $recipes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreRecipeRequest $request)
    {
        $fileImage = $request->file('image');
        $pathImage = $fileImage->store('', 'public');
        $imgUrl = Storage::url($pathImage);
        $recipe = new Recipes();
        $recipe->title = $request->input('title');
        $recipe->tag = $request->input('tag');
        $recipe->oxydationType = $request->input('oxydationType');
        $recipe->description = $request->input('description');
        $recipe->imgUrl = $imgUrl;
        if ($recipe->save()) {
            return redirect()->route('recipe')->with('success', 'Category successfully added');
        } else {
            // Handle the case where video creation failed
            return redirect()->back()->with('error', 'Failed to create category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes  $recipes
     *
     */
    public function show(Recipes $recipe)
    {
        return RecipeResource::make($recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipes  $recipes

     */
    public function update(UpdateRecipeRequest $request, $id)
    {
        $recipe = Recipes::findOrFail($id);

        // Update the recipe properties with the user-provided values
        $recipe->title = $request->input('title', $recipe->title);
        $recipe->tag = $request->input('tag', $recipe->tag);
        $recipe->oxydationType = $request->input('oxydationType', $recipe->oxydationType);
        $recipe->description = $request->input('description', $recipe->description);

        // Check if a new image file was provided
        if ($request->hasFile('image')) {
            $fileImage = $request->file('image');
            $pathImage = $fileImage->store('', 'public');
            $imgUrl = Storage::url($pathImage);
            $recipe->imgUrl = $imgUrl;
        }

        if ($recipe->save()) {
            return redirect()->route('recipe')->with('success', 'Recipe successfully updated');
        } else {
            return redirect()->back()->with('error', 'Failed to update recipe');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes  $recipes
     *
     */
    public function destroy(Recipes $recipe)
    {
        $recipe->delete();

        return new JsonResponse([
            'message' => 'recipe deleted'
        ]);
    }
}
