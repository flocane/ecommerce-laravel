<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function cart(){
        $cart = session()->get('cart');
        return view('cart')->with('cart', $cart);
    }

    public function addToCart($id){
        $product =Product::find($id);
        $cart = session()->get('cart');

        if(!$cart){
            //si el carrito está vacío, este es el primer producto
            $cart=[
                $id => [
                    "product" => $product,
                    "quantity" => 1
                ]
            ];
       
        } elseif (isset($cart[$id])) {
            //si el carrito no está vacío, verifica si este producto existe y luego incremente cuantitativamente
            $cart[$id]['quantity']++;
        
        } else {
            //Si el artículo no existe en el carrito, agréguelo al carrito con cantidad = 1
            $cart[$id]= [
                    "product"=>$product,
                    "quantity"=> 1
            ];
        }
        
        session()->put('cart', $cart);
        return redirect()->back();
    }

    //Eliminar productos de carrito
    public function deleteCart($id){
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('cart', $cart);
    }

    public function checkout(){
        return view('checkout');

    }
};
