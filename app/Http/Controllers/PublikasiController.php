<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class PublikasiController extends Controller
{
    public function publikasi() // Ganti dari publiki() ke index()
    {
        $publikasi = Publikasi::latest()->get();
        return view('tambahan.publikasi', compact('publikasi'));
    }
}
