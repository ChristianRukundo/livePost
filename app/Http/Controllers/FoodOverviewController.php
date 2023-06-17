<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;


class FoodOverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *e
     */
    public function index()
    {
        $products = ProductResource::collection(Product::all());
        return view('product')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     *
     */
    public function store(StoreProductRequest $request)
    {
        $fileImage = $request->file('image');
        $pathImage = $fileImage->store('', 'public');
        $imgUrl = Storage::url($pathImage);
        $product = new Product();
        $product->title = $request->input('title');
        $product->category = $request->input('');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->imgUrl = $imgUrl;
        $product->save();

        return ProductResource::make($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $User
     *
     */
    public function show(Product $product)
    {
        return ProductResource::make($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Category  $category
     *
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return ProductResource::make($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return new JsonResponse([
            'message' => 'product deleted'
        ]);
    }
}
