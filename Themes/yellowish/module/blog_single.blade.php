
@extends('yellowish.layout')




@section('intro')
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-8 col-lg-8">
                <h5 class="text-white display-4">{{$post->title}}</h5>
                    <p class="text-white intro-lead">By Kibru Demeke</p>
                    <!-- <button class="btn btn-outline">Contact Us</button> -->
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h5 class="text-white display-5"></h5> 
                    <img src="{{$post->picture}}" height="140px" width="550" alt="" class="img-fluid ">
                </div>
            </div>
        </div>
@endsection


@section('content')
<div class="feat pt-4 mt-2">
    <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <!-- <div class="card product-card"> -->
                  <?=$post->body?>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

@endsection