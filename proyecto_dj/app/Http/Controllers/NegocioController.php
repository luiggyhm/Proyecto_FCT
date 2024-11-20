<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;

class NegocioController extends Controller
{

    //Crear Negocio
    public function store(Request $request)
    {
        $rutaImg = $request->file('imagen')->store('public/negocios');

        //crea negocio
        $negocio = new Negocio();
        $negocio->nombre = $request->nombre;
        $negocio->tipo_negocio = $request->tipo_negocio;
        $negocio->direccion = $request->direccion;
        $negocio->descripcion = $request->descripcion;
        $negocio->telefono = $request->telefono;
        $negocio->aforo = $request->aforo;
        $negocio->imagen = $rutaImg; // Guardamos la ruta de la imagen

        $negocio->save();
        return redirect()->back()->with('status', 'Negocio creado');
    }


    //Modificar Negocio
    public function update(Request $request, Negocio $negocio)
    {
        $rutaImg = $request->file('imagen')->store('public/negocios');

        $negocio = new Negocio();
        $negocio->nombre = $request->nombre;
        $negocio->tipo_negocio = $request->tipo_negocio;
        $negocio->direccion = $request->direccion;
        $negocio->descripcion = $request->descripcion;
        $negocio->telefono = $request->telefono;
        $negocio->aforo = $request->aforo;
        $negocio->imagen = $rutaImg; // Guardamos la ruta de la imagen

        return redirect()->back()->with('status', 'Negocio Modificado');
    }


    //Eliminar Negocio
    public function destroy(Negocio $negocio)
    {
        $negocio->delete();
        return redirect()->back()->with('status', 'Negocio eliminado');
    }
}
