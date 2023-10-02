@extends('layout.template')

@section('content')
    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                <div class="hero-text">Selamat Datang
                    <br> Di Pondok Pesantren
                </div>
                <h4>Pondok pesantren dengan konsep islam modern NU</h4>
            </div>
        </div>
    </section>

    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="flip-down" data-aos-easing="linear"
                    data-aos-duration="500">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Berkualitas</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="flip-down" data-aos-easing="linear"
                    data-aos-duration="500">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Berakhlak</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="flip-down" data-aos-easing="linear"
                    data-aos-duration="500">
                    <div class="bg-white shadow d-flex p-4 rounded-3 justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan Muamalah</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" width="50" height="50" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col col-md-6 mb-2" data-aos="flip-down" data-aos-easing="linear"
                    data-aos-duration="500">
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

    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                <h2 class="fw-bold">
                    Berita Kegiatan Pondok Pesantren
                </h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
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
                    <div class="card border-0" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/il-berita-02.png') }}" class="img-fluid mb-2" alt="">
                        <div class="konten-berita">
                            <p class="text-secondary mb-3">21/10/2023</p>
                            <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Yasin</h4>
                            <p class="text-secondary">#pengajian</p>
                            <a href="#" class="btn text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/il-berita-03.png') }}" class="img-fluid mb-2" alt="">
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
                <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>

    </section>

    {{-- Join --}}
    <section id="join">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6" data-aos="fade-down-right" data-aos-easing="linear" data-aos-duration="1000">
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
                <div class="col-lg-6" data-aos="fade-down-left">
                    <img src="{{ asset('assets/images/il-join.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Video --}}
    <section id="video" class="py-5" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container py-5">
            <div class="text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM"
                    title="YouTube video player" frameborder="0"
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
                <div class="col-lg-4" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="1000">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-4" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="1000">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-lg-4" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="1000">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/A927ale9-vI?si=n7zoEPtTNFClNxCM" title="YouTube video player"
                        frameborder="0"
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
                    <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-berita-03.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-berita-03.png') }}" class="img-fluid gallery"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-photo-02.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid gallery"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-photo-03.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid gallery"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-photo-04.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid gallery"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
