@extends('layouts.master');
@section('content')
    

<div class="crud col-12 mb-5">
    <table>
        <thead>
            <tr class="table table-hover table-condensed">
                <th style="width:2%">#</th>
                <th style="width:18%">Nombre</th>
                <th style="width:18%">Apellido</th>
                <th style="width:33%">E-Mail</th>

                <th style="width:5%">Ver</th>
                <th style="width:8%">Editar</th>
                <th style="width:8%">Borrar</th>
        </thead>
    <tbody>
        <tr>
            <td data-th="Users">
                    @foreach ($users as $user)
                    <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    
                    <td><a href="{{('users/show/'.$user->id)}}">  <i class="fas fa-eye icono"></i></a></td>
                    <td><a href="{{('/users/'.$user->id.'/edit')}}" class="edit"><i class="fas fa-edit icono"></i></a></td>
                    <td><form id='{{$user->id}}' class='form-delete' action="{{url('users/'.$user->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button id='delete-link-{{$user->id}}'class="delete"><i class="fas fa-trash-alt icono"></i></button>
                        </form></td>
                    </tr>
                    @endforeach
        </tbody>
    </table>
</div>
@endsection