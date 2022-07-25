@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        @include('partials.post-item')
    @endforeach
@endsection