@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')



<!--

<script>
   
   const token = '{{ csrf_field()}}';

   alert(token);

    const respuesta_tamano = localStorage.getItem('respuesta_valor_2');
    const respuesta_caracteristicas = localStorage.getItem('respuesta_valor_3');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    $.ajax({
        type: "POST",
        url: "/5",
        data: { caracteristica: respuesta_caracteristicas, tamanio: respuesta_tamano },
        success: function(response) {
            console.log(response); 
        }
    });
</script>
-->

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-lg-2 col-0">
                <form method="GET" action="/">
                    
                    <button type="submit" class="btn-cs mb-5">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </button>
                </form>
            </div>

            <div class="col-lg-2 col-12 text-center text-lg-start txt-white">
                <p>Recomendador de Tablets<b> <br>25% completado</b></p>
            </div>

            <div class="col-lg-6 col-12 my-2">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                    <div class="progress-bar" style="width: 25%;"></div>
                </div>
            </div>

            <div class="col-lg-2 col-0">
                <!--ghost col for center-->
            </div>
        </div>
    </div>
</div>

<?php




#$caracteristica = isset($_POST['caracteristica']) ? $_POST['caracteristica']: '';
#$tamanio = isset($_POST['tamanio']) ? $_POST['tamanio']: '';;

$caracteristica =  "
    <script>
    localStorage.getItem('respuesta_valor_3')
    </script>

";


$tamanio =  "
    <script>
    localStorage.getItem('respuesta_valor_2')
    </script>

";

if ($caracteristica === "resistencia" && $tamanio === "1 a 10") {
    echo "
    <div class='row justify-content-center py-5'> 
        <div class='col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5'>
            <div class='card h-100' style='width: 13rem;'>
                <div class='d-flex align-items-center justify-content-center mt-4'>
                    <img src='" . asset('assets/img/et40.svg') . "' class='img-fluid' alt=''>
                </div>
                <div class='card-body text-center'>
                    <h5 class='card-text mb-4 mt-3'>ET-40</h5>
                    <div class='text-justify'>
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad
                        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method='GET' action='/'>
                        " . csrf_field() . "
                        <button type='submit' class='btn-cs-2 my-5'>Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>";

}elseif ($caracteristica === "resistencia" && $tamanio === "11 a 50") {
    echo "
    <div class='row justify-content-center py-5'> 
        <div class='col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5'>
            <div class='card h-100' style='width: 13rem;'>
                <div class='d-flex align-items-center justify-content-center mt-4'>
                    <img src='" . asset('assets/img/et40.svg') . "' class='img-fluid' alt=''>
                </div>
                <div class='card-body text-center'>
                    <h5 class='card-text mb-4 mt-3'>ET-40</h5>
                    <div class='text-justify'>
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad
                        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method='GET' action='/'>
                        " . csrf_field() . "
                        <button type='submit' class='btn-cs-2 my-5'>Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>";
}if ($caracteristica === "resistencia" && $tamanio === "51 a 100") {
    echo '
    <div class="row justify-content-center py-5"> 
        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et40.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-40</h5>
                    <div class="text-justify">
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et45.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-2">ET-45</h5>
                    <div class="text-justify">
                        <p>Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua, polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.</p> <br>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-2">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';

}if ($caracteristica === "resistencia" && $tamanio === "101 a 300") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 ">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

    </div>';
}if ($caracteristica === "resistencia" && $tamanio === "300 o más") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100 " style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 ">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

    </div>';
}

#fin resistencia

#inicio resolucion



