<?php
use App\Http\Controllers\AuthController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

// Route::get('/dart/{user}', [PageController::class, 'dart'])->middleware('auth')->name('dart');

// Route::get('/dart/{user}',[PageController::class,'dart'])->name('dart');
Route::get('/dart/{user}', function ($user) {
    return view('pages.dart.index',$user); // أو أي صفحة
})->middleware('auth')->name('dart');



Route::view('register','auth.register')->name('register.index');
Route::post('register',[AuthController::class,'register'])->name('register');
Route::get('login', [AuthController::class,'home'])->name('home');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('logout',[AuthController::class,'logout'])->middleware('auth:sanctum');


Route::middleware(['auth:sanctum'])->group(function () {

//     Route::get('/dart/user}', function ($user) {
//     return  view('pages.dart.index',['user'=> $user]);
// })->middleware('auth')->name('dart');

// Route::get('/dart/{user}', function ($user) {
//     return view('pages.dart.index');
// })->middleware('auth')->name('dart');

Route::get('flutter',[PageController::class,'flutter'])->name('flutter');
Route::get('laravel',[PageController::class,'php'])->name('php');

});


Route::get('/', [PageController::class,'index'])->name('index');
Route::get('about', [PageController::class,'about'])->name('about');
Route::get('portfolio',[PageController::class,'portfolio'])->name('portfolio');
Route::get('blog',[PageController::class,'blog'])->name('blog');

    }
);