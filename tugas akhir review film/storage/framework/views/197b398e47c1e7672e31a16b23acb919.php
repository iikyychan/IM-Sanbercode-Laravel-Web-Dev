

<?php $__env->startSection('judul'); ?>
Welcome page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Selamat Datang <?php echo e($namaDepan); ?> <?php echo e($namaBelakang); ?></h1>
    <h2>Terimakasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/page/welcome.blade.php ENDPATH**/ ?>