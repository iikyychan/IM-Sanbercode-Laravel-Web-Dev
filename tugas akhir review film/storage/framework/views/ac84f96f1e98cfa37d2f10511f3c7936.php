

<?php $__env->startSection('judul'); ?>
Detail Genre 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action='/genre/<?php echo e($genre->id); ?>'>
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
      <label for="genre-name">Nama</label>
      <input type="text" class="form-control" value="<?php echo e($genre->nama); ?>" id='genre-name' name='nama' placeholder="Input Genre Name" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/genre/edit.blade.php ENDPATH**/ ?>