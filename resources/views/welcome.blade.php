<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pondok Pesantren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="antialiased">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/ic-logo.png') }}" height="60" width="60" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
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
                <div class="hero-text">Selamat Datang <br> Di Pondok Pesantren</div>
                <h4>Pondok pesantren dengan konsep islam modern NU</h4>
            </div>
        </div>
    </section>

    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col col-md-6 mb-2">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Berakhlak</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" width="50" height="50"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Muamalah</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" width="50" height="50"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Teknologi</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" width="50" height="50"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">
                    Berita Kegiatan Pondok Pesantren
                </h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-2" alt="">
                        <div class="konten-berita">
                            <p class="text-secondary mb-3">21/10/2023</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Yasin</h4>
                            <p class="text-secondary">#pengajian</p>
                            <a href="#" class="btn text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-02.png') }}" class="img-fluid mb-2"
                            alt="">
                        <div class="konten-berita">
                            <p class="text-secondary mb-3">21/10/2023</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Yasin</h4>
                            <p class="text-secondary">#pengajian</p>
                            <a href="#" class="btn text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-03.png') }}" class="img-fluid mb-2"
                            alt="">
                        <div class="konten-berita">
                            <p class="text-secondary mb-3">21/10/2023</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Yasin</h4>
                            <p class="text-secondary">#pengajian</p>
                            <a href="#" class="fw-bold text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>

    </section>

    {{-- Join --}}
    <section id="join">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe"></div>
                        <h4 class="text-stripe">Daftar Santri</h4>
                    </div>
                    <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabbani</h1>
                    <p class="mb-3">
                        Pesantren Yasin merupakan pesantren terbaik di Kudus, dengan meluluskan santri menjadi ustadz
                        terkemuka mendakwahkan di pelosok nusantara
                    </p>
                    <button class="btn btn-outline-danger">Register</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/il-join.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Video --}}
    <section id="video" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="video-yt">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">
                    Video Kegitan Pesantren
                </h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Video Lainnya</a>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section id="gallery" class="paralax section-foto">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h4 class="text-white fw-bold">Gallery</h4>
                </div>
                <div>
                    <a href="" class="btn btn-outline-white">Foto Lainnya</a>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/il-berita-03.png') }}" class="img-fluid gallery"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid gallery"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid gallery"
                        alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid gallery"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <div id="footer" class="py-5">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Berita</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Kegiatan</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Gallery</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Follow Kami</h5>
                        <div class="d-flex">
                            <a href="" target="_blank" class="text-decoration-none">
                                <img src="{{ asset('assets/icons/icons8-facebook.svg') }}" class="me-4"
                                    width="30" height="30" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none">
                                <img src="{{ asset('assets/icons/icons8-twitter.svg') }}" class="me-4"
                                    width="30" height="30" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none">
                                <img src="{{ asset('assets/icons/icons8-instagram.svg') }}" class="me-4"
                                    width="30" height="30" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none">
                                <img src="{{ asset('assets/icons/icons8-tiktok.svg') }}" class="me-4"
                                    width="30" height="30" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Kontak Kami</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">yasin@sch.id</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">021-2323-2323</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">+628-232-323-454</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="" class="nav-link p-0 text-muted">+628-232-323-454</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Alamat Kami</h5>
                        <span class="text-dark">Jl. Gor Wergu Wetan Kota Kudus</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        const navbar = document.querySelector('.fixed-top')
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active")
                navbar.classList.add("scroll-text-active")
                navbar.classList.remove("navbar-dark")
            } else {
                navbar.classList.remove("scroll-nav-active")
                navbar.classList.add("navbar-dark")
            }
        }
    </script>
</body>

</html>
