<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;



class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::All();
        return view("usuarios.mostrar")
        ->with("usuarios", $usuarios);
    }
}
