<x-layout>


     <div class="row justify-content-center align-content-center ">
        <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
            <h1 class="text-center"><i class="bi bi-journal-plus"></i><br>
                Inserisci annuncio
            </h1>

        </div>
    </div>

    <x-display-error/>
    <x-display-message/>

    <div class="container flex mb-5 height-custom">
        <div class="row mt-5 justify-content-center align-content-center ">
            <div class="col-12 col-md-6 ">

                    <livewire:create-article-form />
                 
            </div>
        </div>
    </div>

</x-layout>