<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Genero;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
//mostrar todos los anuncios 
    public function index(Request $request)
    {
        $generos = Genero::all();
        $anuncios = Anuncio:: all();
        //titulo usado en la vista
        $titulo_view = "Todos los anuncios";
        return view('anuncios.index', compact('anuncios', 'generos', 'request', 'titulo_view'));
    }


    public function generos(Genero $genero,Request $request){

        $generos = Genero::all();
        $anuncios = Anuncio::where('genero_id', $genero->id)->get();
        $nombre = $genero->titulo;

        return view('anuncios.genero', compact('anuncios','generos', 'titulo','request'));
    }

    //muestra todos los generos
    public function create()
    {
        $generos = Genero::all();
        return view('formularioCrear',compact('generos'));
    }



//crear un nuevo anuncio
    public function store(Request $request)
    {
        // Converte el array de otros géneros en una cadena separada por comas
        $generosString = implode(',', $request->input('otros_generos'));

        //crea anuncio
        $anuncio = new Anuncio();
        $anuncio->titulo = $request->titulo;
        $anuncio->precio = $request->precio;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->genero = $request->genero;

        //incluimos el array separado por comas
        $anuncio->otros_generos = $request->$generosString;

        $anuncio->save();
        return redirect()->back()->with('status', 'Anuncio creado');
    }



    
    public function show(Request $request)
    {
        //
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
