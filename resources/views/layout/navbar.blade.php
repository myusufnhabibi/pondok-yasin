{{-- Navbar --}}
<nav class="navbar navbar-expand-lg {{ Request::segment(1) == '' ? '' : 'shadow bg-white' }} py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/icons/ic-logo.png') }}" height="60" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn btn-danger" type="submit">Logout</button>
                    </form>
                @else
                    <a href="/login" class="btn btn-danger">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
