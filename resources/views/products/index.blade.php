@extends('layouts.master')
@section('content')
<div class='container-fluid'>
<article class="container-fluid carrito ">
        <img src="{{asset("img/Logo_aurora.png")}}" alt="Logo de Aurora Materiales">
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
        <article >
        <section class='row'>
            @foreach($products as $product)
            <article class="block col-2" >
                <section class="top">
                    <ul>
                        <li><span class="title_product">{{$product->name}}  </span></li>
                    </ul>
                </section>
                <section class="middle">
                    <img src="{{asset('storage/'.$product->picture)}}" alt="" />
                </section>
                <section class="bottom2">
                <div class="info">{{$product->name}}</div>
                <div class="info">{{$product->description}}</div>
                <div class="info">$  {{$product->price}}</div>
                </section>
                <section>
                    <a href="{{url('carrito/add/'.$product->id)}}" class="btn btn-info"><i class="material-icons">&#xE147;</i></a>
                </section>
            </article>
            @endforeach
        </section>
        </article>
</article>
</div>
@endsection
      