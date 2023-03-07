<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categoria=categoria::all();
        return $categoria;
    }
    public function createc(Request $request)
    {
        $request->validate([
            'nombre'=>'required | unique:categoria',
            'descripcion'=>'required',
            'tipo'=>'required',
        ]);

        $categoria = new categoria();
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->tipo=$request->tipo;
        $categoria->save();
        return response()->json([
            'message' => 'Successfully created category!'
        ]);

    }
    public function readc(Request $request)
    {

    }
    public function updatec(Request $request)
    {
        $categoria=categoria::findOrFail($request->id);
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->tipo=$request->tipo;
        $categoria->save();
        return $categoria;
    }
    public function deletec(Request $request)
    {
        categoria::destroy($request->id);
    }
}
