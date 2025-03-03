<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SejarahController extends Controller
{
    public function sejarah()
    {

        return view('informasi.sejarah'); // Harus sesuai dengan struktur folder
    }
}