if ($caracteristica === "resolucion" && $tamanio === "1 a 10") {
    echo "
    <div class='row justify-content-center py-5'> 
        <div class=\"col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5\">
            <div class=\"card h-100\" style=\"width: 13rem;\">
                <div class=\"d-flex align-items-center justify-content-center mt-4\">
                    <img src='" . asset('assets/img/et60.svg') . "' class='img-fluid' alt=''>
                </div>
                <div class='card-body text-center'>
                    <h5 class='card-text mb-4 mt-3'>ET-60</h5>
                    <div class='text-justify'>
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method='GET' action='/'>
                        " . csrf_field() . "
                        <button type='submit' class='btn-cs-2 '>Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>";

}elseif ($caracteristica === "resolucion" && $tamanio === "11 a 50") {
    echo '
    <div class="row justify-content-center py-5"> 
        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';

}elseif ($caracteristica === "resolucion" && $tamanio === "51 a 100") {
    echo '
    <div class="row justify-content-center py-5"> 
        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2" >Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}
elseif ($caracteristica === "resolucion" && $tamanio === "101 a 300") {
    echo '
    <div class="row justify-content-center py-5"> 
        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2" >Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}
elseif ($caracteristica === "resolucion" && $tamanio === "300 o más") {
    echo '
    <div class="row justify-content-center py-5"> 
        
        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-5 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">L10AX</h5>
                <div class="text-justify">
                    <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                </div>

                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                </form>
            </div>
        </div>
    </div>
    </div>';
}


#fin resolucion

#inicio conectividad


if ($caracteristica === "conectividad" && $tamanio === "1 a 10") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et40.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-40</h5>
                    <div class="text-justify">
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 ">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}elseif ($caracteristica === "conectividad" && $tamanio === "11 a 50") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et40.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-40</h5>
                    <div class="text-justify">
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et45.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-2">ET-45</h5>
                    <div class="text-justify">
                        <p>Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua, polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.</p> <br>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-2">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 ">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}
elseif ($caracteristica === "conectividad" && $tamanio === "51 a 100") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et40.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-40</h5>
                    <div class="text-justify">
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et45.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-2">ET-45</h5>
                    <div class="text-justify">
                        <p>Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua, polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.</p> <br>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-2">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 ">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
    </div>';
}

elseif ($caracteristica === "conectividad" && $tamanio === "101 a 300") {
    echo '
    <div class="row justify-content-center py-5"> 
        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-5 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">L10AX</h5>
                    <div class="text-justify">
                        <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                    </div>

                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
            </div>
        </div>
        
    </div>';
}

elseif ($caracteristica === "conectividad" && $tamanio === "300 o más") {
    echo '
    <div class="row justify-content-center py-5"> 

    <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-60</h5>
                    <div class="text-justify">
                        <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 ">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-5 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">L10AX</h5>
                    <div class="text-justify">
                        <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                    </div>

                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
            </div>
        </div>
        
    </div>';
}


#fin conectividad

#inicio escaneo



if ($caracteristica === "escaneo" && $tamanio === "1 a 10") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et40.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-40</h5>
                    <div class="text-justify">
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>';
}

elseif ($caracteristica === "escaneo" && $tamanio === "11 a 50") {

   echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et40.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-40</h5>
                    <div class="text-justify">
                        <p>Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. Cuenta con conectividad inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et45.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-2">ET-45</h5>
                    <div class="text-justify">
                        <p>Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua, polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.</p> <br>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-2">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>';

}
elseif ($caracteristica === "escaneo" && $tamanio === "51 a 100") {

    echo '
     <div class="row justify-content-center py-5"> 
 
     <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
     <div class="card h-100" style="width: 13rem;">
         <div class="d-flex align-items-center justify-content-center mt-4">
             <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
         </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-60</h5>
                <div class="text-justify">
                    <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2" >Ver más</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-4">ET-85</h5>
                <div class="text-justify">
                    <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                </form>
            </div>
        </div>
    </div>
 
         
     </div>';
 
 }
 elseif ($caracteristica === "escaneo" && $tamanio === "101 a 300") {

    echo '
     <div class="row justify-content-center py-5"> 
     
        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">L10AX</h5>
                <div class="text-justify">
                    <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                </div>

                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                </form>
            </div>
        </div>
    </div>
 
         
     </div>';
 
 }
 elseif ($caracteristica === "escaneo" && $tamanio === "300 o más") {

    echo '
     <div class="row justify-content-center py-5"> 
     

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">L10AX</h5>
                <div class="text-justify">
                    <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                </div>

                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                </form>
            </div>
        </div>
    </div>
 
         
     </div>';
 
 }



