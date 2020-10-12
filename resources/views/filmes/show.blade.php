@extends('layouts.app')
@section('title', 'Ver detalles de las funciones')
@section('content')

    <div class="container">

        <div class="row">
            <div class="card bg-primary" style="width: 18rem;">
                <img src="..." class="img-thumbnail" alt="Responsive image">
                <div class="card-body">
                    <h5 class="card-title col-sm bg-info text-white">Comienza: {{ $filme->start }}</h5>
                    <h3 class="card-text col-sm bg-info text-white">Finaliza: {{ $filme->end }}</h3>
                    <p class="card-text col-sm bg-info text-white">Disponibilidad: {{ $filme->available }}</p>
                    <p class="card-text col-sm bg-info text-white">Turno durante el día: {{ $filme->type }}</p>
                    <form action="{{ route('filmes.destroy', $filme->id) }}" method="post">
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('filmes.index', $filme->id) }}">Volver</a>
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('filmes.edit', $filme->id) }}">Editar</a>
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
