<?php $__env->startSection('content'); ?>




  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>App Gallery</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="img/screen/1.jpg" alt="img"></div>
        <div><img src="img/screen/2.jpg" alt="img"></div>
        <div><img src="img/screen/3.jpg" alt="img"></div>
        <div><img src="img/screen/4.jpg" alt="img"></div>
        <div><img src="img/screen/5.jpg" alt="img"></div>
        <div><img src="img/screen/6.jpg" alt="img"></div>
        <div><img src="img/screen/7.jpg" alt="img"></div>
        <div><img src="img/screen/8.jpg" alt="img"></div>
        <div><img src="img/screen/9.jpg" alt="img"></div>

      </div>
    </div>

  </section>

  
  

  

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('estartup.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>