<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
      Route::view('/', 'pages.index');
Route::view('about', 'pages.about');
Route::view('portfolio', 'pages.portfolio');
Route::view('blog', 'pages.blog');

    }
);