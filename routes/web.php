<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/index');
});

use App\Http\Controllers\MateriController;

Route::get('/pengertianmusik', [MateriController::class, 'pengertianmusik'])->name('pengertianmusik');
Route::get('/simbolmusik', [MateriController::class, 'simbolmusik'])->name('simbolmusik');
Route::get('/jenismusik', [MateriController::class, 'jenismusik'])->name('jenismusik');
Route::get('/fungsialatmusik', [MateriController::class, 'fungsialatmusik'])->name('fungsialatmusik');

use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');

use App\Http\Controllers\AuthController;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

use App\Http\Controllers\LatihanSoalController;

Route::get('/latihan-soal', [LatihanSoalController::class, 'index']);
Route::post('/latihan-soal', [LatihanSoalController::class, 'submit'])->name('latihan_soal.submit');

use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/about', [ContactController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/pricing', [ContactController::class, 'pricing'])->name('pricing');
Route::get('/faq', [ContactController::class, 'faq'])->name('faq');

Route::prefix('blog')->group(function () {
    Route::get('/', [ContactController::class, 'blogHome'])->name('blog.home');
    Route::get('/post', [ContactController::class, 'blogPost'])->name('blog.post');
});

Route::prefix('portfolio')->group(function () {
    Route::get('/', [ContactController::class, 'portfolioOverview'])->name('portfolio.overview');
    Route::get('/item', [ContactController::class, 'portfolioItem'])->name('portfolio.item');
});






