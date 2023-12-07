@extends('layouts.main')
@section('container')
<h1 class="mb-3">Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-3 border-bottom pb-4" >
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</h2></a>
            <h5>By : {{ $post->user->name }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection

