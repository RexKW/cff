@extends('layouts.template')

@section('title', 'Schedule')

@section('content')
    <div class = "home-bg text-white">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <div class="container padding">
            <div class = "d-flex justify-content-between align-items-center my-2">
                <h1 class = "headline fs-min10 me-auto" data-aos = "fade-up" data-aos-duration = "1500"> Schedule </h1>
                <div class="nav-link dropdown z-2" data-aos = "fade-up" data-aos-duration = "1500">
                    <button class="btn btn-white dropdown-toggle fw-bold rounded-0" data-bs-toggle="dropdown" aria-expanded="false">
                        CHOOSE DAY
                    </button>
                    <ul class="dropdown-menu dropdown-custom rounded-0">
                        @foreach ($schedules as $schedule)
                            <li> 
                                <a class="dropdown-item fw-bold" href="/schedule/{{$schedule->day}}"> DAY {{$schedule->day}} </a> 
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div> 
            <div class = "w-100" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
                <img src = "{{ $main->image }}" class = "w-100">
            </div>
        </div>
        
    </div>
@endsection