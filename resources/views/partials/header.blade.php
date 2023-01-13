<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('comics.index') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('comics.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('comics.create') }}" class="nav-link active">
                            New comic
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
