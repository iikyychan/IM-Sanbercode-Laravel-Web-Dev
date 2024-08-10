

<?php $__env->startSection('judul'); ?>
Detail Cast 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($cast): ?>
    <h1><?php echo e($cast->name); ?></h1>
    <p><?php echo e($cast->bio); ?></p>
<?php else: ?>
    <p>No cast details available.</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/cast/detail.blade.php ENDPATH**/ ?>