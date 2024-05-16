@extends('layouts.template')

@section('title', 'Workshop')

@section('content')
    <div class = "row bg-2 padding text-white">
        <h1 class = "fw-bold fs-0 text-shadow" data-aos = "fade-up" data-aos-duration = "1500"> WORKSHOP </h1>
        <div class = "col-12 col-md-4" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
            <img src = "/images/Poster.jpg" class = "w-100">
        </div>
        <div class = "col-12 col-md-8">
            <h1 class = "fw-bold fs-2 my-3" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> TEMA WORKSHOP </h1>
            <h2 class = "fw-bold fs-4 my-3" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "750"> NAMA NARASUMBER </h2>
            <h3 class = "fw-bold fs-5 my-3" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "1000"> 30 MEI 2024 | 16.00 WIB | ATRIUM CW SURABAYA </h3>
            <p class = "fw-bold my-3 justify fs-7" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "1250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <img src = "/images/BeliTiket.png" class = "text-image-ticket mt-2 mb-5" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "1500">
        </div>
    </div>
@endsection