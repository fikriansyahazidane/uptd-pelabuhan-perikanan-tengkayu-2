<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8 flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <div class="flex justify-center mb-6">
            <img src="<?php echo e(asset('img/logokaltara.png')); ?>" alt="Logo Kaltara" class="h-20">
        </div>
        <h2 class="text-2xl font-bold text-center text-gray-900 mb-4">Admin Login</h2>

        
        <?php if(session('error')): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-center">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('login')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>
            <div>
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" value="<?php echo e(old('username')); ?>" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center text-gray-700">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember me
                </label>
                <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
                Sign in
            </button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Dkptengkayu2\resources\views/auth/auth.blade.php ENDPATH**/ ?>