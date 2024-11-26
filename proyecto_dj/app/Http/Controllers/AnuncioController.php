<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Genero;
use App\Models\Local;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    //mostrar todos los anuncios 
    public function index(Request $request)
    {
        $generos = Genero::all();
        $anuncios = Anuncio::all();
        //titulo usado en la vista
        $titulo_view = "Todos los anuncios";
        return view('anuncios.index', compact('anuncios', 'generos', 'request', 'titulo_view'));
    }


    public function genero(Genero $generos, Request $request)
    {

        $generos = Genero::all();

        $anuncios = Anuncio::where('genero_id', $generos->id)->get();
        $nombre_genero = $generos->nombre;

        return view('anuncios.genero', compact('anuncios', 'generos', 'nombre_genero', 'request'));
    }

    public function locales(Local $locales, Request $request)
    {

        $locales = Local::all();

        $anuncios = Anuncio::where('tipo_local', $locales->id)->get();
        $tipo_locales = $locales->nombre;

        return view('anuncios.genero', compact('anuncios', 'generos', 'nombre_genero', 'request'));
    }

    //muestra todos los generos
    public function create()
    {
        $generos = Genero::all();
        $tipo_negocios =Local::all();

        return view('formularioCrear', compact('generos', 'tipo_negocios'));
    }



    //crear un nuevo anuncio en BD
    public function store(Request $request)
    {
        // Convierte el array de otros géneros en una cadena separada por comas
        $generosString = implode(',', $request->input('otros_generos'));
        $rutaImg = $request->file('imagen')->store('public/anuncios');

        //crea anuncio
        $anuncio = new Anuncio();
        $anuncio->titulo = $request->titulo;
        $anuncio->precio = $request->precio;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->genero_id = $request->genero;
        
        /* //el id 1 es = a que es dj
        if($request-> tipo_negocio_id == 1){
            $anuncio->tipo_negocio_id = $request->tipo_negocio;
        }
            */
        $anuncio->tipo_negocio_id = $request->tipo_negocio;

        //incluimos el array separado por comas
        $anuncio->otros_generos = $generosString;

        // Guardamos la ruta de la imagen
        $anuncio->imagen = $rutaImg;

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


        return view('anuncios.edit', compact('anuncio', 'generos', 'generoActual'));
    }


    //Actualizar anuncio
    public function update(Request $request, Anuncio $anuncio)
    {

        $generosString = implode(',', $request->input('otros_generos'));
        $rutaImg = $request->file('imagen')->store('public/anuncios');

        $anuncio->titulo = $request->titulo;
        $anuncio->precio = $request->precio;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->genero_id = $request->genero;
        $anuncio->tipo_negocio_id = $request->tipo_negocio;

        //incluimos el array separado por comas
        $anuncio->otros_generos = $generosString;

        // Guardamos la ruta de la imagen
        $anuncio->imagen = $rutaImg;

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
