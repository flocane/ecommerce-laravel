<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function cart(){
        $cart = session()->get('cart', []);
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
        return view('cart')->with('cart', $cart);
    }

    //Eliminar productos de carrito
    public function deleteCart($id){
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return view('cart')->with('cart', $cart);
    }

    public function checkout(){
        $cart = session()->get('cart');

        $total = 0;
        foreach ($cart as $item => $value) {
            $total += $value['product']->precio * $value['quantity'];
        }

        return view('checkout')->with('total', $total);

    }

    //Este método muestra todos los productos del carrito del usuario logueado
    public function index()
    {
      $cart = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
      return view('cart', compact('cart'));
    }
    //Este corresponde al que permite agregar al carrito
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        //Esto lo hago la lograr generar un numero de carrito de forma dinámica
        $val = new Cart;
        $val->nombre = $product->nombre;
        $val->descripcion = $product->descripcion;
        $val->precio = $product->precio;
        $val->imagen = $product->featured_img;
        $val->quantity = 1;
        $val->user_id = Auth::user()->id;

        //Este lo cree para controlar si el producto fue comprado (1) o aun no ha sido producto no comprado (0).
        $val->status = 0;
        //Aquí guardo en la tabla de cart (carrito)
        $val->save();
        return redirect('home');
    }

    
    //Aquí traigo todos los productos del carrito del usuario logueado y que ha seleccionado una vez que decide cerrar la compra.
    public function cartclose(Request $req){
        $vals = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
      //De esta forma genero el número del carrito para el usuario que está comprando
      $cart_number = Cart::max('cart_number') +1;
      foreach($vals as $val){
        $val->status = 1;
        $val->cart_number = $cart_number;
        $val->save();
      }
      return redirect('home');
    }
    //Con este método controlo todo lo que el usuario historicamente ha comprado
    public function history(){
      $carts = Cart::where('user_id', Auth::user()->id)
                    ->where("status",1)->get()
                    ->groupBy('cart_number');
                    //De esta forma controlo todos los nros de carrito del usuario.
      return view('history', compact('carts'));
    }
 
    public function minusQuantity($id) {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            //verifica si este producto existe y luego decrementa cuantitativamente
            $quantity = $cart[$id]['quantity'];
            if ($quantity > 1) {
                $cart[$id]['quantity']--;
            }
        }
        
        session()->put('cart', $cart);
        return view('cart')->with('cart', $cart);
    }

    public function moreQuantity($id) {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            //verifica si este producto existe y luego incrementa cuantitativamente
            $cart[$id]['quantity']++;
        }
        
        session()->put('cart', $cart);
        return view('cart')->with('cart', $cart);
    }
};
