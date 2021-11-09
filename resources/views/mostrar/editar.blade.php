@extends('layout.plantilla')

@section('titulo', 'Editar libro')

@section('fondo')

    <div style="background: rgb(2, 54, 88)">

    @section('contenido')
        <div class="container">
            <div class="row m-3">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 m-3" style="background:rgb(0, 92, 95); border-radius:15px;">
                    <h1 class="display-6 text-center" style="color:whitesmoke">
                        Editar Registro de libro
                    </h1>
                    <form class="text-center m-3" action="{{ route('mostrar.actualizar', $libro)}}" method="post">

                        @csrf

                        @method('put')

                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$libro->titulo}}">
                            <small style="color:whitesmoke">Titulo de libro</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="autor" name="autor" value="{{$libro->autor}}">
                            <small style="color:whitesmoke">Autor</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="editorial" name="editorial" value="{{$libro->editorial}}">
                            <small style="color:whitesmoke">Editorial</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="date" class="form-control" id="fecha_de_publicacion" name="fecha_de_publicacion" value="{{$libro->fecha_de_publicacion}}">
                            <small style="color:whitesmoke">Fecha de publicación</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="number" class="form-control" id="numero_de_paginas" name="numero_de_paginas" value="{{$libro->numero_de_paginas}}">
                            <small style="color:whitesmoke">Número de páginas</small>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-secondary"><i class="far fa-edit"></i>
                                    Actualizar</button>
                            </div>
                            <div class="col-sm-6">
                                <a href="/" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Regresar </a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>


    @endsection
</div>

@endsection
