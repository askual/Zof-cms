@extends('layouts.charity-theme')


@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>@lang('menu.contact')</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>አቅራቢያዎ አለን</h2>

                        <p>አብረውን ሊሰሩ ወስነዋል? ጥያቄ የፈጠረቦት ነገር አለ? ከዚህ በታች ከተዘረዘሩት አድራሻዎች የተመቸዎትን ቢጠቀሙ አለን እንሎታለን</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+251468720285</span></li>
                            <li><i class="fa fa-envelope"></i><span> alenethiopia1@gmail.com</span></li>
                            <li><i class="fa fa-map-marker"></i><span>
                                ቡሌሆራ ፡ ቡሌሆራ ዩኒቨርሲቲ ግቢ ውስጥ<br>
                                ሀዋሳ ፡ ሞዴል ወጣቶች ማእከል
                            </span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <form class="contact-form" action="{{route('contact.submit')}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="ስም">
                        <input type="text" name="address" placeholder="ኢሜይል ወይም ስልክ ቁጥር">
                        <textarea rows="15" name="body" cols="6" placeholder="መልእክት"></textarea>
                        <span>
                            <button class="btn gradient-bg" type="submit" value="ይላኩ"></button>
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

                <div class="col-6">
                    <!-- <div class="contact-gmap"> -->
                        <h2>Hawassa Branch</h2>
                        <!-- <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=usa&key=AIzaSyC2LvnNLzWxHgFm_XfpFG9wHUuyEj6rXSs" allowfullscreen></iframe> -->
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Awassa%20Model%20Youth%20Center&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    <!-- </div> -->
                </div>
                <div class="col-6" style="border: currentColor;">
                    <!-- <div class="contact-gmap"> -->
                        <h2>Bulehora Branch</h2>
                        <div class="mapouter"><div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Bule%20hora%20University&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    <!-- </div> -->
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

   @endsection