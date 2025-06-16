<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient">
    <div class="container px-4 px-lg-5 ">
        <a class="navbar-brand text-white"> Presto! <i class="bi bi-lightning-charge"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="/"><i
                            class="bi bi-house-check-fill"></i> Home</a></li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('article.index') }}"> <i
                            class="bi bi-file-earmark-check-fill"></i> Tutti gli
                        annunci</a>
                </li>


                {{-- Categorie --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-diagram-3-fill"></i> Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize"
                                    href="{{ route('byCategory', ['category' => $category]) }} ">{{ $category->name }}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>



            </ul>
            @auth
                <div class="nav-link dropdown text-white me-4">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="bi bi-lightning-charge"></i> Gestione annunci</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('article.create') }}" class="dropdown-item"><i class="bi bi-journal-plus"></i>
                            Nuovo annuncio</a>

                    </div>
                </div>
            @endauth
            <div class="nav-item dropdown ">

                @auth
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"> Utente:
                        {{ Auth::user()->name }} <i class="bi bi-person-gear"></i></a>
                    <div class="dropdown-menu">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                            class="dropdown-item"> <i class="bi bi-person-dash-fill"></i> Logout</a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="form-logout"> @csrf
                        </form>
                    @else
                        <a href="#" class="nav-link dropdown-toggle text-white mx-3" data-bs-toggle="dropdown">Area
                            riservata</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('register') }}" class="dropdown-item"> <i
                                    class="bi bi-plus-square-dotted"></i> Registrati</a>
                            <a href="{{ route('login') }}" class="dropdown-item"><i class="bi bi-person-circle"></i>
                                Login</a>

                        @endauth

                    </div>
                </div>
            </div>



        </div>
</nav>
