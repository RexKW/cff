@extends('layouts.template')

@section('title', 'Ciputra Film Festival 2024')

@section('content')
    <div class = "home-bg h-100">
        <div class = "container-fluid padding-home justify-content-center text-center">
            <div class="swiper mySwiper align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "1500">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src = "/images/LogoUnseen.png" class = "main-logo">
                    </div>
                    <div class="swiper-slide">
                        <img src = "/images/Poster.jpg" class = "poster">
                    </div>
                    <div class="swiper-slide">
                    <iframe class = "player" 
                    src="https://www.youtube.com/embed/QV_iPZ1pjQc?si=JnqV5yoG6yPtcy-M" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                    </iframe>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <img src = "/images/Date.jpg" class ="my-3 date">
        </div>
        <div class = "padding-x">
            <div class = "padding-right">
                <img src = "/images/Unseen.png" class = "text-image mt-4 mb-2" data-aos = "fade-up" data-aos-duration = "1500">
                <p class = "text-white fs-7 text-shadow justify" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <a class = "btn btn-yellow fs-2 fw-bold mt-2 mb-5 w-100" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> BELI TIKET SEKARANG </a>
            </div>
        </div>
    </div>
@endsection