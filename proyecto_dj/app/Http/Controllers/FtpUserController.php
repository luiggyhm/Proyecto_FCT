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
        $estados =['activo', 'inactivo'];
        $directorios = ['mensual', 'anual'];
        $tipo_users = ['admin', 'cliente'];

        return view('ftpUser.create', compact('tipo_users','estados', 'directorios'));
    }

    //maneja como crear el dato que viene del create
    public function store(Request $request)
    {
        $ftpPassword = Str::random(12); // Generar una contraseña segura de 12 caracteres

        //$paypalSubscriptionId;
        $ftUser = new FtpUser();
        $ftUser->user_id = auth()->id(); // ID del usuario autenticado
        $ftUser->alias = $request->alias; // alias que haya elegido el usuario
        $ftUser->password = Hash::make($ftpPassword); // contraseña generada arriba aleatoriamente
        $ftUser->directorio_raiz = $request->directorio_raiz;
        $ftUser->tipo_user = $request->tipo_user;
        $ftUser->estado = $request->estado;
        $ftUser->user_id = $request->user_id;

        $ftUser->save(); //guarda el usuario en la BDD

        return redirect()->route('nav.inicio')->with('success', 'Usuario FTP creado con éxito');
    }

    public function update(Request $request)
    {
        $ftpPassword = Str::random(12); // Generar una contraseña segura de 12 caracteres

        //$paypalSubscriptionId;
        $ftUser = new FtpUser();
        $ftUser->user_id = auth()->id(); // ID del usuario autenticado
        $ftUser->alias = $request->alias; // alias que haya elegido el usuario
        $ftUser->password = Hash::make($ftpPassword); // contraseña generada arriba aleatoriamente
        $ftUser->directorio_raiz = $request->directorio_raiz;
        $ftUser->tipo_user = $request->tipo_user;
        $ftUser->estado = $request->estado;
        $ftUser->user_id = $request->user_id;

        $ftUser->save(); //guarda el usuario en la BDD

        return redirect()->route('nav.inicio')->with('success', 'Usuario FTP creado con éxito');
    }

    public function show($id)
    {
        $usuarioFtp = FtpUser::find($id);
        return view('ftpUser.show', compact('usuarioFtp'));
    }

}
