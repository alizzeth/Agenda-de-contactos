@extends('plantilla')

@section('titulo', 'Lista de eventos')

@section('contenedor') 

    @if(session('mensaje'))
        <div class="alert alert-success">
        {{ session('mensaje') }}
        </div>
    @endif

    <h1>Eventos <a class="btn btn-info" href="{{route('evento.create')}}">Nuevo Evento</a></h1>

    <table class="table ">
        <thead class="bg-success">
        <tr>
            <th scope="col">id</th>
            <th scope="col">titulo</th>
            <th scope="col">descripcion</th>
            <th scope="col">fecha_inicio</th>
            <th scope="col">fecha_fin</th>
            <th scope="col">contacto_id</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        @forelse($eventos as $evento)
            <tr>
                <th scope="row">{{ $evento->id }}</th>
                <td>{{ $evento->titulo }} {{ $evento->descripcion }}</td>
                <td>{{ $evento->descripcion }}</td>
                <td>{{ $evento->fecha_inicio }}</td>
                <td>{{ $evento->fecha_fin }}</td>
                <td>{{ $evento->contacto_id }}</td>
                <td><a class="btn btn-info" href="{{ route('evento.show', ['id'=> $evento->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('evento.edit', ['id'=> $evento->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('evento.destroy', ['id'=>$evento->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('seguro que quiere eliminar el evento')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay eventos</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {{ $eventos->links() }}

@endsection