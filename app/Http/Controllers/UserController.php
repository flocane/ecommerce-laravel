<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UserController extends Controller
{

/*avatar*/
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(20);
        return view('/users/index')->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  /*valido imagen*/
    // protected function validator (Request $request) {
    //  return Validator::make($data, [
    //     'avatar' => ['required', 'image']
    //  ]);
    // }


    // public function create(Request $request)
    // {
    //     $nombreArchivo = 'user_default.jpg';
    //     $request = request();
    //     dd($request);
    //     ;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //funcion para que el admin cree un usuario
    {
        $reglas = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'required',
            'role' => 'required'
        ];

        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];

        $this->validate($request, $reglas, $mensajes);

        $avatar = $request->file('avatar')->store('public','app','storage');
        
        $user = new User($request->all());

        $user->avatar = $avatar;

        $user->save();

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); //capturo el usuario especifico de la db 

        return view('users.edit')
            ->with('user', $user); //cargo la vista con los datos del usuario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateShiping(Request $request, $id)
    {
        $reglas = [
            
            'adress' => 'required',
            'zipcode' => 'required',
        ];

        $mensajes = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        $this->validate($request, $reglas, $mensajes);
        
        $users = User::find($id);

         $users->adress = $request->input('adress') !== $users->adress ? $request->input('adress') : $users->adress;
         
       
      
         $users->zipcode = $request->input('zipcode') !== $users->zipcode ? $request->input('zipcode') : $users->zipcode;
         $users->save();

         return redirect("/perfil/");
    }
    public function update(Request $request, $id)
    {   
        $rules = [
            'name' => 'required',
            'email' => 'required',
         
            //'lastname' => 'required',
           
        ];

        $messages = [
            'required' => 'el campo :attribute es obligatorio',
        ];

        // A partir de aca hay que fijarse que todo funcione...
        //guardar la foto
if ($request->file('avatar')) {

    $nombreArchivo = 'avatar.png';
        $imagen = $request->file('avatar');
        $nombreArchivo = uniqid('img-') . '.' .$imagen->extension();
        $imagen->storePubliclyAs("public/avatar", $nombreArchivo);
       
}
        
        $this->validate($request, $rules, $messages);

        $users = User::find($id);

        $users->name = $request->input('name') !== $users->name ? $request->input('name') : $users->name;

        $users->email = $request->input('email') !== $users->email ? $request->input('email') : $users->email;
       
     
        $users->avatar =  $nombreArchivo !== $users->avatar ?  $nombreArchivo : $users->avatar;
       
        $users->last_name = $request->input('last_name') !== $users->last_name ? $request->input('last_name') : $users->last_name;
        
        $users->adress = $request->input('adress') !== $users->adress ? $request->input('adress') : $users->adress;

        
        $users->zipcode = $request->input('zipcode') !== $users->zipcode ? $request->input('zipcode') : $users->zipcode;

        $users->save();
        if(auth()->user()->rol == 9){
            return redirect('/users/index');
        }else{
            return redirect("/perfil/"); 
        }
        

    }
    public function show($id)
    {
        $users = User::find($id);
        return view('/users/show')->with('user', $users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/perfilAdm');
    }
}