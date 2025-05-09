@extends('layouts.template')

@section('title', 'Accessibility')

@section('content')
<div class = "row home-bg text-white-custom">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <div class = "container padding container-fluid col-12 col-md-8 order-2 order-md-1"> 
            <div class="white white-container">
                <p class="body-text-bold text-black-custom fs-2">Lokasi Acara</p>
            </div>
            <div class = "row d-flex justify-content-center my-3">
                <div class = "col-12 col-md-6" > 
                    <div id="map"></div>
                    <div class="my-3">
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class = "icon d-inline" alt = "Icon Contact"> 
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">Universitas Ciputra Surabaya</p>
                        </div>
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class = "icon d-inline" alt = "Icon Contact"> 
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">01 April 2025</p>
                        </div>
                    </div>
                    
                </div>
                <div class = "col-12 col-md-6"> 
                    <div id="map2"></div>
                    <div class="my-3">
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class = "icon d-inline" alt = "Icon Contact"> 
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">Ciputra World Surabaya</p>
                        </div>
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class = "icon d-inline" alt = "Icon Contact"> 
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">01 April 2025</p>
                        </div>
                    </div>
                </div>
            </div>
           
    </div>
@endsection