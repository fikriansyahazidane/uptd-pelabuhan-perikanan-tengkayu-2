<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function struktur()
    {
        return view('informasi.struktur'); // Pastikan lokasi file sesuai
    }
}
