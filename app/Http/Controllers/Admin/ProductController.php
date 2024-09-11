<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::where('name', 'like', '%'.\request()->get('search').'%')->orderby('id', 'DESC')->paginate(10);

        return view('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $lists = Product::all();

        return view('admin.pages.products.create', [
            'code'  => rand(),
            'lists' => $lists
        ]);
    }

    public function edit(Product $product)
    {
        return view('admin.pages.products.edit', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->fill([
            'name' => $request->name,
            'price' => $request->price,
            'unit' => $request->unit,
            'photo' => $request->photo
        ]);

        $product->saveOrFail();

        return redirect(route('admin.products.index'));
    }

    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->saveOrFail();

        return redirect(route('admin.products.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('admin.products.index'));
    }
}
