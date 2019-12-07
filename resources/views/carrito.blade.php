@extends('layouts.master');
@section('content')  

<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Mi Carrito
                <a href="productPage.php" class="btn btn-outline-info btn-sm pull-right">Volver</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="/img" src="img/acolchados.jpg" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>Acolchado</strong></h4>
                            <h4>
                                <small>Lavado Acolchado</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong> $615.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty" size="4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="img/bolsaMediana.jpg" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>Lavanderia Large</strong></h4>
                            <h4>
                                <small>Lavanderia Large</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>$636.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty" size="4">  
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
            </div>
            <div class="card-footer">
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Comprar</a>
                    <div class="pull-right" style="margin: 5px">
                        Total: <b>$1251.00</b>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
