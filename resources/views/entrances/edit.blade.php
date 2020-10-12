@extends('layouts.app')
@section('title', 'Editar la entrada')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10"><h1>Agregar entrada</h1></div>
            <div class="col-sm-2">
                <a href="{{ route('entrances.index') }}">
                    <button class="btn btn-secondary">Cancelar</button>
                </a>
            </div>
        </div>

        <div class="jumbotron bg-primary">
            <form method="post" action="{{ route('entrances.update', $entrance->id) }}">
                @csrf
                @method('PUT')

                <div>
                    <label for="">Precio de entradas:</label>
                    <input class="form-control" value="{{ $entrance->price }}" placeholder="Ingrese el precio" name="price" id="" required >
                </div>
                <div>
                    <label for="">Hora de entrada:</label>
                    <input class="form-control" value="{{ $entrance->hourEntrance }}" placeholder="Elija una hora" name="hourEntrance" id="" required>
                </div>

                <input class="btn btn-info text-white" type="submit" value="Guardar cambios">

            </form>
        </div>
        @endsection
    </div>

