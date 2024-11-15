<?php

namespace App\Http\Controllers;

use App\Models\FtpUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FtpUserController extends Controller
{

    //maneja como crear el dato que viene del create
    public function store(Request $request)
    {
        $ftpPassword = Str::random(12); // Generar una contraseña segura de 12 caracteres

        //$paypalSubscriptionId;
        $ftUser = new FtpUser();
        $ftUser->user_id = auth()->id(); // ID del usuario autenticado
        $ftUser->alias = $request; // alias que haya elegido el usaurio
        $ftUser->password = $ftpPassword; // contraseña generada arriba aleatoriamente


        $ftUser->save(); //guarda el usuario en la BDD

        return redirect()->route('ftpUsers.index')->with('success', 'Usuario FTP creado con éxito');
    }




    
}
