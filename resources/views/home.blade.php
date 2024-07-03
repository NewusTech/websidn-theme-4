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
                <a href="/" class="nav-item nav-link active fs-6">Beranda</a>
                <a href="layanan" class="nav-item nav-link fs-6">Layanan</a>
                <a href="/galleri" class="nav-item nav-link fs-6">Galeri</a>
                <a href="/portofolio" class="nav-item nav-link fs-6">Portofolio</a>
                <a href="/tentang-kami" class="nav-item nav-link fs-6">Tentang Kami</a>
                <a href="/artikel" class="nav-item nav-link fs-6">Artikel</a>
                <a href="/kontak-kami" class="btn btn-primary nav-item nav-link py-4 px-lg-4 rounded fs-6 text-white">HUBUNGI KAMI</a>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-2">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($carousel as $carosel)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ Storage::disk('s3')->url($carosel->path) }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                {{-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Elegant Decoration</h5> --}}
                                <h1 class="display-4 text-white animated slideInDown mb-4">Selamat Datang Di Elegant Decoration</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Layanan Kami</h1>
            </div>
            <div class="row g-4">
                @foreach ($service as $layanan)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ Storage::disk('s3')->url($layanan->image) }}" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{ $layanan->judul }}</h4>
                            <p>{{ $layanan->detail }}</p>
                            <a class="fw-medium" href="/layanan" >Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Service End -->
    

    <!-- Prices Start -->
    <div class="container-fluid bg-third overflow-hidden">
        <div class="container feature py-3">
            <div class="section-title text-center ">
                <h1 class="display-5 mb-3 text-white">Pricelist</h1>
            </div>
            <div class="card-container">
                @foreach ($price as $prices)
                <div class="price-card">
                    <h3>{{ $prices->judul }}</h3>
                    <ul>
                        <li>{{ $prices->item1 }}</li>
                        <li>{{ $prices->item1 }}</li>
                        <li>{{ $prices->item1 }}</li>
                        <li>{{ $prices->item1 }}</li>
                        <li>{{ $prices->item1 }}</li>
                    </ul>
                    <a href="/layanan" class="read-more-btn">See More</a>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>  
    <!-- Prices End -->

    <!-- About Start -->
    @foreach ($about as $abouts)
    <div class="container-fluid bg-light overflow-hidden">
        <div class="container-fluid about">
            <div class="row g-0 mx-auto">
                <div class="col-lg-12" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <div class="video">
                            <img class="position-absolute img-fluid w-100 h-100" src="{{ Storage::disk('s3')->url($abouts->gambar) }}" style="object-fit: cover; width: 100%;" alt="">
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="{{ $abouts->video }}" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid bg-light overflow-hidden px-lg-0 mx-auto">
        <div class="container about px-5 mx-auto">
            <div class="row g-0 ">
                <div class="col-lg-12 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="py-3 text-center mx-auto">
                        <div class="section-title">
                            <h1 class="display-5 mb-4">Tentang Kami</h1>
                        </div>
                        <h2 class="mb-3">{{ $abouts->judul }}</h2>
                        <p class="mb-4 pb-2">{{ $abouts->text }}</p>
                        <a href="/tentang-kami" class="btn btn-primary py-1 px-5">Jelajahi</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @endforeach
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
    <!-- About End -->
    

    <!-- Gallery Start -->
    <div class="container-xxl py-3 mb-3">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-3">Galeri Kami</h1>
            </div>
            
            <div class="row g-4 portfolio-container">
                @foreach ($gallery as $galeri)
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ Storage::disk('s3')->url($galeri->images->path) }}" alt="">
                            <div class="portfolio-overlay text-center " >
                                <a class="btn btn-square btn-outline-light mx-1 mb-2" href="{{ Storage::disk('s3')->url($galeri->images->path) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                {{-- <h4 class="text-gray " data-lightbox="portfolio">Wedding Decor</h4> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach   
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    
    <!-- Team Start -->
    <div class="container-fluid bg-third py-3">
        <div class="container">
            <div class="section-title text-center" style="text-color: white">
                <h1 class="display-5 mb-4 text-white">Team Kami</h1>
            </div>
            <div class="row g-4">
                @foreach ($team as $tim)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ Storage::disk('s3')->url($tim->image) }}" alt="">
                            
                        </div>
                        <div class="text-center text-white border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0 text-white ">{{ $tim->judul }}</h5>
                            <small>{{ $tim->detail }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-3 bg-light wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($testimoni as $review)
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{ Storage::disk('s3')->url($review->image) }}" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>{{ $review->description }}</p>
                        <h5 class="mb-1">{{ $review->name }}</h5>
                        <span class="fst-italic">{{ $review->job }}</span>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Google Maps Section -->
    @foreach ($contact as $kontak)
        <div class="map-container">
            <iframe src="{{ $kontak->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
    @endforeach

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