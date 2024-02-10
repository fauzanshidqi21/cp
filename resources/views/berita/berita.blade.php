@extends('layouts.layouts')

@section('content')
    {{-- Berita --}}
<section id="berita" style="margin-top: 100px" class="py-5">
    <div class="container">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita Kegiatan Perpustakaan</h2>
        </div>

        <div class="row py-5" data-aos="flip-up">
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">27/01/2024</p>
                        <h4 class="fw-bold mb-3">Kegiatan Ceramah Bulanan Istiqlal</h4>
                        <p class="text-secondary">#perpustakaanislamdigital</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">27/01/2024</p>
                        <h4 class="fw-bold mb-3">Kegiatan Ceramah Bulanan Istiqlal</h4>
                        <p class="text-secondary">#perpustakaanislamdigital</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">27/01/2024</p>
                        <h4 class="fw-bold mb-3">Kegiatan Ceramah Bulanan Istiqlal</h4>
                        <p class="text-secondary">#perpustakaanislamdigital</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>
{{-- Berita --}}
@endsection