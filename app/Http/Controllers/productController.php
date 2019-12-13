<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.product')->with("productos", $products);
    } 

    public function detail($id){
        $product= Product::find($id);
        return view('products.detailProduct')->with('product', $product);
    }

};
