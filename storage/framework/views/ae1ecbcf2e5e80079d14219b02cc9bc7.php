<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Galeri Foto</h1>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php $__currentLoopData = ['berita1.jpg', 'berita2.jpg', 'berita3.jpg', 'berita4.png', 'berita5.jpeg']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative overflow-hidden rounded-lg shadow-lg group">
                <img src="<?php echo e(asset('img/' . $foto)); ?>" alt="Foto Berita" class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <p class="text-white text-lg font-semibold">Lihat Detail</p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/galeri/foto.blade.php ENDPATH**/ ?>