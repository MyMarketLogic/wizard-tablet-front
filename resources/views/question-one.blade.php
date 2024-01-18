@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row pt-2">
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

<script>
    $(document).ready(function() {
        var progressBar = $(".progress-bar");
        var progressContainer = $(".progress");
        var porcentajeCompletado = 30; 
        var anchoBarra = porcentajeCompletado + "%";
        progressBar.css("width", anchoBarra);
        progressBar.addClass("progress-bar-animated");
        progressContainer.addClass("progress-transition");
    });
</script>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center txt-white py-3">
                <h1>¿A qué industria pertenece tu empresa?</h1>
                <p style="margin-bottom: 0;">Las tabletas Zebra funcionan en diferentes entornos.</p>
                <p>¡Nos adaptamos a cada tipo de industria!</p>
            </div>
        </div>

        <form method="POST" action="http://127.0.0.1:8000/2" id="miFormulario" >
          
            {{ csrf_field() }} 

      
            <div class="row py-5 g-5 justify-content-center">
            
                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center justify-content-center pb-lg-5">
                    <label class="card-link page-transition">
                        <input type="radio" name="categoria" value="manufactura"  />
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/industry.svg') }}" class="img-fluid " alt="industry">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Manufactura</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center justify-content-center pb-lg-5">
                    <label class="card-link">
                        <input type="radio" name="categoria" value="retail" />
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/arrow.svg') }}" class="img-fluid " alt="arrow">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Retail</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center justify-content-center pb-lg-5">
                    <label class="card-link">
                        <input type="radio" name="categoria" value="field_ops" />
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/hand.svg') }}" class="img-fluid " alt="hans">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Field Ops</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center justify-content-center pb-lg-5">
                    <label class="card-link">
                        <input type="radio" name="categoria" value="warehouse" />
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/almacenamiento.svg') }}" class="img-fluid " alt="nut">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Warehouse</p>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center justify-content-center pb-lg-5">
                    <label class="card-link">
                        <input type="radio" name="categoria" value="otros" />
                        <div class="card" style="width: 13rem;">
                            <div class="d-flex align-items-center justify-content-center mt-4">
                                <img src="{{ asset('assets/img/nut.svg') }}" class="img-fluid " alt="nut">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text mb-4">Otros</p>
                            </div>
                        </div>
                    </label>
                </div>
                <input type="hidden" name="apellido" value="-">


            <div class="col-lg-16 text-center mt-3"> <!-- Utiliza una columna de ancho completo -->
                 <button type="submit" class="btn-cs btn-primary ">Enviar</button>
      
            </div>

                    <!-- Conexión a  CRM -->
            <script type="text/javascript">
                var __ss_noform = __ss_noform || [];
                __ss_noform.push(['baseURI', 'https://app-3QNTNYB2F0.marketingautomation.services/webforms/receivePostback/MzawMLE0MbU0AwA/']);
                __ss_noform.push(['endpoint', '38987818-95f8-4bf6-9d37-8779dce41d80']);
               </script>
            <script type="text/javascript" src="https://koi-3QNTNYB2F0.marketingautomation.services/client/noform.js?ver=1.24" ></script>
            

        </form>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $("#miFormulario").submit(function(e) {
            if ($("input[name='categoria']:checked").length === 0) {
                alert("Por favor, selecciona una opción.");
                e.preventDefault(); 
                return false;
            } else {
                return true;
            }
        });
    });
</script>
  
@endsection