<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; // Pastikan tabel ini sesuai dengan database
    protected $fillable = ['judul', 'konten', 'gambar'];
}


