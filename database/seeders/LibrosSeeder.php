<?php

namespace Database\Seeders;

use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos la instancio de libros
        $hw = new Libros();
        $hw -> titulo = "Hannibal lecter el origen del mal";
        $hw -> autor = "Thomas Harris";
        $hw -> editorial = "Best Sellers";
        $hw -> fecha_de_publicacion = "2007-11-06";
        $hw -> numero_de_paginas = "361";
        $hw -> save();

        $hw2 = new Libros();
        $hw2 -> titulo = "El dragon Rojo";
        $hw2 -> autor = "Thomas Harris";
        $hw2 -> editorial = "Best Sellers";
        $hw2 -> fecha_de_publicacion = "1981-10-27";
        $hw2 -> numero_de_paginas = "356";
        $hw2 -> save();


    }
}
