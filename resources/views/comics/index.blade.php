@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-6">
            @forelse ($comics as $comic)
                <div class="col p-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <p class="card-text">{{ $comic->title }}</p>
                        </div>
                        <div class="d-flex justify-content-around mb-3">
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
