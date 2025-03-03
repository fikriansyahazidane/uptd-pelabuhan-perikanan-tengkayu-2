@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12 px-6">
        <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Sejarah dan Dasar Hukum</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Bagian Sejarah -->
            <div class="bg-white border-l-4 border-yellow-500 p-6 shadow-lg rounded-lg">
                <h2 class="text-3xl font-semibold text-black mb-4">Sejarah</h2>
                <img src="{{ asset('img/sejarah.png') }}" alt="Logo sejarah" class="w-150 h-auto rounded-lg shadow-md hover:scale-105 transition-transform">
                <p class="text-gray-600 mt-4 leading-relaxed">
                    UPTD Pelabuhan Perikanan Tengkayu II memiliki sejarah panjang dalam pengelolaan dan pengembangan sektor perikanan
                    di Kalimantan Utara. Sejak didirikan, pelabuhan ini telah menjadi pusat aktivitas ekonomi maritim yang penting.
                </p>
            </div>

            <!-- Bagian Dasar Hukum -->
            <div class="bg-white border-l-4 border-yellow-500 p-6 shadow-lg rounded-lg">
                <h2 class="text-3xl font-semibold text-black mb-4">Dasar Hukum</h2>
                <ul class="list-decimal list-inside text-gray-700 space-y-3">
                    <li><span class="font-semibold">UU Nomor 45 Tahun 2009</span> tentang Perikanan</li>
                    <li><span class="font-semibold">UU 17 Tahun 2008</span> Tentang Pelayaran</li>
                    <li><span class="font-semibold">PP Nomor 27 Tahun 2021</span> tentang penyelenggaraan bidang Kelautan dan Perikanan</li>
                    <li><span class="font-semibold">Permen KP Nomor Per. 08/Men/2012</span> tentang Kepelabuhanan Perikanan</li>
                    <li><span class="font-semibold">Peraturan Menteri Kelautan dan Perikanan No. PER.03/PER-KP/2013</span> tentang Kesyahbandaran di Pelabuhan Perikanan</li>
                    <li><span class="font-semibold">Permen KP Nomor 33 Tahun 2021</span> tentang log book penangkapan ikan dan tata kelola pengawakan kapal perikanan</li>
                    <li><span class="font-semibold">Permen KP Nomor 06/KEPMEN-KP/2018</span> tentang Rencana Induk Pelabuhan Perikanan</li>
                    <li><span class="font-semibold">Peraturan Gubernur Kalimantan Utara Nomor 11 Tahun 2018</span> tentang Organisasi dan tata kerja Unit Pelaksana Teknis pada Dinas Kelautan dan Perikanan</li>
                    <li><span class="font-semibold">Peraturan Gubernur Kalimantan Utara Nomor 63 Tahun 2018</span> tentang Pengelolaan dan Pelayanan Jasa Kepelabuhanan</li>
                    <li><span class="font-semibold">Perda Kalimantan Utara No 11 Tahun 2019</span> tentang Retribusi Jasa Usaha</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
