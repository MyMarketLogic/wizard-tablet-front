@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-lg-2 col-0">
                <form method="GET" action="/2">
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
                    <div class="progress-bar" style="width: 75%;"></div>
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
                <h1>¿Qué características y funcionalidades necesitas?</h1>
                <p style="margin-bottom: 0;">Con las tabletas Zebra Impulse su verdadero potencial, aumente la productividad y logre un mayor crecimiento.</p>
            </div>
        </div>

        <form method="GET" action="/5">
            @csrf 
            <div class="row d-flex align-items-center justify-content-center py-5">

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit" 
                    onclick="respuestaCaracteristicas('resistencia')"
                    name="opcion" value="resistencia" class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/movil.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Resistencia</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit"
                     name="opcion"
                     onclick="respuestaCaracteristicas('resolucion')"
                      value="resolucion" class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/arrows.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Resolución</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit" 
                    onclick="respuestaCaracteristicas('conectividad')"
                    name="opcion" value="conectividad" class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/sign.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Conectividad</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit"
                     name="opcion"
                     onclick="respuestaCaracteristicas('bateria')"
                      value="bateria" class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/batery.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Batería</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit"
                     name="opcion"
                     onclick="respuestaCaracteristicas('escaneo')"
                      value="escaneo" class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/eye.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Escaneo</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit" 
                    name="opcion" 
                    value="windows" 
                    onclick="respuestaCaracteristicas('windows')"
                    class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/system.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">S. operativo Windows</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col-lg-3 col-md-6 col-12 pb-5 d-flex align-items-center justify-content-center">
                    <button 
                    type="submit"
                     name="opcion"
                      value="montaje"
                      onclick="respuestaCaracteristicas('montaje')"
                       class="card-link" style="border: none; background: none; padding: 0; margin: 0;">
                        <div class="card" style="width: 14rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/transporte.svg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Montaje vehicular</p>
                            </div>
                        </div>
                    </button>
                </div>
    </div>
</form>


        
        </div>
    </div>
</div>


<script>

    function respuestaCaracteristicas(valor) {
        localStorage.setItem('respuesta_valor_3', valor);
        console.log(valor);

    }

</script>
@endsection