<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// Darryldecode\Cart\CartServiceProvider::class;
use CartServiceProvider\Cart\Darryldecode;
use Darryldecode\Cart\Facades\CartFacade as Cart;


class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = Cart::getContent();
        //dd($cartItems);
        return view('cart', compact('cartItems'));


        // $cartItems = Cart::getContent();
        // //dd($cartItems);
        // foreach ($cartItems as $item) {
        //     if (!isset($item->author)) {
        //         // author is not present
        //     }
        // }
        // return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
{
    \Cart::add([
        'id' => $request->id,
        'name' => $request->name,
        'author' => $request->author,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'attributes' => ['image' => $request->image]

    ]);
    session()->flash('success', 'Book is Added to Cart Successfully !');

    return redirect()->route('cart.list');
}

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function checkOut() {

        \Cart::clear();

        session()->flash('message', 'Checkout was successful!');
        return view('checkout');
    }
}
