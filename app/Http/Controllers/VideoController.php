<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Http\Resources\VideoResource;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $videos =  VideoResource::collection(Video::all());


        $categories = Category::all();
        return view('video-list')
            ->with('videos', $videos)
            ->with('categories', $categories);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     *
     */
    public function store(StoreVideoRequest $request)
    {

        $fileImage = $request->file('image');

        $pathImage = $fileImage->store('uploads', 'public');
        // dd($pathImage);
        $imgUrl = Storage::url($pathImage);
        $video = new Video();

        $video->title = $request->input('title');
        $video->category = $request->input('category');
        $video->description = $request->input('description');
        $video->imgUrl = $imgUrl;
        if ($video->save()) {
            return redirect()->route('video-list')->with('success', 'Video successfully added');
        } else {
            return redirect()->back()->with('error', 'Failed to create video');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $User
     *
     */
    public function show(Video $video): VideoResource
    {
        return VideoResource::make($video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $post
     *
     */
    public function update(UpdateVideoRequest $request, $id)
    {
        $video = Video::find($id);

        if (!$video) {
            return redirect()->back()->with('error', 'Video not found');
        }

        $fileImage = $request->file('image');
        if ($fileImage) {
            $pathImage = $fileImage->store('uploads', 'public');
            $imgUrl = Storage::url($pathImage);
            $video->imgUrl = $imgUrl;
        }

        $video->title = $request->input('title');
        $video->category = $request->input('category');
        $video->description = $request->input('description');

        if ($video->save()) {
            return redirect()->route('video-list')->with('success', 'Video successfully updated');
        } else {
            return redirect()->back()->with('error', 'Failed to update video');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return new JsonResponse([
            'message' => 'video deleted'
        ], 200);
    }
}
