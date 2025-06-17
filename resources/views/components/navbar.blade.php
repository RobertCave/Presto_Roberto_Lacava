<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-white" href="{{ route('homepage') }}" aria-label="Homepage">
            Presto! <i class="bi bi-lightning-charge" aria-hidden="true"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('article.index') }}">
                        <i class="bi bi-file-earmark-check-fill" aria-hidden="true"></i> Tutti gli annunci
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-diagram-3-fill" aria-hidden="true"></i> Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>
            
            <!-- Menu gestione annunci (solo per utenti autenticati) -->
            @auth
                <div class="dropdown me-2">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-lightning-charge" aria-hidden="true"></i> Gestione annunci
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @if (Auth::user()->is_revisor)
                            <li>
                                <a class="dropdown-item" href="{{ route('revisor.index') }}">
                                    <i class="bi bi-wrench-adjustable-circle" aria-hidden="true"></i> Dashboard revisore
                                    @if (\App\Models\Article::toBeRevisedCount() != 0)
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            {{ \App\Models\Article::toBeRevisedCount() }}
                                        </span>
                                    @endif
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ route('article.create') }}" class="dropdown-item">
                                <i class="bi bi-journal-plus" aria-hidden="true"></i> Nuovo annuncio
                            </a>
                        </li>
                    </ul>
                </div>
            @endauth
            <!-- Menu utente -->
            <div class="dropdown">
                @auth
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-gear" aria-hidden="true"></i> {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                               class="dropdown-item">
                                <i class="bi bi-person-dash-fill" aria-hidden="true"></i> Logout
                            </a>
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="POST" class="d-none" id="form-logout">
                        @csrf
                    </form>
                @else
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle" aria-hidden="true"></i> Area riservata
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('register') }}" class="dropdown-item">
                                <i class="bi bi-plus-square-dotted" aria-hidden="true"></i> Registrati
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="dropdown-item">
                                <i class="bi bi-person-circle" aria-hidden="true"></i> Login
                            </a>
                        </li>
                    </ul>
                @endauth
            </div>
            
            <!-- Barra di ricerca -->
            <form class="d-flex ms-auto my-2 my-lg-0" role="search" action="{{ route('article.search') }}" method="GET">
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="Cerca" aria-label="Cerca annunci">
                    <button type="submit" class="input-group-text btn btn-outline-dark text-white" id="basic-addon2">
                        <i class="bi bi-search" aria-hidden="true"></i> Cerca
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>
