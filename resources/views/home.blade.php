@extends('layouts.template')

@section('title', 'Ciputra Film Festival 2025')

@section('content')
    
    <div class = "home-bg h-100">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <img src="" alt="">
        <div class = "container-fluid container padding-home justify-content-center text-center">
            <div class="swiper mySwiper align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "1500">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src = "/images/[WHITE]-BOUNDLESS.png" class = "main-logo">
                    </div>
                    <div class="swiper-slide">
                        <img src = "/images/OpenSubmission.png" class = "poster">
                    </div>
                    <div class="swiper-slide">
                    <iframe class = "player" 
                    src="https://www.youtube.com/embed/HDiADbPq4EA" 
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
            <div class="w-100 justify-content-center date-container-p my-3">
                <div class="white white-container"  data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500">
                    <p class="body-text-bold text-black-custom fs-2" >27 MAY - 31 MAY 2025</p>
                </div>
            </div>
            <div class="d-flex justify-between flex-column flex-md-row gap-2 gap-md-5 padding-x">
                <a href="/Guidebooks/GUIDEBOOK HOSPITALITY (ENG).pdf"
                        class="btn btn-white body-text-bold text-black-custom fs-2 fw-bold mt-3 col-12 col-md-6 "
                        data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"> Guidebook<br/>EN Version</a>
                    <a href="/Guidebooks/GUIDEBOOK HOSPITALITY (IDN).pdf"
                        class="btn btn-white body-text-bold text-black-custom fs-2 fw-bold mt-3 col-12 col-md-6"
                        data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"> Guidebook<br/> IDN Version</a>
            </div>
        </div>
        <div class = "padding-x container">
            <div class = "padding-right">
                <img src = "/images/[WHITE]-BOUNDLESS.png" class = "text-image mt-4 mb-2" data-aos = "fade-up" data-aos-duration = "1500">
                <p class = "text-white fs-7 text-shadow justify body-text" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250"> It means “not bound” by any restrictions. Creativity should not be limited, including the use of AI in movies. The world of cinema today has gone beyond the theory & means of production. Creativity and the messages that filmmakers want to convey have made the world of cinema limitless. The film production process can be done in out of the box ways, without being limited by equipment and technological sophistication. So, boundless was chosen as the theme so that filmmakers globally can transcend the boundaries in the film industry in terms of story, concept, and genre.</p>
                <a href="https://linktr.ee/4thCiputraFilmFestival" class = "btn btn-white body-text-bold text-black-custom fs-2 fw-bold mt-2 mb-5 w-100" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> BUY TICKET NOW</a>
            </div>
        </div>
    </div>
@endsection