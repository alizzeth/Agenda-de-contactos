@extends('plantilla')

@section('titulo', 'agenda de contacto')

@section('contenedor') 
<h1> Detalles del evento {{ $evento->titulo }}
    <a class="btn btn-warning" href="{{route('evento.edit', ['id'=>$evento->id])}}">Editar</a>
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
                <th scope="row">descripcion</th>
                <td>  {{ $evento->descripcion }}</td>
            </tr>
            <tr>
                <th scope="row">fecha_inicio</th>
                <td>{{ $evento->fecha_inicio }}</td>
            </tr>
            <tr>
                <th scope="row">fecha_fin</th>
                <td>{{ $evento->fecha_fin }}</td>
            </tr>
        </tbody>
        
               
    </table>

    <a class="btn btn-primary" href="{{route('evento.index')}}">Volver</a>
@endsection