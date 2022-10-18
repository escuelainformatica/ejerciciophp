<h1>Listar v1</h1>

<table border="1">
    <thead>
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
