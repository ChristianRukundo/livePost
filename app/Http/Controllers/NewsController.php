<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return  NewsResource::collection(News::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * $request
     *
     */
    public function store(StoreNewsRequest $request)
    {


        $news = new News();
        $news->body = $request->input('body');
        $news->days = $request->input('days');
        $news->save();

        return NewsResource::make($news);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     *
     */
    public function show(News $news)
    {
        return NewsResource::make($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     *
     */
    public function destroy(News $news)
    {
        $news->delete();
        return new JsonResponse([
            'message' => 'news deleted'
        ]);
    }
}
