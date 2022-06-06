<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

//En este grupo de funciones se hacen dos operaciones. Primero va hacia el middleware 'auth' para saber si el usuario está logueado, despues de esto va hacia el middleware 'isAdmin'. Aqui verifica si tiene el rol de admin.
Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.inicio.home');
    });

    //Ruta para la vista de usuarios de egresados
    Route::resource('/admin/usuario', UsuarioController::class);

    
});
