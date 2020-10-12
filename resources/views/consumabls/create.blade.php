@extends('layouts.app')

@section('content')
    <form action="{{ route('consumabls.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md">
                <label for="">Nombre del artículo:</label>
                <input class="form-control" type="text" name="name" id="">
            </div>
            <div class="col-md">
                <label for="">Precio:</label>
                <input class="form-control" type="text" name="price" id="">
            </div>
            <div class="col-md">
                <label for="">Cantidad:</label>
                <input class="form-control" type="number" name="quantity" id="">
            </div>
        </div>
        <br>
        <div class="text-center">
            <input class="btn btn-primary" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
@endsection
