<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Genero;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{

    public function index(Request $request)
    {
        $generos = Genero::all();
        $anuncios = Anuncio:: all();
        $titulo_view = "Todos los anuncios";
        return view('anuncios.index', compact('anuncios', 'generos', 'request', 'titulo_view'));
    }


    public function generos(Genero $genero,Request $request){

        $generos = Genero::all();
        $anuncios = Anuncio::where('genero_id', $genero->id)->get();
        $nombre = $genero->titulo;

        return view('anuncios.genero', compact('anuncios','generos', 'titulo','request'));
    }




    public function create()
    {
        $generos = Genero::all();
        return view('anuncios.create',compact('generos'));
    }




    public function store(Request $request)
    {
        
    }



    //crear un nuevo anuncio
    public function show(Request $request)
    {
        $a = new Anuncio();
        $a->titulo = $request->titulo;
        $a->precio = $request->precio;
        $a->descripcion = $request->descripcion;
        $a->genero = $request->genero;

        $a->save();
        return redirect()->back()->with('status', 'Anuncio creado');
    }




    public function edit(Anuncio $anuncio)
    {
        $generos = Genero::all();
        $generoActual = Genero::where('id', $anuncio->genero_id)->get()->first();


        return view('anuncios.edit', compact('anuncio','generos','generoActual'));
    }


    //Actualizar anuncio
    public function update(Request $request, Anuncio $anuncio)
    {
        $anuncio->titulo = $request->nombre;
        $anuncio->precio = $request->precio;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->genero_id = $request->genero;
        $anuncio->save();

        return redirect()->back()->with('status', 'Anuncio Modificado');
    }


    //eliminar un anuncio
    public function destroy(Anuncio $anuncio)
    {
        $anuncio->delete();
        return redirect()->back()->with('status', 'Anuncio eliminado');
    }
}
