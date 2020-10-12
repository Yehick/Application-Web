@extends('layouts.app')
@section('title', 'Salas')
@section('content')

    <div class="container">
        <table class="table table-warning">
            <thead>
            <tr>
                <th scope="col">Asientos</th>
                <th scope="col">Ubicaciones</th>
                <th scope="col">Capacidades</th>
            </tr>
            </thead>
            <tbody>
            @forelse($rooms as $room)
                <tr>
                    <td>{{ $room->chairs }}</td>
                    <td>{{ $room->location }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </button>

                                <div>
                                    <form class="dropdown-menu" aria-labelledby="btnGroupDrop1"
                                          action="{{ route('movies.destroy', $room->id) }}" method="post">
                                        <a class="dropdown-item btn btn-secondary col-sm bg-secondary text-white"
                                           href="{{ route('movies.index', $room->id) }}">Volver</a>
                                        <a class="dropdown-item btn btn-secondary col-sm bg-secondary text-white"
                                           href="{{ route('movies.edit', $room->id) }}">Editar</a>
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
