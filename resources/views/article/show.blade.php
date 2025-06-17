<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h3>{{ __('ui.anndet') }}</h3>
            </div>
        </div>
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3 ">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img src="https://picsum.photos/40{{ $article->id }}" class="d-block w-100 rounded shadow"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            {{-- Piccolo accrocco per fare vedere immagini diverse - Just for Fun ! ;-) --}}
                            <img src="https://picsum.photos/40{{ $article->id + 1 }}"
                                class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Precedente</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Successivo</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom ">{{ __('ui.anncreate') }} 
                {{-- Un pochetto di stile per ora e data ;-)  --}}
                {{ $article->created_at->format('d/m/Y H:i') }}
                <h2 class="display-5">
                    <span class="fw-bold">
                        {{ $article->title }}</span>
                </h2>
                <p>{{ __('ui.catsingle') }} <span class="fw-bold"><a href="{{ route('byCategory', $article->category) }}"
                            title="{{ __('ui.viallart') }} {{ $article->category->name }}">
                            {{ $article->category->name }}
                        </a> </span></p>
                <h5>
                    <div class="fw-bold"> {{ __('ui.descart') }} </div>
                </h5>
                {{-- Due ore per capire come eliminare i maledetti <br> nella visualizzazione della descrizione. grazie "nl2br" --}}
                <h6> {!! nl2br($article->description) !!} </h6>
                <div class=" d-flex flex-column justify-content-center h-75">
                    <h4> {{ __('ui.price') }} {{ $article->price}}€ </strong>
                    </h4>

                </div>
            </div>
        </div>
        <button class="btn btn-secondary me-md-1 btn-sm" onclick="window.history.back()">{{__('ui.back')}}</button>
    </div>
</x-layout>
