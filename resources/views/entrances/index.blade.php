@extends('layouts.app')
@section('title', 'Entradas')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{ route('entrances.create') }}">
                    <button class="btn btn-primary">Agregar</button>
                </a>
            </div>
            <div class="col-sm-10"><h1>Entradas registradas</h1></div>
        </div>

        @forelse($entrances as $entrance)
            <div class="row">
                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="card col-sm bg-light" style="width: 18rem;">
                            <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 200px; border-radius: 50px 50px 0 0;" src="..." alt="">
                            <div class="card-body ">
                                <h5 class="card-title col-sm bg-info text-white">Precio: $ {{ $entrance->price }}</h5>
                                <h3 class="card-text col-sm bg-info text-white">Hora de entrada: {{ $entrance->hourEntrance }} hrs</h3>
                                <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('entrances.index', $entrance->id) }}">Ver</a>
                                    <a class="btn btn-secondary col-sm bg-info text-white"
                                       href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger col-sm">Eliminar</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                <br>
                @empty
                    <div><h3>NO HAY REGISTROS DE ENTRADAS EN LA BASE DE DATOS</h3></div>
                @endforelse

                {{ $entrances->links() }}

                @endsection

            </div>
    </div>

