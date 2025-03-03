<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function index()
    {
        return view('tambahan.informasi');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        // Simpan atau kirim email (opsional)
        return back()->with('success', 'Pesan Anda telah dikirim!');
    }
}
