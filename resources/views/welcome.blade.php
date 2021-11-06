@extends('layout.plantilla')

@section('titulo', 'Registros')

@section('contenido')

    <div class="container">
        <div class="row m-3">
            <div class="col">

                <h1 class="display-5 text-center" style="color:white">Lista de Libros</h1>

                <table class="table table-striped clase_table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Fecha de publicacion</th>
                            <th scope="col">Número de páginas</th>
                            <th scope="col">Ver</i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros as $libro)
                            <tr>
                                <td>{{ $libro->id }}</td>
                                <td>{{ $libro->titulo }}</td>
                                <td>{{ $libro->autor }}</td>
                                <td>{{ $libro->editorial }}</td>
                                <td>{{ $libro->fecha_de_publicacion }}</td>
                                <td>{{ $libro->numero_de_paginas }}</td>
                                <td>
                                    <a href="{{route('mostrar.mostrar',$libro->id)}}" class="btn btn-primary">
                                    
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $libros->links() }}

            </div>
        </div>
    </div>


@endsection
