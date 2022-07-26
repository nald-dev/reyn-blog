@extends('layouts.main')

@section('container')
    @if ($title == 'Posts')
        <div class="mb-5">
            <a href="/categories">See all categories</a>
        </div>
    @endif

    @foreach ($posts as $post)
        @include('partials.post-item')
    @endforeach
@endsection