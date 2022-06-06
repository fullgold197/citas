<?php

use Illuminate\Support\Facades\Route;
/*use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');

});


/*Auth::routes();*/

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

/* Route::get('/admin', function () {
    return view('admin.inicio.home');
}); */
 //esta ruta es para el inicio si encaso se quisiera agragar más cosas al sistema
 Route::get('/', function () {
    return view('auth.login');
});

//En este grupo de funciones se hacen dos operaciones. Primero va hacia el middleware 'auth' para saber si el usuario está logueado, despues de esto va hacia el middleware 'isUser'. Aqui verifica si tiene el rol de user.
Route::middleware(['auth', 'isUser'])->group(function () {

    //Ruta para la vista de datos personales del egresado
    Route::resource('/home/datos-personales', DatosPersonalesController::class);
    Route::resource('/home/trayectoria-academica', TrayectoriaAcademicaController::class);
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
