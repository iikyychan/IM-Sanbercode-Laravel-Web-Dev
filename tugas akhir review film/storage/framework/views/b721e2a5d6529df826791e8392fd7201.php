

<?php $__env->startSection('judul'); ?>
Database Film
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->check()): ?>
<a href="/film/create" class="btn btn-sm btn-primary mb-3">add new movie</a>
<?php endif; ?>

<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-4">
        <div class="card" >
            <img src="<?php echo e(asset('/uploads/'.$item->poster)); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h2><?php echo e($item->judul); ?></h2>
              <p><span class="badge badge-info"><?php echo e($item->genre->nama); ?></span><p>
              <p class="card-text"></p>
              <a href="<?php echo e(url('/film/' . $item->id)); ?>" class="btn btn-primary btn-block">Details</a>
              <?php if(auth()->guard()->check()): ?>
              <div class="row my-2">  
                <div class="col">
                    <a href="<?php echo e(url('/film/' . $item->id) . '/edit'); ?>" class="btn btn-info btn-block">Edit</a>
                </div>
                <div class="col">
                  <form action="film/<?php echo e($item->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('Delete'); ?>
                    <input value="Delete" type="submit" class="btn btn-danger btn-block">
                  </form>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
    </div>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>Belum ada Film</h1>
    <?php endif; ?>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\project_backend_laravel_review_film\resources\views/film/show.blade.php ENDPATH**/ ?>