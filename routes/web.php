<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});

/*
Route::get("/usuarios", function(){
    $data = [
        "usuario1"=>"Mariana",
        "usuario2"=>"Pepe",
    ];
    return view("Usuarios.Mostrar",$data);
});
*/

route::get("/usuarios", [UsuarioController::class, "index"]);