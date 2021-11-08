@extends('layout.plantilla')

@section('titulo', 'Mostrar libro ' . $libro->titulo)

@section('fondo')

    <div style="background: rgb(2, 54, 88)">

    @section('contenido')

        <div class="container">
            <div class="row m-3">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <p style="font-size: 30px">
                                Ficha del libro <br>
                                "{{ $libro->titulo }}"
                            </p>
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
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>


@endsection
</div>

@endsection
