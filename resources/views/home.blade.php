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

<script>
    $(document).ready(function() {
        var progressBar = $(".progress-bar");
        var progressContainer = $(".progress");
        var porcentajeCompletado = 2; 
        var anchoBarra = porcentajeCompletado + "%";
        progressBar.css("width", anchoBarra);
        progressBar.addClass("progress-bar-animated");
        progressContainer.addClass("progress-transition");
    });
</script>



<div class="container-fluid">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-4 col-12 text-center text-lg-start txt-white pt-lg-5 pt-1 ">
                <h1 class="pt-5">Tabletas Zebra</h1>
                <p class="mb-3">Con solo 3 pasos te ayudaremos a encontrar la Tableta que más se adecue a sus necesidades empresariales</p>
                
                <form method="POST">
                    <div class="mb-3">
                    <label for="email" class="form-label fw-bold txt-white">Ingresa tu email para comenzar:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <button type="submit" class="btn-cs mb-5">¡Empecemos!</button>
    
                    <!-- Conexión a  CRM -->
                    <script type="text/javascript">
                        var __ss_noform = __ss_noform || [];
                        __ss_noform.push(['baseURI', 'https://app-3QNTNYB2F0.marketingautomation.services/webforms/receivePostback/MzawMLE0MbU0AwA/']);
                        __ss_noform.push(['endpoint', 'f4390436-9fbe-47b0-9652-ef247f401efa']);
                    </script>
                    <script type="text/javascript" src="https://koi-3QNTNYB2F0.marketingautomation.services/client/noform.js?ver=1.24" ></script>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                        var form = document.querySelector('form');
                        form.addEventListener('submit', function () {
                        window.location.href = 'http://127.0.0.1:8000/1';
                            });
                        });
                    </script>
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
