@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-lg-2 col-0">
                <form method="POST" action="/2">
                @csrf
                    <button type="submit" class="btn-cs mb-5">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </button>
                </form>
            </div>

            <div class="col-lg-2 col-12 text-center text-lg-start txt-white">
                <p >Recomendador de Tablets<b> <br>75% completado</b></p>
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

<script>
    $(document).ready(function() {
        var progressBar = $(".progress-bar");
        var progressContainer = $(".progress");
        var porcentajeCompletado = 75; 
        var anchoBarra = porcentajeCompletado + "%";
        progressBar.css("width", anchoBarra);
        progressBar.addClass("progress-bar-animated");
        progressContainer.addClass("progress-transition");
    });
</script>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center txt-white pt-5 pb-3">
                <h1>¿Cuántos empleados tiene tu empresa?</h1>
                <p style="margin-bottom: 0;">Qué las tabletas Zebra se transformen en el mejor aliado para sus trabajadores</p>
            </div>
        </div>


        <form method="get" action="/5" id="miFormulario">
            @csrf
            <div class="row justify-content-center pt-5 pb-3">

                <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
                    <label class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <input type="radio" name="respuesta" value="1 a 10" onclick="respuestaTamanio('1 a 10')">
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/1.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">1 a 10</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
                    <label class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <input type="radio" name="respuesta" value="11 a 50" onclick="respuestaTamanio('11 a 50')">
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/50.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">11 a 50</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
                    <label class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <input type="radio" name="respuesta" value="51 a 100" onclick="respuestaTamanio('51 a 100')">
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/51-100.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">51 a 100</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
                    <label class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <input type="radio" name="respuesta" value="101 a 300" onclick="respuestaTamanio('101 a 300')">
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/100-300.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">101 a 300</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
                    <label class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <input type="radio" name="respuesta" value="300 o más" onclick="respuestaTamanio('300 o más')">
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/301.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">301 a más</p>
                            </div>
                        </div>
                    </label>
                </div>

            </div>
            <input type="hidden" name="apellido" value="-">

            <div class="col-lg-16 text-center mb-5"> <!-- Utiliza una columna de ancho completo -->
                 <button type="submit" class="btn-cs btn-primary ">Enviar</button>
            </div>

              
        </form>



            
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#miFormulario").submit(function(e) {
            if ($("input[name='respuesta']:checked").length === 0) {
                alert("Por favor, selecciona una opción.");
                e.preventDefault(); 
                return false;
            } else {
                return true;
            }
        });

        function respuestaTamanio(valor) {
            localStorage.setItem('respuesta_valor_2', valor);
            console.log(valor);
        }
    });
</script>



<?php 

$caracteristica =  isset($_GET['caracteristica']) ? $_GET['caracteristica'] : '';
$tamanio = isset($_GET['tamanio']) ? $_GET['tamanio'] : '';

echo $caracteristica

?>
  
@endsection