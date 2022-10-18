@extends('comun.padre')
@section('titulo2','Listado de Estudiantes')
@section('contenido')
    <a href="/estudiante/insertar" class="btn btn-primary">Insertar</a><br><br>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Rut</th>
                <th>Nombre</th>
                <th>idCarrera</th>
                {{-- <th>Actualizar</th> --}}
                {{-- <th>Borrar</th> --}}
            </tr>
        </thead>
        <tbody>
        @foreach($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->idEstudiante}}</td>
                <td>{{$estudiante->Rut}}</td>
                <td> {{$estudiante->Nombre}}</td>
                <td> {{$estudiante->carrera->Nombre}}</td>
                {{-- <td><a href="/estudiante/actualizar/{{$producto->idProducto}}" class="btn btn-primary">Actualizar</a></td> --}}
                {{-- <td><a href="/estudiante/borrar/{{$producto->idProducto}}" class="btn btn-danger">Borrar</a></td> --}}
            </tr>
        @endforeach

        </tbody>

    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if($pagina!=1)
            <li class="page-item"><a class="page-link" href="/estudiante?pagina={{$pagina-1}}">Previous</a></li>
            @endif
            @for($i=1;$i<=$numPagina;$i++)
                @if($i==$pagina)
                    <li class="page-item active"><a class="page-link" href="#">{{$i}}</a></li>
                @else
                    <li class="page-item"><a class="page-link" href="/estudiante?pagina={{$i}}">{{$i}}</a></li>
                @endif

            @endfor
            @if($pagina!=$numPagina)
                <li class="page-item"><a class="page-link" href="/estudiante?pagina={{$pagina+1}}">Next</a></li>
            @endif
        </ul>
    </nav>

@endsection
