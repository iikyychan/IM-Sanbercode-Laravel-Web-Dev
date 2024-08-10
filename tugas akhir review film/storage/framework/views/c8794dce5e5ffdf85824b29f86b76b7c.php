

<?php $__env->startSection('judul'); ?>
Create New Film
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="/film" enctype="multipart/form-data">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="judul-film">Judul</label>
      <input type="text" class="form-control" id='judul-film' name='judul' placeholder="Input Cast Name" >
    </div>
    <div class="form-group">
        <label for="story">Ringkasan</label>
        <textarea type="password" name="ringkasan" class="form-control" rows=10 id="story" placeholder="Input Movie Story"></textarea>
    </div>
    <div class="form-group">
      <label for="year">Tahun</label>
      <input type="number" name="tahun" class="form-control" id="year" placeholder="Input Year release">
    </div>
    <div class="form-group">
        <label for="filmposter">Poster</label>
        <input type="file" class="form-control" id='filmposter' name='poster'>
    </div>
        <div class="form-group">
        <label>Genre</label>
        <select name="genre_id" class="form-control">
            <option value="">---Pilih Genre---</option>
            <?php $__empty_1 = true; $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option value="">Tidak ada kategori</option>
            <?php endif; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12laravel\resources\views/film/tambah.blade.php ENDPATH**/ ?>