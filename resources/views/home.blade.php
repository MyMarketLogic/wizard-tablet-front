@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-0">
            <!--ghost col for center-->
            </div>

            <div class="col-lg-2 col-12 text-center text-lg-start txt-white pt-2">
                <p >Recomendador de Tablets<b> <br>0% completado</b></p>
            </div>
            
            <div class="col-lg-6 col-12 my-2">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                    <div class="progress-bar" style="width: 0%;"></div>
                </div>
            </div>

            <div class="col-lg-2 col-0">
            <!--ghost col for center-->
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-4 col-12 text-center text-lg-start txt-white pt-lg-5 pt-1 ">
                <h1 class="pt-5">Tabletas Zebra</h1>
                <p class="mb-5">Con solo 3 pasos te ayudaremos a encontrar la Tableta que más se adecue a sus necesidades empresariales</p>
                
                <form method="GET" action="/1">
                    @csrf
                    <button type="submit" class="btn-cs mb-5">¡Empecemos!</button>
                </form>
            </div>

            <div class="col-lg-2 col-0">
                <!--ghost col-->
            </div>

            <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center mb-5 mt-1 ">
                <img src="{{ asset('assets/img/tablet-home.png') }}" class="img-fluid" alt="tablets">
            </div>
        </div>
    </div>
</div>








  
@endsection
