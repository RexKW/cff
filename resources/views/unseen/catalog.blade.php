@extends('layouts.template')

@section('title', 'Catalog')

@section('content')
    <div class = "row padding bg-2 text-white">
        <div class = "container-fluid col-12 col-md-8 order-2 order-md-1"> 
            <div class = "row d-flex">
                <div class = "col-12 col-md-6 justify-content-center"> 
                    <h1 class = "fw-bold text-center text-shadow" data-aos = "fade-up" data-aos-duration = "1500"> E-CATALOGUE </h1>
                    <img src = "/images/LogoUnseen.png" class = "w-100" data-aos = "fade-up" data-aos-duration = "1500">
                </div>
                <div class = "col-0 col-md-6 hide-on-mobile"> 
                </div>
            </div>
            <div class = "row d-flex justify-content-center">
                <div class = "col-0 col-md-6"> 
                </div>
                <div class = "col-12 col-md-6"> 
                    <p class = "fw-bold fs-7 text-shadow justify" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                </div>
            </div>
            <div class = "row d-flex justify-content-center">
                <div class = "col-12 col-md-6"> 
                    <p class = "fw-bold fs-7 text-shadow justify" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                </div>
                <div class = "col-0 col-md-6"> 
                </div>
            </div>
            <div class = "row d-flex justify-content-center">
                <div class = "col-0 col-md-6">
                </div>
                <div class = "col-12 col-md-6" > 
                    <a class="justify-content-center w-100 btn btn-success py-2 fw-bold"> DOWNLOAD E-CATALOG </a>
                </div>
            </div>
        </div>
        <div class = "col-12 col-md-4 order-md-2 order-1 mb-4 mb-md-0" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250"> 
            <img src = "/images/Poster.jpg" class = "w-100">
        </div>
    </div>
@endsection