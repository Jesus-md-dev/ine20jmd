<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
}
