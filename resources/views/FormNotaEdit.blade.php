@extends('plantilla')

@section('titulo', 'Agenda de contactos')

@section('contenedor')

    <h1>Nota</h1>

    <form method="post" action="{{route('nota.update', ['id'=>$nota->id])}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="texto">texto</label>
            <input type="text" class="form-control" name="texto" id="texto"
                    placeholder="texto del contacto" value="{{$nota->texto}}">
        </div>

        <div class="form-group">
            <label for="fecha">fecha</label>
            <input type="date" class="form-control" name="fecha" id="fecha"
                    placeholder="yy/mm/dd" value="{{$nota->fecha}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>


@endsection
