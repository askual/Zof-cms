<?php $__env->startSection('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Resources				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Resources</a></p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
    

    <section class="calltotop-area pt-70 pb-70">
            <div class="container">
                <div class="callto-section">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 call-left no-padding">
                            <p>
                                የማዕከሉ ምስረታ ዋና <span>የመግባቢያ ሰነድ</span>
                            </p>
                        </div>
                        <div class="col-lg-5 call-middle">
                            <p>
                                ይህ ሰነድ ስለማእከሉ አጠቃላይ ታሪክ፣ እቅድና ተግባር ያብራራል።
                            </p>
                        </div>
                        <div class="col-lg-3 call-right justify-content-end d-flex">
                            <a href="<?php echo e(route('theme.download',['name'=>'alen1.pdf'])); ?>" class="call-btn">ይመዝገቡ</a>
                        </div>
                    </div>
                </div>
            </div>	
        </section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('immigration.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>