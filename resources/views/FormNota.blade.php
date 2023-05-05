@extends('plantilla')

@section('titulo', 'Lista de notas')

@section('contenedor') 

<h1>Nota</h1>

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
            <label for="texto">texto</label>
            <input type="text" class="form-control" name="texto" id="texto"
                   placeholder="texto de la nota">
        </div>

        <div class="form-group">
            <label for="fecha">fecha</label>
            <input type="date" class="form-control" name="fecha" id="fecha"
                   placeholder="fecha de la nota">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">

    </form>
@endsection