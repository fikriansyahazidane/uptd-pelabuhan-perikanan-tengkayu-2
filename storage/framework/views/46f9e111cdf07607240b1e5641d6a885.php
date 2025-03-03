<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="Website resmi UPTD Pelabuhan Perikanan Tengkayu II Provinsi Kalimantan Utara. Dapatkan informasi terbaru mengenai layanan, berita, dan pengumuman.">
    <meta name="keywords" content="Pelabuhan Perikanan, Tengkayu, Kalimantan Utara, UPTD, Perikanan">
    <meta name="author" content="UPTD Pelabuhan Perikanan Tengkayu II">

    <title>UPTD Pelabuhan Perikanan Tengkayu II Provinsi Kalimantan Utara</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/title.png')); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-100">
    <?php echo $__env->make('partial.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Memanggil Navbar -->
    <div class="container mx-auto p-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
<footer class="bg-gray-300 text-black py-6 mt-10">
    <?php echo $__env->make('partial.shortcut', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Memanggil Navbar -->
    <div class="container mx-auto text-center">
        <p>&copy; <?php echo e(date('Y')); ?> UPTD Pelabuhan Perikanan Tengkayu II. All Rights Reserved.</p>
        <p>Karang Rejo, Kec. Tarakan Barat., Kota Tarakan, Kalimantan Utara| Email: <a href="mailto:tengkayu2@kaltaraprov.go.id" class="text-blue-900">tengkayu2@kaltaraprov.go.id</a></p>
    </div>
</footer>

</html>
<?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/layouts/app.blade.php ENDPATH**/ ?>