<?php

namespace App\Http\Controllers\Web\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Product\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Product\CreateRequest;
use App\Http\Requests\Web\Dashboard\Product\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Product\EditRequest;
use App\Http\Requests\Web\Dashboard\Product\IndexRequest;
use App\Http\Requests\Web\Dashboard\Product\ShowRequest;
use App\Http\Requests\Web\Dashboard\Product\StatusRequest;
use App\Http\Requests\Web\Dashboard\Product\StoreRequest;
use App\Http\Requests\Web\Dashboard\Product\UpdateRequest;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.products.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.products.create', $request->getProduct());
    }

    public function store(StoreRequest $request)
    {
        if ($product = $request->persist()->getProduct()) {
            flashWebResponse('created', 'Product');
            return redirect()->route('admin.products.show', $product->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Product $product)
    {
        return view('dashboard.pages.products.show', $request->getProduct());
    }

    public function edit(EditRequest $request, Product $product)
    {
        return view('dashboard.pages.products.edit', $request->getProduct());
    }

    public function update(UpdateRequest $request, Product $product)
    {
        if ($product = $request->persist()->getProduct()) {
            flashWebResponse('updated', 'Product');
            return redirect()->route('admin.products.show', $product->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Product $product)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Product') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, Product $product)
    {
        if (request()->ajax()) {
            return ($product = $request->persist()->getProduct()) ? statusWebResponse(($product->status == 1) ? 'Product has been active successfully.' : 'Product has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function deleteImage(Request $request, $id)
    {
        if (request()->ajax()) {
            $product_images = DB::table('product_images')->select('image', 'id')->where('id', $id)->first();
            if (!empty($product_images)) {
                
                //delete old file...
                Storage::delete('public/products/galleries/' . $product_images->image);

                DB::table('product_images')->where('id', $id)->delete();
                return trashedWebResponse('product images');
            }
            return errorWebResponse();
        }
        return httpWebResponse();
    }

}
