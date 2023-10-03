@extends('layout.template')

@section('content')
    <section id="dashboard" style="margin-top: 100px">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold">Tambah Blog Artikel</h3>
                    <div class="d-flex">
                        <a href="/blog">Blog</a>
                        <span class="mx-2">.</span>
                        <a href="">Tambah Artikel</a>
                    </div>
                    <form action="/blog" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-3">
                            <label for="">Judul Kegiatan</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                value="{{ old('judul') }}" name="judul">

                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="">Foto Kegiatan</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                value="{{ old('image') }}" name="image">

                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="">Deskripsi Kegiatan</label>
                            <textarea id="summernote" name="desc" class="form-control">
                                {{ old('desc') }}
                            </textarea>
                            @error('desc')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
