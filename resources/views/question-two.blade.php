@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-0">
                <form method="GET" action="/1">
                        @csrf
                    <button type="submit" class="btn-cs mb-5">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </button>
                </form>
            </div>

            <div class="col-lg-2 col-12 text-center text-lg-start txt-white">
                <p >Recomendador de Tablets<b> <br>50% completado</b></p>
            </div>
            
            <div class="col-lg-6 col-12 my-2">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                    <div class="progress-bar" style="width: 50%;"></div>
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
            <div class="col-12 text-center txt-white py-5">
                <h1>¿Cuántos empleados tiene tu empresa?</h1>
                <p style="margin-bottom: 0;">Qué las tabletas Zebra se transformen en el mejor aliado para sus trabajadores</p>
            </div>
        </div>

        <div class="row justify-content-center py-5"> 
            <div class="col-lg-2 col-md-6  col-12 d-flex align-items-center justify-content-center pb-5">
                <a href="/3" class="card-link">
                    <div class="card" style="width: 13rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">1 a 10</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
                <a href="/3" class="card-link">
                    <div class="card" style="width: 13rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/50.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">11 a 50</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4  col-12 d-flex align-items-center justify-content-center pb-5">
                <a href="/3" class="card-link">
                    <div class="card" style="width: 13rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/51-100.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">51 a 100</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4  col-12 d-flex align-items-center justify-content-center pb-5">
                <a href="/3" class="card-link">
                    <div class="card" style="width: 13rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/100-300.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">101 a 300</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4  col-12 d-flex align-items-center justify-content-center pb-5">
                <a href="/3" class="card-link">
                    <div class="card" style="width: 13rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/301.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">301 a más</p>
                        </div>
                    </div>
                </a>
            </div>

            
        </div>
    </div>
</div>




  
@endsection