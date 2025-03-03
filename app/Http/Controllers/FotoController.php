<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function foto()
    {
        return view('galeri.foto');
    }
}
