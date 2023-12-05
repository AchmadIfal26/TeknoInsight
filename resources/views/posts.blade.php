@extends('layouts.main')
@section('container')
<h1 class="mb-3">Posts</h1>

    @foreach ($posts as $post)
        <article class="mb-3">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</h2></a>
            <h5>By : {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection

