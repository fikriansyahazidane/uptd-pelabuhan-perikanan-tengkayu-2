@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6 text-black text-center">Berita Terbaru</h1>

        <div class="bg-white shadow-lg rounded-lg p-6">
            <!-- Carousel Gambar -->
            <div x-data="{ activeSlide: 0, slides: ['berita1.jpg', 'berita2.jpg', 'berita3.jpg'] }" class="relative w-full max-w-4xl mx-auto">
                <!-- Gambar -->
                <div class="relative w-full h-[500px] overflow-hidden flex items-center justify-center">
                    <template x-for="(slide, index) in slides" :key="index">
                        <img :src="'/img/' + slide" x-show="activeSlide === index"
                            class="absolute inset-0 w-full h-full object-contain">
                    </template>
                </div>

                <!-- Tombol Navigasi -->
                <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-900 text-white p-3 rounded-full shadow-md hover:bg-gray-700">
                    ❮
                </button>
                <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-900 text-white p-3 rounded-full shadow-md hover:bg-gray-700">
                    ❯
                </button>

                <!-- Navigasi Bulat -->
                <div class="flex justify-center mt-4 space-x-3">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index" class="w-4 h-4 rounded-full"
                            :class="activeSlide === index ? 'bg-blue-600 scale-110' : 'bg-gray-400 hover:bg-gray-500'">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 p-6 bg-gray-100 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-black mb-3 hover:text-blue-600">Pelabuhan Tengkayu II, Pusat Bisnis Perikanan di Kota Tarakan</h2>
        <ul class="flex space-x-4 text-gray-600 text-sm mb-4">
            <li><i class="fa fa-user"></i> <span>By</span> Admin Aptika</li>
            <li><i class="fa fa-tags"></i> Umum</li>
            <li><i class="fa fa-calendar"></i> 31 March 2023</li>
        </ul>
        <p class="text-gray-800 leading-relaxed">
            Berada di penghujung Jalan Gajah Mada, Kelurahan Karang Anyar Pantai Kecamatan Tarakan Barat, pelabuhan ini
            memiliki luas kawasan kepelabuhanan sekitar 5,5 hektare. Terdiri dari daratan dan perairan di bawah pengelolaan
            Unit Pelaksana Teknis (UPT) Pelabuhan Tengkayu II.
        </p>
        <p class="text-gray-800 leading-relaxed mt-4">
            Berdasarkan data dari UPT Pelabuhan Tengkayu II yang berada di DKP Kaltara, di pelabuhan ini juga dilakukan
            sejumlah pungutan dan pelayanan penerbitan perizinan tertentu. Seperti, pungutan retribusi kepelabuhanan,
            pelayanan penerbitan Surat Persetujuan Berlayar (SPB) kapal perikanan, penerbitan Sertifikasi Hasil Tangkapan
            Ikan (SHTI) khusus komoditi hasil perikanan (tangkap) yang akan diekspor ke Uni Eropa.
        </p>
        <p class="text-gray-800 leading-relaxed mt-4">
            Dari pelayanan dan pungutan tersebut berhasil diperoleh PAD tercatat, pada 2018 mencapai Rp 2,028 miliar atau
            sedikit lebih tinggi dibanding tahun sebelumnya yang mencapai Rp 1,953 miliar dengan distribusi kontainer
            sebanyak 520 kontainer. PAD yang diperoleh tersebut juga diupayakan untuk ditingkatkan pada pengelolaannya ke
            depan.
        </p>
    </div>
@endsection
