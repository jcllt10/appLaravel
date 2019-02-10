<?php

namespace ApiRestLaravelVue\Http\Controllers;

use Illuminate\Http\Request;
use ApiRestLaravelVue\Rol;

class RolController extends Controller
{
    public function listadoRoles()
    {
       $listadoRoles = Rol::all();
       return $listadoRoles;
    }

    public function registrarRol(Request $request)
    {
        $rol = new Rol();
        $rol->nombre = $request->input('nombre'); 
        $rol->descripcion = $request->input('descripcion');
        
        $rol->save();

        return $rol;
    }
}
