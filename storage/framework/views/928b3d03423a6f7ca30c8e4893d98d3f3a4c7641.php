<?php $__env->startSection('content'); ?>


<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Blog Home			
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-home.html"> Blog Home</a></p>
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


                    
                        
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-post">
                            <img class="img-fluid" src="<?php echo e($post->picture); ?>" alt="">
                            <ul class="tags">
                                <li><a href="#">Art, </a></li>
                                <li><a href="#">Technology, </a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                            <a href="<?php echo e(route('single_post',['slug'=>$post->slug])); ?>">
                                <h1>
                                        <?php echo e($post->title); ?>

                                </h1>
                            </a>
                            <p>
                                    <?=$post->excerpt?>
                            </p>
                            <div class="bottom-meta">
                                <div class="user-details row align-items-center">
                                    <div class="comment-wrap col-lg-6">
                                        <ul>
                                            <li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                                    </ul>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    

                </div>
                <div class="col-lg-4 sidebar">
                    

                </div>
            </div>
        </div>	
    </section>
    <!-- End blog-posts Area -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content2'); ?>

<div class="feat pt-4 mt-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <h5 class="display-5 mb-2"><span class="fan-title pb-1">Featured</span> posts</h5>
                <!-- <p class="text-grey">Latest products we worked on</p> -->
            </div>
            <div class="col-sm-6 col-md-4 text-right">
                <i class="fa fa-th-large fa-4x" style="color:#F9DF92;"></i>
            </div>
        </div>


        <div class="row prod-card">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card product-card">
                    <div class="text-center py-1">
                        <img src="<?php echo e($post->picture); ?>" alt="" class="blog-pics img-fluid">
                    </div>
                    <div class="card-body text-center">
                        <h3><?php echo e($post->title); ?></h3>
                        <h5 class="text-grey">By Askual Tech</h5>
                        
                    </div>
                    <div class="text-center form-control">
                        <a href="<?php echo e(route('single_post',['slug'=>$post->slug])); ?>"><button class="btn btn-sm">Read more</button></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('immigration.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>