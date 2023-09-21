<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>¡Wizard Zebra tablet!</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

  </head>
  <body>
    
  <header class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('assets/img/zebra-negro.svg') }}" class="img-fluid" alt="logo zebra">
            </div>
            <div class="col-6 d-flex justify-content-end">
                <img src="{{ asset('assets/img/logo-fake.png') }}" class="img-fluid" alt="logo zebra">
            </div>
        </div>
    </div>
    <div class="shadow-overlay"></div>
</header>



  <main class=" section">
    @yield('content')

  </mail>

  <footer class="container-fluid bg-dark footer">
    <div class="shadow-overlay-top"></div>
    <div class="container">
        <div class="row pt-3">
          <div class="col-6">
            <img src="{{ asset('assets/img/zebra-blanco.svg') }}" class="img-fluid" alt="logo zebra">
          </div>
          <div class="col-6 d-flex justify-content-end">
            <img src="{{ asset('assets/img/logo-fake.png') }}" class="img-fluid" alt="logo zebra">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="text-center py-4">
            Ninguna acción relacionada con el presente proyecto, incluyendo, sin limitación, la entrega de medallas o premios, sustituye ninguna obligación o requerimiento relacionados con el programa PartnerConnect de Zebra®, incluyendo, entre otros, entrenamientos y certificados. ZEBRA y la cabeza estilizada de Zebra son marcas comerciales de Zebra Technologies Corporation registradas en diversas jurisdicciones de todo el mundo. Todas las demás marcas comerciales son propiedad de sus respectivos dueños.
            ©2023 Zebra Technologies Corporation y/o sus afiliadas.
            </p>
          </div>
        </div>
      </div>
  </footer>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>