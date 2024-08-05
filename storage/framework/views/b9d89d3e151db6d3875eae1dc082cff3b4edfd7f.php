<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <title><?php echo e($data['title'] ?? 'Worldclass application development agency | Unikwork Systems'); ?></title>
    <meta name="description" content="<?php echo e($data['description'] ?? 'Smart Software Development Solutions that Revolutionize the Way you Do Business'); ?>">
    <meta name="keywords" content="<?php echo e($data['keywords'] ?? 'Technology solutions, Technology services, Software development services'); ?>">

    <meta property="og:url" content="<?php echo URL::current();?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e($data['title']  ?? 'Worldclass application development agency | Unikwork Systems'); ?>">
    <meta property="og:description" content="<?php echo e($data['description']  ?? 'Smart Software Development Solutions that Revolutionize the Way you Do Business'); ?>">
    <meta property="og:image" content="<?php echo e(asset('images/unikwork-logo.png')); ?>">

    <meta property="twitter:url" content="<?php echo URL::current();?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="unikwork"/>
    <meta name="twitter:title" content="<?php echo e($data['title']  ?? 'Worldclass application development agency | Unikwork Systems'); ?>">
    <meta name="twitter:description" content="<?php echo e($data['description']  ?? 'Smart Software Development Solutions that Revolutionize the Way you Do Business'); ?>">
    <meta name="twitter:image" content="<?php echo e(asset('images/unikwork-logo.png')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"WebSite","name":"unikwork systems","url":"https://unikwork.com","foundingDate":"","sameAs":["https://www.facebook.com/unikwork/","https://twitter.com/unikwork","https://in.linkedin.com/company/unikwork","https://www.upwork.com/ag/unikwork/","https://www.instagram.com/unikworkdotcom/"]}
    </script>
    <link href="<?php echo e(asset('images/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('images/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo e(url('public/css/style.css')); ?>" rel="stylesheet">
    
</head>
<?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php /**PATH C:\xampp\htdocs\unikworkAdmin\resources\views/layouts/header.blade.php ENDPATH**/ ?>