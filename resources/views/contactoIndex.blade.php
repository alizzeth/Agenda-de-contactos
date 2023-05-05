@extends('plantilla')

@section('titulo', 'Lista de contactos')

@section('contenedor') 

    @if(session('mensaje'))
        <div class="alert alert-success">
        {{ session('mensaje') }}
        </div>
    @endif

    <h1>Contactos <a class="btn btn-info" href="{{route('contacto.create')}}">Nuevo</a></h1>

    <table class="table ">
        <thead class="bg-success">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">correo electronico</th>
            <th scope="col">Telefono</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>

        @forelse($contactos as $contacto)
            <tr>
                <th scope="row">{{ $contacto->id }}</th>
                <td>{{ $contacto->nombre }} {{ $contacto->apellido }}</td>
                <td>{{ $contacto->correo_electronico }}</td>
                <td>{{ $contacto->Telefono }}</td>
                <td><a class="btn btn-info" href="{{ route('contacto.show', ['id'=> $contacto->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{ route('contacto.edit', ['id'=> $contacto->id])}}">Editar</a></td>
                <td>
                    <form method="post" action="{{route('contacto.destroy', ['id'=>$contacto->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar"  onclick="return confirm('seguro que quiere eliminar el contacto')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay contacto</td>
            </tr>
        @endforelse

        </tbody>
    </table>

    {{ $contactos->links() }}

@endsection
