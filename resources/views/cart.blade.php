@extends('layouts.master');
@section('content')


<div class="float cart-y ">
    <h2 class=" pb-5"><strong> Carrito de compras </strong></i></h2>

    <div class="row justify-content-center m-auto">
        <div class="card m-1 col-xl-12 col-lg-12 col-md-10 table-y">

            @if(count($cart))
            <table class="table responsive">
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
                        <a href="{{ url('minusQuantity/'.$val['product']->id)}}" class=" btn-y btn btn-outline-primary">
                            <i class="fas fa-minus"></i>  
                        </a>

                        {{ $val['quantity']}}

                        <a href="{{ url('moreQuantity/'.$val['product']->id)}}" class=" btn-y btn btn-outline-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </th>
                    <th>
                        $ {{ $val['product']->precio * $val['quantity'] }}
                        <?php $valor +=  $val['product']->precio * $val['quantity'] ?>
                    </th>
                    <th>
                        <a href="{{ url('deleteCart/'.$val['product']->id)}}" class=" btn-y btn btn-outline-danger">
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

            <div>
            <form class="" action="/cartclose" method="post">
              @csrf
                <a href="{{ url('checkout/')}}"><button type="button" class="btn btn-outline-success mb-5">Elegir medio de pago</button></a>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>


@endsection