<?php $__env->startSection('content'); ?>
<div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Contact us requests
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">enquiry</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        



          <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Content</th>
                  <th>From</th>
                </tr>
                <?php $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($k+1); ?>.</td>
                  <td>
                    <?php $__currentLoopData = $e->body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($k); ?> : <b><?php echo e($item); ?></b> ,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </td>
                  <td><?php echo e($e->from); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>




      </section>
      <!-- /.content -->
    </div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>