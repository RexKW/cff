@extends('layouts.template')

@section('title', 'Catalog')

@section('content')
    <div class = "row home-bg text-white-custom">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <div class = "container padding container-fluid col-12 col-md-7 order-2 order-md-1"> 
            <div class = "row d-flex">
                <div class = "justify-content-center"> 
                    <h1 class = "fw-bold text-start fs-min15 headline " data-aos = "fade-up" data-aos-duration = "1500"> E-CATALOGUE </h1>
                </div>

            </div>
            <div class = "row d-flex justify-content-center">
                <div class = "col-12 col-md-6" > 
                    <a class="justify-content-center w-100 btn white py-2 my-2 fs-4 fw-bold body-text-bold" data-aos = "fade-up" data-aos-duration = "1500"> DOWNLOAD E-CATALOG </a>
                </div>
                <div class = "col-0 col-md-6"> 
                </div>
            </div>
            <div class = "row d-flex justify-content-center">
                <div class = "col-12 col-md-6"> 
                    <img src = "/images/[WHITE]-BOUNDLESS.png" class = "w-100 my-2" data-aos = "fade-up" data-aos-duration = "1500">
                </div>
                <div class = "col-0 col-md-6"> 
                </div>
            </div>
            <div class = "row d-flex justify-content-center">
                <div class = "col-0 col-md-6">
                </div>
               
            </div>
        </div>
        <div class = "col-12 col-md-5 order-md-2 order-1 my-5 
            d-flex align-items-center justify-content-center" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250"> 
            <img src = "/images/OpenSubmission.png" class = "w-75">
        </div>
    </div>
@endsection