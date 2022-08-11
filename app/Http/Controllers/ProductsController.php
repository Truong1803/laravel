<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = ['Dell', 'Hp', 'Asus', 'Lenovo'];
        return view('products.index', compact('products'));
    }

    public function detail($id) {
        return "product id = ".$id;
    }
}
