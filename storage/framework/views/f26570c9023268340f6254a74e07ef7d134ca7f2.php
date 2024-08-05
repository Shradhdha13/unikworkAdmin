<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>BlogEtcPost Blog Admin - <?php echo e(config('app.name')); ?></title>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" crossorigin="anonymous">

    <!-- Styles -->
    <?php if(file_exists(public_path('blogetc_admin_css.css'))): ?>
        <link href="<?php echo e(asset('blogetc_admin_css.css')); ?>" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        
        
        
    <?php endif; ?>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?> WebDevEtc Blog Admin
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="<?php echo e(route("blogetc.index")); ?>">
                            Blog home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            Logged in as <?php echo e(Auth::user()->name); ?>

                        </a>
                    </li>
                    <?php if(\Route::has('logout')): ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php echo $__env->make("blogetc_admin::layouts.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-md-9 ">


                    <?php if(isset($errors) && count($errors)): ?>
                        <div class="alert alert-danger">
                            <b>Sorry, but there was an error:</b>
                            <ul class="m-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(\WebDevEtc\BlogEtc\Helpers::hasFlashedMessage()): ?>
                        <div class="alert alert-info">
                            <h3><?php echo e(\WebDevEtc\BlogEtc\Helpers::pullFlashedMessage()); ?></h3>
                        </div>
                    <?php endif; ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </main>
</div>

<div class="text-center mt-5 pt-5 mb-3 text-muted">
    <small><a href="https://webdevetc.com/">Laravel Blog Package provided by Webdevetc</a></small>
</div>


<?php if( config("blogetc.use_wysiwyg") && config("blogetc.echo_html") && (in_array( Request::route()->getName() ,[ 'blogetc.admin.create_post' , 'blogetc.admin.edit_post'  ]))): ?>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js" integrity="sha256-wURXWeMdyFKDl3v/rGzRT42o2lslbozA3ppL/M7ZVGI=" crossorigin="anonymous"></script>

    <script>
      if (typeof (CKEDITOR) !== 'undefined') {
        CKEDITOR.replace('post_body');
      }
    </script>
<?php endif; ?>
</body>
</html>
<?php /**PATH /var/www/html/vendor/webdevetc/blogetc/src/Views/blogetc_admin/layouts/admin_layout.blade.php ENDPATH**/ ?>