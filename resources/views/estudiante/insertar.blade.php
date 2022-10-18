@extends('comun.padre')

@section('titulo2','Insertar Estudiante')

@section('contenido')
<form method="post">
    @csrf
    <div class="form-group row">
        <label for="rut" class="col-4 col-form-label">Rut</label>
        <div class="col-8">
            <input id="rut" name="rut" type="text" class="form-control" value="{{$est->rut}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nombre" class="col-4 col-form-label">Nombre</label>
        <div class="col-8">
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$est->nombre}}">
        </div>
    </div>
    <!--<div class="form-group row">
        <label for="idCarrera" class="col-4 col-form-label">id Carrera</label>
        <div class="col-8">
            <input id="idCarrera" name="idCarrera" type="text" class="form-control" value="{{$est->idCarrera}}">
        </div>
    </div>
    -->
    <div class="form-group row">
        <label for="carrera" class="col-4 col-form-label">Carrera</label>
        <div class="col-8">
            <select id="idCarrera" name="idCarrera" class="custom-select">
                <option >--Seleccione una carrera--</option>
                @foreach($carreras as $carrera)
                <option value="{{$carrera->idCarrera}}">{{$carrera->Nombre}}</option>
                @endforeach
            </select>
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
