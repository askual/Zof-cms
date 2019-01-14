
@extends('zof::layouts.admin')


@section('css2')
<link rel="stylesheet" href="{{url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@endsection
@section('content')
<div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Blog
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">blog</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        



        <div class="col-md-12">
        
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create new blog post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{route('admin.blog_post')}}" enctype="multipart/form-data" method="post">
                @csrf
              <div class="form-group">
                <input class="form-control" name="title" placeholder="Title:">
              </div>
              <div class="form-group">
<!--                     <textarea id="compose-textarea" name="body" class="form-control" style="height: 300px">
                      
                    </textarea> -->
                    <textarea name="tm" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <!-- <div class="btn btn-default btn-file">
                  <i class="fa fa-photo"></i> Header Picture
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p> -->
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filepath">
                <img id="holder" style="margin-top:15px;max-height:100px;">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <!-- <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button> -->
            </div>
            <!-- /.box-footer -->
                
              </form>
          </div>

        </div>




        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Simple Full Width Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Picture</th>
                  <th></th>
                </tr>
                @foreach($posts as $k=>$e)
                <tr>
                  <td>{{$k+1}}.</td>
                  <td>{{$e->title}}</td>
                  <!-- <td> <img src="{{route('blog.image',['name'=>$e->picture])}}" height="100"></td> -->
                  <td> <img src="{{$e->picture}}" height="100"></td>
                  <td></td>
                </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>




      </section>
      <!-- /.content -->
    </div>

 @endsection




 @section('js2')


<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>

@endsection





@section('css')

@endsection


@section('content3')
<div class="container">
    <h1 class="page-header">Integration Demo Page</h1>
    <div class="row">
      <!-- <div class="col-md-6">
        <h2>CKEditor</h2>
        <textarea name="ce" class="form-control"></textarea>
      </div> -->
      <div class="col-md-6">
        <h2>TinyMCE</h2>
        <textarea name="tm" class="form-control"></textarea>
      </div>
    </div>
    <div class="row">
      <!-- <div class="col-md-6">
        <h2>Summernote</h2>
        <textarea id="summernote-editor" name="content"></textarea>
      </div> -->
      <div class="col-md-6">
        <h2>Standalone Image Button</h2>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail" class="form-control" type="text" name="filepath">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
        <h2>Standalone File Button</h2>
        <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
          <input id="thumbnail2" class="form-control" type="text" name="filepath">
        </div>
        <img id="holder2" style="margin-top:15px;max-height:100px;">
      </div>
    </div>

<!--     <div class="row">
      <div class="col-md-12">
        <h2>Embed file manager</h2>
        <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
      </div>
    </div> -->

  </div>
@endsection


@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
  </script>

  <!-- CKEditor init -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
  <script>
    $('textarea[name=ce]').ckeditor({
      height: 100,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
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
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
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
@endsection