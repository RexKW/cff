@extends('layouts.template')

@section('title', 'Programs')

@section('content')
    <div class = "row home-bg text-white">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">

        <div class = "col container padding"> 
            @foreach ($films as $film)
            <div class = "row"> 
                <div class = "col-12 col-md-4">
                    <h1 class = "fw-bold headline fs-0 text-center text-md-start text-shadow" data-aos = "fade-up" data-aos-duration = "1500"> {{ strtoupper($film->judul) }}</h1>
                    <div class = "p-3" style = "background: rgba(250, 250, 250, 1)" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
                        <p class = "body-text-bold fs-7 text-dark py-0 my-0"> SUTRADARA </p>
                        <ul class = "py-0 my-0">
                            <li class = "fw-bold body-text text-dark fs-7"> {{strtoupper($film->sutradara)}} </li>
                        </ul>
                        @if ($film->produser)
                        <p class = "body-text-bold  fs-7 text-dark py-0 my-0"> PRODUSER </p>
                        <ul class = "py-0 my-0">
                            <li class = "fw-bold body-text text-dark fs-7"> {{strtoupper($film->produser)}} </li>
                        </ul>
                        @endif
                        @if ($film->penulis)
                        <p class = "fw-bold fs-7 body-text-bold text-dark py-0 my-0"> PENULIS </p>
                        <ul class = "py-0 my-0">
                            <li class = "fw-bold body-text text-dark fs-7"> {{strtoupper($film->penulis)}} </li>
                        </ul>
                        @endif
                        @if ($film->rumah_produksi)
                        <p class = "fw-bold fs-7 body-text-bold text-dark py-0 my-0"> RUMAH PRODUKSI </p>
                        <ul class = "py-0 my-0">
                            <li class = "fw-bold body-text text-dark fs-7"> {{strtoupper($film->rumah_produksi)}} </li>
                        </ul>
                        @endif
                        @if ($film->penghargaan)
                            <p class = "fw-bold fs-7 body-text-bold text-dark text-dark py-0 my-0"> PENGHARGAAN </p>
                            <ul class = "py-0 my-0">
                                <li class = "fw-bold body-text text-dark fs-7"> {{strtoupper($film->penghargaan)}} </li>
                            </ul>
                        @endif
                    </div>
                </div>

                <div class = "col-12 col-md-8">
                    <div class = "row my-4 my-md-0" data-aos = "fade-up" data-aos-duration = "1500">
                        <div class = "col-12 col-md-8">
                            <iframe class = "player-2 w-100" 
                            src="{{ $film->trailer }}" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                            </iframe>
                        </div>
                        <div class="col-12 col-md-4 px-4 my-4 my-md-0">
                            <img src="{{ $film->poster }}" class="w-100 px-2">
                        </div>
                    </div>
                    <div class = "row my-0 my-md-3" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
                        <p class = "fw-bold justify body-text fs-7"> {!!$film->deskripsi!!} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection