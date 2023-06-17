<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return new JsonResponse([
            "data" => "Index"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        return new JsonResponse([
            "data" => "Create"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return new JsonResponse([
            "data" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\User  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update( User $user)
    {
        return new JsonResponse([
            "data" => "Update"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        return new JsonResponse([
            "data" => "Delete"
        ]);
    }
}
