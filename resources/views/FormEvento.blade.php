@extends('plantilla')

@section('titulo', 'Lista de Eventos')

@section('contenedor') 

<h1>Eventos</h1>

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
            <label for="titulo">titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"
                   placeholder="titulo del evento">
        </div>

        <div class="form-group">
            <label for="descripcion">descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="apellido"
                   placeholder="descripcion del evento">
        </div>

        <div class="form-group">
            <label for="fecha_inicio"> fecha inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
                   placeholder="yy-mm-dd">
        </div>

        <div class="form-group">
            <label for="fecha_fin">fecha fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
                   placeholder="yy-mm-dd">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
@endsection