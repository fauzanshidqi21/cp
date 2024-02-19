<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">
    <title>Perpustakaan Istiqlal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Summernote CSS--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body>
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- content --}}
    @yield('content')

        {{-- Footer --}}  
        <section class="bg-grey-darkest text-grey-lighter" style="background-color: #e3f2fd" data-aos="zoom-out">
            <div class="container py-4">
                <div class="container py-4">
                    <footer>
                        <div class="row">
                            {{-- kolom1 navigasi--}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Navigasi</h5>
                                <div class="d-flex">
                                    <ul class="nav flex-column me-5">
                                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Home</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Koleksi Perpustakaan</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Perpustakaan Digital</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kontak</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{--  end of kolom 1 --}}

                            {{-- kolom 2 Media Sosial--}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Follow kami</h5>
                                <div class="d-flex mb-3">
                                    <a href="" target="_blank" class="text-decoration-none text-dark">
                                        <img src="{{ asset('assets/icons/igs.svg') }}"  height="30" width="30" class="me-4" alt="">
                                    </a>
                                    <a href="" target="_blank" class="text-decoration-none text-dark">
                                    </a>
                                    <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('assets/icons/fb.svg') }}"  height="30" width="30" class="me-4" alt="">
                                        <img src="{{ asset('assets/icons/wa.svg') }}"  height="30" width="30" class="me-4" alt="">
                                    </a>
                                    <a href="" target="_blank" class="text-decoration-none text-dark">
                                        <img src="{{ asset('assets/icons/yt.svg') }}"  height="30" width="30" class="me-4" alt="">
                                    </a>
                                </div>
                            </div>

                            {{-- kolom3 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">perpustakaan@istiqlal.or.id</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">(+62)81229119652</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"> (021) 3850432</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"> (021) 3850432</a>
                                    </li>
                                </ul>
                            </div>

                            {{-- kolom4 alamat --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="font-inter fw-bold mb-3">Alamat Perpustakaan</h5>
                                <p>Masjid Istiqlal, Taman Wijayakusuma, Pasar Baru, Sawah Besar, Jakarta Pusat, DKI Jakarta 10710</p>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                    <p>
                        &copy; Copyright 2024 | Perpustakaan Istiqlal
                    </p>
                    </div>
                    <div class="d-flex">
                        <p class="me-4">Develop by: <a href="https://www.linkedin.com/in/fauzan-shidqi-78623912b/">Fauzan Shidqi</a></p>
                        <p>
                            Power by: <a href="#">PT.HSN</a>
                        </p>
                        
                    </div>
                </div>
            </div>
        </section>
    {{-- End Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- jQuery --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    {{-- JQUERY --}}
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


    <script>
        $(document).ready(function() {
                    $('#summernote').summernote({
                        height: 200,
                    });
        });
    </script>
    
    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                
            } else {
                navbar.classList.remove("scroll-nav-active");
                
            }
        };
        // Animasi aos //
        AOS.init();       
        
        //Magnific
        $(document).ready(function(){
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio){
                        return item.src.replace(/\.\w+$/, function(m){
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>
