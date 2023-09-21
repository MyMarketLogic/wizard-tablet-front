@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-0">
                <form method="GET" action="/">
                        @csrf
                    <button type="submit" class="btn-cs mb-5">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </button>
                </form>
            </div>

            <div class="col-lg-2 col-12 text-center text-lg-start txt-white">
                <p >Recomendador de Tablets<b> <br>25% completado</b></p>
            </div>
            
            <div class="col-lg-6 col-12 my-2">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                    <div class="progress-bar" style="width: 25%;"></div>
                </div>
            </div>

            <div class="col-lg-2 col-0">
            <!--ghost col for center-->
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center txt-white py-3">
                <h1>¿A qué industria pertenece tu empresa?</h1>
                <p style="margin-bottom: 0;">Las tabletas Zebra funcionan en diferentes entornos.</p>
                <p>¡Nos adaptamos a cada tipo de industria!</p>
            </div>
        </div>

        <div class="row py-5 g-5 ">
            

        <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <a href="/2"  class="card-link page-transition">
                <div class="card" style="width: 16rem;">
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <img src="{{ asset('assets/img/industry.png') }}" class="img-fluid " alt="industry">
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text mb-4">Manufactura</p>
                    </div>
                </div>
            </a>
        </div>


       

        <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <a href="/2"  class="card-link">
                <div class="card" style="width: 16rem;">
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <img src="{{ asset('assets/img/arrow.png') }}" class="img-fluid " alt="arrow">
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text mb-4">Retail</p>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <a href="/2"  class="card-link">
                <div class="card" style="width: 16rem;">
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <img src="{{ asset('assets/img/hand.png') }}" class="img-fluid " alt="hans">
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text  mb-4">Field Ops</p>
                    </div>
                </div>
            </a>  
        </div>

        <div class="col-lg-3 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <a href="/2"  class="card-link">

                <div class="card" style="width: 16rem;">
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <img src="{{ asset('assets/img/nut.png') }}" class="img-fluid " alt="nut">
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text mb-4">Otros</p>
                    </div>
                </div>
            </a>     
        </div>

        </div>
    </div>
</div>



  
@endsection