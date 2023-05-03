<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use App\Http\Requests\StoreNotasRequest;
use App\Http\Requests\UpdateNotasRequest;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas = notas::paginate(10);
        return view('notaIndex')->with('notas',$notas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notas $notas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notas $notas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotasRequest $request, Notas $notas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notas $notas)
    {
        //
    }
}
