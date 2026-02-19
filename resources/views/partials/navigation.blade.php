<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo/logoKenkoWeb.svg') }}" alt="Logo du site Kenko-Web" height="95">
                <span class="visually-hidden">Kenko Web</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                            class="nav-link {{ request()->routeIs('home') ? 'active-link' : '' }}" aria-current="page">
                            Accueil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('qui-suis-je') }}"
                            class="nav-link {{ request()->routeIs('qui-suis-je') ? 'active-link' : '' }}">
                            Qui suis-je ?
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}"
                            class="nav-link {{ request()->routeIs('contact') ? 'active-link' : '' }}">
                            Contact
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('faq') }}"
                            class="nav-link {{ request()->routeIs('faq') ? 'active-link' : '' }}">
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
