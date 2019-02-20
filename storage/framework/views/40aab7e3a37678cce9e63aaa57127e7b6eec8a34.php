<?php $__env->startSection('intro'); ?>
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-8 col-lg-8">
                <h5 class="text-white display-4"></h5>
                    <p class="text-white intro-lead">By Kibru Demeke</p>
                    <div class="fb-share-button" 
                        data-href="<?php echo e(url()->current()); ?>" 
                        data-layout="button_count">
                    </div>
                    <a class="twitter-share-button"
                    href="https://twitter.com/intent/tweet?text=Hello%20world"
                    data-size="large">
                    Tweet</a>
                    <!-- <button class="btn btn-outline">Contact Us</button> -->
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h5 class="text-white display-5"></h5> 
                    <img src="<?php echo e($post->picture); ?>" height="140px" width="550" alt="" class="img-fluid ">
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">    
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                            <?php echo e($post->title); ?>               
                    </h1>   
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-single.html"> Blog Single</a></p>
                </div>                                          
            </div>
        </div>
    </section>
    <!-- End banner Area -->    
    
    <!-- Start blog-posts Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="img/blog/p1.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                        <a href="#">
                            <h1>
                                    <?php echo e($post->title); ?>

                            </h1>
                        </a>
                        <div class="content-wrap">
                                <?=$post->body?>							
                        </div>
                        <div class="bottom-meta">
                            <div class="user-details row align-items-center">
                                <div class="comment-wrap col-lg-6 col-sm-6">
                                    
                                </div>
                                <div class="social-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                    


                    </div>																		
                </div>
                <div class="col-lg-4 sidebar">
                    

                </div>
            </div>
        </div>	
    </section>
    <!-- End blog-posts Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('immigration.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>