<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;


Route::get('/', function () {
    return view('home');
});


Route::get('/layout', function () {
    return view('layout.layout');
});


Route::get('/1', function () {
    return view('question-one');
});


Route::get('/2', function () {
    return view('question-two');
});

Route::get('/3', function () {
    return view('question-tree');
});

Route::get('/4', function () {
    return view('question-four');
});


Route::get('/5', function () {
    return view('prueba');
});




Route::post('/5',  [AjaxController::class, 'manejarSolicitudAjax'] );