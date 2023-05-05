@extends('plantilla')

@section('titulo', 'agenda de contacto')

@section('contenedor') 
<h1> Detalles de nota
    <a class="btn btn-warning" href="{{route('nota.edit', ['id'=>$notas->id])}}">Editar</a>
    </h1>

    <div class="card" style="width: 60rem;">
        <div class="card-body">
            <p> <class="card-title">{{ $notas->texto }}</p>
            <h6 class="card-subtitle mb-2 text-muted">fecha:  {{ $notas->fecha }}</h6>
            <a class="btn btn-primary" href="{{route('nota.index')}}">Volver</a>

        </div>
    </div>

    
@endsection