@extends('layouts.app')
@section('title', 'Agregar entrada')
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

        <div class="jumbotron">
            <form method="post" action="{{ route('entrances.store') }}">
                @csrf

                <div>
                    <label for="">Precio de entradas:</label>
                    <input class="form-control" placeholder="Ingrese el precio" name="price" id="" required >
                </div>
                <div>
                    <label for="">Hora de entrada:</label>
                    <input class="form-control" placeholder="Elija una hora" name="hourEntrance" id="" cols="30" rows="5">
                </div>
                <br><br>

                <input class="btn btn-primary" type="submit" value="Guardar">

            </form>
        </div>
    </div>

@endsection
