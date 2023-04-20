<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Vista de Tabla
    public function index()
    {
        $cliente = cliente::paginate(10);//el numero de filas
        return view('cliente.vistaCliente', compact('cliente'));
    }

    //Formulario
    public function createCliente()
    {
        return view('cliente.formCliente');
    }

    //Guardar Cliente
    public function saveCliente(Request $request)
    {
        $cliente = $this->validate($request, [
            "nit"          => "required",
            "cnombre"      => "required",
            "capellido"    => "required",
            "ctelefono"    => "required",
            "cemail"       => "required",
            "cdireccion"   => "required",
            "num_servicio" => "required"
        ]);

        cliente::create([
            "nit"          => $cliente["nit"],
            "cnombre"      => $cliente["cnombre"],
            "capellido"    => $cliente["capellido"],
            "ctelefono"    => $cliente["ctelefono"],
            "cemail"       => $cliente["cemail"],
            "cdireccion"   => $cliente["cdireccion"],
            "num_servicio" => $cliente["num_servicio"],
            ]);

        return redirect('/readcliente')->with('Guardado', "Cliente Registrado");
    }

    //Formulario de edicion
    public function editCliente($nit)
    {
        $cliente = cliente::findOrFail($nit);

        return view('cliente.modifyCliente', compact('cliente'));
    }

    //Guardar edicion
    public function updateCliente(Request $request, $nit)
    {

        $cliente = request()->except((['_token', '_method']));
        cliente::where('nit', '=', $nit)->update($cliente);

        return redirect('/readcliente')->with('Editado', "Cliente Editado");
    }

    //Eliminar cliente
    public function deleteCliente($nit)
    {
        cliente::destroy($nit);
        return redirect('/readcliente')->with('Eliminado', "Cliente Eliminado");
    }
}
