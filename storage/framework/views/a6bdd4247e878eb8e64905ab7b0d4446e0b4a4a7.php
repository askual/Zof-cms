<?php $__env->startSection('content'); ?>
      <section class="content-header">
        <h1>
          Payment
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">AlenSys</li>
        </ol>
      </section>
      <section class="content">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Members</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Upline</th>
                  <th>Downline</th>
                </tr>
                <?php if(isset($members)): ?>
                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($k+1); ?></td>
                    <td>
                      <?php echo e($member->name); ?> <br>
                      <a href="<?php echo e(route('alensys.admin.members.single',['id'=>$member->id])); ?>" class="btn btn-sm btn-primary" target="_blank">View</a>
                    </td>
                    <td>
                      <?php if(isset($member->upline)): ?>
                      <?php echo e($member->upline->name); ?>

                      <a href="<?php echo e(route('alensys.admin.members.single',['id'=>$member->upline->id])); ?>" class="btn btn-sm btn-success" target="_blank">View</a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php if(isset($member->downlines)): ?>
                      <?php $__currentLoopData = $member->downlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $downline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($downline->name); ?> <a href="<?php echo e(route('alensys.admin.members.single',['id'=>$downline->id])); ?>" class="btn btn-sm btn-success" target="_blank">View</a> </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
 <?php $__env->stopSection(); ?>







<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>





<?php $__env->startSection('js'); ?>

<script type="text/javascript">
  $( "#alensys" ).addClass( "active" );
  $( "#alensys-Payment" ).addClass( "active" );
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js3'); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "<?php echo e(url(config('lfm.url_prefix', config('lfm.prefix')))); ?>";
  </script>

  <!-- CKEditor init -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
  <script>
    $('textarea[name=ce]').ckeditor({
      height: 100,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token=<?php echo e(csrf_token()); ?>',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token=<?php echo e(csrf_token()); ?>'
    });
  </script>

  <!-- TinyMCE init -->
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    var editor_config = {
      path_absolute : "",
      selector: "textarea[name=tm]",
      plugins: [
        "link image"
      ],
      relative_urls: false,
      height: 329,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>

  <script>
    <?php echo \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')); ?>

  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('file', {prefix: route_prefix});
  </script>

  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
  <script>
    $(document).ready(function(){

      // Define function to open filemanager window
      var lfm = function(options, cb) {
          var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
          window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
          window.SetUrl = cb;
      };

      // Define LFM summernote button
      var LFMButton = function(context) {
          var ui = $.summernote.ui;
          var button = ui.button({
              contents: '<i class="note-icon-picture"></i> ',
              tooltip: 'Insert image with filemanager',
              click: function() {

                  lfm({type: 'image', prefix: '/laravel-filemanager'}, function(url, path) {
                      context.invoke('insertImage', url);
                  });

              }
          });
          return button.render();
      };

      // Initialize summernote with LFM button in the popover button group
      // Please note that you can add this button to any other button group you'd like
      $('#summernote-editor').summernote({
          toolbar: [
              ['popovers', ['lfm']],
          ],
          buttons: {
              lfm: LFMButton
          }
      })
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('zof::layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>