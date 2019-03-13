<!DOCTYPE html>
<html lang="en">
  
  <head>
    <link rel="icon" 
    type="image/png" 
    href="https://askual.com/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msvalidate.01" content="2AB04CD01159EF4A713F43E3F4236432" />
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-125073349-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    {!! SEO::generate() !!}
    @if(Request::getHost() == "127.0.0.1")
    <!-- Bootstrap core CSS -->
    <link href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('bower_components/simple-line-icons/css/simple-line-icons.css')}}">
    @else
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{url('bower_components/simple-line-icons/css/simple-line-icons.css')}}">
      @endif
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- <link href="{{url('themes/yellowish/css/askual.css')}}" rel="stylesheet"> -->
    <link href="{{route('theme.css',['name'=>'askual.css'])}}" rel="stylesheet">
</head>

<body>
    {{-- <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> --}}
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

                        @if(url()->current() == route('theme.page.yecampus'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.yecampus')}}">YeCampus
                            </a>
                        </li>
                        @if(url()->current() == route('theme.page.yeculture'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.yeculture')}}">YeCulture
                            </a>
                        </li>
                        @if(url()->current() == route('theme.page.zoffsites'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.zoffsites')}}">Zoff sites
                            </a>
                        </li>

                        {{--
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
                        --}}

                        

                        @if(url()->current() == route('theme.page.about'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.about')}}">About 
                            </a>
                        </li>

                        {{--
                        @if(url()->current() == route('theme.page.contact'))
                        <li class="nav-item active">
                        @else
                        <li class="nav-item">
                        @endif
                            <a class="nav-link" href="{{route('theme.page.contact')}}">Contact 
                            </a>
                        </li>
                        --}}

                    <a href="{{route('client.login')}}" class="btn btn-outline">Client Login</a>
                        
                    </ul>
                </div>
            </div>
        </nav>

<div class="intro">
    @yield('intro')
</div>
</section>
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


<script src="{{url('main/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{route('theme.js',['name'=>'bootstrap.min.js'])}}"></script>
<!-- <script src="{{url('main/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->
<script src="{{url('main/vendor/scrollreveal.min.js')}}"></script>
<script src="{{url('main/js/askual.js')}}"></script>
</body>
</html>