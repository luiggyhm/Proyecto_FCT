<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $locales = Local::all();
        return view('_components.usuarios.formularioCrearUsuario', compact('locales', 'request'));
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
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->password = $request->password;
        $usuario->tipo_negocio = $request->tipo_negocio;
        $usuario->suscripcion_id = $request->suscripcion_id;

        $usuario->save();
        return redirect()->back()->with('status', 'Usuario creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $usuario, Request $request)
    {
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->password = $request->password;
        $usuario->tipo_negocio = $request->tipo_negocio;
        $usuario->suscripcion_id = $request->suscripcion_id;

        $usuario->save();
        return redirect()->back()->with('status', 'Usuario modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
