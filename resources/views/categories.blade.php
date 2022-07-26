@extends('layouts.main')

@section('container')
    <ul>
        @foreach ($categories as $category)
            <li><h4><a href="/category/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h4></li>
        @endforeach
    </ul>
@endsection