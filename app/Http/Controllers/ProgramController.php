<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        return '<center><h1>Ini adalah program karir</h1></center>';
    }

    public function magang() {
        return '<center><h1>Ini adalah program magang</h1></center>';
    }

    public function kunjungan() {
        return '<center><h1>Ini adalah program kunjungan industri</h1></center>';
    }
}
