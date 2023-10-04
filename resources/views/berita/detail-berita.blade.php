@extends('layout.template')

@section('content')
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="row py-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="d-flex">
                        <p><a class="text-decoration-none" href="/">Home / </a> <a class="text-decoration-none"
                                href="/berita"> Berita / </a> {{ $artikel->judul }}</p>
                    </div>
                    <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid mb-2 rounded-3"
                        alt="">
                    <div class="konten-berita">
                        <p class="text-secondary mb-3">{{ date('d-m-Y', strtotime($artikel->created_at)) }}</p>
                        <h4 class="fw-bold mb-3">{{ $artikel->judul }}</h4>
                        <p>{!! $artikel->desc !!}</p>
                        <p class="text-secondary">#pengajian</p>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
