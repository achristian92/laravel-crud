<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{

    public function index()
    {
        $pelis = Pelicula::all();
        return view('pelicula',compact('pelis'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if(! $request->id){
            //guardar
            Pelicula::create($request->all());
            return redirect()->route('pelicula.index');
        }else{
            $peli = Pelicula::find($request->id);
            $peli->titulo = $request->titulo;
            $peli->resumen = $request->resumen;
            $peli->ano = $request->ano;
            $peli->pais = $request->pais;
            $peli->protagonistas = $request->protagonistas;
            $peli->save();
            return redirect()->route('pelicula.index');

        }

    }

    public function show(Pelicula $pelicula)
    {
        //
    }

    public function edit(Pelicula $pelicula)
    {
        $peli = Pelicula::find($pelicula->id);
        $pelis = Pelicula::all();

        return view('pelicula',compact('peli','pelis'));

    }


    public function update(Request $request, Pelicula $pelicula)
    {

    }


    public function destroy(Pelicula $pelicula)
    {

        $peli = Pelicula::find($pelicula->id);

        $peli->delete();
        return redirect()->route('pelicula.index');

    }
}
