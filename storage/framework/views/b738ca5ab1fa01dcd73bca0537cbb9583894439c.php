<?php $__env->startSection('content'); ?>

<!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>
    <div class="container">
      <div class="row">

      	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="<?php echo e(url($post->picture)); ?>" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#"><?php echo e($post->title); ?></a></h4>
              <span><?php echo e($post->created_by); ?></span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.estartup.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>