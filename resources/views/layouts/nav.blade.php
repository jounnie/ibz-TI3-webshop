@php
    $user = session('loggedInUser')
@endphp

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/advertisements">Weed2b</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/advertisements">Home</a>
            </li>
            @if('supplier' === $user->type)
                <li class="nav-item">
                    <a class="nav-link" href="/advertisements/create">Inserat erstellen</a>
                </li>
            @endif
        </ul>
    </div>

    <span class="navbar-text">Benutzer: {{ $user->nickname }} ({{ $user->type }})</span>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/logout">Abmelden</a>
        </li>
    </ul>
</nav>