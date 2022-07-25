@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <a href="/categories">See all categories</a>
    </div>

    @foreach ($posts as $post)
        @include('partials.post-item')
    @endforeach
@endsection