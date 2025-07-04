<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('auth:sanctum')->get('/user',[AuthController::class,'user']);

// ✅ تسجيل مستخدم جديد
Route::post('/register', [AuthController::class, 'register']);

// ✅ تسجيل دخول مستخدم
Route::post('/login', [AuthController::class, 'login']);

// ✅ مسارات تتطلب توثيق باستخدام Sanctum
Route::middleware('auth:sanctum')->group(function () {

    // ✅ جلب بيانات المستخدم الحالي
    Route::get('/user', [AuthController::class, 'user']);

    // ✅ تسجيل الخروج (مسح التوكن)
    Route::post('/logout', [AuthController::class, 'logout']);
});
