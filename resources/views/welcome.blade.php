@extends('layouts.layouts')

@section('content')
<section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
            <h1 class="hero-text">Perpustakaan Istiqlal</h1>
            <h3>NPP 3171024E0000001</h3>
            <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                <form action="https://slims.perpustakaanistiqlal.or.id/" class="search-form" method="GET">
                    <input type="hidden" name="search" value="search"> <input value="" type="text" id="searchForm" name="keywords" autocomplete="off" placeholder="Masukan kata kunci, judul, pengarang, atau subjek..."  class="input-transparent w-50">
                </form>
            </div>
        </div>
    </section>
    {{-- Search Bar --}}
    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Koleksi <br> Perpustakaan</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" height="40" width="40" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Dokumentasi <br> Perpustakaan</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-book.png') }}" height="40" width="40" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Layanan <br> Perpustakaan</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="40" width="40" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Register Online <br> Perpustakaan</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="40" width="40" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Kegiatan Perpustakaan</h2>
            </div>

            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/'. $item->image) }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="text-secondary">#perpustakaanislamdigital</p>
                                <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Berita --}}


    {{-- Video --}}
    <section id="video" class="py-5" data-aos="zoom-in">
        <div class="continer py-3">
            <div class="text-center">
                <h2 class="fw-bold">Video Profile Perpustakaan</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/P3bKSIKmZuM?si=JNrLVSjZPQtbjP2L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    {{-- Video --}}
    {{-- Video --}}
    <section id="video_youtube" class="py-5" data-aos="zoom-in">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Istiqlal</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/P3bKSIKmZuM?si=JNrLVSjZPQtbjP2L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/P3bKSIKmZuM?si=JNrLVSjZPQtbjP2L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215" src="https://www.youtube.com/embed/P3bKSIKmZuM?si=JNrLVSjZPQtbjP2L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Video Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Video --}}
    {{-- Gambar --}}
    <section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Dokumentasi</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-danger">Dokumentasi Lainnya</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="img-link" href="{{ asset('assets/images/il-photo-01.png') }}">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="img-link" href="{{ asset('assets/images/il-photo-02.png') }}">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="img-link" href="{{ asset('assets/images/il-photo-03.png') }}">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="img-link" href="{{ asset('assets/images/il-photo-04.png') }}">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Gambar --}}

    {{-- Kerja Sama --}}
    <section id="kerjasama" class="py-5" data-aos="zoom-in-up">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fw-bold">Kerjasama Perpustakaan Istiqlal</h3>
            </div>
            <img src="{{ asset('assets/images/kerjasama.svg') }}" class="img-fluid py-5" alt="">

            <div class="text-center">
                <a href="" class="btn btn-outline-danger">Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Kerja Sama --}}

    {{-- Google Maps --}}
    <section id="maps" class="py-2" data-aos="flip-down">
        <div class="container py-2">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                    </div>
                    <h1 class="fw-bold mb-2">Lokasi Perpustakaan Istiqlal</h1>
                    <div class="stripe me-2"></div>
                    <p align="justify" class="mb-3">
                        Perpustakaan Istiqlal, terletak di area perkantoran lantai dasar Masjid Istiqlal. Dapat di jangkau dari pintu masuk wanita di Al-Quddus maupun pintu masuk utama di al-Fattah.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.708377056726!2d106.82871847503729!3d-6.169789693817522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ce12f90ff5%3A0x420d4653c0933fb5!2sPerpustakaan%20Istiqlal!5e0!3m2!1sen!2sid!4v1707505695831!5m2!1sen!2sid" width="1300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
        </div>
</section>
{{-- Join --}}
@endsection