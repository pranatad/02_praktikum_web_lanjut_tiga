<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 1. Halaman Utama menggunakan route biasa
Route::get('/', [HomeController::class, 'index']);

// 2. Halaman daftar product menggunakan route prefix
Route::prefix('category')->group(function () {
    Route::get('marbel-edu-games', [ProductController::class, 'marbeledu']);
    Route::get('marbel-and-friends-kids-games', [ProductController::class, 'marbelfriends']);
    Route::get('riri-story-books', [ProductController::class, 'riristory']);
    Route::get('kolak-kids-songs', [ProductController::class, 'kolakkids']);
});

// 3. Halaman news menggunakan route parameter

Route::get('news/{id}', function ($id) {
    return '<center><h1>
    <br><br><br><br><br><br><br><br><br><br>Ini adalah berita mengenai '
    .$id .'</h1></center>';
});

// 4. Halaman program menggunakan route prefix
Route::prefix('program')->group(function () {
    Route::get('karir', [ProgramController::class, 'karir']);
    Route::get('magang', [ProgramController::class, 'magang']);
    Route::get('kunjungan-industri', [ProgramController::class, 'kunjungan']);

});

// 5. Halaman About Us menggunakan route biasa
Route::get('about-us', [AboutController::class, 'about']);

// 6. Halaman Contact Us menggunakan route resource
Route::resource('www.educastudio.com/contact-us', ContactController::class);

Route::resource('www.educastudio.com/contact-us', ContactController::class)->only([
'index', 'create'
]);