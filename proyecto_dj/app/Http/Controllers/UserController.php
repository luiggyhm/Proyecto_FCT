<?php

namespace App\Http\Controllers;

use App\Models\FtpUser;
use App\Models\Local;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
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
        $tipos_accesos = ['Dj', 'Negocio de Ocio'];
        return view('usuarios.index', compact('tipos_accesos', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos_accesos = ['Dj', 'Negocio de Ocio'];
        return view('usuarios.create', compact('tipos_accesos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
        $usuario = new User();
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password =  Hash::make($request->password);
        $usuario->tipo_acceso = $request->tipo_acceso;

        $usuario->save();

        FtpUser::create([
            'user_id' => $usuario->id,
            'alias' => $usuario->email,
            'password' =>  Hash::make($request->password),
            'directorio_raiz' => '/',
            'tipo_user' => 'cliente',
            'estado' => 'inactivo'
        ]);


         // Lanzar el evento de registro
         event(new Registered($usuario));

         // Autenticar al usuario automáticamente
         Auth::login($usuario);



         return redirect()->back()->with('status', 'Usuario creado con éxito.');
        } catch (QueryException $e) {
            if ($e->getCode() == '23000') {
                $status = 'Lo sentimos! Este correo ya está registrado.';
            return redirect('/')->with(compact('status'));
            }
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit(User $usuario)
     {
        $tipos_accesos = ['dj', 'Negocio de Ocio'];
         return view('usuarios.edit', compact('usuario', 'tipos_accesos'));
     }
 

    /**
     * Update the specified resource in storage.
     */
    public function update(User $usuario, Request $request)
    {
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password =  Hash::make($request->password);
        $usuario->tipo_acceso = $request->tipo_acceso;

        $usuario->save();

        $usuario->save();

       return redirect()->intended('/')->with('status', 'Usuario modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
