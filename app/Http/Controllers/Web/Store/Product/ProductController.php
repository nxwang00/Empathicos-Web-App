<?php

namespace App\Http\Controllers\Web\Store\Product;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('reviews')->where('status', 1)->get();
        return view('store.pages.products.index', compact('products'));
    }

    public function show($id)
    {
        $product    = Product::with('reviews')->find(base64url_decode($id));
        $categories = Category::whereIn('id', json_decode($product->categories))->get();
        $galleries  = DB::table('product_images')->where('product_id', $product->id)->pluck('image');
        return view('store.pages.products.show', compact('product', 'categories', 'galleries'));
    }
}