#fin escaneo

#inicio windows

if ($caracteristica === "windows" && $tamanio === "1 a 10") {
    echo '
    <div class="row justify-content-center py-5"> 

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">ET-80</h5>
                    <div class="text-justify">
                        <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>';
}elseif (($caracteristica === "windows" && $tamanio === "11 a 50")) {
    echo '
     <div class="row justify-content-center py-5"> 
 
     

    <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-4">ET-85</h5>
                <div class="text-justify">
                    <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                </form>
            </div>
        </div>
    </div>
 
         
     </div>';

} elseif (($caracteristica === "windows" && $tamanio === "51 a 100")) {
    echo '
     <div class="row justify-content-center py-5"> 
     <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-60</h5>
                <div class="text-justify">
                    <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 ">Ver más</button>
                </form>
            </div>
        </div>
 </div>
     

    <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">L10AX</h5>
                    <div class="text-justify">
                        <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                    </div>

                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
 
         
     </div>';

}elseif (($caracteristica === "windows" && $tamanio === "101 a 300")) {
    echo '
     <div class="row justify-content-center py-5"> 
     
     

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">L10AX</h5>
                    <div class="text-justify">
                        <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                    </div>

                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
 
         
     </div>';

}elseif (($caracteristica === "windows" && $tamanio === "300 o más")) {
    echo '
     <div class="row justify-content-center py-5"> 
     
     

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                <img src="' . asset('assets/img/et80.svg') . '" class="img-fluid" alt="">
            </div>
            <div class="card-body text-center">
                <h5 class="card-text mb-4 mt-3">ET-80</h5>
                <div class="text-justify">
                    <p>Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.</p>
                </div>
                <form method="GET" action="/">
                    ' . csrf_field() . '
                    <button type="submit" class="btn-cs-2 my-4">Ver más</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/et85.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-4">ET-85</h5>
                    <div class="text-justify">
                        <p>Está diseñada para cualquier entorno empresarial. Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada, puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.</p>
                    </div>
                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-3">Ver más</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-12 col-md-6 d-flex align-items-center justify-content-center pb-5">
            <div class="card h-100" style="width: 13rem;">
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <img src="' . asset('assets/img/l10.svg') . '" class="img-fluid" alt="">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-text mb-4 mt-3">L10AX</h5>
                    <div class="text-justify">
                        <p>Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.</p>
                    </div>

                    <form method="GET" action="/">
                        ' . csrf_field() . '
                        <button type="submit" class="btn-cs-2 my-5">Ver más</button>
                    </form>
                </div>
            </div>
        </div>
 
         
     </div>';

}


#fin windows

#inicio montaje

#resistencia
#resolucion
#conectividad
#escaneo
#windows
#montaje

#1 a 10
#11 a 50
#51 a 100
#101 a 300
#300 o más 

if ($caracteristica === "montaje") {
    echo '
    <div class="row justify-content-center py-5"> 

    <div class="col-lg-2 col-md-6 col-12 d-flex align-items-center justify-content-center pb-5">
        <div class="card h-100" style="width: 13rem;">
            <div class="d-flex align-items-center justify-content-center mt-4">
                  <img src="' . asset('assets/img/et60.svg') . '" class="img-fluid" alt="">
            </div>
                <div class="card-body text-center">
            <h5 class="card-text mb-4 mt-3">ET-60</h5>
            <div class="text-justify">
                <p>La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla táctil de 10,1 pulgadas, además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.</p>
                 </div>
             <form method="GET" action="/">
                 ' . csrf_field() . '
                   <button type="submit" class="btn-cs-2 ">Ver más</button>
               </form>
            </div>
            </div>
        </div>

        
    </div>';
}

?>


@endsection
