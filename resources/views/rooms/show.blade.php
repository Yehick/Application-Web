@extends('layouts.app')
@section('title', 'Ver detalles de la sala')
@section('content')

    <div class="container">


        <div class="row">
            <div class="card bg-primary" style="width: 18rem;">
                <img src="..." class="img-thumbnail" alt="Responsive image">
                <div class="card-body ">
                    <h5 class="card-title col-sm bg-info text-white">Asientos: {{ $room->chairs }}</h5>
                    <h3 class="card-text col-sm bg-info text-white">Ubicaciones: {{ $room->location }}</h3>
                    <p class="card-text col-sm bg-info text-white">Capacidades: {{ $room->capacity }}</p>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('rooms.show', $room->id) }}">Volver</a>
                        <a class="btn btn-secondary col-sm bg-info text-white"
                           href="{{ route('rooms.edit', $room->id) }}">Editar</a>
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

