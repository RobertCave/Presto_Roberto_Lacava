<div class="card mx-auto card-w shadow mb-4">
   
    <img src="{{ $article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200'}}"
class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        @if (isset($article->category))
            <h6 class="card-subtitle text-body-secondary mb-2">{{ __('ui.catsingle') }}
                <a href="{{ route('byCategory', $article->category) }}"
                    title="{{ __('ui.viallart') }} {{ $article->category->name }}">
                    {{ $article->category->name }}
                </a>
            </h6>
        @endif
        <p class="text-body-secondary">{{ __('ui.price') }} {{ $article->price }} €</p>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-secondary me-md-1 btn-sm">{{ __('ui.readall') }}</a>
        </div>
    </div>
</div>
