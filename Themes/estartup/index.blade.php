
@extends('estartup.layout')



@section('content')

  <br><br><br>      
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>&nbsp;</h1> 
      <h1>Welcome to Alen Ethiopia</h1>
      <h2>ሰው ልጆች የለውጥ ማእከል  </h2> 
      <img src="{{url('@theme('hero_image_1')')}}" alt="Hero Imgs">
      <a href="{{route('enquiry.show',['name'=>'join-us'])}}" class="btn-get-started scrollto">Join Us</a>
      <div class="btns">
          <!-- <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
          <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
          <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a> -->
      </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-  title text-center">
<!-- 
        <h2>simple systeme fordiscount </h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{url('theme2/img/svg/cloud.svg')}}" alt="img" class="img-fluid">
            <h4>introducing whatsapp</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">
            <img src="{{url('theme2/img/svg/planet.svg')}}" alt="img" class="img-fluid">
            <h4>user friendly interface</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">
            <img src="{{url('theme2/img/svg/asteroid.svg')}}" alt="img" class="img-fluid">
            <h4>build the app everyone love</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            <a href="#">read more</a>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="img/about-img.png" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>eStartup</span>UI Design Mobile </h2>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            </p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Creative Design</li>
              <li><i class="fa fa-angle-right"></i>Retina Ready</li>
              <li><i class="fa fa-angle-right"></i>Easy to Use</li>
              <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
              <li><i class="fa fa-angle-right"></i>Unlimited Features</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Amazing Features.</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/paint-palette.svg" alt="img" class="img-fluid">
            <h4>creative design</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/vector.svg" alt="img" class="img-fluid">
            <h4>Retina Ready</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/design-tool.svg" alt="img" class="img-fluid">
            <h4>easy to use</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Free Updates</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/asteroid.svg" alt="img" class="img-fluid">
            <h4>Free Updates</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/cloud-computing.svg" alt="img" class="img-fluid">
            <h4>App store support</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/pixel.svg" alt="img" class="img-fluid">
            <h4>Perfect Pixel</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="img/svg/code.svg" alt="img" class="img-fluid">
            <h4>clean codes</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>App Gallery</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="img/screen/1.jpg" alt="img"></div>
        <div><img src="img/screen/2.jpg" alt="img"></div>
        <div><img src="img/screen/3.jpg" alt="img"></div>
        <div><img src="img/screen/4.jpg" alt="img"></div>
        <div><img src="img/screen/5.jpg" alt="img"></div>
        <div><img src="img/screen/6.jpg" alt="img"></div>
        <div><img src="img/screen/7.jpg" alt="img"></div>
        <div><img src="img/screen/8.jpg" alt="img"></div>
        <div><img src="img/screen/9.jpg" alt="img"></div>

      </div>
    </div>

  </section>

  <!--==========================
    Video Section
  ============================-->

  <section id="video" class="text-center wow fadeInUp">
    <div class="overlay">
      <div class="container-fluid container-full">

        <div class="row">
          <a href="#" class="js-modal-btn play-btn" data-video-id="2WO-vfJQim8"></a>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Team Section
  ============================-->
  <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/1.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/2.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/3.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="img/team/4.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
    Testimonials Section
  ============================-->

  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Kimberly Tran<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Henderson<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>David Spark<span>manager</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Pricing Table Section
  ============================-->
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>basic</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>PERSONAL</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>BUSINESS</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>profeesional</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Newsletter Section
  ============================-->
  
  <section id="newsletter" class="newsletter2 newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Email Adress" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>
            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="@theme('facebook_link')"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>


  

  

  @endsection


  @section('script-2')
  <style>
  #newsletter2 {
    background: transparent url('{{url('@theme('bottom_image_1')')}}') no-repeat center top fixed;
    /* background-size: cover; */
  }
  </style>
  @endsection