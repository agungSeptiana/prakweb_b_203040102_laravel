@extends('layouts/main')

@section('container')
    <article>
        <h1 class="mb-1">{{ $post->title }}</h1>
        {!! $post->body !!}
    </article>
    <a href="/post">Back to Posts</a>
@endsection