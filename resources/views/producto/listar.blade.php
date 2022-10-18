@extends('comun.padre')
@section('titulo2','Listado de producto')
@section('contenido')
    <a href="/producto/insertar" class="btn btn-primary">Insertar</a><br><br>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>#{{$producto->idProducto}}</td>
                <td>{{$producto->nombre}}</td>
                <td>$ {{$producto->precio}}</td>
                <td><a href="/producto/actualizar/{{$producto->idProducto}}" class="btn btn-primary">Actualizar</a></td>
                <td><a href="/producto/borrar/{{$producto->idProducto}}" class="btn btn-danger">Borrar</a></td>
            </tr>
        @endforeach

        </tbody>

    </table>

@endsection
