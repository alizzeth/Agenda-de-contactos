@extends('plantilla')

@section('titulo', 'Agenda de contactos')

@section('contenedor')

    <h1>Evento</h1>

    <form method="post" action="{{route('evento.update', ['id'=>$evento->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"
                    placeholder="titulo del evento" value="{{$evento->titulo}}">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion"
                    placeholder="descripcion del evento" value="{{$evento->descripcion}}">
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio"
                    placeholder="yy-mm-dd" value="{{$evento->fecha_inicio}}">
        </div>

        <div class="form-group">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
                    placeholder="yy-mm-dd" value="{{$evento->fecha_fin}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection
