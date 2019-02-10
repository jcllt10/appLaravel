<?php

namespace ApiRestLaravelVue\Http\Controllers;

use Illuminate\Http\Request;
use ApiRestLaravelVue\Producto;

class ProductoController extends Controller
{
    public function listadoProductos()
    {
       $listadoProductos = Producto::all();
       return $listadoProductos;
    }

    public function registrarProducto(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre'); 
        $producto->cantidad = $request->input('cantidad');
        $producto->valor = $request->input('valor');
        
        $producto->save();

        return $producto;
    }

    public function buscarProducto($id)
    {
        $producto = Producto::find($id);
        return $producto;
    }

    public function actualizarProductoPorId($id,Request $request)
    {
        $producto = $this->buscarProducto($id);

        $producto->nombre = $request->input('nombre'); 
        $producto->cantidad = $request->input('cantidad');
        $producto->valor = $request->input('valor');
        
        $producto->save();

        return $producto;
    }
	
	public function actualizarProducto(Request $request)
    {
        $producto = $this->buscarProducto($request->input('id'));

        $producto->nombre = $request->input('nombre'); 
        $producto->cantidad = $request->input('cantidad');
        $producto->valor = $request->input('valor');
        
        $producto->save();

        return $producto;
    }

    public function eliminarProducto(Request $request)
    { 
        $producto = $this->buscarProducto($request->input('id'));
        $producto->delete();
        return $producto;
    }

}
