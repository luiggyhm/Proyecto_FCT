<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //Devuelve la vista home
    public function home()
    {
        return view('fijas.inicio');
    }

    //devuelve la vista conoceme
    public function conoceme()
    {
        return view('fijas.conoceme');
    }

    public function compraContenido()
    {
        return view('fijas.compraContenido');
    }

    public function anuncios()
    {
        return view('anuncios.index');
    }



}
