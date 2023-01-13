@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6">
            @forelse ($comics as $comic)
                <div class="col p-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text fw-bold">{{ $comic->title }}</p>

                            <div class="d-flex justify-content-around">

                                <a href="{{ route('comics.show', $comic) }}" title="Show" class="btn btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="#" title="Edit" class="btn btn-outline-primary"><i
                                        class="fa-solid fa-pen"></i>
                                </a>

                                <a href="#" title="Delete" class="btn btn-outline-danger"><i
                                        class="fa-solid fa-trash"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
