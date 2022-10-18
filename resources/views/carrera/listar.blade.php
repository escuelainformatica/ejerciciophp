@extends('comun.padre')
@section('titulo2','Listado de Carreras')
@section('contenido')
    <a href="/carrera/insertar" class="btn btn-primary">Insertar</a><br><br>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                {{-- <th>Actualizar</th>
                <th>Borrar</th> --}}
            </tr>
        </thead>
        <tbody>
        @foreach($carreras as $carrera)
            <tr>
                <td>{{$carrera->idCarrera}}</td>
                <td>{{$carrera->Nombre}}</td>
                {{-- <td><a href="/carrera/actualizar/{{$producto->idProducto}}" class="btn btn-primary">Actualizar</a></td>
                <td><a href="/carrera/borrar/{{$producto->idProducto}}" class="btn btn-danger">Borrar</a></td> --}}
            </tr>
        @endforeach

        </tbody>

    </table>

@endsection
