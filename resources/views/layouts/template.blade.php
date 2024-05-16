<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link rel="icon" type="image/x-icon" href="/images/IconCFF.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        body{
            font-family: 'Be Vietnam Pro', sans-serif;
        }
        table, tr, td{
            background-color: transparent;
            border: 2px solid #fff;
            border-collapse: collapse;
        }
        .justify{
            text-align: justify;
        }
        .yellow{
            background-color: #ffd400;
        }
        .logo{
            height: 30px;
        }
        .logo-1{
            height: 50px;
        }
        .logo-2{
            max-width: 25%;
        }
        .logo-footer{
            width: 25%;
        }
        .icon{
            max-width: 30px;
        }
        .fs-0{
            font-size: 50px;
        }
        .fs-7{
            font-size: 20px;
        }
        .fs-8{
           font-size: 16px;
        }
        .text-shadow{
            text-shadow: 1px 1px 20px #777;
        }
        .btn-custom{
            background-color: transparent;
            border-color: transparent;
            color: inherit;
        }
        .btn-custom:hover,
        .btn-custom:focus,
        .btn-custom:active{
            background-color: #0887CD;
            border-color: transparent;
        }
        .btn-blue{
            background-color: #0887CD;
            border-color: transparent;
        }
        .btn-blue:hover,
        .btn-blue:focus,
        .btn-blue:active{
            background-color: #0887CD;
            border-color: transparent;
        }
        .dropdown-custom{
            background-color: #F5B416;
            border-color: transparent;
        }
        .home-bg{
            background: url('/images/Background-1.jpg');
            background-size: cover;
            height: 100%;
        }
        .bg-2{
            background: url('/images/Background-2.jpg');
            background-size: cover;
            background-repeat: repeat-y;
            height: 100%;
        }
        .bg-3{
            background: url('/images/Background-3.jpg');
            background-size: cover;
            height: 100%;
        }
        .bg-4{
            background: url('/images/Background-Red.jpg');
            background-size: cover;
            height: 100%;
        }
        .bg-5{
            background: url('/images/Background-5.jpg');
            background-size: cover;
            background-repeat: repeat-y;
            height: 100%;
        }
        .bg-6{
            background: url('/images/Background-2.jpg');
            background-size: contain;
            background-repeat: repeat-y;
            height: 100%;
        }
        .padding{
            padding-top: 120px;
            padding-bottom: 80px;
            padding-left: 100px;
            padding-right: 100px;
        }
        .padding-home{
            padding-top: 120px;
            padding-bottom: 80px;
            padding-left: 100px;
            padding-right: 100px;
        }
        .padding-x{
            padding-left: 100px;
            padding-right: 100px;
        }
        .padding-right{
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
        .main-logo{
            width: 300px;
        }
        .poster{
            width: 100px;
        }
        .text-image{
            height: 140px;
        }
        .text-image-2{
            height: 100px;
        }
        .text-image-ticket{
            width: 50%;
        }
        .date{
            width: 50%;
        }
        .image{
            height: 100%;
        }
        .player{
            aspect-ratio: 16/9;
            width: 75%;
            height: 100%;
        }
        .player-2{
            aspect-ratio: 16/9;
        }
        .form-select{
            background-color: #0887CD;
            border-color: transparent;
            color: white;
        }
        .form-select:hover,
        .form-select:focus,
        .form-select:active{
            background-color: #F5B416;
            border-color: transparent;
            color: #333
        }
        .swiper-button-next{
            content: url('/images/RightButton.png');
            width: 40px;
            height: 40px;
        }
        .swiper-button-prev{
            content: url('/images/LeftButton.png');
            width: 40px;
            height: 40px;
        }
        .hide-on-mobile{
            display: none;
        }

        @media (max-width:767px){
            table, tr, td{
                background-color: transparent;
                border: 2px solid #fff;
                border-collapse: collapse;
            }
            .logo{
                height: 24px;
            }
            .logo-1{
                height: 40px;
            }
            .logo-2{
                max-width: 40%;
            }
            .logo-footer{
                width: 70%;
            }
            .icon{
                max-width: 30px;
            }
            .fs-0{
                font-size: 40px;
            }
            .fs-7{
                font-size: 16px;
            }
            .fs-8{
                font-size: 10px;
            }
            .text-shadow{
                text-shadow: 1px 1px 20px #777;
            }
            .home-bg{
                background: url('/images/Background-1-Phone.jpg');
                background-size: cover;
                height: 100%;
            }
            .bg-2{
                background-size: cover;
                background-repeat: repeat-y;
                height: 100%;
            }
            .bg-3{
                background-size: cover;
                height: 100%;
            }
            .bg-4{
                background-size: cover;
                height: 100%;
            }
            .bg-5{
                background-size: cover;
                background-repeat: repeat-y;
                height: 100%;
            }
            .bg-6{
                background-size: contain;
                background-repeat: repeat-y;
                height: 100%;
            }
            .padding{
                padding-top: 120px;
                padding-bottom: 50px;
                padding-left: 30px;
                padding-right: 30px;
            }
            .padding-home{
                padding-top: 180px;
                padding-bottom: 180px;
                padding-left: 0px;
                padding-right: 0px;
            }
            .padding-x{
                padding-left: 30px;
                padding-right: 30px;
            }
            .padding-right{
                padding-right: 0px;
            }
            .swiper {
                width: 300px;
                height: 200px;
            }
            .swiper-slide img {
                display: block;
                width: auto;
                object-fit: contain;
            }
            .main-logo{
                width: 300px;
            }
            .poster{
                height: 200px;
                width: auto;
            }
            .text-image{
                height: 70px;
            }
            .text-image-2{
                height: 50px;
            }
            .text-image-ticket{
                width: 100%;
            }
            .date{
                width: 75%;
            }
            .image{
                height: 100%;
            }
            .player{
                aspect-ratio: 16/9;
                width: 75%;
                height: 100%;
            }
            .player-2{
                aspect-ratio: 16/9;
            }
            .swiper-button-next{
                width: 40px;
                height: 40px;
            }
            .swiper-button-prev{
                width: 40px;
                height: 40px;
            }
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md position-fixed w-100 mt-4 px-2 px-md-3 yellow z-3">
        <div class="container-fluid">
                <div class = "d-flex justify-content-start align-items-center">
                    <a class="navbar-brand mx-0 mx-md-2 px-0" href="#"> <img src="/images/LogoUC.png" class = "logo-1" alt = "Logo UC"> </a>
                    <a class="navbar-brand mx-0 mx-md-2 px-0" href="#"> <img src="/images/LogoFikomrade.png" class = "logo" alt = "Logo Fikomrade"> </a>
                    <a class="navbar-brand mx-0 mx-md-2 px-0" href="#"> <img src="/images/LogoCFF.png" class = "logo" alt = "Logo CFF"> </a>
                </div>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon ms-auto"></span>
                    </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto fw-bold grid gap-4 align-items-center">
                    <a class="nav-link text-black" aria-current="page" href="/"> HOME </a>
                    <div class="nav-link dropdown">
                        <button class="btn btn-custom dropdown-toggle fw-bold rounded-0 text-black" data-bs-toggle="dropdown" aria-expanded="false">
                            UNSEEN
                        </button>
                        <ul class="dropdown-menu dropdown-custom rounded-0">
                            <li><a class="dropdown-item fw-bold" href="/aboutus">ABOUT US</a></li>
                            <li><a class="dropdown-item fw-bold" href="/catalog">CATALOG</a></li>
                            <li><a class="dropdown-item fw-bold" href="/judges">JUDGES</a></li>
                            <li><a class="dropdown-item fw-bold" href="/kurator">CURATOR</a></li>
                            <li><a class="dropdown-item fw-bold" href="/archive">ARCHIVE</a></li>
                        </ul>
                    </div>
                    <a class="nav-link text-black" href="/ticketing"> TICKETING </a>
                    <div class="dropdown-center">
                        <button class="btn btn-custom dropdown-toggle fw-bold rounded-0 text-black" data-bs-toggle="dropdown" aria-expanded="false">
                            PROGRAM
                        </button>
                        <ul class="dropdown-menu dropdown-custom rounded-0">
                            <li><a class="dropdown-item fw-bold" href="/schedule"> SCHEDULE </a></li>
                            @foreach ($films as $film)
                                <li><a class="dropdown-item fw-bold" href="/program/{{$film->id}}"> {{ strtoupper($film->judul) }}</a></li>
                            @endforeach
                            
                            <li><a class="dropdown-item fw-bold" href="/workshop"> WORKSHOP </a></li>
                            <li><a class="dropdown-item fw-bold" href="/unseenSeries"> UNSEEN SERIES </a></li>
                            <li><a class="dropdown-item fw-bold" href="/unseenFestival"> UNSEEN FESTIVAL </a></li>
                        </ul>
                    </div>
                    <a class="nav-link text-black" href="/presscenter"> PRESS CENTER </a>
                </div>
            </div>
        </div>
    </nav>

    <div class = "z-0">
        @yield('content')   
    </div>
    
    <footer class = "position-absolute yellow padding-x py-5">
        <div class = "d-flex justify-content-between">
            <div class = "align-items-center align-middle">
                <img src="/images/LogoCFF.png" class = "logo-footer" alt = "Logo CFF"> 
                <div class = "text-start my-2">
                    <img src="/images/IG.png" class = "icon d-inline" alt = "Icon Contact"> 
                    <p class = "fw-bold d-inline fs-8"> @CIPUTRAFILMFEST </p>
                </div>
                <div class = "text-start my-2">
                    <img src="/images/Tiktok.png" class = "icon d-inline" alt = "Icon Contact"> 
                    <p class = "fw-bold d-inline fs-8"> @CIPUTRAFILMFEST </p>
                </div>
                <div class = "text-start my-2">
                    <img src="/images/Mail.png" class = "icon d-inline" alt = "Icon Contact"> 
                    <p class = "fw-bold d-inline fs-8"> CFF@CIPUTRA.AC.ID </p>
                </div>
                <div class = "text-start my-2">
                    <img src="/images/Whatsapp.png" class = "icon d-inline" alt = "Icon Contact"> 
                    <p class = "fw-bold d-inline fs-8"> +62 851-5065-1509 </p>
                </div>
            </div>
            <div class = "align-items-center align-middle">
                <p class ="fw-bold fs-5"> UNIVERSITAS CIPUTRA SURABAYA </p>
                <p class ="fw-bold fs-8">JL. Citraland CBD Boulevard, Made, Kec. Sambikerep, Kota SBY, Jawa Timur 60219 </p>
            </div>
        </div>
    </footer>
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
        AOS.init();
    </script>
</body>
</html>