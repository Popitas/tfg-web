<div class="navbar-main">
    <a href="/" class="navbar-main-title">
        / Eventia /
    </a>

    <span class="navbar-main-links">
        <a href="{{ route('music') }}"
            class="{{ (Request::is('music') ? 'active transition' : 'transition') }}">
            Música
        </a>
        <a href="{{ route('sports') }}"
            class="{{ (Request::is('sports') ? 'active transition' : 'transition') }}">
            Deportes
        </a>
        <a href="{{ route('theatre') }}"
            class="{{ (Request::is('theatre') ? 'active transition' : 'transition') }}">
            Teatro y danza
        </a>
        <a href="{{ route('comedy') }}"
            class="{{ (Request::is('comedy') ? 'active transition' : 'transition') }}">
            Comedia y magia
        </a>
    </span>
</div>
