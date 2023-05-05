@extends('plantilla')

@section('titulo', 'Lista de notas')

@section('contenedor') 

    @if(session('mensaje'))
        <div class="alert alert-success">
        {{ session('mensaje') }}
        </div>
    @endif

    <h1> Notas <a class="btn btn-info" href="{{route('nota.create')}}">Nueva nota</a></h1>

    <table class="table ">
        <thead class="bg-success">
        <tr>
            <th scope="col">id</th>
            <th scope="col">texto</th>
            <th scope="col">fecha</th>
            <th scope="col">contacto_id</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        @forelse($notas as $nota)
            <tr>
                <th scope="row">{{ $nota->id }}</th>
                <td>{{ $nota->texto }}</td>
                <td>{{ $nota->fecha }}</td>
                <td>{{ $nota->contacto_id }}</td>
                <td><a class="btn btn-info" href="{{ route('nota.show', ['id'=> $nota->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('nota.edit', ['id'=> $nota->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('nota.destroy', ['id'=>$nota->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('seguro que quiere eliminar la nota')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay nota</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {{ $notas
    ->links() }}

@endsection