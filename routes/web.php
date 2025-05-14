<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/aboutus', function() {
    return view('boundless.aboutus');
});

Route::get('/catalog', function(){
    return view('boundless.catalog');
});

Route::get('/judges', function() {
    return view('boundless.judges');
});

Route::get('/kurator', function() {
    return view('boundless.kurator');
});

Route::get('/archive', function() {
    return view('boundless.archive');
});

Route::get('/accessibility', function(){
    return view('boundless.accessibility');
});


Route::get('/ticketing', function(){
    return view('ticketing');
});



Route::post('/ticketingsearch', [ProgramController::class, 'search']);

Route::get('/program', function(){
    return view('categories');
});

Route::get('/program/{kategori}', [FilmController::class, 'detail']);

Route::get('/schedule', [ScheduleController::class, 'index']);

Route::get('/schedule/{day}', [ScheduleController::class, 'search']);

Route::get('/workshop', function(){
    return view('program.workshop');
});

Route::get('/unseenSeries', function(){
    return view('program.unseenseries');
});

Route::get('/boundlessSeries', function(){
    return view('program.boundlessseries');
});

Route::get('/unseenFestival', function(){
    return view('program.unseenfestival');
});

Route::get('/presscenter', [PressController::class, 'index'])->name('presscenter');

Route::post('/pressSearch', [PressController::class, 'search']);

