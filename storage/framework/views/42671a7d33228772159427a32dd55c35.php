<?php $__env->startSection('content'); ?>
    <div class="container mx-auto py-12 px-6">
        <!-- Judul Halaman -->
        <h1 class="text-4xl font-bold text-center mb-8 text-black uppercase">
            Struktur Organisasi
        </h1>

        <!-- Kotak Kontainer -->
        <div class="bg-white border-l-4 border-yellow-500 p-6 shadow-lg rounded-lg text-center">
            <!-- Gambar Struktur -->
            <div class="flex flex-col items-center">
                <div class="bg-gray-100 p-4 rounded-lg shadow-md border border-gray-300">
                    <img src="<?php echo e(asset('img/strukrur.png')); ?>"
                         alt="Struktur Organisasi"
                         class="w-full md:w-3/4 lg:w-2/3 mx-auto rounded-lg">
                </div>
            </div>

            <!-- Deskripsi (Opsional) -->
            <p class="text-gray-800 text-lg mt-6 leading-relaxed">
                Struktur organisasi ini menggambarkan pembagian tugas dan wewenang dalam
                <strong>UPTD PMHP</strong>. Dengan struktur yang jelas, kami berkomitmen untuk
                meningkatkan efisiensi dan kualitas pelayanan kepada masyarakat.
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/informasi/struktur.blade.php ENDPATH**/ ?>