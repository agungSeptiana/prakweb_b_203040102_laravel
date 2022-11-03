@extends('layouts.main')
    @section('container')
        <div class="container bg-dark">
            <div class="row justify-content-center mb-5 bg-dark">
                <div class="col-md-8">
                    
                    <h1 class="mb-3 text-light">{{ $post->title }}</h1>
                    <p class="text-light">By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    @endif
                    <article class="my-3 fs-5 text-light">
                        {!! $post->body !!}
                    </article>
                    <a href="/posts" class="text-decoration-none btn btn-primary">Back to Posts</a>
                </div>
            </div>
        </div>
    @endsection