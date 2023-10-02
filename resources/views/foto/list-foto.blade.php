@extends('layout.template')

@section('content')
    {{-- Gallery --}}
    <section id="gallery" class="paralax section-foto mt-5">
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
                        <img src="{{ asset('assets/images/il-berita-03.png') }}" class="img-fluid gallery" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-photo-02.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid gallery" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-photo-03.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid gallery" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                    data-aos-duration="1000">
                    <a href="{{ asset('assets/images/il-photo-04.png') }}" class="image-link">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid gallery" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
