<?php $__env->startSection('content'); ?>

<section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <?php if(Auth::user()->hasGcsuite): ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>GC SUITE</h3>
                  <p>Decorating your graduation</p> 
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php endif; ?>
            <?php if(Auth::user()->hasZoffsites): ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Zoff Sites</h3>
                  <p>Website</p> 
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php endif; ?>


          <!-- ./col -->
        </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client::layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>