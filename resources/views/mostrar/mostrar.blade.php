@extends('layout.plantilla')

@section('titulo', 'Mostrar libro ' . $libro->titulo)

@section('contenido')

    <div class="container">
        <div class="row m-3">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="display-6">{{$libro->titulo}}</h1>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="/" class="btn btn-primary">Regresar </a>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection
