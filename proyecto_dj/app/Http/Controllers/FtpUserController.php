<?php

namespace App\Http\Controllers;

use App\Models\FtpUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class FtpUserController extends Controller
{

    public function index(Request $request)
    {
        $usuariosFtp = FtpUser::all();
        $titulo_view = "Todos los usuarios";
        return view('ftpUser.index', compact('usuariosFtp', 'request', 'titulo_view'));
    }

    public function datosFormActivar()
    {
        $ruta = route('ftpUser.activar');
        return view('ftpUser.cambiarEstadoActivo', compact('ruta'));
    }

    public function datosFormDesactivar()
    {
        $ruta = route('ftpUser.desactivar');

        return view('ftpUser.cambiarEstadoInactivo', compact('ruta'));
    }

    public function activarUserFtp(Request $request)
    {
        $usuario = FtpUser::where('alias', $request->alias)->first();
    
        if (!$usuario) {
            // Si el usuario no existe, redirigir con un mensaje de error
            return redirect()->route('ftpUser.elecccion')->with('status', 'El usuario no existe.');
        }
    
        if ($usuario->estado == 'inactivo') {
            $usuario->estado = 'activo';
            $usuario->save();
            return redirect()->route('ftpUser.elecccion')->with('status', 'Usuario FTP activado');
        } else {
            return redirect()->route('ftpUser.elecccion')->with('status', 'Usuario FTP ya está activado');
        }
    }

    public function desactivarUserFtp(Request $request)
    {
        $usuario = FtpUser::where('alias', $request->alias)->first();
        
        if (!$usuario) {
            // Si el usuario no existe, redirigir con un mensaje de error
            return redirect()->route('ftpUser.elecccion')->with('status', 'El usuario no existe.');
        }

        if($usuario->estado == 'activo'){
            $usuario->estado = 'inactivo';
            $usuario->save();
            return redirect()->route('ftpUser.elecccion')->with('status', 'Usuario FTP inactivo');
        }else{
            return redirect()->route('ftpUser.elecccion')->with('status', 'Usuario FTP ya está inactivo');
        }
    }

    public function usuariosInconsistentes(Request $request)
    {
        // Consulta con join entre ftp_users y suscripcions
        $inconsistentes = DB::table('ftp_users')
            ->join('suscripcions', 'ftp_users.alias', '=', 'suscripcions.email')
            ->where('ftp_users.estado', '!=', 'suscripcions.estado')
            ->select('ftp_users.alias', 'ftp_users.estado as estado_ftp', 'suscripcions.email', 'suscripcions.estado as estado_suscripcion')
            ->get();

        $titulo_view = "Usuarios con inconsistencias";

        return view('ftpUser.inconsistentes', compact('inconsistentes', 'titulo_view', 'request'));
    }

    public function opciones(Request $request)
    {
        return view('ftpUser.mostrarOpciones');
    }

    public function activos(FtpUser $usuariosFtp, Request $request)
    {
        $usuariosFtpActivos = FtpUser::where('estado', 'activo')->get();
        $titulo_view = "Activo";

        return view('ftpUser.activos', compact('usuariosFtpActivos', 'request', 'titulo_view'));
    }
    public function inactivos(FtpUser $usuariosFtp, Request $request)
    {
        $usuariosFtpInactivos = FtpUser::where('estado', 'inactivo')->get();
        $titulo_view = "Inactivo";

        return view('ftpUser.inactivos', compact('usuariosFtpInactivos', 'request', 'titulo_view'));
    }

    public function create(Request $request)
    {
        $estados = ['activo', 'inactivo'];
        $directorios = ['mensual', 'anual'];
        $tipo_users = ['admin', 'cliente'];

        return view('ftpUser.create', compact('tipo_users', 'estados', 'directorios'));
    }

    //maneja como crear el dato que viene del create
    public function store(Request $request)
    {

        $ftUser = new FtpUser();
        $ftUser->user_id = auth()->id(); // ID del usuario autenticado
        $ftUser->alias = $request->alias; // alias que haya elegido el usuario
        $ftUser->password =  Hash::make($request->password);
        $ftUser->directorio_raiz = $request->directorio_raiz;
        $ftUser->tipo_user = $request->tipo_user;
        $ftUser->estado = $request->estado;

        $ftUser->save(); //guarda el usuario en la BDD

        return redirect()->route('nav.inicio')->with('success', 'Usuario FTP creado con éxito');
    }

    public function show($id)
    {
        $usuarioFtp = FtpUser::find($id);
        return view('ftpUser.show', compact('usuarioFtp'));
    }

    public function edit(FtpUser $ftpUser)
    {
        $estados = ['activo', 'inactivo'];
        $directorios = ['mensual', 'anual'];
        $tipo_users = ['admin', 'cliente'];
        return view('ftpUser.edit', compact('ftpUser', 'estados', 'directorios', 'tipo_users'));
    }

    public function update(ftpUser $ftpUser, Request $request)
    {
        $ftpUser->alias = $request->alias;
        $ftpUser->password = $request->password;
        $ftpUser->directorio_raiz = $request->directorio_raiz;
        $ftpUser->tipo_user = $request->tipo_user;
        $ftpUser->estado = $request->estado;

        $ftpUser->save(); //guarda el usuario en la BDD

        return redirect()->route('ftpUser.show', $ftpUser->id)->with('success', 'Usuario FTP modificado con éxito');
    }

    
}
