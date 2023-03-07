<?php

namespace App\Http\Controllers;

use App\Models\material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function indexm(){
        $material=material::all();
        return $material;
    }
    public function createm(Request $request)
    {

    }
    public function readm(Request $request)
    {

    }
    public function updatem(Request $request)
    {

    }
    public function deletem(Request $request)
    {

    }
}
