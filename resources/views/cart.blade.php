@extends('layouts.master');
@section('content')


<div class="container m-5">
    <h2 class="tituloy pb-5"><strong> Carrito de compras </strong></i></h2>

    <div class="row justify-content-center">
        <div class="card col-md-8">

            @if(count($cart))
            <table class="table table-hover">
                <thead class="theady">
                    <tr>
                        <th></th>
                        <th>
                            Servicio
                        </th>
                        <th>
                            Precio Unitario
                        </th>
                        <th>
                            Cantidad
                        </th>
                        <th>
                            Precio Total
                        </th>
                        <th>
                        </th>
                    </tr>

                </thead>
                <?php $valor = 0 ?>
                @foreach ($cart as $detail => $val)

                <tr>
                    <th>
                        <img src="{{ $val['product']['imagen'] }}" width="50" height="50">
                    </th>
                    <th>
                        {{ $val['product']->nombre}}
                    </th>
                    <th>
                        $ {{ $val['product']->precio}}
                    </th>
                    <th>
                        {{ $val['quantity']}}
                    </th>
                    <th>
                        $ {{ $val['product']->precio * $val['quantity'] }}
                        <?php $valor +=  $val['product']->precio * $val['quantity'] ?>
                    </th>
                    <th>
                        <a href="{{ url('deleteCart/'.$val['product']->id)}}" class="btn btn-outline-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </th>

                </tr>
                @endforeach
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="border-left-y">
                        Total
                    </th>
                    <th class="border-right-y">
                        $ {{$valor}}
                    </th>
                </tr>
            </table>

            @endif
        </div>
    </div>
</div>
@endsection