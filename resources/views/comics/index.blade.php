@extends('layouts.main')

@section('content')
    <div class="container">

        @if (session('deleted'))
            <div class="alert alert-primary" role="alert">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('deleted') }}
            </div>
        @endif

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
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

                                <a href="{{ route('comics.edit', $comic) }}" title="Edit"
                                    class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('comics.destroy', $comic) }}" method="POST"
                                    onsubmit="return confirm('confermi l\'eliminazione di {{ $comic->title }}')">
                                    @csrf
                                    @method('DELETE')

                                    <button title="Delete" type="submit" class="btn btn-outline-danger"><i
                                            class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
