<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class CategoryController   extends Controller
{
    /**
     * Display a listing of the resource.
     *e
     */
    public function index()
    {


        return  CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     *
     */
    public function store(StoreCategoryRequest $request)
    {
        // $category = Category::create($request->validated());

        $fileVideo = $request->file('video');
        $pathVideo = $fileVideo->store('', 'public');
        $videoUrl = Storage::url($pathVideo);

        $fileImage = $request->file('image');
        $pathImage = $fileImage->store('', 'public');
        $imgUrl = Storage::url($pathImage);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->videoUrl = $videoUrl;
        $category->imgUrl = $imgUrl;
        if ($category->save()) {
            return redirect()->route('video-list')->with('success', 'Category successfully added');
        } else {
            // Handle the case where video creation failed
            return redirect()->back()->with('error', 'Failed to create category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $User
     *
     */
    public function show(Category $category)
    {


        $categoryList = Category::where('name', 'shoes')->first();
        $videos = $categoryList->videos;
        return new JsonResponse([
            'data' =>  $videos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     *
     */
    public function update(UpdateCategoryRequest  $request, $id)
    {
        $category = Category::findOrFail($id);

        // Update the category properties with the user-provided values
        $category->name = $request->input('name', $category->name);
        $category->description = $request->input('description', $category->description);

        // Check if a new video file was provided
        if ($request->hasFile('video')) {
            $fileVideo = $request->file('video');
            $pathVideo = $fileVideo->store('', 'public');
            $videoUrl = Storage::url($pathVideo);
            $category->videoUrl = $videoUrl;
        }

        // Check if a new image file was provided
        if ($request->hasFile('image')) {
            $fileImage = $request->file('image');
            $pathImage = $fileImage->store('', 'public');
            $imgUrl = Storage::url($pathImage);
            $category->imgUrl = $imgUrl;
        }

        if ($category->save()) {
            // Update the associated videos
            // $videos = $request->input('videos', []);
            $videos =  $category->videos()->delete(); // Delete existing videos
            foreach ($videos as $video) {
                $video->category = $category->name;
                $video->save();
            }

            return redirect()->route('video-list')->with('success', 'Category and videos successfully updated');
        } else {

            return redirect()->back()->with('error', 'Failed to update category and videos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return new JsonResponse([
            'message' => 'category deleted'
        ]);
    }
}
