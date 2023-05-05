<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Requests\StoreEventoRequest;
//use App\Http\Requests\UpdateEventoRequest;
use Illuminate\Http\Request;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = evento::paginate(50);
        return view('eventoIndex')->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FormEvento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required|string|max:20',
            'descripcion'=>'required|string',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
        ]);

        $nuevoEvento = new Evento();

        //Formulario
        $nuevoEvento->titulo = $request->input('titulo');
        $nuevoEvento->descripcion = $request->input('descripcion');
        $nuevoEvento->fecha_inicio = $request->input('fecha_inicio');
        $nuevoEvento->fecha_fin = $request->input('fecha_fin');

        $salvado = $nuevoEvento->save();

        if ($salvado) {
            return redirect()->route('evento.index')
                ->with('mensaje', 'El evento fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evento = Evento::findOrfail($id);
        return view('mostrarevento')->with('evento',$evento);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evento = Evento::findOrFail($id);

        return view('FormEventoEdit')
            ->with('evento', $evento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'=>'required|string|max:20',
            'descripcion'=>'required|string',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
        ]);

        $evento = Evento::findOrFail($id);

        //Formulario
        $evento->titulo = $request->input('titulo');
        $evento->descripcion = $request->input('descripcion');
        $evento->correo_electronico = $request->input('fecha_inicio');
        $evento->fecha_fin = $request->input('fecha_fin');

        $salvado = $evento->save();

        if ($salvado) {
            return redirect()->route('evento.index')
                ->with('mensaje', 'El evento fue modificado con exito'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Evento::destroy($id);
        return redirect('evento/')->with('mensaje', 'El evento se eliminado exitosamente');
    }
}
