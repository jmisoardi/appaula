<?php

    use App\Http\Controllers\CursoController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;

/* Route::get('/', function () {
    return view('welcome');
}); */
    /* En este caso tenemos el llamado de una unica ruta por HomeController. En la carpeta controlador HomeController, posee el metodo invoke */
    route::get('/', HomeController::class);
    
    /* En este caso tememos rutas individuales con el mismo controlador llamando a distintas rutas index, create, show. */
    route::get('curso', [CursoController::class, 'index'] );
    Route::get('curso/create', [CursoController::class, 'create'] );
    /* Creación de una variable por Url */
    Route::get('curso/{curso}',  [CursoController::class, 'show'] );

    /* En este caso estamos agrupando las rutas con el mismo controlador, CursoController, para tener el codigo más limpio */
    Route::controller(CursoController::class)->group(function(){
        route::get('curso', 'index');
        route::get('curso/create','create');
        route::get('curso/{curso}', 'show');
    });
        /* Prueba cargando datos */
    /* Route::get('curso/{curso}/{categoria?}', function ($curso,$categoria = null) {
        
        if ($categoria) {
            return "Bienvenido al curso $curso, de la categoria, $categoria";   
        }else{
            return "Bienvenido a tu curso: $curso ";
        }
    }); */
