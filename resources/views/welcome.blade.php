@extends('layouts.app')
<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
@section('content')


    <div class="col-12">
        @include('layouts.carousel')
    </div>
    <div class="row">
        <div class="col-1"></div>


        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Supergirl</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="{{ url('/movies/6') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="{{ url('/movies/6') }}" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/1.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">

            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="{{ url('/movies') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="{{ url('/movies') }}" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/2.png') }}" alt=""></img>

            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="{{ url('/movies') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="{{ url('/movies') }}" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/3.jpg') }}" alt=""></img>

            </a>
        </div>
    </div>


    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">

        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/12.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/13.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/14.jpg') }}" alt=""></img>
            </a>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/15.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/16.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/17.jpg') }}" alt=""></img>
            </a>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/18.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/19.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/20.jpg') }}" alt=""></img>
            </a>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/21.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/22.jpg') }}" alt=""></img>
            </a>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a su
                    hermano menor en una desesperada ...</p>
                <a href="#" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <a class="py-2" href="#" aria-label="Product">
                <div class="col-auto d-none d-lg-block">
                </div>
                <img class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 50px 50px 0 0;"
                     src="{{ asset('img/23.jpg') }}" alt=""></img>
            </a>
        </div>
    </div>


    <!-- Agregar JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
