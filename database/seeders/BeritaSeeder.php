<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        Berita::create([
            'judul' => 'Pelabuhan Perikanan Tengkayu II Resmi Beroperasi',
            'konten' => 'Pelabuhan Perikanan Tengkayu II mulai beroperasi dengan fasilitas yang lebih modern...',
            'gambar' => 'pelabuhan.jpg',
            'penulis' => 'Admin',
            'tanggal_publikasi' => now(),
        ]);

        Berita::create([
            'judul' => 'Kegiatan Bersih Laut di Pelabuhan Tengkayu II',
            'konten' => 'Kegiatan bersih laut dilakukan oleh nelayan dan komunitas lingkungan...',
            'gambar' => 'bersih-laut.jpg',
            'penulis' => 'Admin',
            'tanggal_publikasi' => now(),
        ]);
    }
}
