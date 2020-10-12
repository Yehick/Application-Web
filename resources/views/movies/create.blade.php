@extends('layouts.app')
@section('title', 'Agregar película')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-10"><h1>Agregar película</h1></div>
            <div class="col-sm-2">
                <a href="{{ route('movies.index') }}">
                    <button class="btn btn-secondary">Cancelar</button>
                </a>
            </div>
        </div>

        <div class="jumbotron">
            <form method="post" action="{{ route('movies.store') }}">
                @csrf

                <div>
                    <label for="">Película:</label>
                    <input class="form-control" type="text" name="name" id="" required maxlength="200">
                </div>
                <div>
                    <label for="">Sinopsis:</label>
                    <textarea class="form-control" name="synopsis" id="" cols="30" rows="5"></textarea>
                </div>
                <div>
                    <label for="">Categoría:</label>
                    <select class="form-control" name="category" id="" required>
                        <option value="Estrenos 2020">Estrenos 2020</option>
                        <option value="Las más vistas">Las más vistas</option>
                        <option value="Fechas">Fechas</option>
                        <option value="Actores">Actores</option>
                    </select>
                </div>
                <div>
                    <label for="">Director:</label>
                    <input class="form-control" type="text" name="director" id="" required maxlength="100">
                </div>
                <div>
                    <label for="">Género:</label>
                    <select class="form-control" name="genre" id="" required>
                        <option value="Ciencia Ficción">Ciencia Ficción</option>
                        <option value="Acción">Acción</option>
                        <option value="Terror">Terror</option>
                        <option value="Romance">Romance</option>
                        <option value="Documental">Documental</option>
                    </select>
                </div>
                <div>
                    <label for="">Duración:</label>
                    <input class="form-control" type="text" name="duration" id="" required maxlength="50">
                </div>
                <div>
                    <label for="">Actores:</label>
                    <textarea class="form-control" name="actors" id="" cols="30" rows="5"></textarea>
                </div>
                <br><br>

                <input class="btn btn-primary" type="submit" value="Guardar">

            </form>
        </div>
    </div>

@endsection
