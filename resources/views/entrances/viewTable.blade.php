@extends('layouts.app')
@section('title', 'Entradas')
@section('content')

    <div class="container">
        <table class="table table-warning">
            <thead>
            <tr>
                <th scope="col">Precio</th>
                <th scope="col">Hora de entrada</th>
            </tr>
            </thead>
            <tbody>
            @forelse($entrances as $entrance)
                <tr>
                    <th scope="row">{{ $entrance->price}}</th>
                    <td>{{$entrance->hourEntrance}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </button>

                                <div>
                                    <form class="dropdown-menu" aria-labelledby="btnGroupDrop1"
                                          action="{{ route('movies.destroy', $entrance->id) }}" method="post">
                                        <a class="dropdown-item btn btn-secondary col-sm bg-secondary text-white"
                                           href="{{ route('movies.index', $entrance->id) }}">Volver</a>
                                        <a class="dropdown-item btn btn-secondary col-sm bg-secondary text-white"
                                           href="{{ route('movies.edit', $entrance->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item col-sm bg-danger text-white">Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>


                </tr>


            @empty
                <h3>No hay datos</h3>

            @endforelse
            </tbody>
        </table>
        @endsection

    </div>
