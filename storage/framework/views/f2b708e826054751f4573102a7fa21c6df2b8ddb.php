<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Askual Tech</title>
    <link rel="icon" 
      type="image/png" 
      href="https://askual.com/logo.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(url('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?php echo e(url('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('bower_components/simple-line-icons/css/simple-line-icons.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(url('themes/yellowish/css/askual.css')); ?>" rel="stylesheet">

</head>

<body>
    <section class="top pb-4">
        <nav class="navbar navbar-expand-lg navbar-dark transparent">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('theme.page.index')); ?>">Askual Tech </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php if(url()->current() == route('theme.page.index')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('theme.page.index')); ?>">Home 
                            </a>
                        </li>
                        <?php if(url()->current() == route('blog')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('blog')); ?>">Blog 
                            </a>
                        </li>

                        <?php if(url()->current() == route('theme.page.products')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('theme.page.products')); ?>">Products 
                            </a>
                        </li>

                        <?php if(url()->current() == route('theme.page.services')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('theme.page.services')); ?>">Services 
                            </a>
                        </li>

                        <?php if(url()->current() == route('theme.page.press')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('theme.page.press')); ?>">Press 
                            </a>
                        </li>

                        <?php if(url()->current() == route('theme.page.about')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('theme.page.about')); ?>">About 
                            </a>
                        </li>

                        <?php if(url()->current() == route('theme.page.contact')): ?>
                        <li class="nav-item active">
                        <?php else: ?>
                        <li class="nav-item">
                        <?php endif; ?>
                            <a class="nav-link" href="<?php echo e(route('theme.page.contact')); ?>">Contact 
                            </a>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </nav>

<div class="intro">
    <?php echo $__env->yieldContent('intro'); ?>
</div>
</section>
        <!-- Featured product -->
        
        <?php echo $__env->yieldContent('content'); ?>



    




</body>



<footer>
    <div class="container">
        <p>&copy; Askual Tech 2018. All Rights Reserved.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="<?php echo e(route('theme.page.privacy')); ?>">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a href="<?php echo e(route('theme.page.terms')); ?>">Terms</a>
            </li>
            <li class="list-inline-item">
                <a href="<?php echo e(route('theme.page.opensource')); ?>">Opensource</a>
            </li>
            <li class="list-inline-item">
                <a href="<?php echo e(route('theme.page.faq')); ?>">FAQ</a>
            </li>
        </ul>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo e(url('main/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('main/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo e(url('main/vendor/scrollreveal.min.js')); ?>"></script>


<!-- Custom scripts for this template -->
<script src="<?php echo e(url('main/js/askual.js')); ?>"></script>

</body>

</html>


































