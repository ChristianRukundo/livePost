<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return view('customer-list')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreCustomerRequest  $request
     *

     */

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $imgUrl = Storage::url($imagePath);
        } else {
            $imgUrl = null;
        }

        // Create a new user
        $user = Customers::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'address' => $request->input('address'),
            'biceps' => $request->input('biceps'),
            'triceps' => $request->input('triceps'),
            'arm_5' => $request->input('arm_5'),
            'mobilenumber' => $request->input('mobilenumber'),
            'jerks' => $request->input('jerks'),
            'bout' => $request->input('bout'),
            'leg_5' => $request->input('leg_5'),
            'date_of_birth' => $request->input('date_of_birth'),
            'weight' => $request->input('weight'),
            'imgUrl' => $imgUrl,
            'start_date_of_program' => $request->input('start_date_of_program'),
            'fat_content' => $request->input('fat_content'),
            'oxydation_type' => $request->input('oxydation_type'),
            'fat_content_kg' => $request->input('fat_content_kg'),
            'starting_weight' => $request->input('starting_weight'),
            'major_mass' => $request->input('major_mass'),
        ]);

        // Return a response
        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
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
