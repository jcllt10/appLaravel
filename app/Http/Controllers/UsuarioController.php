<?php

namespace ApiRestLaravelVue\Http\Controllers;

use Illuminate\Http\Request;
use ApiRestLaravelVue\Usuario;

class UsuarioController extends Controller
{
    public function listadoUsuarios()
    {
       $listadoUsuarios = Usuario::all();
       return $listadoUsuarios;
    }

    public function registrarUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario->rol_id = $request->input('rol_id');
        $usuario->dni = $request->input('dni'); 
        $usuario->email = $request->input('email');
        $passwordEncriptado = bcrypt($request->input('password'));
        $usuario->password = $passwordEncriptado;
        
        $usuario->save();

        return $usuario;
    }
}
