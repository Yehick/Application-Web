@extends('layouts.app')
@section('title', 'Funciones')
@section('content')

    <div class="container">
        <table class="table table-warning">
            <thead>
            <tr>
                <th scope="col">Hora de comienzo</th>
                <th scope="col">Hora de finalizacón</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Turno durante el día</th>
            </tr>
            </thead>
            <tbody>
            @forelse($filmes as $filme)
                <tr>
                    <th scope="row">{{ $filme->start}}</th>
                    <td>{{$filme->end}}</td>
                    <td>{{$filme->available}}</td>
                    <td>{{$filme->type}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </button>

                                <div>
                                    <form class="dropdown-menu" aria-labelledby="btnGroupDrop1"
                                          action="{{ route('filmes.destroy', $filme->id) }}" method="post">
                                        <a class="dropdown-item btn btn-secondary col-sm bg-secondary text-white"
                                           href="{{ route('filmes.index', $filme->id) }}">Volver</a>
                                        <a class="dropdown-item btn btn-secondary col-sm bg-secondary text-white"
                                           href="{{ route('filmes.edit', $filme->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item col-sm bg-danger text-white">Eliminar</button>
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
