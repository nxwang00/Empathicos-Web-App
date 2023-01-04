<?php

namespace App\Http\Controllers\Web\Store\Item;

use App\Http\Controllers\Controller;
use App\Product;
use Cart;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
    {
        $items    = Cart::getContent();
        $products = Product::with('reviews')->whereNotIn('id', $items->pluck('id'))->take(2)->get();
        return view('store.pages.items.index', compact('items','products'));
    }

    public function add(Request $request)
    {
        Cart::add(array(
            'id'         => $request->id,
            'name'       => $request->name,
            'price'      => $request->price,
            'quantity'   => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            ),
        ));
        return redirect()->route('items.index')->with('success_msg', 'Product is Added to Card!');
    }

    public function remove(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->route('items.index')->with('success_msg', 'Product is removed!');
    }

    public function update(Request $request)
    {   
        if ($request->quantity == 0) {
            $request->quantity = 1;
        }

        Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value'    => abs($request->quantity),
                ),
            ));
        return redirect()->route('items.index')->with('success_msg', 'Product is Updated!');
    }
    public function clear()
    {
        Cart::clear();
        return redirect()->route('items.index')->with('success_msg', 'Cart is cleared!');
    }

}
