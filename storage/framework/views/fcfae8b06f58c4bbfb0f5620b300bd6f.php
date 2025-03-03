<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold mb-8 text-black text-center border-b-4 border-blue-700 pb-3">Galeri Video</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = [
            'https://www.youtube.com/embed/kyJ1lcI3feY',
            'https://www.youtube.com/embed/k4NvNCqXBG8',
            'https://www.youtube.com/embed/wCMdwFuP6vI'
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="relative overflow-hidden rounded-lg shadow-lg group">
                <iframe class="w-full h-64 rounded-lg" src="<?php echo e($video); ?>" frameborder="0" allowfullscreen></iframe>
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <p class="text-white text-lg font-semibold">Tonton Video</p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/galeri/video.blade.php ENDPATH**/ ?>