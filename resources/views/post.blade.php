@extends('layouts.main')

@section('container')
    <div class="mb-5 pb-2">
        <h2>
            {{ $post->title }}
        </h2>

        <p>
            By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in

            <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>

        <p>
            {{ $post->body }}
        </p>
    </div>
@endsection