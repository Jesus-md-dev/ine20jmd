<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function show(Request $request) {
        return view('cart/detail')->with('cart', session()->get('cart'));
    }

    public function add(Product $product, Request $request) { 
        $cart = new Cart($request->session()->get('cart', NULL));
        $cart->add($product);
        $request->session()->put('cart', $cart);
        return view('cart/detail')->with('cart', session()->get('cart'));
    }

    public function remove(Product $product, Request $request) { 
        $cart = new Cart($request->session()->get('cart', NULL));
        $cart->remove($product);
        $request->session()->put('cart', $cart);
        return view('cart.detail')->with('cart', session()->get('cart'));
    }

    public function removeAll(Product $product, Request $request) { 
        $cart = new Cart($request->session()->get('cart', NULL));
        $cart->removeAll($product);
        $request->session()->put('cart', $cart);
        return view('cart.detail')->with('cart', session()->get('cart'));
    }

    public function operation(String $sOperation,Product $product, Request $request) {
        switch($sOperation) {
            case "add":
                return $this->add($product, $request);
            case "remove":
                return $this->remove($product, $request);
            case "removeAll":
                return $this->removeAll($product, $request);
            default:
                return $this->show($request);
        }
    }
}
