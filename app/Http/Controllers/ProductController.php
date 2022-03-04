<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbeledu() {
        return '<center><h1>Ini adalah kategori pertama</h1></center>';
    }

    public function marbelfriends() {
        return '<center><h1>Ini adalah kategori kedua</h1></center>';
    }

    public function riristory() {
        return '<center><h1>Ini adalah kategori ketiga</h1></center>';
    }

    public function kolakkids() {
        return '<center><h1>Ini adalah kategori keempat</h1></center>';
    }

}
