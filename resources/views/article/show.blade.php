<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mb-4">
            <div class="col-12">
                <h3>{{ __('ui.anndet') }}</h3>
            </div>
        </div>

        <div class="row">
            <!-- Carosello a sinistra -->
            <div class="col-12 col-md-6 mb-3">
                @if ($article->images->count() > 0)
                    <div class="carousel-container">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicatori del carosello -->
                            <div class="carousel-indicators">
                                @foreach ($article->images as $key => $image)
                                    <button type="button" data-bs-target="#carouselExample"
                                        data-bs-slide-to="{{ $key }}"
                                        class="@if ($loop->first) active @endif"
                                        aria-current="@if ($loop->first) true @endif"
                                        aria-label="Slide {{ $key + 1 }}"></button>
                                @endforeach
                            </div>

                            <!-- Contenuto del carosello -->

                            <div class="carousel-inner">
                                @foreach ($article->images as $key => $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow"
                                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                                    </div>
                                @endforeach
                            </div>

                            @if ($article->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Prev</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="carousel-container">
                        <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente"
                            class="d-block w-100">
                    </div>
                @endif
            </div>

            <!-- Dettagli dell'articolo a destra -->
            <div class="col-12 col-md-6 mb-3">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <p class="text-muted mb-1">{{ __('ui.anncreate') }}
                            {{ $article->created_at->format('d/m/Y H:i') }}</p>
                        <h2 class="card-title fw-bold mb-3">{{ $article->title }}</h2>

                        <p class="mb-3">{{ __('ui.catsingle') }}
                            <span class="fw-bold">
                                <a href="{{ route('byCategory', $article->category) }}"
                                    title="{{ __('ui.viallart') }} {{ $article->category->name }}">
                                    {{ $article->category->name }}
                                </a>
                            </span>
                        </p>

                        <h5 class="fw-bold mt-4">{{ __('ui.descart') }}</h5>
                        <div class="description-container mb-4">
                            <h6>{!! nl2br($article->description) !!}</h6>
                        </div>

                        <div class="mt-auto">
                            <h3 class="fw-bold text-primary mb-4">{{ __('ui.price') }} {{ $article->price }}€</h3>
                            <button class="btn btn-secondary me-md-1"
                                onclick="window.history.back()">{{ __('ui.back') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
