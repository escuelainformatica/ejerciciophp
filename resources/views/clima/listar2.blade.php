<!doctype html>
<html lang="en">
@include('comun.encabezado',['titulo'=>'listado de climas'])
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>Tabla segunda version </h1>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Ciudad</th>
                    <th>Temp</th>
                    <th>Clima</th>
                    <th>Icono</th>
                </tr>
                </thead>
                <tbody>
                @foreach($climas as $clima)
                    <tr>
                        <td>{{$clima->id}}</td>
                        <td>{{$clima->nombreciudad}}</td>
                        <td>{{$clima->temperatura}}</td>
                        <td>{{$clima->tipoclima}}</td>
                        <td>{{$clima->icono}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>

    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
