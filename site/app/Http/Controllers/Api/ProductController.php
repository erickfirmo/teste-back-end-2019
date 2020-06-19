<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
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
        return responder()->success(Product::all())->respond(202, ['success' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();

        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        //grams
        $product->weight = $request->input('weight');
        // X Y Z cm
        $product->size = $request->input('size');
        $product->save();

        return responder()->success($product)->respond(201, ['message' => true]);
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

        if(is_null($product) && $product == false) {
            $status_code = 200;
            $status_message = '';
        } else {
            $status_message = 204;
            $status_message = '';
        }

        return responder()->success($product)->respond($status, ['message' => $status_message]);
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

        return responder()->success($product)->respond(204, ['message' => true]);
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

        return responder()->success()->respond(200, ['message' => true]);
    }
}
