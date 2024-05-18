@extends('layouts.template')

@section('title', 'Ticketing')

@section('content')
    <div class = "row bg-4 padding text-white">
        <form method="POST" action="/ticketingsearch" class = "justify-content-start">
            @method('post')
            @csrf
            <div class = "d-flex my-2 align-items-center align-middle">
                <div class="form-group me-1" data-aos = "fade-up" data-aos-duration = "1500">
                    <select class="form-select my-1 fw-bold rounded-0" name="type" required>
                        <option value = "ALL"> ALL </option>
                        <option value = "workshop"> WORKSHOP </option>
                        <option value = "kompetisi"> KOMPETISI </option>
                        <option value = "non-kompetisi"> NON-KOMPETISI </option>
                    </select>
                </div>
                <div class="form-group ms-1" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
                    <select class="form-select my-1 fw-bold rounded-0" name="date" required>
                        <option value = "ALL"> ALL </option>
                        <option value = "2024-05-28"> DAY 1 </option>
                        <option value = "2024-05-29"> DAY 2 </option>
                        <option value = "2024-05-30"> DAY 3 </option>
                        <option value = "2024-05-31"> DAY 4 </option>
                        <option value = "2024-06-01"> DAY 5 </option>
                        <option value = "2024-06-02"> DAY 6 </option>
                    </select>
                </div>
                <div class="ms-1">
                    <button type="submit" style="background-color: transparent; border-color: transparent" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> <img src = "/images/SearchIcon.png" class = "icon"> </button>
                </div>
            </div> 
        </form>
        <div class = "col-12">
            @foreach ($programs as $program)
            <div class = "row py-4 border-bottom border-2 border-white" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> 
                <div class = "col-12 col-md-6 mb-4 mb-md-0">
                    <div class = "row"> 
                        <div class = "col-6 col-md-4 px-1">
                            <img src = "{{ $program->poster1 }}" class = "w-100">
                        </div>
                        <div class = "col-6 col-md-4 px-1">
                            <img src = "{{ $program->poster2 }}" class = "w-100">
                        </div>
                        <div class = "col-0 col-md-4 px-1 hide-on-mobile">
                            <img src = "{{ $program->poster3 }}" class = "w-100">
                        </div>
                    </div>
                </div>
                <div class = "col-12 col-md-6">
                    <h1 class = "fw-bold fs-1"> {{ $program->name }}</h1>

                    @php
                    $date = $program->date;
                    $newDate = date("d/m/Y", strtotime($date));
                    @endphp

                    <h3 class = "fw-semibold fs-4 fs-md-3"> {{ $newDate }} | {{ $program->location }}</h3>

                    <p class = "fw-medium"> {!!$program->description!!} </p>
                    <a href = "{{ $program->link }}" > <img src = "/images/BuyNow.jpg" class = "text-image-ticket"> </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection