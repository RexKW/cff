<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="icon" type="image/x-icon" href="/images/IconCFF.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        @font-face {
            font-family: 'Royal';
            src: url('/fonts/Royal_Loudes.otf') format('opentype');
        }

        @font-face {
            font-family: 'Brakle';
            src: url('/fonts/Brakle_Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: 'BrakleB';
            src: url('/fonts/Brakle_Bold.ttf') format('truetype');
        }

        #map {
            height: 300px;
            width: 100%;
            border-radius: 25px
        }

        #map2 {
            height: 300px;
            width: 100%;
            border-radius: 25px
        }

        .body-text-bold {
            font-family: 'BrakleB', sans-serif;
        }

        .body-text {
            font-family: 'Brakle', sans-serif;
        }

        .headline {
            font-family: 'Royal', sans-serif;
        }

        .padding-right {
            padding-right: 15%;
        }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
        }

        table,
        tr,
        td {
            background-color: transparent;
            border: 2px solid #fff;
            border-collapse: collapse;
        }

        .justify {
            text-align: justify;
        }

        .white {
            background-color: #dfe4ff;
        }

        .logo {
            height: 30px;
        }

        .logo-1 {
            height: 50px;
        }

        .logo-2 {
            max-width: 25%;
        }

        .logo-footer {
            width: 25%;
        }

        .icon {
            max-width: 30px;
        }

        .fs-min5 {
            font-size: 80px;
            height: 100%;
        }

        .fs-min5B {
            font-size: 80px;

        }

        .fs-min10 {
            font-size: 100px;
        }

        .fs-min10B {
            font-size: 100px;
        }

        .fs-min15 {
            font-size: 120px;
        }

        .fs-0 {
            font-size: 50px;
        }

        .fs-7 {
            font-size: 20px;
        }

        .fs-8 {
            font-size: 16px;
        }

        .text-shadow {
            text-shadow: 1px 1px 10px #333;
        }

        .btn-custom {
            background-color: transparent;
            border-color: transparent;
            color: inherit;
        }

        .bg-repeating {
            position: absolute;
            z-index: 0;
            background-image: url('/images/[BACKGROUND]-1.jpg');
            background-size: contain;
            background-repeat: repeat;
            opacity: 40%;
            width: 100vw;
            height: 100%;

        }

        .bg-repeating-2 {
            position: absolute;
            z-index: 0;
            background-image: url('/images/Repeating-BG.png');
            background-size: contain;
            background-repeat: repeat;
            opacity: 30%;
            width: 100vw;
            height: 100%;
        }

        .program-btn {
            text-decoration: none;
        }

        .news {
            text-decoration: none;
        }

        .program-btn:hover,
        .program-btn:focus,
        .program-btn:active {
            background-color: #e1ff4d;
            border-color: transparent;
        }


        .btn-custom:hover,
        .btn-custom:focus,
        .btn-custom:active {
            background-color: #e1ff4d;
            border-color: transparent;
        }

        .btn-blue {
            background-color: #0887CD;
            border-color: transparent;
        }

        .btn-blue:hover,
        .btn-blue:focus,
        .btn-blue:active {
            background-color: #0887CD;
            border-color: transparent;
        }

        .btn-white {
            background-color: #dfe4ff;
            border-color: transparent;
            color: #040e20;
        }

        .btn-white:hover,
        .btn-white:focus,
        .btn-white:active {
            background-color: #e1ff4d;
            border-color: transparent;
            color: #040e20;
        }

        .dropdown-custom {
            background-color: #e1ff4d;
            border-color: transparent;
        }

        .home-bg {
            background-color: #040e20;
            max-width: 100vw;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
            --bs-gutter-x: 0 !important;
        }

        .genre {
            display: inline-block;
            background-color: #6a4cfa;
            padding: 2%;
        }

        .press {
            width: max-content;
            ;
        }

        .genre:empty {
            display: none;
        }

        .bg-home-image,
        .bg-home-image2 {
            position: absolute;
            z-index: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.25;
            object-position: center;
            object-fit: cover;
        }

        .fest-director {}

        .mr-5 {
            margin-right: 5%;
        }

        .mr-10 {
            margin-right: 10%;
        }


        .container {
            position: relative;
            z-index: 1;
        }

        .repeating-bg {
            background: url('/images/[BACKGROUND].jpg');
            background-size: cover;
            background-repeat: repeat-y;
            position: absolute;
            z-index: 0;
            opacity: 25%;
            width: 100vw;
            height: 100%;
        }


        .bg-2 {
            background: url('/images/Background-2.jpg');
            background-size: cover;
            background-repeat: repeat-y;
            height: 100%;
        }

        .bg-3 {
            background: url('/images/Background-3.jpg');
            background-size: cover;
            height: 100%;
        }

        .bg-4 {
            background: url('/images/Background-Red.jpg');
            background-size: cover;
            height: 100%;
        }

        .bg-5 {
            background: url('/images/Background-5.jpg');
            background-size: cover;
            background-repeat: repeat-y;
            height: 100%;
        }

        .bg-6 {
            background: url('/images/Background-2.jpg');
            background-size: contain;
            background-repeat: repeat-y;
            height: 100%;
        }

        .padding {
            padding-top: 120px;
            padding-bottom: 80px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .padding-home {
            padding-top: 120px;
            padding-bottom: 80px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .padding-x {
            padding-left: 100px;
            padding-right: 100px;
        }

        .date-container-p {
            display: flex;
            justify-content: center;

        }

        .white-container {
            width: fit-content;
            padding-left: 2%;
            padding-right: 2%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .white-container-stretch {
            padding-left: 2%;
            padding-right: 2%;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .white-container p {
            margin-bottom: 0;
        }

        .padding-right {
            padding-right: 400px;
        }

        .swiper {
            width: 100%;
            height: 400px;
        }

        .swiper-slide {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            height: 100%;
            width: auto;
            object-fit: cover;
        }

        .main-logo {
            width: 300px;
        }

        .poster {
            width: 100px;
        }

        .text-image {
            height: 140px;
        }

        .text-image-2 {
            height: 100px;
        }

        .text-image-ticket {
            width: 50%;
        }

        .date {
            width: 50%;
        }

        .image {
            height: 100%;
        }

        .player {
            aspect-ratio: 16/9;
            width: 75%;
            height: 100%;
        }

        .player-2 {
            aspect-ratio: 16/9;
        }

        .form-select-w {
            background-color: #dfe4ff;
            border-color: transparent;
            color: #040e20;
        }

        .form-select-r {
            background-color: #9f2323;
            border-color: transparent;
            color: #dfe4ff;
            padding: 2%;
        }

        .form-select-r:hover,
        .form-select-r:focus,
        .form-select-r:active {
            background-color: #e1ff4d;
            border-color: transparent;
            color: #333
        }

        .form-select-p {
            background-color: #ae34e8;
            border-color: transparent;
            color: #040e20;
        }

        .form-select:hover,
        .form-select:focus,
        .form-select:active {
            background-color: #e1ff4d;
            border-color: transparent;
            color: #333
        }

        .swiper-button-next {
            content: url('/images/RightButton.png');
            width: 40px;
            height: 40px;
        }

        .swiper-button-prev {
            content: url('/images/LeftButton.png');
            width: 40px;
            height: 40px;
        }

        .hide-on-mobile {
            display: block;
        }

        .p-not-margin {
            margin-bottom: 0;
            margin-top: 0;
        }

        .text-white-custom {
            color: #dfe4ff;
        }

        .text-black-custom {
            color: #040e20;
        }

        .text-white-title {
            color: #dfe4ff;

        }

        .media-partner-logo {
            max-width: 120px;
            max-height: 60px;


            width: auto;
            height: auto;

            object-fit: contain;
            margin: 1rem;
        }

        #mediaPartnerCarousel {
            max-width: 800px; 
            min-width: 300px;
            margin: auto;
        }
        
        /* 2. Create space for the controls by adding horizontal padding */
        #mediaPartnerCarousel {
            padding-left: 50px;
            padding-right: 50px;
        }

        /* 3. Make the control icons dark so they are visible on a light background */
        #mediaPartnerCarousel .carousel-control-prev-icon,
        #mediaPartnerCarousel .carousel-control-next-icon {
            filter: invert(1);
        }


        @media (max-width:767px) {
            .bg-home-image {
                position: absolute;
                z-index: 0;
                height: 100%;
                width: auto;
                opacity: 25%;
                object-fit: cover;
                object-position: center;

            }

            .bg-home-image2 {
                position: absolute;
                z-index: 0;
                height: 100%;
                width: auto;
                opacity: 25%;
                object-fit: cover;
                object-position: center;

            }


            .fest-director {

                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 10%;

            }

            .director-container .fs-2 {
                font-size: 20px
            }


            table,
            tr,
            td {
                background-color: transparent;
                border: 2px solid #fff;
                border-collapse: collapse;
            }

            .logo {
                height: 24px;
            }

            .logo-1 {
                height: 40px;
            }

            .logo-2 {
                max-width: 40%;
            }

            .logo-footer {
                width: 70%;
            }

            .icon {
                max-width: 30px;
            }

            .fs-min5 {
                font-size: 45px;
            }

            .fs-min5B {
                font-size: 25px;
            }

            .fs-min10 {
                font-size: 50px;
            }

            .fs-min10B {
                font-size: 35px;
            }

            .fs-min15 {
                font-size: 70px;
            }

            .fs-0 {
                font-size: 40px;
            }

            .fs-7 {
                font-size: 16px;
            }

            .fs-8 {
                font-size: 10px;
            }

            .text-shadow {
                text-shadow: 1px 1px 20px #777;
            }


            .bg-2 {
                background-size: cover;
                background-repeat: repeat-y;
                height: 100%;
            }

            .bg-3 {
                background-size: cover;
                height: 100%;
            }

            .bg-4 {
                background-size: cover;
                height: 100%;
            }

            .bg-5 {
                background-size: cover;
                background-repeat: repeat-y;
                height: 100%;
            }

            .bg-6 {
                background-size: contain;
                background-repeat: repeat-y;
                height: 100%;
            }

            .padding {
                padding-top: 120px;
                padding-bottom: 50px;
                padding-left: 30px;
                padding-right: 30px;
            }

            .padding-home {
                padding-top: 140px;
                padding-bottom: 140px;
                padding-left: 0px;
                padding-right: 0px;
            }

            .padding-x {
                padding-left: 30px;
                padding-right: 30px;
            }

            .padding-right {
                padding-right: 0px;
            }

            .swiper {
                width: 100%;
                height: 340px;
            }

            .swiper-slide img {
                display: block;
                width: 280px;
                object-fit: contain;
            }

            .main-logo {
                width: 300px;
            }

            .poster {
                height: 200px;
                width: auto;
            }

            .text-image {
                height: 70px;
            }

            .text-image-2 {
                height: 50px;
            }

            .text-image-ticket {
                width: 100%;
            }

            .date {
                width: 75%;
            }

            .image {
                height: 100%;
            }

            .player {
                aspect-ratio: 16/9;
                width: 200px;
            }

            .player-2 {
                aspect-ratio: 16/9;
            }

            .swiper-button-next {
                width: 40px;
                height: 40px;
            }

            .swiper-button-prev {
                width: 40px;
                height: 40px;
            }

            .hide-on-mobile {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md position-fixed w-100 px-2 px-md-3 white z-3">
        <div class="container-fluid">
            <div class="d-flex justify-content-start align-items-center">
                <a class="navbar-brand mx-0 mx-md-2 px-0" href="#"> <img src="/images/LogoUC.png" class="logo-1"
                        alt="Logo UC"> </a>
                <a class="navbar-brand mx-0 mx-md-2 px-0" href="#"> <img src="/images/LogoFikomrade.png" class="logo"
                        alt="Logo Fikomrade"> </a>
                <a class="navbar-brand mx-0 mx-md-2 px-0" href="#"> <img src="/images/[BLACK]FormalCFF.png" class="logo"
                        alt="Logo CFF"> </a>
            </div>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon ms-auto"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex justify-content-end ms-auto body-text grid gap-4 align-items-center">
                <a class="nav-link text-black" aria-current="page" href="/"> HOME </a>
                <div class="nav-link dropdown">
                    <button class="btn btn-custom dropdown-toggle body-text rounded-0 text-black"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        BOUNDLESS
                    </button>
                    <ul class="dropdown-menu dropdown-custom rounded-0">
                        <li><a class="dropdown-item body-text" href="/aboutus">ABOUT US</a></li>
                        {{-- <li><a class="dropdown-item body-text" href="/catalog">CATALOG</a></li> --}}
                        <li><a class="dropdown-item body-text" href="/judges">JUDGES</a></li>
                        <li><a class="dropdown-item body-text" href="/kurator">CURATOR</a></li>
                        <li><a class="dropdown-item body-text" href="/archive">ARCHIVE</a></li>
                        <li><a class="dropdown-item body-text" href="/accessibility">ACCESSIBLITY</a></li>
                    </ul>
                </div>
                {{-- <a class="nav-link text-black" href="/ticketing"> TICKETING </a> --}}
                <a class="nav-link text-black" href="/ticketing"> TICKETING </a>
                <div class="nav-link dropdown">
                    <button class="btn btn-custom dropdown-toggle  rounded-0 text-black" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        PROGRAM
                    </button>
                    <ul class="dropdown-menu dropdown-custom rounded-0">
                        {{-- <li><a class="dropdown-item" href="/schedule"> SCHEDULE </a></li>
                        <li><a class="dropdown-item" href="/program/1"> ILLUSION OF DELUSION </a></li>
                        <li><a class="dropdown-item" href="/program/2"> VOICE OF THE VOICELESS </a></li>
                        <li><a class="dropdown-item" href="/program/3"> PERFECTLY IMPERFECT </a></li>
                        <li><a class="dropdown-item" href="/program/4"> SOS! SHOUT OUT SURABAYANS! </a></li>

                        <li><a class="dropdown-item" href="/workshop"> WORKSHOP </a></li>
                        <li><a class="dropdown-item" href="/unseenSeries"> UNSEEN SERIES </a></li>
                        <li><a class="dropdown-item" href="/unseenFestival"> UNSEEN FESTIVAL </a></li> --}}

                        <li><a class="dropdown-item" href="/schedule"> SCHEDULE </a></li>
                        <li><a class="dropdown-item" href="/program"> FILM LINEUP </a></li>

                        <li><a class="dropdown-item" href="/"> WORKSHOP </a></li>
                        <li><a class="dropdown-item" href="/boundlessSeries"> BOUNDLESS SERIES </a></li>

                    </ul>
                </div>
                <a class="nav-link text-black press" href="/news"> NEWS </a>
            </div>
        </div>
        </div>
    </nav>

    <div class="z-0">
        @yield('content')
    </div>

    <footer class="position-absolute body-text white d-flex padding-x py-5">
        <div class="d-flex justify-content-between flex-column flex-md-row">
            <div class="align-items-center align-middle col-12 col-md-6">
                <img src="/images/[BLACK]FormalCFF.png" class="logo-footer" alt="Logo CFF">
                <div class="text-start my-2">
                    <img src="/images/Instagram.png" class="icon d-inline" alt="Icon Contact">
                    <p class="fw-bold d-inline fs-8"> @CIPUTRAFILMFEST </p>
                </div>
                <div class="text-start my-2">
                    <img src="/images/tiktok.png" class="icon d-inline" alt="Icon Contact">
                    <p class="fw-bold d-inline fs-8"> @CIPUTRAFILMFEST </p>
                </div>
                <div class="text-start my-2">
                    <img src="/images/mail.png" class="icon d-inline" alt="Icon Contact">
                    <p class="fw-bold d-inline fs-8"> CFF@CIPUTRA.AC.ID </p>
                </div>
                <div class="text-start my-2">
                    <img src="/images/whatsapp.png" class="icon d-inline" alt="Icon Contact">
                    <p class="fw-bold d-inline fs-8"> +62 851-5065-1509 </p>
                </div>
                <div class="align-items-center align-middle text-start mt-5">
                    <p class="fw-bold fs-5"> UNIVERSITAS CIPUTRA SURABAYA </p>
                    <p class="fs-8 padding-right">JL. Citraland CBD Boulevard, Made, Kec. Sambikerep, Kota SBY, Jawa
                        Timur 60219 </p>
                </div>
            </div>
            <div class="align-items-center align-middle  col-12 col-md-6">
                <div class="d-flex flex-column align-items-center align-middle">
                    <p class="fw-bold d-inline fs-2"> SUPPORTED BY </p>
                    <div id="mediaPartnerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/sponsor/LOGO DeMandailing .jpg"
                                        class="media-partner-logo" alt="Logo Suara Surabaya">
                                    <img src="/images/sponsor/LOGO HONG TANG.jpg" class="media-partner-logo"
                                        alt="Media Partner 2">
                                    <img src="/images/sponsor/Logo Kencana Ahlinya Baja Ringan (2).png" class="media-partner-logo"
                                        alt="Media Partner 3">
                                    <img src="/images/sponsor/LOGO NS TRADE.PNG" class="media-partner-logo"
                                        alt="Media Partner 4">
                                    <img src="/images/sponsor/Logo_STL.jpg" class="media-partner-logo"
                                        alt="Media Partner 5">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/sponsor/Screenshot 2025-06-22 003502.png" class="media-partner-logo"
                                        alt="Media Partner 7">
                                    <img src="/images/sponsor/Screenshot 2025-06-22 003746.png" class="media-partner-logo"
                                        alt="Media Partner 8">
                                    <img src="/images/sponsor/Screenshot 2025-06-22 003810.png" class="media-partner-logo"
                                        alt="Media Partner 9">
                                    <img src="/images/sponsor/ABadi.jpg" class="media-partner-logo"
                                        alt="Media Partner 10">
                                    <img src="/images/sponsor/arete.jpg" class="media-partner-logo"
                                        alt="Media Partner 11">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/sponsor/Castol - Lem Serba Guna.jpg" class="media-partner-logo"
                                        alt="Media Partner 13">
                                    <img src="/images/sponsor/daimaru.jpg" class="media-partner-logo"
                                        alt="Media Partner 14">
                                    <img src="/images/sponsor/logo angkasa.jpg" class="media-partner-logo"
                                        alt="Media Partner 15">
                                    <img src="/images/sponsor/nextm.jpg" class="media-partner-logo"
                                        alt="Media Partner 16">
                                    <img src="/images/sponsor/Roti Paulus.jpg" class="media-partner-logo"
                                        alt="Media Partner 17">
                                </div>
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#mediaPartnerCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mediaPartnerCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center align-middle mt-5">
                    <p class="fw-bold d-inline fs-2"> MEDIA PARTNERS </p>
                    <div id="mediaPartnerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/mediaPartners/1. LOGO SUARA SURABAYA.png"
                                        class="media-partner-logo" alt="Logo Suara Surabaya">
                                    <img src="/images/mediaPartners/2. LOGO INFO FESTIVAL.png" class="media-partner-logo"
                                        alt="Media Partner 2">
                                    <img src="/images/mediaPartners/2. Surabaya Sparkling.png" class="media-partner-logo"
                                        alt="Media Partner 3">
                                    <img src="/images/mediaPartners/3.surabayapunyainfo.jpg" class="media-partner-logo"
                                        alt="Media Partner 4">
                                    <img src="/images/mediaPartners/4. GAC Media.PNG" class="media-partner-logo"
                                        alt="Media Partner 5">
                                    <img src="/images/mediaPartners/6. media event.png" class="media-partner-logo"
                                        alt="Media Partner 6">
                                    <img src="/images/mediaPartners/27.Teras Event.png" class="media-partner-logo"
                                        alt="Media Partner 25">   
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/mediaPartners/7.ARTCHEMIST.png" class="media-partner-logo"
                                        alt="Media Partner 7">
                                    <img src="/images/mediaPartners/8.Logo EventSuroboyo.png" class="media-partner-logo"
                                        alt="Media Partner 8">
                                    <img src="/images/mediaPartners/9.Info surabayans.jpg" class="media-partner-logo"
                                        alt="Media Partner 9">
                                    <img src="/images/mediaPartners/10.Event surabaya.jpg" class="media-partner-logo"
                                        alt="Media Partner 10">
                                    <img src="/images/mediaPartners/11.Event jawa timur.png" class="media-partner-logo"
                                        alt="Media Partner 11">
                                    <img src="/images/mediaPartners/12.Info event.png" class="media-partner-logo"
                                        alt="Media Partner 12">
                                    <img src="/images/mediaPartners/IMG_1510.PNG" class="media-partner-logo"
                                        alt="Media Partner 26">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/mediaPartners/15.Kompetisi mahasiswa.png" class="media-partner-logo"
                                        alt="Media Partner 13">
                                    <img src="/images/mediaPartners/16.Point Kampus.png" class="media-partner-logo"
                                        alt="Media Partner 14">
                                    <img src="/images/mediaPartners/17.Ikut Event_.png" class="media-partner-logo"
                                        alt="Media Partner 15">
                                    <img src="/images/mediaPartners/18.Uc fikom radio.png" class="media-partner-logo"
                                        alt="Media Partner 16">
                                    <img src="/images/mediaPartners/19.logo event.list.png" class="media-partner-logo"
                                        alt="Media Partner 17">
                                    <img src="/images/mediaPartners/20.Mading Event_.png" class="media-partner-logo"
                                        alt="Media Partner 18">
                                    <img src="/images/mediaPartners/LOGO SONORA SURABAYA.png" class="media-partner-logo"
                                        alt="Media Partner 27">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="/images/mediaPartners/21. event.tik 1.png" class="media-partner-logo"
                                        alt="Media Partner 19">
                                    <img src="/images/mediaPartners/22.Edaran event.png" class="media-partner-logo"
                                        alt="Media Partner 20">
                                    <img src="/images/mediaPartners/23.Logo Pojok Event.jpeg" class="media-partner-logo"
                                        alt="Media Partner 21">
                                    <img src="/images/mediaPartners/24.eventupdate.indo.png" class="media-partner-logo"
                                        alt="Media Partner 22">
                                    <img src="/images/mediaPartners/25. eventmahasiswa8.png" class="media-partner-logo"
                                        alt="Media Partner 23">
                                    <img src="/images/mediaPartners/26.Informasi Event.png" class="media-partner-logo"
                                        alt="Media Partner 24">
                                </div>
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#mediaPartnerCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mediaPartnerCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script>
        $('.carousel').carousel()
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper2", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>


    <script>
        var map = L.map('map').setView([0, 0], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var locations = [
            { name: "Universitas Ciputra", lat: -7.28557, lng: 112.63160 }
        ];

        locations.forEach(function (location) {
            L.marker([location.lat, location.lng]).addTo(map)
        });

        var bounds = locations.map(loc => [loc.lat, loc.lng]);
        map.fitBounds(bounds);




        var map2 = L.map('map2').setView([0, 0], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map2);

        var locations = [
            { name: "Ciputra World", lat: -7.29241, lng: 112.72004 }
        ];

        locations.forEach(function (location) {
            L.marker([location.lat, location.lng]).addTo(map2)
        });

        var bounds = locations.map(loc => [loc.lat, loc.lng]);
        map2.fitBounds(bounds);
    </script>

    <script>
        AOS.init();
    </script>


</body>

</html>