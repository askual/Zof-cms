<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('adminlte/plugins/datatables/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

    <section class="content-header">
      <h1>
        Quiz Add
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Videos</li>
      </ol>    
    </section>
    <br>
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs pull-right">
        <li class="pull-left header"><i class="fa fa-th"></i> Create Quiz </li>
      </ul>
      <div class="tab-content">
        <div class="row">
           <form enctype="multipart/form-data" action="{{route('admin.quiz.store')}}" method="POST">
          <?php echo e(csrf_field()); ?>

          <div class="col-xs-8">
            <input type="text" name="title" class="form-control" placeholder="title">
          </div>
          <div class="form-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="picture">
            <img id="holder" style="margin-top:15px;max-height:100px;">
          </div>
          <div class="col-xs-8">
            <textarea name="description" class="form-control" placeholder="Link" rows="8" placeholder="description"></textarea> 
          </div>
          <div class="col-xs-8">
            <select name="active">
              <option value="1">Active</option>  
              <option value="0">Inactive</option>  
            </select>
          </div>
          <div class="col-xs-5">
            <button class="btn btn-primary">Create</button>
          </div>
          </form>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>






<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('adminlte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(url('adminlte/plugins/datatables/dataTables.editor.min.js')); ?>"></script>
<script>
  $(function () {
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
  $( "#quiz-New" ).addClass( "active" );
</script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "<?php echo e(url(config('lfm.url_prefix', config('lfm.prefix')))); ?>";
  </script>
  <script>
    <?php echo \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')); ?>

  </script>
  <script>
      $('#lfm').filemanager('image', {prefix: route_prefix});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>