

<?php $__env->startSection('judul'); ?>
Detail Genre 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action='/film/<?php echo e($film->id); ?>' enctype="multipart/form-data">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php echo method_field('PUT'); ?>

    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" value="<?php echo e($film->judul); ?>" name='judul'>
    </div>
    <div class="form-group">
        <label>Ringkasan</label>
        <textarea class="form-control" name='ringkasan'><?php echo e($film->judul); ?></textarea>
      </div>
      <div class="form-group">
        <label>Tahun</label>
        <input type="number" class="form-control" value="<?php echo e($film->tahun); ?>" name='tahun'>
      </div>
      <div class="form-group">
        <label for="filmposter">Poster</label>
        <input type="file" value="<?php echo e($film->poster); ?>" class="form-control" id='filmposter' name='poster'>
      </div>
      <div class="form-group">
        <label>Genre</label>
        <select name="genre_id" class="form-control">
            <option value="">---Pilih Genre---</option>
            <?php $__empty_1 = true; $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->nama); ?></option>>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>>
            <?php endif; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\project_backend_laravel_review_film\resources\views/film/edit.blade.php ENDPATH**/ ?>