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
            </div>

            <div class="row py-5">
                @foreach ($fotos as $item)
                    <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-left" data-aos-easing="linear"
                        data-aos-duration="1000">
                        <a href="{{ asset('storage/foto/' . $item->foto) }}" class="image-link">
                            <img src="{{ asset('storage/foto/' . $item->foto) }}" class="img-fluid gallery" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
