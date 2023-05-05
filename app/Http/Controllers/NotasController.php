<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use App\Http\Requests\StoreNotasRequest;
//use App\Http\Requests\UpdateNotasRequest;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas = notas::paginate(50);
        return view('notaIndex')->with('notas',$notas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FormNota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'texto'=>'required|string',
            'fecha'=>'required|date',
        ]);

        $nuevaNota = new Notas();

        //Formulario
        $nuevaNota->texto = $request->input('texto');
        $nuevaNota->fecha = $request->input('fecha');

        $salvado = $nuevaNota->save();

        if ($salvado) {
            return redirect()->route('nota.index')
                ->with('mensaje', 'El contacto fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $notas = Notas::findOrfail($id);
        return view('mostrarnota')->with('notas',$notas);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notas = Notas::findOrFail($id);
        return view('FormNotaEdit')
            ->with('notas', $notas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'texto'=>'required|string',
            'fecha'=>'required|date',
        ]);

        $notas = Notas::findOrFail($id);

        //Formulario
        $notas->texto = $request->input('texto');
        $notas->fecha = $request->input('fecha');

        $salvado = $notas->save();

        if ($salvado) {
            return redirect()->route('nota.index')
                ->with('mensaje', 'El contacto fue creado exitosamente.'); //mensaje de guardado
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Notas::destroy($id);
        return redirect('notas/')->with('mensaje', 'La nota fue eliminada exitosamente');
    }
}
