<?php $__env->startSection('content'); ?>
<!-- start banner Area -->
<section class="banner-area" id="home">	
    <div class="container">				
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-9">
                <h6>በተግባር ማህበረሰብን ማገልገል</h6>
                <h1 class="text-white">
                    ሀገራችንን <br>
                    አለን እንበል
                </h1>
                <a href="<?php echo e(route('theme.page.about')); ?>" class="genric-btn circle">በደንብ እንተዋወቅ</a>
            </div>
        <img class="header-img img-fluid align-self-end d-flex" src="<?php echo e(route('theme.image',['name'=>'alen1.jpg'])); ?>" alt="">			
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start callto Area -->
<section class="calltotop-area pt-70 pb-70">
    <div class="container">
        <div class="callto-section">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 call-left no-padding">
                    <p>
                        የበጎ <span>ለውጥ</span> አካል <br>
                        ለመሆን <span>ይቀላቀሉን</span>
                    </p>
                </div>
                <div class="col-lg-5 call-middle">
                    <p>
                        የአለን ኢትዮጲያ አካል ለመሆን የሚጠበቅባችሁ የሚከተለውን ፎርም መሙላት ብቻ ነው።
                    </p>
                </div>
                <div class="col-lg-3 call-right justify-content-end d-flex">
                    <a href="<?php echo e(route('theme.page.register')); ?>" class="call-btn">ይመዝገቡ</a>
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- End callto Area -->			

<!-- Start service Area -->
<section class="service-area section-gap" id="immigration">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 pb-40 header-text text-center">
                <h1 class="pb-10">ከተግባሮቻችን መካከል</h1>
                <p>
                    ድርጅታችን የተለያዩ ፕሮጀክቶችን ነድፎ ይንቀሳቀሳል
                </p>
            </div>
        </div>					
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-service">
                    <div class="thumb">
                        <img src="img/s1.jpg" alt="">
                    </div>
                    <a class="tag">ቡሌሆራ</a>
                    <a class="tag">ሀዋሳ</a>
                    <a href="country-list.html"><h4>የመጽሀፍት ማሰባሰብ</h4></a>
                    <p>
                        መጽሀፍትን በማሰባሰብ ቤተመጽሀፍት እናበረክታለን።
                    </p>
                </div>
            </div>																		
        </div>
    </div>	
</section>
<!-- End service Area -->






<!-- Start review Area -->



<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('immigration.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>