<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="{{ asset('assets/img/salta.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <script>
                // Wait for the DOM to fully load
                document.addEventListener("DOMContentLoaded", function() {
                    const navLinks = document.querySelectorAll('.nav-item.nav-link');

                    navLinks.forEach(link => {
                        link.addEventListener('click', function() {
                            // Remove 'active' class from all links
                            navLinks.forEach(item => item.classList.remove('active'));
                            // Add 'active' class to the clicked link
                            this.classList.add('active');
                        });
                    });
                });
            </script>

            <div class="navbar-nav ms-auto py-0">
                <a href="#homenav" class="nav-item nav-link active">Home</a>
                <a href="#aboutnav" class="nav-item nav-link">About</a>
                <a href="#navservices" class="nav-item nav-link">Services</a>
                <a href="#offernav" class="nav-item nav-link">Our offer</a>
                <a href="#teamnav" class="nav-item nav-link">Our team</a>
                <a href="#testimonialnav" class="nav-item nav-link">Testimonial</a>
                {{-- <div class="nav-item dropdown">
                 <a href="#" class="nav-link" data-bs-toggle="dropdown">
                     <span class="dropdown-toggle">Pages</span>
                 </a>
                 <div class="dropdown-menu m-0">
                     <a href="#team" class="dropdown-item">Our team</a>
                     <a href="#testimonial" class="dropdown-item">Testimonial</a>
                     <a href="#offer" class="dropdown-item">Our offer</a>
                 </div>
             </div> --}}
                <a href="#contactnav" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Carousel Start -->
    <div id="homenav" class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="assets/img/fotoslide2.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5">
                            {{-- <img src="assets/img/contentslide2.jpeg" alt="Logo"> --}}
                        </div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To GREEN PRESERVO</h4>
                                <h1 class="display-4 text-uppercase mb-4" style="color: greenyellow">
                                    Cara Produksi Pangan Olahan yang Baik (CPPOB) BPOM RI
                                </h1>
                                <p class="mb-1 fs-5">
                                    No. Evaluasi : PPP2409-5197
                                    <br>
                                    Id Izin OSS : I-202408080403581932627
                                    <br>
                                    e-sertifikasi.pom.go.id
                                </p>
                                <p class="text-uppercase mb-1" style="color: greenyellow">
                                    NOMOR INDUK BERUSAHA (NIB) : 2008230053865
                                    <br>
                                    NOMOR POKOK WAJIB PAJAK (NPWP) : 31.351.075.2-407.000
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                                        href="assets/video/video1.mp4" target="_blank"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    {{-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                     href="#">Learn More</a> --}}
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="assets/img/fotoslide3.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To GREEN PRESERVO</h4>
                                <h1 class="display-4 text-uppercase mb-4" style="color: greenyellow">
                                    Hindari Penggunaan Bahan Tambahan Pangan Berbahaya Bagi Kesehatan Masyarakat
                                    Indonesia.
                                </h1>
                                <p class="mb-5 fs-5">
                                    Green Preservo Hadir Memenuhi Standar Cara Produksi Pangan Olahan Yang Baik
                                    (CPPOB) BPOM RI Sesuai Dengan PERATURAN BADAN PENGAWAS OBAT DAN MAKANAN NOMOR 11
                                    TAHUN 2019 TENTANG BAHAN TAMBAHAN PANGAN & NOMOR 29 TAHUN 2021 TENTANG
                                    PERSYARATAN BAHAN TAMBAHAN PANGAN CAMPURAN
                                </p>
                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                                        href="assets/video/video1.mp4" target="_blank"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    {{-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                     href="#">Learn More</a> --}}
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <img src="assets/img/fotoslide2.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-lg-0 col-xl-5">
                            {{-- <img src="assets/img/contentslide2.jpeg" alt="Logo"> --}}
                        </div>
                        <div class="col-xl-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-2">Welcome To GREEN PRESERVO</h4>
                                <h1 class="display-4 text-uppercase mb-2" style="color: greenyellow">
                                    Green Preservo Di Distribusikan Kepada Produsen Pangan Olahan Di Seluruh
                                    Indonesia
                                </h1>
                                <p class="mb-1 fs-5">
                                    Digunakan Untuk Pangan Olahan Seperti : Pangan Olahan Tahu, Mie Kuning, Bakso,
                                    Otak-Otak, Cincau, dll.
                                </p>
                                {{-- <p class="text-uppercase mb-4" style="color: greenyellow">
                                 NOMOR INDUK BERUSAHA (NIB) : 2008230053865 
                                 <br>
                                 NOMOR POKOK WAJIB PAJAK (NPWP) : 31.351.075.2-407.000
                             </p> --}}
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                                        href="assets/video/video1.mp4" target="_blank"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    {{-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                     href="#">Learn More</a> --}}
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>
