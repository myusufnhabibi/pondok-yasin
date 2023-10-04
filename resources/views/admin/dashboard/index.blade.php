@extends('layout.template')

@section('content')
    <section id="dashboard" style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold">Halaman Administrator</h3>
            <p>Selamat datang di halaman dashboard admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img class="card-img-top" src="{{ asset('assets/images/db-1.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Blok Artikel</h5>
                            <p class="card-text">Atur dan kelola artikel kegiatan</p>
                            <a href="/blog" class="btn btn-primary">Detail</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img class="card-img-top" src="{{ asset('assets/images/db-3.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Foto Kegiatan</h5>
                            <p class="card-text">Atur dan kelola artikel foto</p>
                            <a href="/foto" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
