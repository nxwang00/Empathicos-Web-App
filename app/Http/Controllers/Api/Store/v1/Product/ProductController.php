<?php

namespace App\Http\Controllers\Api\Store\v1\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\DataProviders\Api\Store\v1\Product\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\Product\IndexRequest;
use App\Http\Requests\Api\Store\v1\Product\ShowRequest;
use App\Product;
use App\Category;

/**
 * Products
 *
 * @package    Product Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::all();
        foreach($products as $product)
        {
            $categoryIds = json_decode($product->categories);
            $categories = [];
            foreach($categoryIds as $cid)
            {
                $category = Category::find($cid);
                array_push($categories, $category);
            }
            $product->cats = $categories;
            $product->img = !empty($product->image) ? asset('/storage/products/images/'.$product->image) : '';
            $product->ratings = $product->getAveragereviews();
        }

        return successApiResponse('Products', $products, 200);
    }

    public function show(ShowRequest $request, Product $product)
    {
        return $request->getProduct();
    }

}
