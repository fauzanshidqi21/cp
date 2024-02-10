@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Assalamualaikum, Selamat datang di halaman dashboard</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/camera.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text">Atur dan kelola artikel kegiatan perpustakaan istiqlal</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/camera.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dokumentasi Kegiatan</h5>
                            <p class="card-text">Atur dan kelola dokumentasi kegiatan perpustakaan istiqlal</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection