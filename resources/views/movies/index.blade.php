@extends('layouts.app')
@section('title', 'Películas')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-2">
                <a href="{{ route('movies.create') }}">
                    <button class="btn btn-primary">Agregar</button>
                </a>
            </div>
            <div class="col-sm-10"><h1>Películas registradas</h1></div>
        </div>

        @forelse($movies as $movie)
            <div class="row">
                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="col p-4 d-flex flex-column position-static">
                <div class="card col-sm bg-info" style="width: 18rem;">
                    <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 50px 50px 0 0;" src="..." alt="">
                            <div class="card-body ">
                                <h5 class="card-title col-sm bg-info text-white">Nombre: {{ $movie->name }}</h5>
                                <h5 class="card-text col-sm bg-info text-white">Director: {{ $movie->director }}</h5>
                                <h5 class="card-text col-sm bg-info text-white">Sinópsis: {{ $movie->synopsis }}</h5>
                                <h5 class="card-text col-sm bg-info text-white">Duración: {{ $movie->duration }}</h5>
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('movies.show', $movie->id) }}">Ver</a>
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger col-sm">Eliminar</button>
                                </form>
                            </div>

                </div>
                </div>

            </div>


            <br>
        @empty
            <div><h3>NO HAY REGISTROS DE PELÍCULAS EN LA BASE DE DATOS</h3></div>
        @endforelse

        {{ $movies->links() }}

        @endsection

        </div>
    </div>
