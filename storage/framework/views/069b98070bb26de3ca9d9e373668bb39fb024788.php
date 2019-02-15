<?php $__env->startSection('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Elements				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Elements</a></p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
<div class="section-top-border">
        <h3>Image Gallery</h3>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="img/g1.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g1.jpg);"></div></a>
            </div>
            <div class="col-md-4">
                <a href="img/g2.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g2.jpg);"></div></a>
            </div>
            <div class="col-md-4">
                <a href="img/g3.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g3.jpg);"></div></a>
            </div>
            <div class="col-md-6">
                <a href="img/g4.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g4.jpg);"></div></a>
            </div>
            <div class="col-md-6">
                <a href="img/g5.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g5.jpg);"></div></a>
            </div>
            <div class="col-md-4">
                <a href="img/g6.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g6.jpg);"></div></a>
            </div>
            <div class="col-md-4">
                <a href="img/g7.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g7.jpg);"></div></a>
            </div>
            <div class="col-md-4">
                <a href="img/g8.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(img/g8.jpg);"></div></a>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('immigration.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>