@extends('layouts.template')

@section('title', 'Unseen Festival')

@section('content')
    <div class  = "row padding bg-4 text-white">
        <div class  = "col-12 col-md-4"> 
            <h1 class = "fw-bold fs-1" data-aos = "fade-up" data-aos-duration = "1500"> NAMA NARSUM </h1>
            <p class = "fw-bold fs-7 justify" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <img src = "/images/Background-2.jpg" class = "w-100" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500">
        </div>
        <div class = "d-flex col-12 col-md-8 grid gap-3">
            <img src = "/images/Poster.jpg" class = "w-50" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
            <img src = "/images/Poster.jpg" class = "w-50" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500">
        </div>

    </div>

@endsection