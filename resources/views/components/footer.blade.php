<!-- Footer-->
<footer class="py-5 bg-dark bg-gradient ">

    {{-- Mi sembra corretto visualizzarlo solo se non si è già revisore --}}
    @auth
    @if (!Auth::user()->is_revisor)    
    <div class="container px-4 text-white">
        <h5>Vuoi diventare revisore?</h5>
        <p>Cliccando il bottone sottostante farai partire una richiesta al nostro admin</p>
        <a href="{{ route('revisor.become') }}" class="btn btn-success btn-small">Diventa revisore</a>
    </div>
    @endif
    @endauth


    <div class="container px-4">
        <p class="m-0 text-center text-white">Roberto Lacava per Hackademy - Aulab</p>
    </div>
    
</footer>
