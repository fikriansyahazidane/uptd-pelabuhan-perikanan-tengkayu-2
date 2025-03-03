<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
public function index()
{
    $berita = Berita::latest()->take(3)->get();
return view('home', compact('berita'));

}

}
