<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Model\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }

    public function store(ProductsRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        return Product::create($data);
    }

    public function update(ProductsRequest $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    public function show(Product $product)
    {
        $this->authorize('delete', $product);
        return $product;
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return $product;
    }

}
