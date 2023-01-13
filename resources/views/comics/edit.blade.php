@extends('layouts.main')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger m-5" role="alert">
                <h2><i class="fa-solid fa-triangle-exclamation"></i>Error</h2>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $comic->title) }}" placeholder="Add title...">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb *</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb', $comic->thumb) }}" placeholder="Add URL for image...">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price *</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $comic->price) }}" placeholder="Add price...">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series *</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                    name="series" value="{{ old('series', $comic->series) }}" placeholder="Add series...">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date *</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" placeholder="Add sale date...">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type *</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type', $comic->type) }}" placeholder="Add type...">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" value="{{ old('description') }}" rows="5"
                    placeholder="Add description..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit
                <i class="fa-solid fa-file-import ms-1"></i>
            </button>
        </form>
    </div>
@endsection
