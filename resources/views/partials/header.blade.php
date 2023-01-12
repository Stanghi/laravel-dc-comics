<header class="p-3">
    <a href="{{ route('comics.index') }}">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
    </a>

    <a href="{{ route('comics.create') }}" class="btn btn-primary ms-5">
        New comic
        <i class="fa-solid fa-plus ms-1"></i>
    </a>
</header>
