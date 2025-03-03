@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <header
        class="relative w-full flex flex-col-reverse md:flex-row items-center bg-gradient-to-r from-gray-100 to-gray-500 text-black py-16 px-6">
        <div class="w-full md:w-1/2 text-center md:text-left flex flex-col justify-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight animate-fade-in">
                UPTD Pelabuhan Perikanan Tengkayu II <br> Provinsi Kalimantan Utara
            </h1>
            <p class="text-black text-lg mt-4 max-w-lg animate-fade-in-delay">
                Pusat perikanan dengan fasilitas modern, mendukung kesejahteraan nelayan dan kemajuan ekonomi maritim.
            </p>
        </div>
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{ asset('img/logokantor.png') }}" alt="Header Image"
                class="w-[80%] md:w-full max-w-md rounded-xl shadow-lg hover:scale-105 transition-transform">
        </div>
    </header>

    <!-- About & Instagram Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- About Section -->
            <div class="animate-slide-in-left">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                <p class="text-gray-700 leading-relaxed">
                    UPTD Pelabuhan Perikanan Tengkayu II adalah pusat kegiatan perikanan yang bertujuan untuk
                    meningkatkan produktivitas nelayan serta mendukung distribusi hasil laut secara efisien.
                    Kami menyediakan berbagai fasilitas modern guna memastikan operasional pelabuhan berjalan optimal.
                </p>
                <h3 class="text-xl font-semibold mt-6">Keunggulan Pelabuhan:</h3>
                <ul class="mt-4 space-y-3 text-gray-800">
                    <li class="flex items-center">
                        <i class="fas fa-user-tie text-blue-500 mr-3"></i>
                        Manajemen profesional dengan pelayanan terbaik.
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-water text-teal-500 mr-3"></i>
                        Fasilitas modern untuk mendukung aktivitas nelayan.
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-shield-alt text-red-500 mr-3"></i>
                        Keamanan pelabuhan terjaga 24/7.
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt text-green-500 mr-3"></i>
                        Lokasi strategis untuk distribusi hasil laut lebih cepat.
                    </li>
                </ul>
            </div>

            <!-- Instagram Section -->
            <div class="text-center animate-slide-in-right">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Instagram Kami</h2>
                <div class="flex justify-center">
                    <iframe src="https://www.instagram.com/dkp.kaltara/embed"
                        class="w-full max-w-md h-[400px] border rounded-lg shadow-lg" frameborder="0"
                        scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
