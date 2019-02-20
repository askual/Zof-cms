@extends('immigration.layout')


@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                       ስለ እኛ / About Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html"> መነሻ ገጽ / Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> ስለ እኛ / About Us</a></p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	

    <!-- Start about-top Area -->
    <section class="about-top-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 about-top-left">
                    <h1>
                        አለን <br>
                        ኢትዮጵያዎች <br>
                        ነን
                    </h1>
                    <p>
                        “አሁን ኢትዮጵያ የሰው ልጆች የለውጥ ማእከል” በመባል በሙሉ መጠሪያው የሚታወቀው ማእከለ ከስያሜው ለመረዳት እንደሚቻለው በዋናነት የተመሰረተው በሰው ልጆች ላይ አዎንታዊ የሆነ የአስተሳሰብ እና የስነ ልቦና እንዱሁም የኑሮ ገቢን የሚያሻሽለ ለውጦችን በመፍጠር ብቃት ያሊቸው እና አምራች የሆኑ ዜጎችን ለማፍራት የተቋቋመ የበጎ ፈቃዴ አገሌግልት ሰጪ የዜጎች የለውጥ ማእከል ነው፡፡
                    <p> 
                        አለን ኢትዮጵያ በጎዳና ላይ ያለ ወገኖችን በማንሳት በመሰረታዊነት ኑሮኣቸውን የሚለውጡ ዜጎች እንዱሆኑ አድርጎ ለመቅረፅ ሲታሰብና ዴህነትን የጠለ ስሙንም ለማጥፋት ከሚጥሩ ዜጎች ጋር በመተባበር በአንዴ የኔነት የመደጋገፍ መንፈስ እንዱሁም ተያይዞ የምዴርን ገፀ በረከት መካፈል በሚወደ የሀገር ዜጎች የተቋቋመ እውነተኛ የለውጥ ማእከል ነው፡፡
                    </p>
                    <p>
                        አለን ኢትዮጵያ በጎዳና ላይ ያለ ሰዎችን ማለትም በተለምድ የኔ ብጤ ብለን የምንጠራቸውን ባሊቸው የኢኮኖሚ እና ተያያዥ ችግሮች ምክንያት በአምሳያቸው የሰው ልጅ ፊት እጃቸውን ለመዘርጋት የተገደደ የህብረተሰብ ክፍልች በመሰረታዊነት ኑሮአቸውን ለማሻሻሌ በሚያስችሌ መሌኩ የተነደፉ የተለያዩ አማራጮች ይዞ የመጣ እና በዘመናዊ አስተሳሰብ የተቃኘ የሰው ልጅን በፍፁማዊ በጎነት ለማገሌገሌ የቀረበ እውነተኛ ለውጥ አምጪ ማእከል ነው፡፡
                    </p>
                    <p>
                        አለን ኢትዮጵያ ከላይ ለተጠቀሱት የህብረተሰብ ክፍልች በዋናነት መሰረታዊ ፍሊጎቶቻቸውን ማለትም ልብስ መጠለያ እንዱሁም ምግብ በቅድሚያ በማሟላት ለሰው ልጅ ህልውና የሚባለትን የስነ ልቦና ጥንካሬ ፣ጤና ፣ፍትህ ፣ ስራና መስሪያ ቦታ እንዱሁም እውቀት የመሳሰለትን እንዱያገኙበማዴረግ እና ጊዜያዊ ችግሮቻቸውን በመፍታት ተስፋ ያሊቸውና ሰርተው ለመለወጥ የሚችለበት ማእከል እንዱሆን በማሰብ ዜጎች የመሰረቱት የጋራ የመደጋገፍ ማእከል ነው፡፡
                    </p>
                    <p>
                        አለን ኢትዮጵያ አዛውንቶች የሚጦሩበት ፣ ህፃናት ከጎዳና ተነስተው በእውቀት መስክ ላይ የሚሰፍሩበት ፣ ወጣቶች ትኩስ ሀይሊቸውን ተጠቅመው አገራቸውን የሚያገለግለበት፣ የህሙማን ጠያቂ እና አስታማሚ የሆነ እውነተኛ እና ታሪክ ሰሪ የኢትዮጵያውያን የአንዴነት የመደጋገፍ እንዱሁም ጠንካራ በሆነ አገራዊ ፍቅር የተገነባ መሰረት ያለው የሰው ልጆች አለኝታ የሆነ ማእከል ነው፡፡
                    </p>
                </div>
                <div class="col-lg-6 about-top-right">
                <img class="img-fluid" src="{{route('theme.image',['name'=>'alen2.jpg'])}}" alt="">
                </div>
            </div>
        </div>	
    </section>
    <!-- End about-top Area -->		

    <!-- Start home-about Area -->
    {{-- <section class="home-about-area" id="about">
        <div class="container-fluid">				
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding home-about-left">
                    <img class="img-fluid" src="img/pages/at1.jpg" alt="">
                </div>
                <div class="col-lg-6 no-padding home-about-right">
                    <h1>Globally Connected <br>
                    by Large Network</h1>
                    <p>
                        <span>We are here to listen from you deliver exellence</span>
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <a class="text-uppercase primary-btn" href="#">get details</a>
                </div>
            </div>
        </div>	
    </section> --}}
    <!-- End home-about Area -->	


    <!-- Start feature Area -->
    <section class="feature-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9 pb-40 header-text">
                    <h1>እሴቶቻችን</h1>
                    <p>
                        የተቋቋምንባቸው፣ መሰረቶቻችን የሆኑ እሴቶቻችን
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-user"></span>አላማ</h4>
                        <p>
                                የዜጎች ጊዜያዊ መሰረታዊ ፍላጎታቸውን በማሟላት የተየያዩ ስሌጠናዎችን በመስጠት የሞያ ባየቤት በማዴረግ ከጠባቂነት ወደ አምራችነት በመቀየር ተስፋ የቆረጡ ወገኖቻችንን ከጎዲና ሊይ በማንሳት የሀገርን እዴገት የማፋጠን በሚደረገው ትግሌ ሊይ ተሳታፊ እንዱሆኑ ማዴረግ ነው፡፡
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-license"></span>ተልእኮ</h4>
                        <p>
                                የማእከለ መመስረት ዜጎች በተበታተነ ሁኔታ የተቸገረ ወገናቸውን በመርዲት በተረጂው ሊይ ከእየት ጉርስ የዘየየ ትርጉም ያየው የውጥሉያመጡ አይችለም ስየሆነም ማእከለ በጎ ፍቃደኞች በተደራጀ መሌኩ ሌገሳቸውን የማዴረግ እንዱችለና የተረጂዎችን ጊዜያዊ ችግር በመፈታተት አምራች እንዱሆኑ በማዴረግ በህይወታቸው ስር ነቀሌ የውጥ እንዱያመጡናከሌመና ነፃ የሆኑ ጎዲናዎችን በመፍጠር አገርን ና ታሪኩአን የማደስ በዜጎች አመኔታ የሚጣሌበት ተቋም መፍጠር ነው፡፡
                        </p>								
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-phone"></span>ግብ</h4>
                        <p>
                                የሰው ሌጆችን ችግር ከጎናችሁ አየን በማየት ከዝቅተኛ የኑሮ ደረጃ እንዱወጡ ሉያደርግ የሚችሌ የተደራጀ ወገናዊ መረዲጃ ማእከሌ መፍጠር ነው፡፡
                        </p>								
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature">
                        <h4><span class="lnr lnr-rocket"></span>ራዕይ</h4>
                        <p>
                                አገራችን ኢትዮጵያ የዘመናት ተጭኗት ያየውን ዴህነት ስሩን የመናዴ ህዝቦችዋ በተባበረ አንዴነት የ ወገኖቻቸውን ችግር በመፈታትና ከጎዲና በማንሳት የውጥን በማሳየት አንዴም ዜጋ የማይራብባት እና ጎዲና ሊይ ወቶ በሰው ፊት እጆቹን የማይዘረጋ የኔ ብጤ የላየባትና ከሌመና የፀዲች ኢትዮጵያን ተፈጥራ ማየት ነው፡፡
                        </p>				
                    </div>
                </div>					
            </div>
        </div>	
    </section>
    <!-- End feature Area -->	

    <!-- Start booking Area -->
    {{-- <section class="booking-area section-gap relative" id="consultancy">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-6 booking-left">
                    <h1 class="text-white">
                        Globally Connected <br>	
                        by Large Network
                    </h1>
                    <h4 class="text-white">
                        We are here to listen from you deliver exellence
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                    </p>
                    <a class="primary-btn" href="#">View Detials</a>
                </div>
                <div class="col-lg-4 col-md-6 booking-right">
                        <h4 class="mb-20">Book Free Consultancy!</h4>
                        <form action="#">
                            <input class="form-control" type="text" name="name" placeholder="Your name" required>
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                            <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                               <div class="default-select" id="default-select"">
                                <select>
                                    <option value="" disabled selected hidden>Select Visa</option>
                                    <option value="1">Pickup One</option>
                                    <option value="1">Pickup Two</option>
                                    <option value="1">Pickup Three</option>
                                    <option value="1">Pickup Four</option>
                                </select>
                            </div>
                            <textarea class="common-textarea form-control mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                            <button  class="btn btn-default btn-lg btn-block text-center">Request Free Consultancy</button>
                        </form>
                </div>
            </div>
        </div>	
    </section> --}}
    <!-- End booking Area -->

    <!-- Start review Area -->
    {{-- <section class="review-area section-gap" id="review">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9 pb-40 header-text text-center">
                    <h1 class="pb-10">How Our Customers Treat Us</h1>
                    <p>
                        Who are in extremely love with eco friendly system.
                    </p>
                </div>
            </div>					
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <img src="img/r1.png" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <img src="img/r1.png" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Hulda Sutton</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <img src="img/r1.png" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <img src="img/r1.png" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Hulda Sutton</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>																					
                </div>
            </div>
        </div>	
    </section> --}}
    <!-- End review Area -->
@endsection

@section('js')

@endsection