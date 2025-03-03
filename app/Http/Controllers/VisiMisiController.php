<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function visiMisi()
    {
        return view('informasi.visi-misi'); // Pastikan lokasi file sesuai
    }
}
