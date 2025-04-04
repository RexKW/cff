@extends('layouts.template')

@section('title', 'Workshop')

@section('content')
    <div class = "home-bg text-white-custom">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <div class="container padding row">
            <h1 class = "fw-bold fs-min10 text-shadow headline" data-aos = "fade-up" data-aos-duration = "1500"> WORKSHOP </h1>
            <div class = "col-12 col-md-4" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
                <img src = "/images/Poster.jpg" class = "w-100">
            </div>
            <div class = "col-12 col-md-8">
                <h1 class = "fw-bold fs-2 body-text-bold my-3" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> TEMA WORKSHOP </h1>
                <h2 class = "fw-bold fs-4 body-text-bold my-3" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "750"> NAMA NARASUMBER </h2>
                <h3 class = "fw-bold fs-5 my-3 body-text" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "1000"> 30 MEI 2024 | 16.00 WIB | ATRIUM CW SURABAYA </h3>
                <p class = "fw-bold my-3 justify fs-7 body-text" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "1250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <a class = "btn btn-white body-text fs-2 fw-bold mt-2 mb-5 w-100" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "1250"> BELI TIKET SEKARANG </a>
            </div>
        </div>
        
    </div>
@endsection