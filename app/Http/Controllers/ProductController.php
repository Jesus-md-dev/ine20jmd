<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome() {
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();

        return view('welcome',
            compact('aProduct_offering', 'aProduct_new'));
    }

    public function detail(Product $product) {
        return view('product/detail', compact('product'));
    }

    public function addToCart(Product $product, Request $request) {
        $cart = new Cart($request->session()->get('cart', NULL));
        $cart->add($product);
        $request->session()->put('cart', $cart);
        
        return redirect()->route('product', $product->id)->with('success', 'El producto ha sido añadido al carro');
    }
}
