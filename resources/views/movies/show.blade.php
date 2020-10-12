@extends('layouts.app')
@section('title', 'Ver detalles de película')
@section('content')

    <div class="container">

        <div class="row">
            <div class="card bg-primary" style="width: 18rem;">
                <img src="..." class="img-thumbnail" alt="Responsive image">
                <div class="card-body">
                    <h5 class="card-title col-sm bg-info text-white">{{ $movie->name }}</h5>
                    <h3 class="card-text col-sm bg-info text-white">{{ $movie->director }}</h3>
                    <p class="card-text col-sm bg-info text-white">{{ $movie->synopsis }}</p>
                    <p class="card-text col-sm bg-info text-white">{{ $movie->duration }}</p>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('movies.index', $movie->id) }}">Volver</a>
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger col-sm">Eliminar</button>
                    </form>


                </div>
            </div>
        </div>

        <br>

        @endsection

    </div>
