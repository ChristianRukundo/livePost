<?php

namespace App\Http\Controllers;

use App\Models\Allergy;
use App\Models\Ingredients;
use Illuminate\Http\Request;

class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $allergies = Allergy::all();
        $ingredients = Ingredients::all();
        return view('allergy-list')->with('allergies', $allergies)->with('ingredients', $allergies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {

        $inputData = $request->all();

        // Get the selected ingredient IDs
        $ingredientIds = $inputData['ingredientCheckbox'];

        // Get the value from the text input field (name)
        $name = $inputData['name'];

        // Create a new Allergy instance
        $allergy = new Allergy();

        // Set the name and ingredient IDs in the appropriate columns
        $allergy->name = $name;
        $allergy->ingredients = json_encode($ingredientIds);

        // Save the allergy
        if ($allergy->save()) {
            return redirect()->route('allergy-list')->with('success', 'Allergy successfully added');
        } else {
            return redirect()->back()->with('error', 'Failed to create allergy');
        }
    }

    public function addAllergy()
    {
        $ingredients = Ingredients::all();
        return view('add-allergies')->with('ingredients', $ingredients);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allergy  $allergy
     *
     */
    public function updateGet(Request $request, Allergy $allergy)
    {
        $ingredients = Ingredients::all();
        return view('edit-allergies')->with('allergy', $allergy)->with('ingredients', $ingredients);
    }

    public function update(Request $request, Allergy $allergy)
    {
        if (!$allergy) {
            return redirect()->back()->with('error', 'Allergy not found');
        }

        $allergy->name = $request->input('name');
        $ingredientIds = $request->input('ingredientCheckbox');
        $allergy->ingredients = json_encode($ingredientIds);

        if ($allergy->save()) {
            return redirect()->route('allergy-list')->with('success', 'Allergy successfully updated');
        } else {
            return redirect()->back()->with('error', 'Failed to update allergy');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allergy  $allergy
     *
     */
    public function destroy(Allergy $allergy)
    {
        if ($allergy->delete()) {
            return redirect()->route('allergy-list')->with('success', 'Allergy successfully deleted');
        } else {
            return redirect()->back()->with('error', 'Failed to delete allergy');
        }
    }
}
