@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <div class="mb-5 pb-2 border-bottom">
            <h2>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

            <p>
                By: <a href="#" class="text-decoration-none">{{ $post->author->name }}</a>
            </p>

            <p>
                {{ $post->excerpt }}
            </p>
        </div>
    @endforeach
@endsection