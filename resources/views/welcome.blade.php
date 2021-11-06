@extends('layout.plantilla')

@section('titulo', 'Registros')

@section('contenido')

    <div class="container">
        <div class="row m-3">
            <div class="col">

                <h1 class="display-5 text-center" style="color:white">Lista de Libros</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-3">{{ $libros->links() }}</div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <table class="table clase_table text-center" style="color:aqua">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Fecha de publicacion</th>
                            <th scope="col">Número de páginas</th>
                            <th scope="col">Ver</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros as $libro)
                            <tr>
                                <td><strong>{{ $libro->id }}</strong></td>
                                <td>{{ $libro->titulo }}</td>
                                <td>{{ $libro->autor }}</td>
                                <td>{{ $libro->editorial }}</td>
                                <td>{{ $libro->fecha_de_publicacion }}</td>
                                <td>{{ $libro->numero_de_paginas }}</td>
                                <td>
                                    <a href="{{ route('mostrar.mostrar', $libro->id) }}" class="btn btn-success">
                                        <i class="far fa-eye"></i> Mostrar
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning">
                                        <i class="far fa-edit"></i> Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i> Eliminar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection
