<?php

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



//demo route for frontend design
Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/about', function () {
    return view('frontend.pages.modules.about');
});
Route::get('/contact', function () {
    return view('frontend.pages.modules.contact');
});
Route::get('/concerns', function () {
    return view('frontend.pages.modules.concerns');
});
Route::get('/news', function () {
    return view('frontend.pages.modules.news');
});
Route::get('/dashboard', function () {
    return view('backend.pages.index');
});
