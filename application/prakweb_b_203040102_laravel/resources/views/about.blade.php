@extends('layouts.main')
    @section('container')

        <div class="container mb-5">
            <div class="row">
                <div class="col text-center mt-5">
                    <div class="card mb-5" style="background-color: rgba(255, 255, 255, 0.2)">
                        <div class="position-relative px-3 py-2">
                            <h1 class="text-light">Halaman About</h1>
                            <h3 class="text-light">{{ $name }}</h3>
                            <p class="text-light">{{ $email }}</p>
                            <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    