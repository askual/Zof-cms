@extends('yellowish.layout')

@section('intro')
<div class="container">
                <div class="row py-4">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h5 class="text-white display-4"></h5>
                        <!-- <p class="text-white intro-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quos voluptatibus placeat harum cum laudantium ipsa reiciendis minus nostrum nobis, dolorum nesciunt nisi. Ex reiciendis dignissimos id voluptatum eum incidunt!</p> -->
                        <!-- <button class="btn btn-outline">Contact Us</button> -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- <img src="img/ph1.svg" alt="" class="img-fluid"> -->
                    </div>
                </div>
            </div>


@endsection

@section('content')
<div class="feat pt-4 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h5 class="display-5 mb-2">Team <span class="fan-title pb-1">Askual</span></h5>
                    <p class="text-grey">The brains behind our company</p>
                </div>
                <div class="col-sm-6 col-md-4 text-right">
                    <i class="fa fa-th-large fa-4x" style="color:#F9DF92;"></i>
                </div>
            </div>


            <div class="row prod-card">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'kib.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>Kibru Demeke</p>
                            <small class="text-grey">Computer Science and Engineering student at Adama Science and Technology university</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'abe.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>Abenezer Yohannes</p>
                            <small class="text-grey">Computer Science and Engineering student at Adama Science and Technology university</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'yiw.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>Yiwosin Dagne</p>
                            <small class="text-grey">Information Systems student at Hawassa University</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'tad.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>Tadiwos Alemayehu</p>
                            <small class="text-grey">Computer Science and Technology student at Adama Science and Technology university</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'yet.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>Yetsadkan Meshesha</p>
                            <small class="text-grey">Computer Science  student at HilCoe</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    </div>
                

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection