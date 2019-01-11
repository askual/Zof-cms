<?php $__env->startSection('content'); ?>

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Zof CMS 0.1</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- TABLE: LATEST ORDERS -->
        <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Modules</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    
                    <th>Name</th>
                    <th>Version</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($m); ?></td>
                    <td>V-<?php echo e($m->version); ?></td>
                    <td>
                      <?php if($m->enabled()): ?>
                      <span class="label label-success">Active</span>
                      <?php else: ?>
                      <span class="label label-success">Inactive</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php echo e($m->description); ?>

                    </td>
                    <td>
                      <?php if($m->enabled()): ?>
                    <a class="btn label label-danger" href="<?php echo e(route('admin.module.status_toggle',['module'=>$m])); ?>" >Disable</a>
                      <?php else: ?>
                    <a class="btn label label-success" href="<?php echo e(route('admin.module.status_toggle',['module'=>$m])); ?>" >Enable</a>
                      <?php endif; ?>
                      <?php if($m->version9 > $m->version): ?>
                        <a class="btn label label-success" href="<?php echo e(route('admin.module.update',['module'=>$m])); ?>" >Update ( to V-<?php echo e($m->version9); ?>)</a>
                      <?php endif; ?>
                    
                    </td>
                  </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        </div>



        <div class="col-md-4">
        <div class="callout callout-info">
          <h4>Tip!</h4>

          <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
            sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
            links instead.</p>
        </div>
        </div>
        <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Blank Box</h3>
          </div>
          <div class="box-body">
            The great content goes here
          </div>
          <!-- /.box-body -->
        </div>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>