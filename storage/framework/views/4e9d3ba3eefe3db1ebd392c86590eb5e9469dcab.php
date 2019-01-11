<?php $__env->startSection('intro'); ?>
            <div class="container">
                <div class="row py-4">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h5 class="text-white display-4">Press appearances, press kits and press releases</h5>
                        <!-- <p class="text-white intro-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos voluptatibus placeat harum cum laudantium ipsa reiciendis minus nostrum nobis, dolorum nesciunt nisi. Ex reiciendis dignissimos id voluptatum eum incidunt!</p> -->
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img src="img/ph1.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <button class="btn btn-outline">Download our press kit</button>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="feat pt-4 mt-2">
        <div class="container">

            <div class=" prod-card row  py-4">
                <div class="col-sm-12 col-md-8 col-lg-8">
                <img src="img/ph1.svg" alt="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Askual on Jtv</h3>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</h5>
                </div>
            </div>
            <div class=" prod-card row  py-4">
                <div class="col-sm-12 col-md-8 col-lg-8">
                <img src="img/ph1.svg" alt="" >
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Askual on Etv</h3>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</h5>
                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('yellowish.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>