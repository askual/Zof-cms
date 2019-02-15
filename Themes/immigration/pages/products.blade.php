@extends('yellowish.layout')

@section('intro')

        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h5 class="text-white display-4">Apps, Systems, Softwares ...</h5>
                    <!-- <p class="text-white intro-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos voluptatibus placeat harum cum laudantium ipsa reiciendis minus nostrum nobis, dolorum nesciunt nisi. Ex reiciendis dignissimos id voluptatum eum incidunt!</p>
                    <button class="btn btn-outline">Contact Us</button> -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h5 class="text-white display-5">development and design by us</h5>
                    <!-- <img src="img/ph/yolk.png" alt="" class="img-fluid"> -->
                </div>
            </div>
        </div>
@endsection

@section('content')
<div class="feat pt-4 mt-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <h5 class="display-5 mb-2"><span class="fan-title pb-1">FEATURED</span> PRODUCTS</h5>
                <p class="text-grey">Latest products we worked on</p>
            </div>
            <div class="col-sm-6 col-md-4 text-right">
                <i class="fa fa-th-large fa-4x" style="color:#F9DF92;"></i>
            </div>
        </div>


        <div class="row prod-card">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card product-card">
                    <div class="text-center py-4">
                        <img src="/main/img/ph/products/draby.png" alt="" class="product-icons">
                    </div>
                    <div class="card-body text-center">
                        <p>PM Dr.Abiy Ahemed</p>

                        <small class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</small>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card product-card">
                    <div class="text-center py-4">
                        <img src="/main/img/ph/products/gc.png" alt="" class="product-icons">
                    </div>
                    <div class="card-body text-center">
                        <p>GC App 2018</p>

                        <small class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</small>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card product-card">
                    <div class="text-center py-4">
                        <img src="/main/img/ph/products/etfun.png" alt="" class="product-icons">
                    </div>
                    <div class="card-body text-center">
                        <p>Ethiofunder.com</p>

                        <small class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</small>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card product-card">
                    <div class="text-center py-4">
                        <img src="/main/img/ph/products/draby.png" alt="" class="product-icons">
                    </div>
                    <div class="card-body text-center">
                        <p>PM Dr.Abiy Ahemed</p>

                        <small class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</small>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection