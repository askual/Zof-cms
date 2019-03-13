<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
  Askual Client: @yield('title')
</title>
  <link rel="stylesheet" href="{{ url('adminlte/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('bower_components/Ionicons/css/ionicons.min.css') }}">
  @yield('css')
  <link rel="stylesheet" href="{{ url('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/css/skins/skin-red.css') }}">
@stack('css-scripts')
</head>


<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="{{route('client.index')}}" class="logo">
      <span class="logo-mini"><b>A</b>C</span>
      <span class="logo-lg"><b>Askual</b><small>Client</small></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a>
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar" id="menu">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        {{-- <li id="users" class="treeview">
          <a href="">
            <i class="fa fa-files-o"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="students"><a href="@{{route('admin.students.view')}}"><i class="fa fa-circle-o"></i>Students</a></li>
            <li id="employees"><a href="@{{route('admin.employees.view')}}"><i class="fa fa-circle-o"></i>Employees</a></li>
          </ul>
        </li> --}}

        
        {{-- @foreach(Module::collections()->sortBy('priority') as $m) --}}
        
        <?php
        $sortedModules = Module::collections()->sortBy(function ($product, $key) {
          return $product->priority;
        });
        ?>
        @foreach($sortedModules as $m)
        @if(null !== config($m->getLowerName().'.client-routes'))
          <li id="{{$m->getLowerName()}}" class="treeview">
          <a href="">
          <i class="fa {{$m->icon}}"></i>
            <span>{{config($m->getLowerName().'.name')}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @foreach(config($m->getLowerName().'.admin-routes') as $route )
            <li id="<?=str_replace(' ','',$m->getLowerName().'-'.$route->n)?>"><a href="{{$route->r}}"><i class="fa fa-circle-o"></i>{{$route->n}}</a></li>
            @endforeach
          </ul>
        </li>
        @endif
        @endforeach


{{-- <!-- <li id=""><a href=""><i class="fa fa-group"></i> <span> lll</span></a></li> -->
        <!-- <li>
          <a href="{{ route('index') }}" ><i class="fa fa-sign-out"></i><span>Setting</span></a>
        </li> --> --}}
        <li>
          <a class="dropdown-item" href="{{ route('client.logout') }}" ><i class="fa fa-sign-out"></i><span>Logout</span></a>
        </li>
      </ul>
    </section>
  </aside>




  <div class="content-wrapper">
    @yield('content')
  </div>



</div>

@if(!isset($nojs))
<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ url('dist/js/adminlte.min.js') }}" type="text/javascript"></script>
@endif

 @yield('js')
 @stack('js-scripts')
</body>
</html>
