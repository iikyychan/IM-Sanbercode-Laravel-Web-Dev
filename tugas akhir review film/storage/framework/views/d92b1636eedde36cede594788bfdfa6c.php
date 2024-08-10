

<?php $__env->startSection('judul'); ?>
List Movie by Genre
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($genre->nama); ?></h1>
<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $genre->listMovie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-4">
        <div class="card" >
            <img src="<?php echo e(asset('/uploads/'.$item->poster)); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title"><?php echo e($item->judul); ?></h2>
              <p class="card-text"></p>
              <a href="<?php echo e(url('/film/' . $item->id)); ?>" class="btn btn-primary btn-block">Details</a>
            </div>
          </div>
    </div>   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No movie details available.</p>
    <?php endif; ?>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\project_backend_laravel_review_film\resources\views/genre/detail.blade.php ENDPATH**/ ?>