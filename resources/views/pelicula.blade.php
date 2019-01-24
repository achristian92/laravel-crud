<?php
if(!isset($peli)){
    $peli['id'] = "";
    $peli['titulo'] = "";
    $peli['resumen'] = "";
    $peli['ano'] = "";
    $peli['pais'] = "";
    $peli['protagonistas'] = "";




} ?>

@extends('app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Gestor de Peliculas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">Agregar Pelicula</div>
                <div class="card-body">
                    <form action="{{route('pelicula.store')}}" method="post">
                        {!! csrf_field()!!}
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                
                            </div>
                            <input type="hidden" class="form-control" name="id" value="{{$peli['id']}} ">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Titulo</div>
                            </div>
                            <input type="text" class="form-control" name="titulo" value="{{$peli['titulo']}}">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Resumen</div>
                            </div>
                            <input type="text" class="form-control" name="resumen" value="{{$peli['resumen']}}">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Año</div>
                            </div>
                            <input type="number" class="form-control" name="ano" value="{{$peli['ano']}}">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Pais</div>
                            </div>
                            <input type="text" class="form-control" name="pais" value="{{$peli['pais']}}">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Protegonistas</div>
                            </div>
                            <input type="text" class="form-control" name="protagonistas" value="{{$peli['protagonistas']}}">
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary" href="{{route('pelicula.index')}}">Nueva Pelicula</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">Agregar Pelicula</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Resumen</th>
                            <th scope="col">Año</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Protagonistas</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pelis as $peli)
                                <tr>
                                    <td>{{$peli->id}}</td>
                                    <td>{{$peli->titulo}}</td>
                                    <td>{{$peli->resumen}}</td>
                                    <td>{{$peli->ano}}</td>
                                    <td>{{$peli->pais}}</td>
                                    <td>{{$peli->protagonistas}}</td>
                                    <td>
                                        <a href='{{route('pelicula.edit',$peli->id)}}' class='btn btn-info'>Editar</a>
                                        <form action="{{ route('pelicula.destroy' , $peli->id) }}" method="POST" style="display: inline">
                                            {!! csrf_field()!!}
                                            {!! method_field('DELETE') !!}
                                            <button class="btneliminaruser" type="submit">
                                                <a class="btn btn-danger btn-sm" style="padding: 0px 4px">
                                                    <span class="glyphicon glyphicon-remove"></span>
                                                </a>
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
