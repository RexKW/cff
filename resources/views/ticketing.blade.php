@extends('layouts.template')

@section('title', 'Ticketing')

@section('content')
    <div class = "home-bg h-100"> 
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <img src="" alt="">
        <div class="container-fluid container padding-home justify-content-center text-center">
            <div class = "d-flex justify-content-center my-4" data-aos = "fade-up" data-aos-duration = "1500">
                <img src = "/images/[WHITE]-BOUNDLESS.png" class = "w-50">
            </div>
            <div class = "d-flex justify-content-center">
                <form method="POST" action="/ticketingsearch" data-aos = "fade-up" data-aos-duration = "1500">
                    @method('post')
                    @csrf
                    <div class = "d-flex justify-content-center my-2">
                        <div class="form-group me-2">
                            <select class="form-select my-2 py-2 fw-bold body-text rounded-0" name="type" required>
                                <option value = "ALL"> ALL </option>
                                <option value = "workshop"> WORKSHOP </option>
                                <option value = "kompetisi"> KOMPETISI </option>
                                <option value = "non-kompetisi"> NON-KOMPETISI </option>
                            </select>
                        </div>
                        <div class="form-group ms-2">
                            <select class="form-select-p my-2 py-2 fw-bold body-text rounded-0" name="date" required>
                                <option value = "ALL"> ALL </option>
                                <option value = "2024-05-28"> DAY 1 </option>
                                <option value = "2024-05-29"> DAY 2 </option>
                                <option value = "2024-05-30"> DAY 3 </option>
                                <option value = "2024-05-31"> DAY 4 </option>
                                <option value = "2024-06-01"> DAY 5 </option>
                                <option value = "2024-06-02"> DAY 6 </option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="justify-content-center w-100 body-text btn btn-white py-2 fw-bold"> SEARCH </button>
                </form>
            </div>
        </div>
    </div>
@endsection