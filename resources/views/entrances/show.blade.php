@extends('layouts.app')
@section('title', 'Ver detalles de las entradas')
@section('content')

    <div class="container">

        <div class="row">
            <div class="card bg-primary" style="width: 18rem;">
                <img src="..." class="img-thumbnail" alt="Responsive image">
                <div class="card-body">
                    <h5 class="card-title col-sm bg-info text-white">{{ $entrance->price }}</h5>
                    <h3 class="card-text col-sm bg-info text-white">{{ $entrance->hourEntrance }}</h3>
                    <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('entrances.show', $entrance->id) }}">Volver</a>
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
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
