@extends('immigration.layout')


@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        የምስል ማህደር / Gallery				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">መነሻ ገጽ / Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> የምስል ማህደር / Gallery</a></p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
<div class="section-top-border">
        <h3> </h3>
        <div class="row gallery-item">
            @for ($i = 1; $i < 11; $i++)
            <div class="col-md-4">
                <a href="{{route('theme.image',['name'=>$i.'.jpg'])}}" class="img-pop-up"><div class="single-gallery-image" style="background: url({{route('theme.image',['name'=>$i.'.jpg'])}});"></div></a>
            </div>
            @endfor

        </div>
    </div>




@endsection