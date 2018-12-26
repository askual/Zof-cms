<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eStartup Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="<?php echo e(url('theme2/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(url('theme2/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="<?php echo e(url('theme2/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="<?php echo e(url('theme2/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('theme2/lib/owlcarousel/assets/owl.theme.default.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('theme2/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('theme2/lib/animate/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('theme2/lib/modal-video/css/modal-video.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('theme2/css/style.css')); ?>" rel="stylesheet">
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="<?php echo e(route('index')); ?>" class="scrollto"><span>Alen</span>Ethiopia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php if(Route::currentRouteName()=="index"): ?><li class="menu-active"><?php else: ?><li><?php endif; ?><a href="<?php echo e(route('index')); ?>">Home</a></li>
          <?php $__currentLoopData = [['blog','Blog'],['contact-us','Contact us'],['resources','Resources']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(url()->current()==route('page',['slug'=>$slug[0]])): ?><li class="menu-active"><?php else: ?><li><?php endif; ?><a href="<?php echo e(route('page',['slug'=>$slug[0]])); ?>"><?php echo e($slug[1]); ?> </a></li>              
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->





  
  

  <?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('themes.estartup.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>