<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Askual Tech</title>
    <link rel="icon" 
      type="image/png" 
      href="https://askual.com/logo.ico">
    <!-- Bootstrap core CSS -->
    <link href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('bower_components/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('themes/yellowish/css/askual.css')}}" rel="stylesheet">

</head>

<body>
    <section class="top pb-4">
        <nav class="navbar navbar-expand-lg navbar-dark transparent">
            <div class="container">
                <a class="navbar-brand" href="{{route('theme.page.index')}}">Askual Tech </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @if(url()->current() == route('theme.page.index'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.index')}}">Home 
                            </a>
                        </li>
                        @if(url()->current() == route('blog'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('blog')}}">Blog 
                            </a>
                        </li>

                        @if(url()->current() == route('theme.page.products'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.products')}}">Products 
                            </a>
                        </li>

                        @if(url()->current() == route('theme.page.services'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.services')}}">Services 
                            </a>
                        </li>

                        @if(url()->current() == route('theme.page.press'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.press')}}">Press 
                            </a>
                        </li>

                        @if(url()->current() == route('theme.page.about'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.about')}}">About 
                            </a>
                        </li>

                        @if(url()->current() == route('theme.page.contact'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.contact')}}">Contact 
                            </a>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </nav>

<div class="intro">
    @yield('intro')
</div>
</section>
        <!-- Featured product -->
        
        @yield('content')



    




</body>



<footer>
    <div class="container">
        <p>&copy; Askual Tech 2018. All Rights Reserved.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{route('theme.page.privacy')}}">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a href="{{route('theme.page.terms')}}">Terms</a>
            </li>
            <li class="list-inline-item">
                <a href="{{route('theme.page.opensource')}}">Opensource</a>
            </li>
            <li class="list-inline-item">
                <a href="{{route('theme.page.faq')}}">FAQ</a>
            </li>
        </ul>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{url('main/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('main/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{url('main/vendor/scrollreveal.min.js')}}"></script>


<!-- Custom scripts for this template -->
<script src="{{url('main/js/askual.js')}}"></script>

</body>

</html>


































{{-- 

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
  <style>
  {!! \File::get(base_path('Themes/estartup/assets/nice.css')) !!}
  </style>
  @yield('script-1')
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
          @foreach ([['contact','Contact us'],['gallery','Gallery'],['members','Members'],['resource','Resources']] as $slug)
          @if(url()->current()==route('theme.static_page',['slug'=>$slug[0]]))<li class="menu-active">@else<li>@endif<a href="{{route('theme.static_page',['slug'=>$slug[0]])}}">{{$slug[1]}} </a></li>              
          @endforeach

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

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
  @yield('script-2')
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
  @yield('script-3')

</body>
</html>
--}}