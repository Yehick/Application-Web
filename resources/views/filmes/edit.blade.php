@extends('layouts.app')
@section('title', 'Editar funciones')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10"><h1>Agregar función</h1></div>
            <div class="col-sm-2">
                <a href="{{ route('filmes.index') }}">
                    <button class="btn btn-secondary">Cancelar</button>
                </a>
            </div>
        </div>

        <div class="jumbotron">
            <form method="post" action="{{ route('filmes.update', $filme->id) }}">
                @csrf
                @method('PUT')

                <div>
                    <label for="">Hora de comienzo:</label>
                    <input class="form-control" type="datetime-local" value="{{ $filme->start }}" name="start" id="" required >
                </div>
                <div>
                    <label for="">Hora de finalizacón:</label>
                    <input class="form-control" type="datetime-local" value="{{ $filme->end }}" name="end" id="" required >
                </div>
                <div>
                    <label for="">Disponibilidad:</label>
                    <select class="form-control" type="text" value="{{ $filme->available }}" name="available" id="" required>
                        <option value="Disponible">Disponible</option>
                        <option value="No disponible">No disponible</option>
                    </select>
                </div>
                <div>
                    <label for="">Turno durante el día:</label>
                    <select class="form-control" name="type" id="" required>
                        <option value="{{ $filme->type }}">{{ $filme->type }}</option>
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noche">Noche</option>
                    </select>
                </div>

                <br><br>

                <input class="btn btn-info text-white" type="submit" value="Guardar cambios">
            </form>
        </div>
@endsection
</div>
