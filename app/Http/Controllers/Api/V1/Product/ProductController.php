<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Resources\ProductsResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    public function index(Request $request)
    {
        $products = Product::all();

        return ProductsResource::collection($products);
    }

    public function bestSellers(Request $request)
    {
        $products = Product::limit(4)->get();

        return ProductsResource::collection($products);
    }
}
