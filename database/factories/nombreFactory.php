<?php

namespace Database\Factories;

use App\Models\nombreModelo;
use Illuminate\Database\Eloquent\Factories\Factory;

class nombreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = nombreModelo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'titulo' => $this -> faker -> title(),
            // 'autor'=> $this -> faker -> name(),
            // 'editorial' => $this -> faker ->text(),
            // 'fecha_de_publicacion' => $this -> faker -> date(),
            // 'numero_de_paginas' => $this -> faker -> randomNumber()
        ];
    }
}
