@extends('layouts.main')
@section('container')
    <article>
        {{-- <h2>{{ $post->title }}</h2>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!} --}}
        <h1 class="mb-3">{{ $post->title }}</h1>
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection
