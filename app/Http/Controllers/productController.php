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



    public function indexAdmin()
    {
       $limit=30;
       $product = Product::make()->paginate($limit);
      
       return view('products.index')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
        ];
 
        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        $this->validate($request, $reglas, $mensajes);

 
        $photopath_product = $request->file('imagen')->store('img', 'public');
 
        $product = new Product($request->all());
 
        $product->imagen = $photopath_product;
 
        $product->save();
 
        return redirect('/perfilAdm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $product = Product::all();
       return view('products.show')->with('products', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('hola');
        $product = Product::find($id);
     

       return view('products.edit')
           ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
        
        ];
        
        $messages = [
            'required' => 'el campo :attribute es obligatorio',
        ];
 
        $this->validate($request, $rules, $messages);
        
        $product = Product::find($id);
        
         $product->nombre = $request->input('nombre') !== $product->nombre ? $request->input('nombre') : $product->nombre;
         
         $product->descripcion = $request->input('descripcion') !== $product->descripcion ? $request->input('descripcion') : $product->descripcion;
         $product->precio = $request->input('precio') !== $product->precio ? $request->input('precio') : $product->precio;
         if($request->input('imagen') !== $product->imagen){
             $photopath_product = $request->file('imagen')->store('img', 'public');
         }
         $product->imagen = $request->input('imagen') !== $product->imagen ? $photopath_product : $product->imagen;
  
         $product->save();
     
         return redirect("/perfilAdm/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $product = Product::find($id);
        $product->delete();
        return redirect("/products/index");
    }
    public function search(Request $request)
    {
        $input = $request->input('busqueda');
        $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
        return view('products.index')->with("products", $products);
    }
}
