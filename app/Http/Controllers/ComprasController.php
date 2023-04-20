<?php

namespace App\Http\Controllers;

use App\Models\compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{

    public function index()
    {
        $compras = compras::paginate(10);//el numero de filas
        return view('compras.vistaCompras', compact('compras'));
    }

}
