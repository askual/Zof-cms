<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('adminlte/plugins/datatables/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(url('bower_components/select2/dist/css/select2.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
        Quiz
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Quiz</li>
      </ol>    
    </section>
    <br>
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs pull-right">
        <li class="pull-left header"><i class="fa fa-th"></i> Quiz List</li>
      </ul>
      <div class="tab-content">
        <table id="UsersTable" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>title</th>
            <th>question</th>
            <th>description</th>
            <th>picture</th>
            <th>active</th>
            <th>Choices</th>
            <th>tags</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($q->title); ?> <br><a href="<?php echo e(route('admin.quiz.single',['id'=> $q->id])); ?>" class="btn btn-success">Detail</a>  </td>
              <td><?php echo e($q->question); ?></td>
              <td><?php echo e($q->description); ?></td>
              <td><img height="100px" src="<?php echo e(url('/quiz/mainpic/'.$q->picture)); ?>"></td>
              <td><?php echo e($q->active); ?> <br> <a href="<?php echo e(route('admin.quiz.active_toggle',['id'=> $q->id])); ?>" class="btn btn-success">Toggle</a>  </td>
              <td><?php echo e($q->choices()->count()); ?></td>
              <td>
                <form enctype="multipart/form-data" action="<?php echo e(route('admin.quiz.tag')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                  <input type="number" name="id" value="<?php echo e($q->id); ?>" hidden>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                          style="width: 100%;" name="tags[]">
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($c->id); ?>"><?php echo e($c->title); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php $__currentLoopData = $q->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($c->id); ?>" selected><?php echo e($c->title); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                  </select>
                  <button class="btn btn-success" type="submit">Update</button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>


    

<?php $__env->stopSection(); ?>






<?php $__env->startSection('js'); ?><script src="<?php echo e(url('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>

<script src="<?php echo e(url('adminlte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.editor.min.js')); ?>"></script>
<script>
  $(function () {        
    $('.select2').select2()
    $('#UsersTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#InstTable').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<script type="text/javascript">
  $( "#quiz" ).addClass( "active" );
  $( "#quiz-All" ).addClass( "active" );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>