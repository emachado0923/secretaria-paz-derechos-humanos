<?php

namespace App\Http\Controllers;

use App\Models\Informacion_personal;
use Illuminate\Http\Request;

class InformacionPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cementerio.inhumacion.informacion_personal.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cementerio.inhumacion.informacion_personal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Informacion_personal $informacion_personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informacion_personal $informacion_personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informacion_personal $informacion_personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informacion_personal $informacion_personal)
    {
        //
    }
}
