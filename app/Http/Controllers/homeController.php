<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Product;
class homeController extends Controller
{

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
        return view('/contact/create');
    }
    public function register()
    {
        return view('register');
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
        return view('perfilAdm')->with('users', $users)
                                ->with('products',$product);

    }
}
