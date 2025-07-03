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
Route::view('dart', 'pages.dart.index');
Route::view('flutter', 'pages.flutter.index');
Route::view('laravel', 'pages.php.index');
Route::view('login', 'auth.login');
Route::view('register', 'auth.register');

    }
);