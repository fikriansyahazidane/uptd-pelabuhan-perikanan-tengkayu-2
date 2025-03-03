@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Kontak & Alamat Kantor</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Informasi Kontak -->
            <div class="bg-white p-6 rounded-lg shadow-md border">
                <h2 class="text-xl font-semibold text-gray-700 flex items-center gap-2 mb-4">
                    📍 Alamat & Kontak
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-blue-100 text-blue-600 rounded-md">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 12M13.414 12L9.172 7.757M13.414 12L7.757 6.343M6.343 7.757L12 13.414M9.172 7.757l3.243 3.243" />
                            </svg>
                        </div>
                        <p class="text-gray-600">Karang Rejo, Kec. Tarakan Barat, Kota Tarakan, Kalimantan Utara</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-green-100 text-green-600 rounded-md">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12H8m8 0a4 4 0 10-8 0 4 4 0 008 0zm0 0v1a4 4 0 01-8 0v-1m8 0H8" />
                            </svg>
                        </div>
                        <a href="mailto:dummy@gmail.com" class="text-blue-500 hover:underline">dummy@gmail.com</a>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-red-100 text-red-600 rounded-md">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h4l3-3m0 0l3 3m-3-3v6m9-6h-3m-3 0v6m0 0h6m-6 0l3 3m-3-3l-3 3" />
                            </svg>
                        </div>
                        <p class="text-gray-500">-</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-yellow-100 text-yellow-600 rounded-md">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m-3-3l-3 3m3-3V8m0-4v4m0 8h.01M4.5 21h15a2 2 0 002-2v-2a2 2 0 00-2-2h-15a2 2 0 00-2 2v2a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <p class="text-gray-600">
                            Senin - Kamis: 07:30 - 16:00 <br>
                            Jumat: 07:30 - 16:30
                        </p>
                    </div>
                </div>
            </div>

            <!-- Formulir Kontak -->
            <div class="bg-white p-6 rounded-lg shadow-md border">
                <h2 class="text-xl font-semibold text-gray-700 flex items-center gap-2 mb-4">
                    📩 Hubungi Kami
                </h2>

                <form action="{{ route('kontak.kirim') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm text-gray-700 font-medium">Nama</label>
                        <input type="text" name="nama"
                            class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 outline-none"
                            placeholder="Nama Lengkap" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm text-gray-700 font-medium">Email</label>
                        <input type="email" name="email"
                            class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 outline-none"
                            placeholder="Email" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm text-gray-700 font-medium">Pesan</label>
                        <textarea name="pesan" rows="3"
                            class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Pesan Anda"
                            required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-3 rounded-md text-lg font-medium hover:bg-blue-600 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>

        <!-- Peta Lokasi -->
        <div class="mt-10 bg-white p-6 rounded-lg shadow-md border">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">📍 Peta Lokasi</h2>
            <iframe class="w-full h-56 rounded-md"
                src="https://maps.google.com/maps?q=Pelabuhan%20Tengkayu%20II&t=&z=13&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" loading="lazy">
            </iframe>
            <p class="text-center mt-3">
                <a href="https://maps.app.goo.gl/NHDNTMWyzgxciCkx8" target="_blank" class="text-blue-500 hover:underline">
                    Lihat di Google Maps
                </a>
            </p>
        </div>
    </div>
@endsection
