<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\Genero;
use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnuncioController extends Controller
{
    //Index se usa para pasar datos de la BDD y paginarlos, es decir mostrar todos los anuncios
    public function index(Request $request)
    {
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

    public function djs(Genero $genero, Request $request)
    {

        $anunciosDj = Anuncio::all();
        $anunciosDj = Anuncio::where('tipo_anuncio', 'dj')->get();

        $generos = Genero::all();
        $anuncios = Anuncio::where('genero_id', $genero->id)->get();
        $nombre_genero = $genero->nombre;
        $tituloPag = 'Anuncios de Djs';

        return view('anuncios.soloDjs', compact('anunciosDj', 'request', 'generos', 'nombre_genero', 'tituloPag', 'anuncios'));
    }

    public function negocios(Genero $genero, Request $request)
    {

        $anunciosNegocios = Anuncio::all();
        $anunciosNegocios = Anuncio::where('tipo_anuncio', 'negocio')->get();

        $generos = Genero::all();
        $anuncios = Anuncio::where('genero_id', $genero->id)->get();
        $nombre_genero = $genero->nombre;
        $tituloPag = 'Anuncios de Djs';

        return view('anuncios.soloNegocios', compact('anunciosNegocios', 'request', 'generos', 'nombre_genero', 'tituloPag', 'anuncios'));
    }


    //Create sirve para pasarle todos los datos necesarios al formulario para luego poder crearlo con store
    public function create()
    {
        $generos = Genero::all();
        $locales = Local::all();

        return view('anuncios.create', compact('generos', 'locales'));
    }



    //Store es el encargado de saber como crear los datos en la BDD
    public function store(Request $request)
    {
        // Convierte el array de otros géneros en una cadena separada por comas
        $otrosGeneros = $request->input('otros_generos');
        if (!is_array($otrosGeneros)) {
            $otrosGeneros = $otrosGeneros ? explode(',', $otrosGeneros) : [];
        }
        $generosString = implode(',', $otrosGeneros);



        if ($request->hasFile('imagen')) {
            $rutaImg = $request->file('imagen')->store('public/anuncios');
            $urlPublicaImg = Storage::url($rutaImg);
        } else {
            return redirect()->back()->withErrors(['imagen' => 'No se pudo cargar la imagen.']);
        }
        //crea anuncio
        $anuncio = new Anuncio();
        $anuncio->titulo = $request->titulo;
        $anuncio->precio = $request->precio;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->telefono = $request->telefono;
        $anuncio->otros_generos = $generosString;
        $anuncio->imagen = $rutaImg;
        $anuncio->genero_id = $request->genero;

        //si es dj
        $anuncio->ciudad = $request->ciudad;
        $anuncio->localidad = $request->localidad;
        

        //si es negocio
        $anuncio->tipo_local = $request->tipo_local;
        $anuncio->direccion = $request->direccion;
        $anuncio->aforo = $request->aforo;

        //elemento oculto enviado por el botón que pulse
        $anuncio->tipo_anuncio = $request->tipo_anuncio;

        $anuncio->save();
        return redirect()->intended('/')->with('status', 'Anuncio creado');
    }




    public function show($id)
    {
        $anuncio = Anuncio::find($id);
        return view('anuncios.show', compact('anuncio'));
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

        $otrosGeneros = $request->input('otros_generos');
        if (!is_array($otrosGeneros)) {
            $otrosGeneros = $otrosGeneros ? explode(',', $otrosGeneros) : [];
        }
        $generosString = implode(',', $otrosGeneros);


        $rutaImg = $request->file('imagen')->store('public/anuncios');

        $anuncio->titulo = $request->titulo;
        $anuncio->precio = $request->precio;
        $anuncio->descripcion = $request->descripcion;
        $anuncio->telefono = $request->telefono;
        $anuncio->otros_generos = $generosString;
        $anuncio->imagen = $rutaImg;
        $anuncio->genero_id = $request->genero;

        //si es dj
        $anuncio->ciudad = $request->ciudad;
        $anuncio->locallidad = $request->localidad;
        

        //si es negocio
        $anuncio->tipo_local = $request->tipo_local;
        $anuncio->direccion = $request->direccion;
        $anuncio->aforo = $request->aforo;

        //elemento oculto enviado por el botón que pulse
        $anuncio->tipo_anuncio = $request->tipo_anuncio;

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
