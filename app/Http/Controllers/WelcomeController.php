<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(){

        $libros = Libros::paginate(10);

        return view('welcome', compact('libros'));

    }
}
