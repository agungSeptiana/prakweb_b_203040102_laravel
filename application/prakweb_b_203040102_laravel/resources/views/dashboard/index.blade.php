@extends('dashboard.layouts.main')
    @section('container')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-light">Welcome back, {{ auth()->user()->name }}</h1>
        </div>

        <div class="col-md-12">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 mt-4">
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.2); box-shadow: 0 15px 35px rgba(0,0,0,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5);">
                        @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                        <h2 class="text-light mb-2 font-w600 text-center">{{ $post->title }}</h2>
                        <p class="mb-0 fs-14 text-center">
                            <span class="text-warning me-1">{{ $post->category->name }}</span>
                        </p>
                        
                    </div>
                </div>
                @endforeach	
            </div>
        </div>

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer text-light">
            <div class="copyright">
                <p>Copyright © Agung Septiana </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    @endsection