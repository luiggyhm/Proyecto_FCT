<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function mostrarGeneros()
    {
        $generos = Genero::all();
        return view('layouts.menu', compact('generos'));
    }


}
