
<table border="1">
    <tr>
        <th>id</th>
        <th>nombres</th>
        <th>apellidos</th>
        <th>direccion</th>
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
        <td>
            @if($usuario ->id ==2)
            54
            @else
            {{$usuario->id}}
            @endif
        </td>
        <td>{{$usuario -> nombres}}</td>
        <td>{{$usuario -> apellidos}}</td>
        <td>{{$usuario -> direccion}}</td>
    </tr>
    @endforeach

</table>

