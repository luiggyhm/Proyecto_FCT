<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //Devuelve la vista home
    public function home()
    {
        return view('home');
    }

    //devuelve la vista conoceme
    public function conoceme()
    {
        return view('fijas/conoceme');
    }

    public function compraContenido()
    {
        return view('compraContenido');
    }

    public function anuncios()
    {
        return view('anuncios.index');
    }

    public function registrarse()
    {
        return view('usuarios.index');
    }

}
