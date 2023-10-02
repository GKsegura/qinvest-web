
<header class="header-color">
    <div class="container header-content h-100">
        <div class="header-logo">
            <a href="/">
                <img id="theme-logo" alt="" class="light-logo" src="assets/logo.svg">
            </a>
        </div>

        <div class="header-nav">
            <a href="/" class="header-link nav-link">Home</a>
            <a href="/education" class="header-link nav-link">Educacional</a>
            <a href="/stock" class="header-link nav-link">Ações</a>
            <a href="/about" class="header-link nav-link">Sobre nós</a>

        </div>

        <div class="header-icons">
            @auth
                <a href="/logout" class="header-icon"><i class="bi bi-box-arrow-right"></i></a>
                <a href="/profile" class="header-link nav-link">{{ Auth::user()->username }}</a></span>
            @else
                <a href="/register" class="header-icon"><i class="bi bi-person-circle"></i></a>
            @endauth
            <i id="theme-icon" class="bi bi-sun-fill header-icon"></i>
        </div>
    </div>
</header>