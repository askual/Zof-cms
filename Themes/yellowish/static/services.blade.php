@extends('yellowish.layout')

@section('intro')
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h5 class="text-white display-4">Development, design and implementation</h5>
                    <!-- <p class="text-white intro-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos voluptatibus placeat harum cum laudantium ipsa reiciendis minus nostrum nobis, dolorum nesciunt nisi. Ex reiciendis dignissimos id voluptatum eum incidunt!</p>
                    <button class="btn btn-outline">Contact Us</button> -->
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <!-- <h5 class="text-white display-5"></h5> -->
                    <img src="img/ph1.svg" height="140px" width="550" alt="" class="img-fluid">
                </div>
            </div>
        </div>
@endsection

@section('content')
    <div class="feat pt-4 mt-2">
        <div class="container">
            
            <div class=" prod-card row  py-4">
                <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="img/ph/products/draby.png" alt="" class="product-icons">
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <p>Mobile application development</p>
                    <small class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</small>
                </div>
            </div>
            
            <div class=" prod-card row  py-4">
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <p>System development</p>
                    <small class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, expedita labore. Mollitia adipisci tempora rem commodi eos unde!</small>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="img/ph/products/draby.png" alt="" class="product-icons">
                </div>
            </div>





        </div>
    </div>

@endsection
