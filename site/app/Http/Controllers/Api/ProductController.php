<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\Api\ProductRequest;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return responder()->success(Product::all())->respond(200, ['success' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        return response()->josn($validated);

        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        //grams
        $product->weight = $request->input('weight');
        // X Y Z cm
        $product->size = $request->input('size');
        $product->save();

        return responder()->success($product)->respond(201, ['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return responder()->success($product)->respond(200, ['success' => true]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'weight' => $request->weight,
            'size' => $request->size,
        ]);

        return responder()->success($product)->respond(204, ['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return responder()->success()->respond(200, ['success' => true]);
    }
}
