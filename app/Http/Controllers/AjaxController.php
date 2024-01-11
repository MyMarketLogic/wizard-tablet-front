<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    
    public function manejarSolicitudAjax(Request $request)
    {
        $caracteristica = $request->input('caracteristica');
        $tamanio = $request->input('tamanio');


        return response()->json(['resultado' => 'Solicitud AJAX manejada correctamente']);
    }




}
