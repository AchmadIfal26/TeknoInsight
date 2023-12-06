@extends('layouts.main')
@section('container')
<h1 class="mb-3">Category</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</h2></a>
            </li>
        </ul>
    @endforeach

@endsection

