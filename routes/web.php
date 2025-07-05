<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

Route::view('/register','auth.register')->name('register.index');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::view('/login','auth.login')->name('login.index');
Route::post('/login',[AuthController::class,'login'])->name('login');


Route::middleware('auth')->group(function () {
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
Route::get('/dart',[PageController::class,'dart'])->name('dart');
Route::get('/flutter',[PageController::class,'flutter'])->name('flutter');
Route::get('/php',[PageController::class,'laravel'])->name('php');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});





Route::get('/', [PageController::class,'index'])->name('index');
Route::get('about', [PageController::class,'about'])->name('about');
Route::get('portfolio',[PageController::class,'portfolio'])->name('portfolio');
Route::get('blog',[PageController::class,'blog'])->name('blog');

    }
);







