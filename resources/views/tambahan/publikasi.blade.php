@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Publikasi</h1>

    @if ($publikasi->isEmpty())
        <p class="text-center text-gray-600 text-lg">Belum ada publikasi tersedia.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($publikasi as $item)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('storage/' . $item->gambar) }}"
                     alt="Publikasi {{ $item->judul }}"
                     class="w-full h-56 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $item->judul }}</h2>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($item->deskripsi, 120) }}</p>
                    @if ($item->file)
                        <a href="{{ asset('storage/' . $item->file) }}"
                           target="_blank"
                           class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-blue-700 transition">Download Publikasi</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
