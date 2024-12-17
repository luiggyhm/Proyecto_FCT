<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $locales = Local::all();
        return view('usuarios.index', compact('locales', 'request'));
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
        $usuario->password = $request->password;
        $usuario->tipo_acceso = $request->tipo_acceso;

        $usuario->save();

         // Lanzar el evento de registro
         event(new Registered($usuario));

         // Autenticar al usuario automáticamente
         Auth::login($usuario);

        return redirect()->intended('/')->with('status', 'Usuario creado');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('user.show', compact('usuario'));
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
        $usuario->password = Hash::make($$request->password);
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
