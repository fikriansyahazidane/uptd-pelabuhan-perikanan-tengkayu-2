<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function informasiPublik()
    {
        return view('layanan.informasi-Publik');
    }
}
