<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});
Route::view('home', 'pages/home')->name('home');

Route::view('services', 'pages/services')->name('services');

Route::view('about-us', 'pages/about')->name('about-us');

Route::view('our-team', 'pages/team')->name('our-team');


Route::view('villamercedes', 'pages/villamercedes')->name('villamercedes');

Route::view('gestock', 'pages/gestock')->name('gestock');

Route::view('api-integration', 'pages/api-integration')->name('api-integration');

Route::view('contact-us', 'partials/contact-us')->name('contact-us');



