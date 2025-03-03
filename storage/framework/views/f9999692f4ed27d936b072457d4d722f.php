<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Publikasi</h1>

    <?php if($publikasi->isEmpty()): ?>
        <p class="text-center text-gray-600 text-lg">Belum ada publikasi tersedia.</p>
    <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $publikasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>"
                     alt="Publikasi <?php echo e($item->judul); ?>"
                     class="w-full h-56 object-cover">
                <div class="p-5">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($item->judul); ?></h2>
                    <p class="text-gray-600 text-sm mb-4"><?php echo e(Str::limit($item->deskripsi, 120)); ?></p>
                    <?php if($item->file): ?>
                        <a href="<?php echo e(asset('storage/' . $item->file)); ?>"
                           target="_blank"
                           class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-blue-700 transition">Download Publikasi</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/tambahan/publikasi.blade.php ENDPATH**/ ?>