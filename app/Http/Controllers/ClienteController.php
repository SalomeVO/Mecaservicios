<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $cliente = cliente::all();

        return view('cliente.vistaCliente', compact('cliente'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(cliente $cliente)
    {
        //
    }

    public function update(Request $request, cliente $cliente)
    {
        //
    }


    public function destroy(cliente $cliente)
    {
        //
    }
}
