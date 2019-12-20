@extends('layouts.master')
@section('content')
<div class="profile col-6">
        {{-- @dd($users); --}}
        <div>
            @if ($user->avatar)
            <img width="40px" style="border-radius:50%" src="{{asset('storage/avatars/'.$user->avatar)}}" alt="">
            @else
                
            @endif
            
        </div>
            <h1>Usuario:
            <br>
            {{$user->name}} {{$user->lastname}}
            <br>
            <button type="button" class="btn btn-danger"> <a href={{url('perfilAdm')}}>Volver </a> </button>
            </h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> {{$user->email}}  </h2>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>

                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Direccion: {{$user->adress}}</li>
                    <li class="list-group-item">Codigo Postal ->{{$user->zipcode}}</li>
                    <li class="list-group-item">Email: {{$user->email}}</li>
                    <li class="list-group-item">Creado el: {{$user->created_at}}</li>
                    <li class="list-group-item">Ultima Actualizacion: {{$user->updated_at}}</li>

                    </ul>
                  </div>
            </div>
    </div>
@endsection