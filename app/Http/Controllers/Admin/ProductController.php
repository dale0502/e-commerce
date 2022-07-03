<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


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

        // 檢查是否有圖片
        if ($request->has('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs(
                '',
                $imageName,
                'public'
            );
            $image = Image::make(public_path("storage/{$imagePath}"))->resize(400, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path("storage/{$imagePath}"), 60);
            $image->save();

            // 取得存入路徑
            $url = \Storage::disk('public')->url($imagePath);
            $inputs['image'] = $url;
        }

        $products = Product::firstOrCreate([
            'title' => $inputs['title'],
            'content' => $inputs['content'],
            'price' => $inputs['price'],
            'quantity' => $inputs['quantity'],
            'image_url' => $inputs['image'],
        ]);

        $products->save();
        return redirect()->route('admin::index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response($product); 
    }

    public function update(Request $request)
    {
        $inputs = $request->all();
        $product = Product::findOrFail($request->id);
        $product->update([
            'title' => $inputs['title'],
            'content' => $inputs['content'],
            'price' => $inputs['price'],
            'quantity' => $inputs['quantity']
        ]);

        $product->save();
        return redirect()->route('admin::index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin::index');
    }
}
