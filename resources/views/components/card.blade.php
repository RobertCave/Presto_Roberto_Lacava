<div class="card mx-auto card-w shadow text-center mb-4">
    <img src="https://picsum.photos/20{{ $article->id }}" class="card-img-top"
        alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle text-body-secondary">{{ $article->price }} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-secondary me-md-1 btn-sm">Leggi
                tutto</a>

            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="btn btn-success btn-sm">{{ $article->category->name }}</a>

        </div>
    </div>

</div>
