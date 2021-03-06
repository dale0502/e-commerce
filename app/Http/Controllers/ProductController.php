<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $username = session('username');
        $role = session('role');
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('web.index', [
            'products' => $products,
            'username' => $username,
            'role' => $role
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', ['product' => $product]);
    }

    public function cart()
    {
        return view('web.cart');
    }

}
