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

}
