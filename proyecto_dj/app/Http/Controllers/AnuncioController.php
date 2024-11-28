<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Genero;
use App\Models\Local;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    //Index se usa para pasar datos de la BDD y paginarlos, es decir mostrar todos los anuncios
    public function index(Request $request)
    {
        $anuncios = Anuncio::all();
        $anuncios = Anuncio::with('genero')->get();
        $generos = Genero::all();
        //titulo usado en la vista
        $titulo_view = "Todos los anuncios";
        return view('anuncios.index', compact('anuncios', 'request', 'generos',  'titulo_view'));
    }


    //mostrar anuncios por el genero que tiene cada uno
    public function genero(Genero $genero, Request $request)
    {
        $generos = Genero::all();

        $anuncios = Anuncio::where('genero_id', $genero->id)->get();
        $nombre_genero = $genero->nombre;

        return view('anuncios.genero', compact('anuncios', 'generos', 'nombre_genero', 'request'));
    }

    public function locales(Local $local, Request $request)
    {

        $locales = Local::all();

        $anuncios = Anuncio::where('tipo_local', $local->id)->get();
        $tipo_locales = $locales->nombre;

        return view('anuncios.genero', compact('anuncios', 'generos', 'nombre_genero', 'request'));
    }

    //Create sirve para pasarle todos los datos necesarios al formulario para luego poder crearlo con store
    public function create()
    {
        $generos = Genero::all();
        $locales = Local::all();

        return view('anuncio.formularioCrear', compact('generos', 'locales'));
    }



    //Store es el encargado de saber como crear los datos en la BDD
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
        $anuncio->telefono = $request->telefono;
        $anuncio->otros_generos = $request->otros_generos;
        $anuncio->imagen = $request->imagen;
        $anuncio->genero_id = $request->genero;

        //si es dj
        $anuncio->ciudad = $request->ciudad;

        //si es negocio
        $anuncio->tipo_local = $request->tipo_local;
        $anuncio->direccion = $request->direccion;
        $anuncio->aforo = $request->aforo;

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
