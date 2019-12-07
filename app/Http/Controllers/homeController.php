<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function carrito()
    {
        return view('carrito');
    }
    public function products()
    {
        return view('product');
    }
    
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('FAQ');
    }
    public function contact()
    {
        return view('contact');
    }

    public function register()
    {
        return view('registro');
    }

    public function login()
    {
        return view('login');
    }

    public function perfil()
    {
        $user = User::all();
        $product = Product::all();
        return view('perfil')->with('user', $user)
                            ->with('products', $product);
    }
    public function perfilAdm()
    {
        $users= User::all();
        $product = Product::all();
        $categories = Category::all();
        return view('perfilAdm')->with('users', $users)
                                ->with('products',$product);
                                
    }
}
