<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}




    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Nuovo Articolo</h5>
                    <a href="/" class="btn btn-secondary btn-sm">
                        ← Torna indietro
                    </a>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <form wire:submit="store">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo *</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" wire:model.blur="title" placeholder="Inserisci il titolo dell'articolo">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria *</label>
                            <select id="category" wire:model.blur="category"
                                class="form-control @error('category') is-invalid @enderror"
                                aria-describedby="categoryHelp" required>
                                <option value="" selected disabled>Seleziona una categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div id="categoryHelp" class="form-text">Seleziona la categoria appropriata per il tuo
                                articolo</div>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione articolo *</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="8"
                                wire:model.blur="description" placeholder="Descrivi l'articolo..."></textarea>
                            <div id="categoryHelp" class="form-text">Descrivi in modo accurato il tuo articolo</div>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo *</label>
                            <div class="input-group">
                                <span class="input-group-text">€</span>
                                <input type="number" step="0.01" min="0"
                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                    wire:model.blur="price" placeholder="0.00" aria-describedby="priceHelp">
                            </div>
                            <div id="priceHelp" class="form-text">Inserisci il prezzo in euro (es. 10.99)</div>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('article.index') }}" class="btn btn-secondary me-md-2">
                                Annulla
                            </a>
                            <button type="submit" class="btn btn-success">
                                <span wire:loading.remove>Inserisci Articolo</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
