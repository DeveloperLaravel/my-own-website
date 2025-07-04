<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

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









Route::get('/', [PageController::class,'index'])->name('index');


// Route::get('/dart',[PageController::class,'dart'])->name('dart');



Route::middleware('auth')->group(function () {
   
Route::get('/home', function () {
    return view('pages.dart.index');
})->middleware('auth')->name('home');

Route::get('/flutter',[PageController::class,'flutter'])->name('flutter');
Route::get('/laravel',[PageController::class,'php'])->name('php');

});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('about', [PageController::class,'about'])->name('about');
Route::get('portfolio',[PageController::class,'portfolio'])->name('portfolio');
Route::get('blog',[PageController::class,'blog'])->name('blog');

    }
);







