<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    
    public function manejarSolicitudAjax(Request $request)
    {
       // $caracteristica = $request->input('caracteristica');
        //$tamanio = $request->input('tamanio');
        $data =  $request->all();


        return response()->json(['resultado' => $data]);
    }




}
