@extends('layouts.main')
    @section('container')
        <h1 class="text-light">Halaman About</h1>
        <h3 class="text-light">{{ $name }}</h3>
        <p class="text-light">{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    @endsection
    