@extends('layouts.master')
@section('content')
<body>
    <div class="tm-container mx-auto">
        <section class="tm-section tm-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-bg-circle-white tm-flex-center-v">
                            <header class="text-center">
                                <h1 class="tm-site-title">Lavabien</h1>
                                <p class="tm-site-subtitle">Servicio de lavanderia</p>
                            </header>
                            <p>&nbsp;&nbsp;&nbsp; En nuestras Sucursales Lava Bien desarrollamos tres procesos:
                                Lavandería que incluye lavado en agua, secado en secarropas y doblado.
                                Plancha que incluye lavado en agua, secado en secarropas y planchado.
                                Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p   >
                            <p class="text-center mt-4 mb-0">
                                <a data-scroll href="{{asset('product')}}" class="btn tm-btn-secondary">Servicios</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4">COMUNIDAD LAVA BIEN </h2>
                        <p class="mb-4">&nbsp;&nbsp;&nbsp;En nuestras Sucursales Lava Bien desarrollamos tres procesos:
                            Lavandería que incluye lavado en agua, secado en secarropas y doblado.
                            Plancha que incluye lavado en agua, secado en secarropas y planchado.
                            Tintorería que incluye desmanchado, limpieza en seco, lavado y planchado.</p>
                        <p class="text-right mb-0">
                            <a href="{{ route('register') }}" class="btn tm-btn-secondary">Registrate</a>
                        </p>
                    </div>
                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                        <img src="img/laundryHome2.jpg" alt="Image" class="rounded-circle tm-circle-img">
                    </div>
                </div>
            </div>
        </section>
        <section id="tm-section-3" class="tm-section tm-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 tm-section-2-right">
                        <div class="tm-bg-circle-white tm-bg-circle-pad-2 tm-flex-center-v">
                            <header>
                                <h2 class="tm-color-primary mr-4">MAS SOBRE NOSOTROS</h2>
                            </header>
                            <p>&nbsp;&nbsp;&nbsp;Somos una de las cadenas lider en el tratamiento, entrega y logistica de prendas de vestir, surgio con la idea de cubrir
                                las necesidad de disminuir los tiempos de entrega asegurando la calidad de servicio, utilizando solo productos de alta calidad,
                                pensando siempre en el medio ambiente.
                            </p>
                            <p class="text-center mt-5  mb-0">
                                <a data-scroll href="{{asset('contact')}}" class="btn tm-btn-secondary">Contactanos</a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
