<?php $__env->startSection('intro'); ?>
<div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h5 class="text-white display-4">Announcements, Tips and insignts</h5>
                    <!-- <p class="text-white intro-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos voluptatibus placeat harum cum laudantium ipsa reiciendis minus nostrum nobis, dolorum nesciunt nisi. Ex reiciendis dignissimos id voluptatum eum incidunt!</p>
                    <button class="btn btn-outline">Contact Us</button> -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <!-- <h5 class="text-white display-5"></h5> -->
                    <img src="/main/img/ph1.svg" height="140px" width="550" alt="" class="img-fluid">
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
            <?php
            $hh = ['1','2','3'];
            foreach($posts as $k=>$post){
            ?>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card product-card">
                    <div class="text-center py-1">
                        <img src="<?php echo e($post->picture); ?>" alt="" class="blog-pics">
                    </div>
                    <div class="card-body text-center">
                        <h3><?php echo e($post->title); ?></h3>
                        <h5 class="text-grey">By Kibru Demeke</h5>
                        <small> <?=$post->excerpt?> </small>
                    </div>
                    <div class="text-center form-control">
                        <a href="<?php echo e(route('single_post',['slug'=>$post->slug])); ?>"><button class="btn btn-sm">Read more</button></a>
                    </div>
                </div>
            </div>
            <?php
                
            }
            ?>
            
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('yellowish.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>