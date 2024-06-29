<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Decoration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <div style="margin-left: 6%">
            @foreach ($logo as $logos)
                @if ($logos->images)
                    <img src="{{ asset('storage/' . $logos->images->path) }}" class="img-fluid " alt="Image" style="width: 200px; height: 65px; object-fit: cover; ">
                @else
                    Gambar tidak tersedia
                @endif
            @endforeach
        </div>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <div class="navbar-nav p-4 p-lg-0 justify-content-center">
                <a href="/" class="nav-item nav-link fs-6">Beranda</a>
                <a href="layanan" class="nav-item nav-link fs-6">Layanan</a>
                <a href="/galleri" class="nav-item nav-link fs-6">Galeri</a>
                <a href="/portofolio" class="nav-item nav-link fs-6">Portofolio</a>
                <a href="/tentang-kami" class="nav-item nav-link fs-6">Tentang Kami</a>
                <a href="/artikel" class="nav-item nav-link active fs-6">Artikel</a>
                <a href="/kontak-kami" class="btn btn-primary nav-item nav-link py-4 px-lg-4 rounded fs-6 text-white">HUBUNGI KAMI</a>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    @foreach ($header as $headers)
    <div class="container-fluid py-5 mb-2" style="background: linear-gradient(rgba(53, 53, 53, .7), rgba(53, 53, 53, .7)), url('{{ asset('storage/' . $headers->images->path) }}') center center no-repeat; background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Artikel</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>
    </div>
    @endforeach
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Artikel Terbaru</h1>
            </div>
            
            <div class="row g-4 portfolio-container">
                <div class="col-lg-3 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <a href="">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-primary fw-medium mb-2">Judul Berita</h5>
                            <p class="lh-base mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <a href="">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-primary fw-medium mb-2">Judul Berita</h5>
                            <p class="lh-base mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <a href="">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-primary fw-medium mb-2">Judul Berita</h5>
                            <p class="lh-base mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <a href="">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <h5 class="text-primary fw-medium mb-2">Judul Berita</h5>
                            <p class="lh-base mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Projects End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-2 pt-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-5 px-5">
                <div class="col-lg-4 col-md-6">
                    @foreach ($logo as $logos)
                        @if ($logos->images)
                            <img src="{{ asset('storage/' . $logos->images->path) }}" class="img-fluid" alt="Image" style="height: 60px">
                        @else
                            Gambar tidak tersedia
                        @endif
                    @endforeach
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, officiis, praesentium corporis odit labore voluptas quis voluptatem temporibus </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    @foreach ($contact as $kontak)
                    <h4 class="text-light mb-4">Follow Us</h4>
                    <p><a class="text-white" href="https://wa.me/{{ $kontak->whatsapp }}" target="Tes Aja"><i class="fab fa-whatsapp text-primary me-2"></i> Whatsapp</a></p>
                    <p><a class="text-white" href="{{ $kontak->instagram }}"><i class="fab fa-instagram text-primary me-2"></i> Instagram</a></p>
                    <p><a class="text-white" href="{{ $kontak->facebook }}"><i class="fab fa-facebook text-primary me-2"></i> Facebook</a></p>
                    <p><a class="text-white" href="{{ $kontak->youtube }}"><i class="fab fa-youtube text-primary me-2"></i> Youtube</a></p>
                    @endforeach
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://websidn.com">Websidn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    @foreach ($contact as $kontak)
        <a href="https://wa.me/{{ $kontak->whatsapp }}?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="whatsapp-sticky">
            <i class="fab fa-whatsapp"></i>
        </a>
    @endforeach

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>