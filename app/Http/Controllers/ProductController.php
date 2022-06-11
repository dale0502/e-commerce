<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->getProducts();
        return view('web.index', ['products' => $products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = $this->getProducts();
        $product = $products[$id];
        return view('product.show', ['product' => $product]);
    }

    public function getProducts()
    {
        $products = [
            [
                'imageUrl' => asset('/images/cake01.jpg')
            ],
            [
                'imageUrl' => asset('/images/cake02.jpg')
            ],
        ];

        return $products;
    }
}
