<div class="card mx-auto card-w shadow mb-4">
    <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top" alt="{{ __('ui.artimg') }}">
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
