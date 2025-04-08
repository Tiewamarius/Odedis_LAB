<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: white;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a  href="/" class="logo d-flex align-items-center me-auto">
        <img src="welcome/assets/img/ODEDIS_LAB.jpg" alt="" data-aos="fade-in">
      </a>
      <nav id="navmenu" class="navmenu">
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <!-- Example split danger button -->
        <div class="cta-btn-group">
            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" style="border: 1px solid purple;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                MON ESPACE
            </button>
                @auth
                 <a href="{{ url('/dashboard') }}">Accueil</a>
                @else
                <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('register') }}">S'abonné</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}">Connexion</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Deconnexion</a></li>
                    
                </ul>
                @endauth
        </div>
        

    </div>
  </header>