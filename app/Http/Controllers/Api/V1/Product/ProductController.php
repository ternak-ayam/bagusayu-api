<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    public function index(Request $request)
    {
        $products = Product::all();

        return response()->json($products);
    }

    public function bestSellers(Request $request)
    {
        $products = Product::limit(4)->get();

        return response()->json($products);
    }
}
