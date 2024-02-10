    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top"  style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/ic-logo.png') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Sejarah</a></li>
                        <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="#">Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="#">Struktur</a></li>
                        </ul>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://digilib.istiqlal.himamalgroup.biz.id/koleksi/">Koleksi Perpustakaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Perpustakaan Digital</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/login">Login</a>
                </li>
                </ul>
                
                    <div class="form-check form-switch mx-4">
                        <input
                        class="form-check-input p-2" 
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckChecked"
                        checked
                        onclick="myFunction()"
                        />
                    </div>
                    <script>
                        function myFunction(){
                            var element = document.body;
                            element.dataset.bsTheme =
                            element.dataset.bsTheme == "light" ? "dark" : "light";
                        }
                    </script>
                </body>
                <div class="d-flex">
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark">Logout</button>
                        </form>
                    @else 
                        <button class="btn btn-danger">Pengunjung Perpustakaan</button>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}