@extends('layout.layout')

@section('title', 'Página de Bienvenida')

@section('content')

<?php
  $load = '';

  if(isset($_GET['caracteristica']) && isset($_GET['tamanio'])) { 
    $load = false;
  } else {
    $load = true;
  } 
?>
     


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


<div class='row justify-content-center py-5'>

    <?php

    $caracteristica =  isset($_GET['caracteristica']) ? $_GET['caracteristica'] : '';
    $tamanio = isset($_GET['tamanio']) ? $_GET['tamanio'] : '';

    function generarTarjeta($imagen, $titulo, $descripcion) {
        return "
        
            <div class='col-lg-2 col-md-6  d-flex align-items-center justify-content-center pb-5'>
                <div class='card h-100' style='width: 13rem;'>
                    <div class='d-flex align-items-center justify-content-center mt-4'>
                        <img src='" . asset($imagen) . "' class='img-fluid' alt=''>
                    </div>
                    <div class='card-body text-center'>
                        <h5 class='card-text mb-4 mt-3'>$titulo</h5>
                        <div class='text-justify'>
                            <p>$descripcion</p>
                        </div>
                        <form method='GET' action='/'>
                            " . csrf_field() . "
                            <button type='submit' class='btn-cs-2 my-5'>Ver más</button>
                        </form>
                    </div>
                </div>
            </div>";
    }

  
    #Inicio resistencia

    if ($caracteristica === "resistencia" && $tamanio === "1 a 10") {
        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');
    }
    elseif ($caracteristica === "resistencia" && $tamanio === "11 a 50") {
        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');
    }
    elseif ($caracteristica === "resistencia" && $tamanio === "51 a 100") {
        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');
        
        echo generarTarjeta('assets/img/et45.svg', 'ET-45', 'Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua,
        polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.');

    }elseif ($caracteristica === "resistencia" && $tamanio === "101 a 300") {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');


    }elseif ($caracteristica === "resistencia" && $tamanio === "300 o más") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 
    }
    
    #fin resistencia

    #Inicio resolucion

    if ($caracteristica === "resolucion" && $tamanio === "1 a 10") {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');
    }
    elseif ($caracteristica === "resolucion" && $tamanio === "11 a 50") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');
    }
    elseif ($caracteristica === "resolucion" && $tamanio === "51 a 100") {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

    }elseif ($caracteristica === "resolucion" && $tamanio === "101 a 300") {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

    }elseif ($caracteristica === "resolucion" && $tamanio === "300 o más") {
        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 
    }
    
    # fin resolucion

    #Inicio conectividad

    if ($caracteristica === "conectividad" && $tamanio === "1 a 10") {

        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');

        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');
    }
    elseif ($caracteristica === "conectividad" && $tamanio === "11 a 50") {
        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');

        echo generarTarjeta('assets/img/et45.svg', 'ET-45', 'Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua,
        polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.');

        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

    }
    elseif ($caracteristica === "conectividad" && $tamanio === "51 a 100") {
        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');

        echo generarTarjeta('assets/img/et45.svg', 'ET-45', 'Proporciona resistencia y robustez de nivel empresarial, la tableta cuenta con certificación IP65 que protegen al equipo del agua,
        polvo, barro y nieve. Puede ser sometida a condiciones ambientales extremas sin perder sus funciones.');

        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');


    }elseif ($caracteristica === "conectividad" && $tamanio === "101 a 300") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 

    }elseif ($caracteristica === "conectividad" && $tamanio === "300 o más") {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 
    }   

       #fin conectividad

       #inicio escaneo

    if ($caracteristica === "escaneo" && $tamanio === "1 a 10") {

        echo generarTarjeta('assets/img/et40.svg', 'ET-40', 'Está diseñada para las empresas, es resistente a diferentes entornos, puede trabajar con frío o calor. cuenta con conectividad
        inalámbrica WiFi 6 y 5G, tiene una pantalla compacta de 8 pulgadas que facilita el transporte.');

    }
    elseif ($caracteristica === "escaneo" && $tamanio === "11 a 50") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');
    
    }
    elseif ($caracteristica === "escaneo" && $tamanio === "51 a 100") {

        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

    }elseif ($caracteristica === "escaneo" && $tamanio === "101 a 300") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 

    }elseif ($caracteristica === "escaneo" && $tamanio === "300 o más") {
        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
        puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 
    }   

     #fin escaneo

     #ininio windows
     
    if ($caracteristica === "windows" && $tamanio === "1 a 10") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

    }
    elseif ($caracteristica === "windows" && $tamanio === "11 a 50") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
        puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');
    
    }
    elseif ($caracteristica === "windows" && $tamanio === "51 a 100") {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
        puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 

    }elseif ($caracteristica === "windows" && $tamanio === "101 a 300") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 

    }elseif ($caracteristica === "windows" && $tamanio === "300 o más") {
        echo generarTarjeta('assets/img/et80.svg', 'ET-80', 'Ofrece la flexibilidad que exige su personal: funciona como tableta independiente o con un teclado es montable para proporcionar 
        funcionalidad 2 en 1. Pantalla táctil, delgada, ligera y resistente a la vez para funcionar donde sea que esté.');

        echo generarTarjeta('assets/img/et85.svg', 'ET-85', 'Está diseñada para cualquier entorno empresarial.Posee una pantalla táctil de alta resolución, conexiones inalámbricas de avanzada,
         puede obtener mayor velocidad de wifi y telefonía celular con compatibilidad con wifi 6E y 5G o 4G.');

        echo generarTarjeta('assets/img/l10.svg', 'L10AX', 'Es una tableta robusta, con lector de códigos de barras integrado y viene en 3 formatos: XSlate, XPad, XBook. Todas adaptables y 
        listas para ser llevadas a cualquier lugar. Con una batería capaz de rendir hasta 25 horas de funcionamiento.'); 
    }   


     #fin windows

     #ininio montaje

     if ($caracteristica === "montaje" ) {
        echo generarTarjeta('assets/img/et60.svg', 'ET-60', 'La tableta ET60 de Zebra es una solución resistente y versátil diseñada para los entornos más exigentes. Cuenta con una pantalla 
        táctil de 10,1 pulgadas,además, tiene una conectividad inalámbrica WiFi 6. Es resistente al polvo, agua, golpes y vibraciones.');

    }

    #fin montaje


    ?>
 </div>";
<script>
  function DatosRes(load) {
    const respuesta_tamano = localStorage.getItem('respuesta_valor_2');
    const respuesta_caracteristicas = localStorage.getItem('respuesta_valor_3');

    if(load) {
        window.location = "/5?tamanio=" + respuesta_tamano + "&caracteristica=" + respuesta_caracteristicas;
    }
}
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        DatosRes(<?php echo $load; ?>);
    });
</script>


@endsection
