@extends('layouts.main')
    @section('container')
        <h1 class="mb-5 text-light">{{ $title }}</h1>

        @if ($posts->count())
            <div class="card mb-3" style="background-color: rgba(255, 255, 255, 0.2); box-shadow: 0 15px 35px rgba(0,0,0,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5);">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                <div class="card-body text-center">
                <h3 class="card-title text-light"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-light">{{ $posts[0]->title }}</a></h3>
                <p class="text-light">
                    <small>
                        By <a class="text-light text-decoration-none" href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}"  class="text-decoration-none text-light">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text text-light">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
            </div> 
        @else
            <p class="text-center fs-4">No Post Found.</p>
        @endif


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.2); box-shadow: 0 15px 35px rgba(0,0,0,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5);">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(255, 255, 255, 0.2)"><a href="/categories/{{ $post->category->slug }}" class="text-light text-decoration-none">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                            <h5 class="card-title text-light"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-light">{{ $post->title }}</a></h5>
                            <p class="text-light">
                                <small>
                                    By <a class="text-light text-decoration-none" href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text text-light">{{ $post->excerpt }}</p>
                            <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection


        