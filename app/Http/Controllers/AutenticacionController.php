<?php

namespace ApiRestLaravelVue\Http\Controllers;

use Illuminate\Http\Request;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;

class AutenticacionController extends Controller
{
    public function autenticar(Request $request)
    {
        $credentials = $request->only('dni', 'password');

       $encontro = false;
	   
       try
       {
         if (!$token = JWTAuth::attempt($credentials))
         {
           return response()->json(['error'=>'credenciales invalidas'],401);
         }
       } 
       catch(JWTException $e)
       {
          return response()->json(['error'=>'no se pudo crear el Token'],500);
       }
       $encontro = true;
       $response = compact('token');
       $response['user'] = Auth::user();
       
       return $response;
       
    }
}
