@extends('yellowish.layout')

@section('intro')

            <div class="container">
                <div class="row py-4">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h5 class="text-white display-4">Call, email, chat</h5>
                        <!-- <p class="text-white intro-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos voluptatibus placeat harum cum laudantium ipsa reiciendis minus nostrum nobis, dolorum nesciunt nisi. Ex reiciendis dignissimos id voluptatum eum incidunt!</p> -->
                        <!--  -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="img/ph1.svg" alt="" class="img-fluid">

                    </div>
                </div>
            </div>

        </div>

@endsection

@section('content')
    <div class="feat pt-4 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h5 class="display-5 mb-2"><span class="fan-title pb-1">Quick</span> Message</h5>
                    <!-- <p class="text-grey">Latest products we worked on</p> -->
                </div>
                <div class="col-sm-6 col-md-4 text-right">
                    <i class="fa fa-th-large fa-4x" style="color:#F9DF92;"></i>
                </div>
            </div>
            <div class="row prod-card">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card product-card">
                        <div class="card-body text-center">
                            <form>
                                <label class="">Name</label>
                                <input type="text" >
                                <br>
                                <label>Email</label>
                                <input type="email" >
                                <br>
                                <label>Body</label>
                                <textarea row="4"></textarea>
                                <br>
                                <button class="btn ">Send</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
