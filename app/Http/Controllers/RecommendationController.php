<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\StoreRecommendationsRequest;
use App\Http\Resources\RecommendationsResource;
use App\Models\Recommendation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $recommendations = RecommendationsResource::collection(Recommendation::all());
        return view('recommendation')->with('recommendations', $recommendations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreRecommendationsRequest $request)
    {

        $recommendation = new Recommendation();
        $recommendation->title = $request->input('title');
        $recommendation->platform = $request->input('platform');
        $recommendation->link = $request->input('link');
        $recommendation->description = $request->input('description');
        if ($recommendation->save()) {
            return redirect()->route('recommendation')->with('success', 'Video successfully added');
        } else {
            return redirect()->back()->with('error', 'Failed to create video');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recommendation  $Recommendation
     *
     */
    public function show(Recommendation $Recommendation)
    {
        return RecommendationsResource::make($Recommendation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recommendation  $Recommendation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recommendation $Recommendation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recommendation  $Recommendation
     *
     */
    public function destroy(Recommendation $Recommendation)
    {
        $Recommendation->delete();

        return new JsonResponse([
            'message' => 'recommendation deleted'
        ]);
    }
}
