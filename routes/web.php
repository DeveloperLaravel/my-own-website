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
      Route::view('/', 'index');
Route::view('about', 'about');
Route::view('portfolio', 'portfolio');
Route::view('blog', 'blog');

    }
);