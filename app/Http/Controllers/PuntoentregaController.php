<?php

namespace App\Http\Controllers;

use App\Models\puntoentrega;
use Illuminate\Http\Request;

class PuntoentregaController extends Controller
{
    public function indexpu(){
        $puntoentrega=puntoentrega::all();
        return $puntoentrega;
    }
    public function createpu(Request $request)
    {

    }
    public function readpu(Request $request)
    {

    }
    public function updatepu(Request $request)
    {

    }
    public function deletepu(Request $request)
    {

    }
}
