@extends('comun.padre')

@section('titulo2','Insertar Carrera')

@section('contenido')
<form method="post">
    @csrf
    <div class="form-group row">
        <label for="nombre" class="col-4 col-form-label">Nombre</label>
        <div class="col-8">
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$carr->nombre}}">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="boton" type="submit" class="btn btn-primary" value="insertar">Insertar</button>
            &nbsp;&nbsp;&nbsp;
            <button name="boton" type="submit" class="btn btn-danger" value="cancelar">Cancelar</button>
        </div>
    </div>
    <br>
    @if($mensajeerror)
    <div class="alert alert-danger" role="alert">
        {{$mensajeerror}}
    </div>
    @endif

</form>
@endsection
