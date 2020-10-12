@extends('layouts.app')
@section('title', 'Agregar sala')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10"><h1>Agregar sala</h1></div>
            <div class="col-sm-2">
                <a href="{{ route('rooms.index') }}">
                    <button class="btn btn-secondary">Cancelar</button>
                </a>
            </div>
        </div>

        <div class="jumbotron">
            <form method="post" action="{{ route('rooms.store') }}">
                @csrf

                <div>
                    <label for="">Asientos:</label>
                    <input class="form-control" type="text" name="chairs" id="" required maxlength="50">
                </div>
                <div>
                    <label for="">Ubicaciones:</label>
                    <input class="form-control" type="text" name="location" id="" required maxlength="200">
                </div>
                <div>
                    <label for="">Capacidades:</label>
                    <input class="form-control" type="text" name="capacity" id="" required maxlength="50">
                </div>
                <br><br>

                <input class="btn btn-primary" type="submit" value="Guardar">

            </form>
        </div>
    </div>

@endsection

