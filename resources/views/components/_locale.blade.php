<form class="d-inline" action="{{ route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn btm-small">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="24" height ="24" title="{{ $lang }} Language"/>
    </button>
</form>
