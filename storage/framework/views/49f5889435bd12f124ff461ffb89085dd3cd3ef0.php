<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
  Alen Admin: <?php echo $__env->yieldContent('title'); ?>
</title>
  <link rel="stylesheet" href="<?php echo e(url('adminlte/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <?php echo $__env->yieldContent('css'); ?>
  <link rel="stylesheet" href="<?php echo e(url('dist/css/AdminLTE.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('adminlte/css/skins/skin-yellow.css')); ?>">
<?php echo $__env->yieldPushContent('css-scripts'); ?>
</head>


<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="<?php echo e(route('admin.index')); ?>" class="logo">
      <span class="logo-mini"><b>Z</b>C</span>
      <span class="logo-lg"><b>Zof</b><small>Cms</small></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar" id="menu">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        

        
        
        
        <?php
        $sortedModules = Module::collections()->sortBy(function ($product, $key) {
          return $product->priority;
        });
        ?>
        <?php $__currentLoopData = $sortedModules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(null !== config($m->getLowerName().'.admin-routes')): ?>
          <li id="<?php echo e($m->getLowerName()); ?>" class="treeview">
          <a href="">
          <i class="fa <?php echo e($m->icon); ?>"></i>
            <span><?php echo e(config($m->getLowerName().'.name')); ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php $__currentLoopData = config($m->getLowerName().'.admin-routes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li id="<?=str_replace(' ','',$m->getLowerName().'-'.$route->n)?>"><a href="<?php echo e($route->r); ?>"><i class="fa fa-circle-o"></i><?php echo e($route->n); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        <li>
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" ><i class="fa fa-sign-out"></i><span>Logout</span></a>
        </li>
      </ul>
    </section>
  </aside>




  <div class="content-wrapper">
    <?php echo $__env->yieldContent('content'); ?>
  </div>



</div>

<?php if(!isset($nojs)): ?>
<script src="<?php echo e(url('bower_components/jquery/dist/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('dist/js/adminlte.min.js')); ?>" type="text/javascript"></script>
<?php endif; ?>

 <?php echo $__env->yieldContent('js'); ?>
 <?php echo $__env->yieldPushContent('js-scripts'); ?>
</body>
</html>
