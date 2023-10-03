@extends('layout.template')

@section('content')
    <section id="dashboard" style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold">Halaman Blogs Artikel</h3>

            <a href="/blog/create" class="btn btn-primary">Tambah Artikel</a>
            @if (session()->has('success'))
                <div class="alert alert-success mt-2">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/artikel/' . $item->image) }}" height="100" alt="">
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <a href="{{ '/blog/' . $item->id . '/edit' }}" class="btn btn-info mb-2">Edit</a>
                                    <form action="/blog/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning"
                                            onclick="return confirm('Apakah yakin ingin dihapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
