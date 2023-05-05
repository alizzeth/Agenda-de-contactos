@extends('plantilla')

@section('titulo', 'Agenda de contactos')

@section('contenedor')

    <h1>Contacto</h1>

    <form method="post" action="{{route('contacto.update', ['id'=>$contacto->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                    placeholder="Nombre del contacto" value="{{$contacto->nombre}}">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido"
                    placeholder="Apellido del contacto" value="{{$contacto->apellido}}">
        </div>

        <div class="form-group">
            <label for="correo_electronico">Correo Electronico</label>
            <input type="email" class="form-control" name="correo" id="correo"
                    placeholder="ejemplo@gmail.com" value="{{$contacto->correo_electronico}}">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono"
                    placeholder="99999999" value="{{$contacto->Telefono}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection
