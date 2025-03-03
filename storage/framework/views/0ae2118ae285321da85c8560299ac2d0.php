<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Pengumuman Terbaru</h1>

        <div class="space-y-6">
            <!-- Pengumuman 1 -->
            <div class="bg-white shadow-lg rounded-md p-6 border-l-8 border-blue-700 flex items-start">
                <div class="mr-4 text-blue-700 text-4xl">
                    <i class="fas fa-ship"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-black hover:text-blue-700 transition-colors duration-300">Jadwal Pendataan Kapal</h2>
                    <p class="text-gray-500 text-sm mb-2">Diposting pada: 21 Februari 2025</p>
                    <p class="text-gray-700 leading-relaxed">Pendataan Kapal Nelayan Baru dan Perpanjangan Surat Izin Kapal...</p>
                    <a href="#" class="text-blue-700 font-semibold mt-3 inline-block hover:underline">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Pengumuman 2 -->
            <div class="bg-white shadow-lg rounded-md p-6 border-l-8 border-green-700 flex items-start">
                <div class="mr-4 text-green-700 text-4xl">
                    <i class="fas fa-bus"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-black hover:text-green-700 transition-colors duration-300">Pendaftaran Mudik Gratis Dibuka</h2>
                    <p class="text-gray-500 text-sm mb-2">Diposting pada: 18 Februari 2025</p>
                    <p class="text-gray-700 leading-relaxed">Bagi masyarakat yang ingin mengikuti program mudik gratis, pendaftaran telah dibuka hingga...</p>
                    <a href="#" class="text-green-700 font-semibold mt-3 inline-block hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/informasi/pengumuman.blade.php ENDPATH**/ ?>