<?php $__env->startSection('content'); ?>

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">General settings</h3>
    </div>      
    <!-- /.box-header -->
    <div class="box-body">
    <form action="<?php echo e(route('admin.theme.setting.post')); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Site name</label>
            <input type="text" class="form-control" name="site_name" value="<?php echo e($option_site_name); ?>">
            </div>
            <div class="form-group">
                <label>Site description</label>
                <textarea name="site_description" class="form-control" rows="3"><?php echo e($option_site_description); ?></textarea>
            </div>
            <div class="form-group">
                <label>Theme</label>
                <select name="theme_current" class="form-control">
                    <?php $__currentLoopData = $themeSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title=>$theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($theme->active): ?>
                        <option selected>
                        <?php else: ?>
                        <option>
                        <?php endif; ?>
                    <?php echo e($title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>  

<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Theme Options</h3>
    </div>      
    <!-- /.box-header -->
    <div class="box-body">
    <form action="<?php echo e(route('admin.theme.theme_setting.post')); ?>" method="post">
        <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $themeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo e($option->name); ?></label>
                <?php if(isset($option->description)): ?>
                <p><?php echo e($option->description); ?></p>
                <?php endif; ?>
                <?php if($option->type=="text"): ?>
                <input name="<?php echo e($option->name); ?>" class="form-control" value="<?php echo e($option->value); ?>" >
                <?php elseif($option->type="image"): ?>
                <div class="input-group">
                  <span class="input-group-btn">
                  <a id="lfm<?php echo e($option->name); ?>" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                      <i class="fa fa-picture-o"></i> Choose
                    </a>
                  </span>
                  <input name="<?php echo e($option->name); ?>" id="thumbnail" class="form-control" type="text" value="<?php echo e($option->value); ?>">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;" src="<?php echo e(url('/photos/1/CSEC LOGO.png')); ?>">
                <?php endif; ?>
            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>  


<?php $__env->stopSection(); ?>






<?php $__env->startSection('js'); ?>

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
      height: 129,
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
      <?php $__currentLoopData = $themeOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($option->type=="image"): ?>
        $('#lfm<?php echo e($option->name); ?>').filemanager('image', {prefix: route_prefix});
        // $('#lfm2').filemanager('file', {prefix: route_prefix});
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          var route_prefix = (options && options.prefix) ? options.prefix : '/admin/filemanager';
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

                  lfm({type: 'image', prefix: '/admin/filemanager'}, function(url, path) {
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>