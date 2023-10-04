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
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-2 rounded-3"
                                alt="">
                            <div class="konten-berita">
                                <p class="text-secondary mb-3">{{ date('d-m-Y', strtotime($item->created_at)) }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="text-secondary">#pengajian</p>
                                <a href="/detail/{{ $item->slug }}" class="btn text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
