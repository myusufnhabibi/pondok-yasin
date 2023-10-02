@extends('layout.template')

@section('content')
    <section id="login" style="margin-top: 100px">
        <div class="container py-5">
            <h2 class="fw-bold mb-3">Halaman Login Administrator</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection
