<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}" href="{{ route('comics.index') }}">Fumetti</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                        <a class="nav-link" href="#">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
