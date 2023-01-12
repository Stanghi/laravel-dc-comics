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

                            <a href="{{ route('comics.show', $comic) }}" title="Show" class="btn btn-outline-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" title="Edit" class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i>
                            </a>

                            <a href="#" title="Delete" class="btn btn-outline-danger"><i
                                    class="fa-solid fa-trash"></i>
                            </a>

                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
