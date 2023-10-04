@extends('layout.template')

@section('content')
    <section id="dashboard" style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold">Halaman Foto</h3>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahFoto">
                Upload Foto
            </button>

            @if (session()->has('success'))
                <div class="alert alert-success mt-2">
                    <b>Info!</b> {{ session()->get('success') }}
                </div>
            @endif
            <div class="row">
                @if ($jumlah_foto > 0)
                    <div class="col-lg-3">
                        @foreach ($fotos as $item)
                            <div class="card">
                                <img src="{{ asset('storage/foto/' . $item->foto) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h5 class="text-center text-danger">Foto belum tersedia, silahkan upload dulu!</h5>
                @endif
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tambahFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/foto" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input required type="file" class="form-control" name="foto">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
