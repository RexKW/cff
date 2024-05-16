@extends('layouts.template')

@section('title', 'Schedule')

@section('content')
    <div class = "padding bg-5 text-white">
        <div class = "d-flex justify-content-between align-items-center my-2">
            <h1 class = "fw-bold fs-1 me-auto" data-aos = "fade-up" data-aos-duration = "1500"> JADWAL </h1>
            <form method="POST" action="/ticketingsearch" class = "ms-auto justify-content-start">
                @method('post')
                @csrf
                <div class = "d-flex my-2 align-items-center align-middle">
                    <div class="form-group" data-aos = "fade-up" data-aos-duration = "1500">
                        <select class="form-select my-1 fw-bold rounded-0" name="date" required>
                            <option value = "1"> DAY 1 </option>
                            <option value = "2"> DAY 2 </option>
                            <option value = "3"> DAY 3 </option>
                            <option value = "4"> DAY 4 </option>
                            <option value = "5"> DAY 5 </option>
                            <option value = "6"> DAY 6 </option>
                        </select>
                    </div>
                    <div class="ms-1">
                        <button type="submit" style="background-color: transparent; border-color: transparent" data-aos = "fade-up" data-aos-duration = "1500"> <img src = "/images/SearchIcon.png" class = "icon"> </button>
                    </div>
                </div>
            </form>
        </div> 
        <table class = "w-100" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
            @foreach ($schedules as $schedule)
                <tr>
                    <td class = "p-2"> {{ $schedule->time }}  </td>
                    <td class = "p-2"> {{ $schedule->name }} </td>
                    <td class = "p-2"> {{ $schedule->description }} </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection