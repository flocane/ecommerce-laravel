<?php

namespace App\Http\Controllers;
use App\Category;
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
       $category = Category::all();
       return view('products.index')->with('products', $product)
                                    ->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $category = Category::all();
       return view('products.create')->with('categories', $category);
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

 
        $photopath_product = $request->file('imagen')->store('imagen', 'public');
 
        $product = new Product($request->all());
 
        $product->picture = $photopath_product;
 
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
        $category = Category::all();
        $product = Product::find($id);
     

       return view('products.edit')
           ->with('product', $product)
           ->with('categories', $category);
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
        
         $product->name = $request->input('name') !== $product->name ? $request->input('name') : $product->name;
         
         $product->description = $request->input('description') !== $product->description ? $request->input('description') : $product->description;
         $product->category_id = $request->input('category_id') !== $product->category_id ? $request->input('category_id') : $product->category_id;
         $product->stock_id = $request->input('stock_id') !== $product->stock_id ? $request->input('stock_id') : $product->stock_id;
         $product->price = $request->input('price') !== $product->price ? $request->input('price') : $product->price;
         if($request->input('picture') !== $product->picture){
             $photopath_product = $request->file('picture')->store('product_img', 'public');
         }
         $product->picture = $request->input('picture') !== $product->picture ? $photopath_product : $product->picture;
  
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
        return redirect("/perfilAdm/");
    }
    public function search(Request $request)
    {
        $input = $request->input('busqueda');
        $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
        return view('products.index')->with("products", $products);
    }
}
