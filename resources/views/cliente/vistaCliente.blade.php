@extends('layouts.app')
@section('title', 'Camiones')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <h1 class="text-center mt-5" style="color: #005555"><i style="color:#005555"></i> CLIENTES </h1><br>

                <!--Mensaje de Eliminado-->
                @if(session('Eliminado'))
                    <div class="alert alert-danger text-dark" style="background-color: #F1D914 ;">
                        {{session('Eliminado')}}
                    </div>
                @endif

            <!--Mensaje de Modificado-->
                @if(session('Editado'))
                    <div class="alert alert-primary">
                        {{session('Editado')}}
                    </div>
                @endif

            <!--Mensaje de Guardado-->
                @if(session('Guardado'))
                    <div class="alert alert-success">
                        {{session('Guardado')}}
                    </div>
                @endif

                <!--boton de agregar clientes-->
                <a class="btn btn-info mb-4 my-lg-0 col-md-3" href="{{route('createCliente')}}">
                    <i style="color: white"> AGREGAR</i>
                </a>
                <br>

                <br>
                <table class="table table-light table-bordered table-hover text-center">
                    <thead style="color: #069a8e">
                    <tr>
                        <th>NIT</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>No. Serevicio</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($cliente as $clientes)
                        <tr>
                            <td>{{$clientes->nit}}</td>
                            <td>{{$clientes->cnombre}}</td>
                            <td>{{$clientes->capellido}}</td>
                            <td>{{$clientes->ctelefono}}</td>
                            <td>{{$clientes->cemail}}</td>
                            <td>{{$clientes->cdireccion}}</td>
                            <td>{{$clientes->num_servicio}}</td>
                            <td>
                                <div class="btn btn-group">

                                    <a href="{{route('editCliente', $clientes->nit)}}" class="btn btn-outline-info mb-2 me-2 m-1">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{route('deleteCliente',$clientes->nit)}}" method="POST">
                                        @csrf @method('DELETE')

                                        <button type="submit" onclick="return confirm('¿Segurro de borrar?')" class="btn btn-outline-danger mb-2 mr-2 m-1">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
                <!-- Paginacion -->
                {{ $cliente->links() }}

            </div>
        </div>
    </div>
@endsection


