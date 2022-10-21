@extends('layouts/main')

@section('container')
    <article>
        <h1 class="mb-1">{{ $post->title }}</h1>
        <p>By. Agung Septiana in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/post">Back to Posts</a>
@endsection