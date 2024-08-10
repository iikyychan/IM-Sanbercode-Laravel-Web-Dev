

<?php $__env->startSection('judul'); ?>
Cast Data 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<a href="/cast/create" class="btn btn-sm btn-primary mb-3">add new cast</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $cast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($key + 1); ?></th>
                <td><?php echo e($item->name); ?></td>
                <td>
                    <form action="/cast/<?php echo e($item->id); ?>" method="POST">
                        <a href='/cast/<?php echo e($item->id); ?>' class="btn btn-info btn-sm">Detail</a>
                        <a href='/cast/<?php echo e($item->id); ?>/edit' class="btn btn-warning btn-sm">Edit</a>  
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No Cast</p>
        <?php endif; ?>
      
    </tbody>
  </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/cast/show-data.blade.php ENDPATH**/ ?>