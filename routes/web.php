<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* Route::get('/', function () {
    return view('welcome');
}); */

    route::get('/', HomeController::class);

    route::get('curso', [CursoController::class, 'index'] );

    Route::get('curso/create', [CursoController::class, 'create'] );

    /* Creación de una variable por Url */
    Route::get('curso/{curso}',  [CursoController::class, 'show'] );

    /* Route::get('curso/{curso}/{categoria?}', function ($curso,$categoria = null) {
        
        if ($categoria) {
            return "Bienvenido al curso $curso, de la categoria, $categoria";   
        }else{
            return "Bienvenido a tu curso: $curso ";
        }
    }); */
