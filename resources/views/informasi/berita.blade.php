@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <!-- Judul Halaman -->
        <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">
            Berita Terbaru
        </h1>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Berita 1 -->
            <div class="mt-8 bg-white border-l-4 border-yellow-500 p-6 shadow-lg rounded-lg">
                <img src="{{ asset('img/benuanta.jpg') }}" alt="Berita 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <p class="text-gray-700 text-sm flex items-center">
                        📅 24 Februari 2024 | 📰 Benuanta
                    </p>
                    <h2 class="text-xl font-semibold text-black mt-2">
                        Pelabuhan Tengkayu II Bakal Fokus Jadi Pelabuhan Perikanan
                    </h2>
                    <p class="text-gray-900 mt-2 leading-relaxed">
                        benuanta.co.id, TARAKAN – Pemerintah Provinsi Kaltara akan memaksimalkan fungsi Pelabuhan Tengkayu
                        II sebagai pelabuhan khusus perikanan. Hal ini tertuang pada Permen KKP Nomor 20 Tahun 2014 yang
                        mana Pelabuhan Perikanan mempunyai tugas melaksanakan pengelolaan dan pelayanan pemanfaatan sumber
                        daya ikan, serta keselamatan operasional kapal perikanan....
                    </p>
                    <a href="https://benuanta.co.id/index.php/2024/02/24/pelabuhan-tengkayu-ii-bakal-fokus-jadi-pelabuhan-perikanan/135827/17/49/32/"
                        class="mt-4 inline-block text-white bg-gray-800 hover:bg-gray-900 px-4 py-2 rounded-md">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="mt-8 bg-white border-l-4 border-yellow-500 p-6 shadow-lg rounded-lg">
                <img src="{{ asset('img/berita4.png') }}" alt="Berita 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <p class="text-gray-700 text-sm flex items-center">
                        📅 17 May 2024 | 📰 RRI (Radio Republik Indonesia)
                    <h2 class="text-xl font-semibold text-black mt-2">
                        Melampaui Target, Pelabuhan Tengkayu II Setor PAD Rp 2 Milyar
                    </h2>
                    <p class="text-gray-900 mt-2 leading-relaxed">
                        BRN, Tarakan: Pelabuhan Tengkayu II turut mengimplementasikan Perda Nomor 1 Tahun 2024 tentang Pajak
                        Daerah dan Retribusi Daerah. Dari implementasi ini, terdapat penyesuaian tarif retribusi masuk di
                        lingkungan Pelabuhan Tengkayu II....
                    </p>
                    <a href="https://www.rri.co.id/daerah/700038/melampaui-target-pelabuhan-tengkayu-ii-setor-pad-rp-2-milyar"
                        class="mt-4 inline-block text-white bg-gray-800 hover:bg-gray-900 px-4 py-2 rounded-md">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
            <!-- Berita 3 -->
            <div class="mt-8 bg-white border-l-4 border-yellow-500 p-6 shadow-lg rounded-lg">
                <img src="{{ asset('img/radartarakan.jpg') }}" alt="Berita 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <p class="text-gray-700 text-sm flex items-center">
                        📅 18 Mei 2024 | 📰 Radar Tarakan
                    </p>
                    <h2 class="text-xl font-semibold text-black mt-2">
                        Optimistis Realisasi PAD di Pelabuhan Tengkayu II Tarakan Tercapai
                    </h2>
                    <p class="text-gray-900 mt-2 leading-relaxed">TARAKAN - Unit Pelaksana Teknis Daerah (UPTD) Pelabuhan
                        Tengkayu II Tarakan tetap optimis dengan realisasi Pendapatan Asli Daerah (PAD) tahun ini akan
                        terealisasi sesuai target. Apalagi saat ini sudah dilakukan penyesuaian retribusi sesuai Peraturan
                        Daerah (Perda) Provinsi Kaltara Nomor 1 Tahun 2024 sejak 1 Maret lalu....
                    </p>
                    <a href="https://radartarakan.jawapos.com/tarakan/2414664813/optimistis-realisasi-pad-di-pelabuhan-tengkayu-ii-tarakan-tercapai"
                        class="mt-4 inline-block text-white bg-gray-800 hover:bg-gray-900 px-4 py-2 rounded-md">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
