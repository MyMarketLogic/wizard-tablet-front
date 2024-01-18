@extends('layout.layout')

@section('title', 'hola')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row pt-2">
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
                    <div class="progress-bar" style="width: 75%;"></div>
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
        var porcentajeCompletado = 50; 
        var anchoBarra = porcentajeCompletado + "%";
        progressBar.css("width", anchoBarra);
        progressBar.addClass("progress-bar-animated");
        progressContainer.addClass("progress-transition");
    });
</script>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center txt-white py-5">
                <h1>¿Qué características y funcionalidades necesitas?</h1>
                <p style="margin-bottom: 0;">Con las tabletas Zebra Impulse su verdadero potencial, aumente la productividad y logre un mayor crecimiento.</p>
            </div>
        </div>

        <form method="POST" action="/3" id="miFormulario">
            @csrf
            <div class="row d-flex align-items-center justify-content-center py-5">

                <div class="col-lg-2 col-md-6 col-12 pb-5 px-2 d-flex align-items-center justify-content-center">
                    <input type="radio" id="resistencia" name="opcion" value="resistencia" class="card-input " onclick="respuestaCaracteristicas('resistencia')" />
                    <label for="resistencia" class="card" style="width: 12rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/movil.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">Resistencia</p>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 pb-5 px-2 d-flex align-items-center justify-content-center">
                    <input type="radio" id="resolucion" name="opcion" value="resolucion" class="card-input " onclick="respuestaCaracteristicas('resolucion')"
 />
                    <label for="resolucion" class="card" style="width: 12rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/arrows.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">Resolución</p>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 pb-5 px-2 d-flex align-items-center justify-content-center">
                    <input type="radio" id="conectividad" name="opcion" value="conectividad" class="card-input " onclick="respuestaCaracteristicas('conectividad')" />
                    <label for="conectividad" class="card" style="width: 12rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/sign.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">Conectividad</p>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 pb-5 px-2 d-flex align-items-center justify-content-center" >
                    <input type="radio" id="escaneo" name="opcion" value="escaneo" class="card-input " onclick="respuestaCaracteristicas('escaneo')"/>
                    <label for="escaneo" class="card" style="width: 12rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/eye.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">Escaneo</p>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 pb-5 px-2 d-flex align-items-center justify-content-center">
                    <input type="radio" id="windows" name="opcion" value="windows" class="card-input "   onclick="respuestaCaracteristicas('windows')" />
                    <label for="windows" class="card" style="width: 12rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/system.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-lg-1">S. operativo Windows</p>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-6 col-12 pb-5 px-2 d-flex align-items-center justify-content-center">
                    <input type="radio" id="montaje" name="opcion" value="montaje" class="card-input "   onclick="respuestaCaracteristicas('windows')"/>
                    <label for="montaje" class="card" style="width: 12rem;">
                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <img src="{{ asset('assets/img/transporte.svg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text mb-4">Montaje vehicular</p>
                        </div>
                    </label>
                </div>

                <input type="hidden" name="apellido" value="--">

                <div class="col-lg-16 text-center mb-5">
                     <button type="submit" class="btn-cs btn-primary ">Enviar</button>
                </div>
            </div>

            <script type="text/javascript">
                var __ss_noform = __ss_noform || [];
                __ss_noform.push(['baseURI', 'https://app-3QNTNYB2F0.marketingautomation.services/webforms/receivePostback/MzawMLE0MbU0AwA/']);
                __ss_noform.push(['endpoint', '7ca5c170-36d0-40e0-9d1f-1e95b7fecdd3']);
            </script>
            <script type="text/javascript" src="https://koi-3QNTNYB2F0.marketingautomation.services/client/noform.js?ver=1.24" ></script>


        </form>



        
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $("#miFormulario").submit(function(e) {
            if ($("input[name='opcion']:checked").length === 0) {
                alert("Por favor, selecciona una opción.");
                e.preventDefault(); 
                return false;
            } else {
                return true;
            }
        });

        
        function respuestaCaracteristicas(valor) {
            localStorage.setItem('respuesta_valor_3', valor);
            console.log(valor);
        }
        });
</script>

@endsection