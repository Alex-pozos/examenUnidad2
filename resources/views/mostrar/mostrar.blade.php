@extends('layout.plantilla')

@section('titulo', 'Mostrar libro ' . $libro->titulo)

@section('contenido')

    <div class="container">
        <div class="row m-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="display-6">Ficha del libro "{{ $libro->titulo }}"</h1>
                    </div>
                    <div class="card-body">
                        <p class="lead">Titulo: {{ $libro->titulo }}</p>
                        <p class="lead">Autor: {{ $libro->autor }}</p>
                        <p class="lead">Editorial: {{ $libro->editorial }}</p>
                        <p class="lead">Fecha de publicación: {{ $libro->fecha_de_publicacion }}</p>
                        <p class="lead">Número de páginas: {{ $libro->numero_de_paginas }}</p>
                        <a href="/" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Regresar a libros</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


@endsection
