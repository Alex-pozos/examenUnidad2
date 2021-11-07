<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{

    public function mostrar($id){

        $libro = Libros::find($id);

        return view('mostrar.mostrar', compact('libro'));        

    }

    public function crear(){

        return view('mostrar.crear');

    }

    public function store(Request $request){
         
        $libro = new Libros();

        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->fecha_de_publicacion = $request->fecha_de_publicacion;
        $libro->numero_de_paginas = $request->numero_de_paginas;
        
        $libro->save();

        return redirect()->route('mostrar.mostrar', $libro);
    }

    public function editar(Libros $libro){

        return view('mostrar.editar', compact('libro'));

    }

    public function actualizar(Request $request, Libros $libro){

        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->fecha_de_publicacion = $request->fecha_de_publicacion;
        $libro->numero_de_paginas = $request->numero_de_paginas;
        
        $libro->save();

        return redirect()->route('mostrar.mostrar', $libro);

    }

    public function eliminar(Libros $libro) {

        $libro->delete();

        return redirect()->route('index');
    }

}
