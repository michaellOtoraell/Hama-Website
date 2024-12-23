<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
Route::get('/', function () {
    return view('pages.home');
});


// Route::get('/blank',[PagesController::class, 'index']);
// Route::get('/about', [PagesController::class, 'about'])->name('about');
// Route::get('/home', [PagesController::class, 'home'])->name('home');
// Route::get('/services', [PagesController::class, 'services'])->name('services');

