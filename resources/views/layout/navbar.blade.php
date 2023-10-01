@extends('layout.template')

@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
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
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
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
                    <button class="btn btn-danger">Register</button>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title">
                <div class="hero-text" data-aos="fade-up">Selamat Datang <br> Di Pondok Pesantren</div>
                <h4>Pondok pesantren dengan konsep islam modern NU</h4>
            </div>
        </div>
    </section>

    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="fade-down-right">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="fade-down-right">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Berakhlak</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="fade-down-left">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Muamalah</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="fade-down-left">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Teknologi</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
