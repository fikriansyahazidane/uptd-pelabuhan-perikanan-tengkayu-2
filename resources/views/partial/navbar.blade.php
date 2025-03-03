<!-- Header -->
<header class="bg-gray-500 p-2">
    <div class="container mx-auto flex justify-start items-center pr-4">
        <ul class="flex items-center gap-6 text-white">
            <li class="flex items-center">
                <i class="fa fa-phone mr-2 text-white"></i>
                <a href="tel:08123456789" class="hover:text-gray-300">-</a>
            </li>
            <li class="flex items-center">
                <i class="fa fa-envelope mr-2 text-white"></i>
                <a href="mailto:tengkayu2@kaltaraprov.go.id" class="hover:text-gray-300">tengkayu2@kaltaraprov.go.id</a>
            </li>
        </ul>
    </div>
</header>
<!-- Navbar -->
<nav class="bg-white text-black p-4" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="{{ asset('img/logokantor.png') }}" alt="Logo Kantor">
        </a>
        <!-- Toggle Button Mobile -->
        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none">
            <i class="fa fa-bars text-2xl"></i>
        </button>
        <!-- Menu Navbar -->
        <ul class="hidden md:flex items-center space-x-6 uppercase md:block" :class="{ 'block': open, 'hidden': !open }">
            <li><a href="/" class="hover:bg-gray-100 px-4 py-2 rounded">HOME</a></li>
            <!-- Dropdown: Tentang Kami -->
            <li class="relative group">
                <a href="#" class="hover:bg-gray-100 px-4 py-2 rounded inline-flex">TENTANG KAMI</a>
                <ul
                    class="absolute left-0 mt-2 bg-white text-gray-800 shadow-lg rounded-md min-w-max whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 z-10">
                    <li><a href="/informasi/sejarah" class="block px-4 py-2 hover:bg-gray-200">SEJARAH</a></li>
                    <li><a href="/informasi/visi-misi" class="block px-4 py-2 hover:bg-gray-200">VISI MISI</a></li>
                    <li><a href="/informasi/tugas-fungsi" class="block px-4 py-2 hover:bg-gray-200">TUGAS & FUNGSI</a>
                    </li>
                    <li><a href="/informasi/struktur" class="block px-4 py-2 hover:bg-gray-200">STRUKTUR ORGANISASI</a>
                    </li>
                </ul>
            </li>
            <!-- Dropdown: Layanan Publik -->
            <li class="relative group">
                <a href="#" class="hover:bg-gray-100 px-4 py-2 rounded inline-flex">LAYANAN PUBLIK</a>
                <ul
                    class="absolute left-0 mt-2 bg-white text-gray-800 shadow-lg rounded-md min-w-max whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 z-10">
                    <li><a href="https://ppid.kaltaraprov.go.id/" target="_blank"
                            class="block px-4 py-2 hover:bg-gray-200">INFORMASI PUBLIK</a></li>
                    <li><a href="https://www.lapor.go.id/" class="block px-4 py-2 hover:bg-gray-200">LAPORAN
                            PENGADUAN</a></li>
                </ul>
            </li>
            <li><a href="/informasi/berita" class="hover:bg-gray-100 px-4 py-2 rounded">BERITA</a></li>
            <li><a href="/informasi/pengumuman" class="hover:bg-gray-100 px-4 py-2 rounded">PENGUMUMAN</a></li>
            <!-- Dropdown: Galeri -->
            <li class="relative group">
                <a href="#" class="hover:bg-gray-100 px-4 py-2 rounded inline-flex">GALERI</a>
                <ul
                    class="absolute left-0 mt-2 bg-white text-gray-800 shadow-lg rounded-md min-w-max whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 z-10">
                    <li><a href="/galeri/foto" class="block px-4 py-2 hover:bg-gray-100">FOTO</a></li>
                    <li><a href="/galeri/video" class="block px-4 py-2 hover:bg-gray-100">VIDEO</a></li>
                </ul>
            </li>
            <!-- Dropdown: Informasi Lainnya -->
            <li class="relative group">
                <a href="#" class="hover:bg-gray-100 px-4 py-2 rounded inline-flex">INFORMASI LAINNYA</a>
                <ul
                    class="absolute left-0 mt-2 bg-white text-gray-800 shadow-lg rounded-md min-w-max whitespace-nowrap opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-95 group-hover:scale-100 z-10">
                    <li><a href="/tambahan/publikasi" class="block px-4 py-2 hover:bg-gray-200">PUBLIKASI</a></li>
                    <li><a href="/tambahan/informasi" class="block px-4 py-2 hover:bg-gray-200">KONTAK, ALAMAT &amp;
                            PETA LOKASI</a></li>
                    <li><a href="/auth/auth" class="block px-4 py-2 hover:bg-gray-200">LOGIN ADMIN</a></li>
                    <li><a href="https://sipena.tengkayu2.dkp.kaltaraprov.go.id/admin/login" class="block px-4 py-2 hover:bg-gray-200">AKSES SIPENAMAS </a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Tambahkan Alpine.js untuk fungsionalitas responsif -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<!-- Tambahkan Font Awesome jika belum ada -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
