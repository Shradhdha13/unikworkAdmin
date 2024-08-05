<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Admin | Unikwork</title>
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/vendors/feather/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link href="<?php echo e(url('public/images/favicon.png')); ?>" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?php echo e(URL('/')); ?> "><img src="<?php echo e(asset('images/logo-black.png')); ?>" class="ml-4" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo e(URL('/')); ?> "><img src="<?php echo e(asset('images/unikwork-logo.png')); ?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-settings d-none d-lg-flex dropdown">
            <form id="logout-form" action="<?php echo e(url('admin/logout')); ?>" method="POST" class="mb-0">
              <?php echo csrf_field(); ?>
              <button type="submit" class="dropdown-item"><i class="ti-power-off text-primary"></i>Logout</button>
            </form>




          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item <?php echo e(Request::is('/dashboard') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>


          <?php if(in_array(Auth::user()->role, [1,2,3])): ?>
            <li class="nav-item <?php echo e(Request::is('/add-requirements') || Request::is('/view-career') || Request::is('/career-view') ? 'active' : ''); ?>">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns mdi mdi-face"></i>
                <span class="menu-title">Career</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="<?php echo e(route('add-requirements')); ?>">Add Career</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo e(route('view-career')); ?>">View Career</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo e(route('career-view')); ?>">Career Form Data</a></li>
                </ul>
              </div>
            </li>
            <?php endif; ?>

            <?php if(in_array(Auth::user()->role, [1,2])): ?>
            <li class="nav-item <?php echo e(Request::is('/contact-view') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('contact-view')); ?>">
                <i class="icon-columns mdi mdi-cellphone-android"></i>
                <span class="menu-title">Contact Form Data</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array(Auth::user()->role, [1,3])): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(URL::to('admin/blog')); ?>">
                <i class="icon-columns mdi mdi-blogger"></i>
                <span class="menu-title">Blog</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array(Auth::user()->role, [1,2,3])): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(URL::to('https://hiring.unikwork.com/')); ?>" target="_blank">
              <i class="icon-columns mdi mdi-test-tube"></i>
              <span class="menu-title">Aptitude test</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if(in_array(Auth::user()->role, [1,2])): ?>
            <li class="nav-item <?php echo e(Request::is('/users') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('users')); ?>">
                <i class="icon-columns mdi mdi-account"></i>
                <span class="menu-title">Users</span>
              </a>
            </li>
          <?php endif; ?>

        </ul>
      </nav>
<?php /**PATH /var/www/html/resources/views/admin/layouts/header.blade.php ENDPATH**/ ?>