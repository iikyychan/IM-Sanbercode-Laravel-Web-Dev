

<?php $__env->startSection('judul'); ?>
Detail Film 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e($film->judul); ?></h1>
<h3><?php echo e($film->tahun); ?></h3>
<p><?php echo e($film->ringkasan); ?></p>
<img src="<?php echo e(asset('/uploads/'.$film->poster)); ?>" class="img-fluid" width="10%" alt="Responsive image">
<hr>
<h3>Reviews</h3>

<?php $__empty_1 = true; $__currentLoopData = $film->kritik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="card">
    <div class="card-header">
      <?php echo e($item->owner->name); ?>

    </div>
    <div class="card-body">
      <h5 class="card-title">Review</h5>
      <p class="card-text"><?php echo e($item->content); ?></p>
      <h5 class="card-title">Score</h5>
      <p class="card-text"><?php echo e($item->point); ?></p>
    </div>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h4>Belum ada review</h4>
<?php endif; ?>

<hr>
<form action="<?php echo e(route('kritik.store', $film->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <div class="form-group">
        <label>Reviews</label>
        <textarea name="content" class="form-control" rows=10></textarea>
    </div>
    <div class="form-group">
        <label>Score</label>
        <input type="number" name="point" class="form-control" placeholder="Score">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\project_backend_laravel_review_film\resources\views/film/detil.blade.php ENDPATH**/ ?>