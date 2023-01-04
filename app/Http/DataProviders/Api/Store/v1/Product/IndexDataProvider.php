<?php

namespace App\Http\DataProviders\Api\Store\v1\Product;

use App\Http\Resources\Api\Store\v1\Product\ProductCollection;
use App\Product;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getProducts()
    {
        $products = Product::paginate(25);
        return successApiResponse('Product data', $products);
        return new ProductCollection(Product::paginate(25));
    }
}
