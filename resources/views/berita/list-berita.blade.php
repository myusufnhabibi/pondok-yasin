@extends('layout.template')

@section('content')
    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center mt-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
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
                <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>

    </section>
@endsection
