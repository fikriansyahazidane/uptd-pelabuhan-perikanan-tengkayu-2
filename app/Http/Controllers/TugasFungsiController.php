<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasFungsiController extends Controller
{
    public function tugasfungsi()
    {
        return view('informasi.tugas-fungsi');
    }
}
