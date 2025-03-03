@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Galeri Foto</h1>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach (['berita1.jpg', 'berita2.jpg', 'berita3.jpg', 'berita4.png', 'berita5.jpeg'] as $foto)
            <div class="relative overflow-hidden rounded-lg shadow-lg group">
                <img src="{{ asset('img/' . $foto) }}" alt="Foto Berita" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <p class="text-white text-lg font-semibold">Lihat Detail</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
