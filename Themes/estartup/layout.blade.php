<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alen Ethiopia</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="{{url('themes/estartup/img/favicon.png')}}" rel="icon">
  <link href="{{url('themes/estartup/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="{{url('themes/estartup/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="{{url('themes/estartup/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('themes/estartup/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{url('themes/estartup/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('themes/estartup/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('themes/estartup/lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">
  <link href="{{url('themes/estartup/css/style.css')}}" rel="stylesheet">
  {{-- <link href="{{base_path('Themes/estartup/assets/nice.css')}}" rel="stylesheet"> --}}
  <style>
  {!! \File::get(base_path('Themes/estartup/assets/nice.css')) !!}
  </style>
  {{-- {!! \File::get(base_path('Themes/estartup/config/theme.json')) !!} --}}
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="{{route('index')}}" class="scrollto"><span>Alen</span>Ethiopia</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @if(Route::currentRouteName()=="index")<li class="menu-active">@else<li>@endif<a href="{{route('index')}}">Home</a></li>
          
          
          @if(url()->current()==route('blog'))<li class="menu-active">@else<li>@endif<a href="{{route('blog')}}">blog </a></li>              
          @foreach ([['contact','Contact us'],['gallery','Gallery'],['resource','Resources']] as $slug)
          @if(url()->current()==route('theme.static_page',['slug'=>$slug[0]]))<li class="menu-active">@else<li>@endif<a href="{{route('theme.static_page',['slug'=>$slug[0]])}}">{{$slug[1]}} </a></li>              
          @endforeach

          {{-- <li><a href="#blog">Blog</a></li>
          <li><a href="#screenshots">Gallery</a></li>
          <li><a href="#team">Register</a></li> 
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>  --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->





  {{-- <br><br><br>        --}}
  

  @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">{{$option_site_name}}</a>
            <p>{{$option_site_description}}</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights alen ethiopia. All rights reserved.</p>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | System Developement by <a href="https://askual.com/">Askual Tech</a> | Proudly made with <a href="https://askual.com/zof-cms">Zof Cms</a>
        </div>
      </div>
    </div>

  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{url('themes/estartup/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('themes/estartup/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('themes/estartup/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('themes/estartup/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{url('themes/estartup/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{url('themes/estartup/lib/easing/easing.min.js')}}"></script>
  <script src="{{url('themes/estartup/lib/modal-video/js/modal-video.js')}}"></script>
  <script src="{{url('themes/estartup/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('themes/estartup/lib/wow/wow.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('themes/estartup/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('themes/estartup/js/main.js')}}"></script>

</body>
</html>
