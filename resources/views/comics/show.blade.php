@extends('layouts.main')


@section('content')
    <div class="container">

        <a href="{{ route('comics.index') }}" class="btn btn-outline-primary" title="Home">
            <i class="fa-solid fa-house"></i>
        </a>


        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h3>{{ $comic->price }}</h3>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
        <p>{{ $comic->description }}</p>
    </div>
@endsection
