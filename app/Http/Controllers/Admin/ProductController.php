<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('admin.index', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.create_modal');
    }

    public function store(\App\Http\Requests\StoreProductRequest $request)
    {
        $inputs = $request->all();
        $products = Product::firstOrCreate([
            'title' => $inputs['title'],
            'content' => $inputs['content'],
            'price' => $inputs['price'],
            'quantity' => $inputs['quantity']
        ]);

        $products->save();
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return json_decode($product);
    }

    public function update()
    {
    }
}
