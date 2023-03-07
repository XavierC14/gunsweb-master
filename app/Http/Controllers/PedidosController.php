<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        $pedidos=pedidos::all();
        return $pedidos;
    }
    public function createpe(Request $request)
    {

    }
    public function readpe(Request $request)
    {

    }
    public function updatepe(Request $request)
    {

    }
    public function deletepe(Request $request)
    {

    }
}
