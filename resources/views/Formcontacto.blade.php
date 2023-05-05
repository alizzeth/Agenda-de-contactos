@extends('plantilla')

@section('titulo', 'Lista de contactos')

@section('contenedor') 

<h1>Contacto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"
                   placeholder="Nombre del contacto">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido"
                   placeholder="Apellido del contacto">
        </div>

        <div class="form-group">
            <label for="correo_electronico">correo electronico</label>
            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico"
                   placeholder="ejemplo@gmail">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono"
                   placeholder="00000000">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
@endsection