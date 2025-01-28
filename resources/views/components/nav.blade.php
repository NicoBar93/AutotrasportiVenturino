<nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
    <div class="container d-flex justify-content-between align-items-center alignMedia">
        <!-- Logo al centro -->
        <a class="navbar-brand mx-auto" href="{{ route('home')}}">
            <img src="media/LogoLeonardo3NoBG.png" alt="Logo" class="logoNav">
        </a>
        
        <!-- Bottone per il menu (posizionato a destra con CSS) -->
        <button class="navbar-toggler ms-auto" id="menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu di navigazione -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item border-0 border-end border-dark">
                    <a class="nav-link fw-bold {{$home ?? ""}}" href="{{ route('home')}}">HOME</a>
                </li>
                <li class="nav-item border-0 border-end border-dark">
                    <a class="nav-link fw-bold {{$aboutUs ?? ""}}" href="{{ route('aboutUs')}}">CHI SIAMO</a>
                </li>
                <li class="nav-item border-0 border-end border-dark">
                    <a class="nav-link fw-bold {{$service ?? ""}}" href="{{ route('service')}}">AREE SERVITE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{$contact ?? ""}}" href="{{route('contact')}}">PREVENTIVO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
