<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(asset('Admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <?php if(auth()->guard()->check()): ?>
        <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>  
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <a href="#" class="d-block">guest</a>
        <?php endif; ?>
        
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="/" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item">
          <a href="/cast" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
              Cast
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/film" class="nav-link">
              <i class="nav-icon fas fa-film"></i>
              <p>
              Movie
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/genre" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
              Genre
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Table
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Table</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/data-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Table</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item bg-danger">
          <a class="nav-link" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <?php echo e(__('Logout')); ?>

          </a>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
              <?php echo csrf_field(); ?>
          </form>
      </li>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
          <a href="/genre" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
              Genre
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/film" class="nav-link">
              <i class="nav-icon fas fa-film"></i>
              <p>
              Movie
              </p>
          </a>
        </li>
        <li class="nav-item bg-primary">
          <a href="/login" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
              Login
              </p>
          </a>
        </li>
        <li class="nav-item bg-warning">
          <a href="/register" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
              Register
              </p>
          </a>
        </li>
        <?php endif; ?>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\project_backend_laravel_review_film\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>