@extends('plantilla')

@section('titulo', 'agenda de contacto')

@section('contenedor') 
<h1> Detalles de {{ $contacto->nombre }} {{ $contacto->apellido }}
    <a class="btn btn-warning" href="{{route('contacto.edit', ['id'=>$contacto->id])}}">Editar</a>
    </h1>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Campos</th>
            <th scope="col">Valores</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{ $contacto->id }} </td>
            </tr>
            <tr>
                <th scope="row">Nombre</th>
                <td>{{ $contacto->nombre }} </td>
            </tr>
            <tr>
                <th scope="row">Apellido</th>
                <td>  {{ $contacto->apellido }}</td>
            </tr>
            <tr>
                <th scope="row">Correo electronico</th>
                <td>{{ $contacto->correo_electronico }}</td>
            </tr>
            <tr>
                <th scope="row">Telefono</th>
                <td>{{ $contacto->Telefono }}</td>
            </tr>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------->
    <h4>Notas del contacto</h4>
    <table class="table">
        <thead>
        </tr> 
        <tr>
            <th scope="col">id</th>
            <th scope="col">texto</th>
            <th scope="col">fecha</th>
        </tr>
        </thead>
        <tbody>

        @forelse($contacto->notas as $nota)
            <tr>
                <td scope="row"> {{$nota->id}}</td>
                <td>{{ $nota->texto }}</td>
                <td>{{ $nota->fecha }}</td>
            </tr>
        </tbody>   
            @empty
            <tr>
                <td colspan="3">  Este contacto no tiene ninguna nota</td>
            </tr>
            @endforelse
    </table>
<!------------------------------------------------------------------------------------------------>   
    <h4>Eventos del contacto</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">titulo</th>
                <th scope="col">descripcion</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacto-> evento as $evento)
            <tr>
                <td scope="row"> {{$evento->id}}</td>
                <td>{{ $evento->titulo }}</td>
                <td>{{ $evento->descripcion }}</td>
            </tr>
        </tbody>   
                @empty
                <tr>
                    <td colspan="3">  Este contacto no tiene ningun evento</td>
                </tr>
            @endforelse   
    </tbody>       
<!--------------------------------------------------------------------------------------->
</table>

    <a class="btn btn-primary" href="{{route('contacto.index')}}">Volver</a>
@endsection