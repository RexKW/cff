@extends('layouts.template')

@section('title', 'Ticketing')

@section('content')
    <div class = "home-bg h-100"> 
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image  h-100 w-100" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image  h-100 w-100" alt="" draggable="false">
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
                                <option value = "chosen"> The Chosen Screen </option>
                                <option value = "fear"> Unchained Fear Screen </option>
                                <option value = "voices"> Infinite Voices Screen </option>
                                <option value = "reflections"> Limitless Reflections Screen </option>
                                <option value = "pulse"> Endless Pulse Screen </option>
                                <option value = "minds"> Unlocked Minds Screen </option>
                                <option value = "session"> Expert Session </option>
                            </select>
                        </div>
                        {{-- <div class="form-group ms-2">
                            <select class="form-select-p my-2 py-2 fw-bold body-text rounded-0" name="date" required>
                                <option value = "ALL"> ALL </option>
                                <option value = "2025-05-27"> DAY 1 </option>
                                <option value = "2025-05-28"> DAY 2 </option>
                                <option value = "2025-05-29"> DAY 3 </option>
                                <option value = "2025-05-30"> DAY 4 </option>
                                <option value = "2025-06-31"> DAY 5 </option>
                            </select>
                        </div> --}}
                        <input type="hidden" name="date" value="ALL">
                    </div>
                    <button type="submit" class="justify-content-center w-100 body-text btn btn-white py-2 fw-bold"> SEARCH </button>
                </form>
            </div>
        </div>
    </div>
@endsection