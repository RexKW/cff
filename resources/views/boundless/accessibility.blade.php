@extends('layouts.template')

@section('title', 'Accessibility')

@section('content')
    <div class="row home-bg text-white-custom">
       <div class="bg-repeating"></div>
        <div class="bg-repeating-2"></div>
        <div class="container padding container-fluid col-12">
            <div class="white white-container">
                <p class="body-text-bold text-black-custom fs-2">Event Location</p>
            </div>
            <div class="row d-flex justify-content-center my-3">
                <div class="col-12 col-md-6">
                    <div id="map"></div>
                    <div class="my-3">
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class="icon d-inline" alt="Icon Contact">
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">
                                Universitas Ciputra Surabaya</p>
                        </div>
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class="icon d-inline" alt="Icon Contact">
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">27, 29,
                                30 & 31 May 2025</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div id="map2"></div>
                    <div class="my-3">
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class="icon d-inline" alt="Icon Contact">
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">Ciputra
                                World Surabaya</p>
                        </div>
                        <div class="d-flex my-2 align-items-center">
                            <img src="/images/Mail.png" class="icon d-inline" alt="Icon Contact">
                            <p class="body-text d-flex p-not-margin ml-5 align-items-center justify-content-center ">28-30
                                May 2025</p>
                        </div>
                    </div>
                </div>



            </div>
            <div class="white white-container mt-5">
                <p class="body-text-bold text-black-custom fs-2">Hospitality Catalog</p>
            </div>
            <div class="d-flex flex-column flex-md-row col-12 justify-content-start ">
                <img src="/Guidebooks/GUIDEBOOK HOSPITALITY (ENG).png" class="col-md-4 col-12 w-md-25 mt-5" alt="" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                <div class="d-flex flex-column justify-content-center align-items-center col-12 col-md-6 my-3">
                    <a href="/Guidebooks/GUIDEBOOK HOSPITALITY (ENG).pdf"
                        class="btn btn-white body-text-bold text-black-custom fs-2 fw-bold mt-3 col-12 ml-0 col-md-6 "
                        data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"> Download<br/>EN Version</a>
                    <a href="/Guidebooks/GUIDEBOOK HOSPITALITY (IDN).pdf"
                        class="btn btn-white body-text-bold text-black-custom fs-2 fw-bold mt-3 col-12 ml-0 col-md-6"
                        data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"> Download<br/> IDN Version</a>
                </div>
            </div>


        </div>
@endsection