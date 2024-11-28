<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="SEO_title" content="<?php echo $__env->yieldContent('SEO_title'); ?>">
    
    <title>Admin | Unikwork</title>
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/vendors/feather/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('public/admin-assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link href="<?php echo e(url('public/images/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('vendor/bootstrap/css/font-awesome.min.css')); ?>" rel="stylesheet">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<?php echo e(asset('vendor/googlefont.css')); ?>" rel="stylesheet">


<link href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>">

  

</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?php echo e(URL('/')); ?> "><img src="<?php echo e(asset('images/logo-black.png')); ?>" class="ml-4" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo e(URL('/')); ?> "><img src="<?php echo e(asset('images/unikwork-logo.png')); ?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
       

        <h3 class="txt-dark"> <?php echo $__env->yieldContent('pagename'); ?></h3>
   
    
          

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-settings d-none d-lg-flex dropdown">
          <div class="dropdown navbar-nav navbar-nav-right">
            <img src="<?php echo e(asset('images/user_logo.svg')); ?>" alt="Profile Icon" class="profile-icon" width="40px"/>
            <div class="dropdown-options">
              <form id="logout-form" action="<?php echo e(url('admin/logout')); ?>" method="POST" class="mb-0">
                <?php echo csrf_field(); ?>
                <button id="logout-button" type="submit" class="dropdown-item"><i class="ti-power-off text-primary"></i>Logout</button>
              </form>
            </div>
          </div>
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
        <div class="h-divider"></div>
        <ul class="nav">
          <li class="nav-item <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
              <span class="nav-icon"></span>
                <span class="menu-title side_ico">Dashboard</span>
            </a>
        </li>
        
      

       
          <?php if(in_array(Auth::user()->role, [1,2,3])): ?>
            <li class="nav-item <?php echo e(Request::is('/view-career') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('view-career')); ?>">
                <span class="nav-icon-career"></span>
                <span class="menu-title side_ico">View Career</span>
              </a>
            </li>
          <?php endif; ?>

          
      
          <?php if(in_array(Auth::user()->role, [1,2,3])): ?>
            <li class="nav-item <?php echo e(Request::is('/career-view') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('career-view')); ?>">
                <span class="nav-icon-resume"></span>
                <span class="menu-title side_ico">Resumes</span>
              </a>
            </li>
          <?php endif; ?>
      
          <?php if(in_array(Auth::user()->role, [1,2])): ?>
            <li class="nav-item <?php echo e(Request::is('/contact-view') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('contact-view')); ?>">
                <span class="nav-icon-contact"></span>
                <span class="menu-title side_ico">Contact Form</span>
              </a>
            </li>
          <?php endif; ?>
      
          <?php if(in_array(Auth::user()->role, [1,3])): ?>
            <li class="nav-item">
              
              <a class="nav-link" href="<?php echo e(URL::to('admin/bloglist')); ?>">
                <span class="nav-icon-blog"></span>
                <span class="menu-title side_ico">Blog</span>
              </a>
            </li>
          <?php endif; ?>
      
          
      
          <?php if(in_array(Auth::user()->role, [1,2])): ?>
            <li class="nav-item <?php echo e(Request::is('/users') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('users')); ?>">
                
                <span class="nav-icon-user"></span>
                <span class="menu-title side_ico">Users</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array(Auth::user()->role, [1,2])): ?>
            <li class="nav-item <?php echo e(Request::is('/seo_details') ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('seo_details')); ?>">
                
                <span class="nav-icon-seo"></span>
                <span class="menu-title side_ico">SEO Page Details</span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('logout-button').addEventListener('click', function (e) {
      e.preventDefault();
    // Show SweetAlert confirmation
    Swal.fire({
      title: 'Are you sure?',
      text: "Do you want to log out?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, logout!',
      cancelButtonText: 'Cancel',
      reverseButtons: true,
      customClass: {
        confirmButton: 'btn btn-primary',  // Change confirm button to orange (Bootstrap class 'btn-warning')
        cancelButton: 'btn btn-secondary'  // Optional: Change cancel button to gray (Bootstrap class 'btn-secondary')
      }
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user confirms, submit the logout form
        document.getElementById('logout-form').submit();
      }
    });
  });

document.addEventListener('DOMContentLoaded', function() {
    const profileContainer = document.querySelector('.profile-container');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Show the dropdown menu on mouseover
    profileContainer.addEventListener('mouseover', function() {
        dropdownMenu.style.display = 'block';
    });

    // Hide the dropdown menu on mouseout
    profileContainer.addEventListener('mouseout', function() {
        dropdownMenu.style.display = 'none';
    });
});


</script><?php /**PATH C:\xampp\htdocs\unikworkAdmin\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>