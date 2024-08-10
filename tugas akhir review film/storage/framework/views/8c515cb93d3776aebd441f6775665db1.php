

<?php $__env->startSection('judul'); ?>
Detail Film 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($film->judul); ?></h1>
<h3><?php echo e($film->tahun); ?></h3>
<p><?php echo e($film->ringkasan); ?></p>
<img src="<?php echo e(asset('/uploads/'.$film->poster)); ?>" class="img-fluid" width="100%" alt="Responsive image">

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/film/detil.blade.php ENDPATH**/ ?>