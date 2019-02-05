
@extends('zof::layouts.admin')


@section('content')
      <section class="content-header">
        <h1>
          Member
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">AlenSys</li>
        </ol>
      </section>
      <section class="content">
        

        <div class="row">
        <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{url('adminlte/img/avatar.png')}}" alt="User profile picture">
              <h3 class="profile-username text-center">{{$member->name}}</h3>
              <p class="text-muted text-center">Member</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Payed {{now()->englishMonth}}</b> <a class="pull-right">
                    @if($member->payedThisMonth)
                    Yes
                    @else
                    No
                    @endif
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Money Payed</b> <a class="pull-right">{{$member->totalPayed}} Birr</a>
                </li>
                <li class="list-group-item">
                  <b>Money Received</b> <a class="pull-right">- Birr</a>
                </li>
                @isset($member->upline)
                <li class="list-group-item">
                  <b>Upline</b> <a href="{{route('alensys.admin.members.single',['id'=>$member->upline->id])}}" class="pull-right">{{$member->upline->name}}</a>
                </li>
                @endisset
                <li class="list-group-item">
                  <b>Downlines</b> 
                  @foreach($member->downlines as $downline)
                  <a href="{{route('alensys.admin.members.single',['id'=>$downline->id])}}" class="pull-right">{{$downline->name}}</a> <br>
                  @endforeach
                </li>
                  @if($member->lastPayed != '-')
                <li class="list-group-item">
                  <b>Last Payed</b> 
                  <a class="pull-right"> {{$member->lastPayed->theMonth}} , {{$member->lastPayed->year}}</a>
                </li>
                  @endif
              </ul>
              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
          </div>
        </div>
        <div class="col-md-9">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About</h3>
            </div>
            <div class="box-body">
              <!-- <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">Malibu, California</p>
              <hr> -->
              <strong><i class="fa fa-pencil margin-r-5"></i> Months</strong>
              <p>
                <span class="label label-success">September</span>
                <span class="label label-success">October</span>
                <span class="label label-success">November</span>
                <span class="label label-success">December</span>
                <span class="label label-danger">January</span>
                <span class="label label-default">February</span>
              </p>
              <hr>
<!--               <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> -->
            </div>
          </div>
        </div>
      </div>






      </section>
    </div>
 @endsection







@section('css')

@endsection





@section('js')

<script type="text/javascript">
  $( "#alensys" ).addClass( "active" );
  $( "#alensys-Payment" ).addClass( "active" );
</script>

@endsection

@section('js3')

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