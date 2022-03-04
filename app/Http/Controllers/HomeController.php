<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return '<center><h1>Ini adalah Halaman Utama</h1></center>';
    }
}
