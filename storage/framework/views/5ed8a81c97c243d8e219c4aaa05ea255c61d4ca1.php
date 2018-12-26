<?php $__env->startSection('content'); ?>

<!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2><?php echo e($post->title); ?></h2>
        
      </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-12">
          <div class="block-blog text-conter">
                <?=$post->body?>
            
          </div>
        </div>
        

      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('estartup.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>