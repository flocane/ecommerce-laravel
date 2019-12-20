@extends('layouts.master')
@section('content')
    
<div class="gsprofile fotoPerfilgral">
<div class="crud col-12 mb-5">
    <table>
        <thead>
            <tr class="table table-hover table-condensed">
                <th style="width:2%">#</th>
                <th style="width:18%">Producto</th>
                <th style="width:18%">Precio</th>
                <th style="width:33%">Actualizado</th>

                <th style="width:5%">Ver</th>
                <th style="width:8%">Editar</th>
                <th style="width:8%">Borrar</th>
        </thead>
    <tbody>
        <tr>
            <td data-th="Users">
                    @foreach ($products as $product)
                    <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->updated_at}}</td>
                    
                    <td><a href="{{{('/product-detail/'.$product->id)}}}">  <i class="fas fa-eye icono"></i></a></td>
                    <td><a href="{{('/products/'.$product->id.'/update')}}" class="edit"><i class="fas fa-edit icono"></i></a></td>
                    <td><form id='{{$product->id}}' class='form-delete' action="{{url('products/'.$product->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button id='delete-link-{{$product->id}}'class="delete"><i class="fas fa-trash-alt icono"></i></button>
                        </form></td>
                    </tr>
                    @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection