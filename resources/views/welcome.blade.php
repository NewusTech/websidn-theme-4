@extends('admin.layouts.base')
@section('title', 'Hubungi Kami')

@section('styles')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-...">

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container" data-aos="fade-up">
        <h1 class="mb-4">Hubungi Kami <i class="fas fa-phone-alt"></i></h1>
        <p>Klik tombol di bawah ini untuk menghubungi kami melalui WhatsApp:</p>
        <a href="https://api.whatsapp.com/send?phone=6285172390321&amp;text=Halo,%20hubungi%20kami%20untuk%20memesan%20layanan%20kami%20,"
            class="btn btn-success" target="_blank">
            <i class="fab fa-whatsapp"></i> Hubungi Kami di WhatsApp
        </a>
    </div>
@endsection

@section('scripts')
    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
