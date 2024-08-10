

<?php $__env->startSection('judul'); ?>
Detail Cast 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action='/cast/<?php echo e($cast->id); ?>'>
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
      <label for="cast-name">Cast Name</label>
      <input type="text" class="form-control" value="<?php echo e($cast->name); ?>" id='cast-name' name='name' placeholder="Input Cast Name" >
    </div>
    <div class="form-group">
      <label for="cast-age">Cast Age</label>
      <input type="number" name="umur" class="form-control" value="<?php echo e($cast->umur); ?>" id="cast-age" placeholder="Input Cast Age">
    </div>
    <div class="form-group">
        <label for="cast-bio">Bio</label>
        <textarea type="password" name="bio" class="form-control" rows=10 id="cast-bio" placeholder="Input Cast Bio" ><?php echo e($cast->bio); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/cast/edit.blade.php ENDPATH**/ ?>