<?php $__env->startSection('intro'); ?>
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-8 col-lg-8">
                <h5 class="text-white display-4"><?php echo e($post->title); ?></h5>
                    <p class="text-white intro-lead">By Kibru Demeke</p>
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
<div class="feat pt-4 mt-2">
    <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <!-- <div class="card product-card"> -->
                  <?=$post->body?>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('yellowish.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>