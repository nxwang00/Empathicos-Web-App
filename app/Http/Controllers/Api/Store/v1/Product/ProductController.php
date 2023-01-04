<?php

namespace App\Http\Controllers\Api\Store\v1\Product;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\Product\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\Product\IndexRequest;
use App\Http\Requests\Api\Store\v1\Product\ShowRequest;
use App\Product;

/**
 * Products
 *
 * @package    Product Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ProductController extends Controller
{

    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return $provider->getProducts();
    }

    public function show(ShowRequest $request, Product $product)
    {
        return $request->getProduct();
    }

}
