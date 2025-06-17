<x-layout>
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h2 class="display-5"><i class="bi bi-diagram-3-fill"></i> <br>{{ __('ui.catsingle') }} {{ $category->name}}</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="co1-12 text-center">
                    <h3>
                        {{ __('ui.noann') }}
                    </h3>
                    @auth
                    <a class="btn btn-dark my-5" href="{{ route('article.create') }}">{{ __('ui.newann') }}</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
