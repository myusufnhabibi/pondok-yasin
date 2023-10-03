@extends('layout.template')

@section('content')
    <section id="dashboard" style="margin-top: 100px">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="fw-bold">Edit Blog Artikel</h3>
                    <div class="d-flex">
                        <a href="/blog">Blog</a>
                        <span class="mx-2">.</span>
                        <a href="">Edit Artikel</a>
                    </div>
                    <form action="/blog/{{ $artikel->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group my-3">
                            <label for="">Judul Kegiatan</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                value="{{ old('judul', $artikel->judul) }}" name="judul">

                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="">Foto Kegiatan</label>
                            <input type="hidden" name="old_image" value="{{ $artikel->image }}">
                            <div class="my-2">
                                <img height="100" src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="">
                            </div>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="">Judul Kegiatan</label>
                            <textarea id="summernote" name="desc" class="form-control">
                                {!! $artikel->desc !!}
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
