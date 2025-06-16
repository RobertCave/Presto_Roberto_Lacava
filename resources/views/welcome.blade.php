<x-layout>

   
    <!-- Header-->
    <header class="bg-dark py-2 bg-gradient">
        <div class="container px-4 height-custom">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder"><i class="bi bi-lightning-charge"></i><br>Welcome to Presto</h1>
                <p class="lead fw-normal text-white-50 mb-0">Ondemand Progetto Finale Presto - Hackademy on demand 1^
                    edizione</p>
                <p class="fw-normal text-white-50 mb-0 small">User Story 2</p>
            </div>
        </div>
    </header>

     @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-12 alert alert-success text-center shadow rounded">
                <h3 class="text-center pb-2">
                    {{ session('message') }}
                </h3>
            </div>
        </div>
    @endif


    <div class="row height-custom justify-content-center align-items-center py-5">
        <h4 class="fw-bolder"> Ultimi 6 annunci pubblicati</h4>
        @forelse ($articles as $article)
            <div class="col-12 col-md-4 py-2">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="co1-12">
                <h3 class="text-center">
                    Non sono ancora stati creati articoli
                </h3>
            </div>
        @endforelse
    </div>

</x-layout>
