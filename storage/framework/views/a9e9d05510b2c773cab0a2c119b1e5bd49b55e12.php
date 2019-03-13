<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
      Create Client <br/>
    <form action="<?php echo e(route('admin.client.add_client_post')); ?>" method="POST">
          <?php echo csrf_field(); ?>
        <input type="input" placeholder="name" name="name"> <br/>
        <input type="input" placeholder="username" name="username"> <br/>
        <button class="btn btn-primary " type="submit">Create</button>
      </form>
      <small> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">client</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Clients</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table">
            <tr>
              <th style="width: 10px">#</th>
              <th>Name</th>
              <th>Username</th>
              <th>Action</th>
            </tr>
            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($k+1); ?>.</td>
              <td><?php echo e($u->name); ?></td>  
              <td><?php echo e($u->username); ?> </td>
            <td>
              <a href="" class="btn btn-secondary btn-sm">Edit</a> 
              <a href="" class="btn btn-danger btn-sm">Delete</a> 
              
            </td>
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
<?php echo $__env->make('zof::layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>