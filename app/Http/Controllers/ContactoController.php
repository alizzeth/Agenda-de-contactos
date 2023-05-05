<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
//use App\Http\Requests\UpdateContactoRequest;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = contacto::paginate(50);
        return view('contactoIndex')->with('contactos',$contactos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Formcontacto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //VALIDAR

        $request->validate([
            'nombre'=>'required|string',
            'apellido'=>'required|string',
            'correo_electronico'=>'required|email',
            'telefono'=>'required|numeric',
        ]);

        $nuevoContacto = new Contacto();

        //Formulario
        $nuevoContacto->nombre = $request->input('nombre');
        $nuevoContacto->apellido = $request->input('apellido');
        $nuevoContacto->correo_electronico = $request->input('correo_electronico');
        $nuevoContacto->Telefono = $request->input('telefono');

        $salvado = $nuevoContacto->save();

        if ($salvado) {
            return redirect()->route('contacto.index')
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
        $contacto = Contacto::findOrfail($id);
        return view('mostrarcontacto')->with('contacto',$contacto);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contacto = Contacto::findOrFail($id);

        return view('FormContactEdit')
            ->with('contacto', $contacto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|string',
            'apellido'=>'required|string',
            'correo_electronico'=>'required|email:rfc,dns',
            'telefono'=>'required|numeric',
        ]);
        $contacto = Contacto::findOrFail($id);

        //Formulario
        $contacto->nombre = $request->input('nombre');
        $contacto->apellido = $request->input('apellido');
        $contacto->correo_electronico = $request->input('correo_electronico');
        $contacto->telefono = $request->input('telefono');

        $salvado = $contacto->save();

        if ($salvado) {
            return redirect()->route('contacto.index')
                ->with('mensaje', 'El contacto fue modificado exitosamente.'); //mensaje de modificacion
        }else{
            // TODO Retornar con un mensaje de error.
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contacto::destroy($id);
        return redirect('contacto/')->with('mensaje', 'El contacto fue eliminado exitosamente');
    }
}
