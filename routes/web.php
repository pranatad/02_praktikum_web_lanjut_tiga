<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
Route::get('/www.educastudio.com', function () {
    return "<center><h1>Ini adalah Halaman Utama</h1></center>";
});

// 2. Halaman daftar product menggunakan route prefix
Route::prefix('/www.educastudio.com')->group(function () {
    Route::get('category', function (){
        return '<center><h2><br><br><br><br><br><br><br><br><br><br>
        marbel-edu-games<br><br>
        marbel-and-friends-kids-games<br><br>
        riri-story-books<br><br>
        kolak-kids-songs</h2></center>';
    });
});

// 3. Halaman news menggunakan route parameter
Route::get('/www.educastudio.com/news/{id}', function ($id) {
    return '<center><h1>
    <br><br><br><br><br><br><br><br><br><br>Ini adalah berita mengenai '
    .$id .'</h1></center>';
});

// 4. Halaman program menggunakan route prefix
Route::prefix('/www.educastudio.com')->group(function () {
    Route::get('program', function (){
        return '<center><h2><br><br><br><br><br><br><br><br><br><br>
        karir<br><br>
        magang<br><br>
        kunjungan-industri</h2></center>';
    });
});

// 5. Halaman About Us menggunakan route biasa
Route::get('/www.educastudio.com/about-us', function () {
    return "<center><h1><br><br><br><br><br><br><br><br>
    About Us<br><br>
    </h1>It was started by two PC game products, they were Marbel and Shoot Empire (as the first winner of Game Competition 2008). Later on, the founder decided to take it more professional by establishing Educa Studio on 1st April 2012. At that moment, we only focused on Edu PC Games. Later, in 2012, we plunged into Mobile Apps and Games. In 2013, we expanded into broader mobile platforms such as Windows Phone and Apple Store (iOS). We have a lot of sucessul IP such as Marbel for Educational Games for Kids, Riri for Interactive Story Books, Kabi for Moslem Kids, Kolak for Interactive Kids Song. In 2017, its amazing year we have a lot of platform to build quality content and expanding our company into merchandising, board games, interactive animation and teacher platform.</center>";
});

// 6. Halaman Contact Us menggunakan route resource
Route::resource('contact', ContactController::class);