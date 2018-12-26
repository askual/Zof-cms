
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alen Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('dist/css/skins/_all-skins.min.css')}}">
  @yield('css')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="@{{route('admin.index')}}" class="navbar-brand"><b>Alen</b>Ethiopia</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            {{-- <li class="active"> --}}
            {{-- @if(url()->current()==route('admin.blog'))<li class="active">@else<li>@endif
            <a href="{{route('admin.blog')}}">Blog <span class="sr-only">(current)</span></a></li>
            @if(url()->current()==route('admin.enquiry'))<li class="active">@else<li>@endif
            <a href="{{route('admin.enquiry')}}">Enquiries</a></li>
            @if(url()->current()==route('admin.pages'))<li class="active">@else<li>@endif
            <a href="{{route('admin.pages')}}">Pages</a></li>
            
            @if(url()->current()==url('admin/filemanager'))<li class="active">@else<li>@endif
            <a href="{{url('admin/filemanager')}}">File Manager</a></li>

            @if(url()->current()==url('admin/filemanager?type=image'))<li class="active">@else<li>@endif
            <a href="{{url('admin/filemanager?type=image')}}">Image Manager</a></li>

            @if(url()->current()==route('admin.setting'))<li class="active">@else<li>@endif
            <a href="{{route('admin.setting')}}">Setting</a></li> --}}
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="{{route('logout')}}" class="dropdown-toggle">
                <span class="hidden-xs">Logout ({{Auth::user()->name}})</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    

    @yield('content')


    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy; 2018 <a href="https://askual.com">Askual Tech</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>


@yield('js')
</body>
</html>
