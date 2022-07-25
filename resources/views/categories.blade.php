@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <a href="/categories">See all categories</a>
    </div>

    <ul>
        @foreach ($categories as $category)
            <li><h4><a href="/category/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h4></li>
        @endforeach
    </ul>
@endsection