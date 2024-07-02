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
                    <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid" alt="Image" style="height: 60px">
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
                <a href="/tentang-kami" class="nav-item nav-link active fs-6">Tentang Kami</a>
                <a href="/artikel" class="nav-item nav-link fs-6">Artikel</a>
                <a href="/kontak-kami" class="btn btn-primary nav-item nav-link py-4 px-lg-4 rounded fs-6 text-white">HUBUNGI KAMI</a>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    @foreach ($header as $headers)
    <div class="container-fluid py-5 mb-2" style="background: linear-gradient(rgba(53, 53, 53, .7), rgba(53, 53, 53, .7)), url('{{ Storage::disk('s3')->url($headers->images->path) }}') center center no-repeat; background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    @endforeach
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden  px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                @foreach ($about as $abouts)
                <div class="col-lg-5 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <div class="video">
                            <img class="position-absolute img-fluid w-100 h-100" src="{{ Storage::disk('s3')->url($abouts->gambar) }}" style="object-fit: cover;" alt="">
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="{{ $abouts->video }}" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Tentang Kami</h1>
                        </div>
                        <h2 class="mb-3">{{ $abouts->judul }}</h2>
                        <p class="mb-4 pb-2">{{ $abouts->text }}</p>

                        {{-- <a href="/tentang-kami" class="btn btn-primary py-3 px-5">Explore More</a> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-2 pt-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-5 px-5">
                <div class="col-lg-4 col-md-6">
                    @foreach ($logo as $logos)
                        @if ($logos->images)
                            <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid" alt="Image" style="height: 60px">
                        @else
                            Gambar tidak tersedia
                        @endif
                    @endforeach
                    @foreach ($about as $abouts)
                        <p class="mb-2">{{ $abouts->text }}</p>
                    @endforeach
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