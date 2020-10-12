@extends('layouts.app')
@section('title', 'Funciones')
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
            <form method="post" action="{{ route('filmes.store') }}">
                @csrf

                <div>
                    <label for="">Hora de comienzo:</label>
                    <input class="form-control" type="datetime-local" name="start" id="" required >
                </div>
                <div>
                    <label for="">Hora de finalizacón:</label>
                    <input class="form-control" type="datetime-local" name="end" id="" required >
                </div>
                <div>
                    <label for="">Disponibilidad:</label>
                    <select class="form-control" type="text" name="available" id="" required>
                        <option value="Disponible">Disponible</option>
                        <option value="No disponible">No disponible</option>
                        </select>
                </div>
                <div>
                    <label for="">Turno durante el día:</label>
                    <select class="form-control" name="type" id="" required>
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noche">Noche</option>
                    </select>
                </div>

                <br><br>

                <input class="btn btn-primary" type="submit" value="Guardar">

            </form>
        </div>
    </div>

@endsection

