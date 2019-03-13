@extends('yellowish.layout')

@section('intro')
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h5 class="text-white display-4">GC Suite: polishing your graduation!</h5>
                </div>
                <!-- <div class="col-sm-12 col-md-4 col-lg-4">
                    <h5 class="text-white display-5"></h5> 
                    <img src="img/blog.jpg" height="140px" width="550" alt="" class="img-fluid">
                </div> -->
            </div>
        </div>
@endsection

@section('content')
<div class="feat pt-4 mt-2">
    <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="container">
                    <div class="col-sm-12"><h5 class="text-center" >Digital YearBook</h5></div>
                    {{-- <div class="col-sm-4"> <img class="img-fluid" src="dd.dd" ></div> --}}
                    {{-- <div class="col-sm-2"></div> --}}
                    <div class="col-sm-12"> <p>  It's 2019. But still we use hardcover YearBooks. Wouldnot it be awesome if we can get a mobile app instead?</p></div>
                </div>
            </div>
            <div class="row">
                    {{-- <div class="col-sm-12"><h5 class="text-center" >Are you PM Abiy Ahmed?</h5></div> --}}
                    <div class="col-sm-12"><h5 class="text-center">FEATURES</h5></div>
                
            </div>

            <div class="row prod-card">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card product-card">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img src="{{route('theme.image',['name'=>'gc0.webp'])}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-5">
                                    <p>Interactive pics</p>
                                    <small class="text-grey">A platform for Graduating Class students.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card product-card">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img src="{{route('theme.image',['name'=>'gc1.webp'])}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-5">
                                    <p>Interactive pics</p>
                                    <small class="text-grey">A platform for Graduating Class students.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card product-card">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img src="{{route('theme.image',['name'=>'gc2.webp'])}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-5">
                                    <p>Interactive pics</p>
                                    <small class="text-grey">A platform for Graduating Class students.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card product-card">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img src="{{route('theme.image',['name'=>'gc3.webp'])}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-5">
                                    <p>Interactive pics</p>
                                    <small class="text-grey">A platform for Graduating Class students.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card product-card">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img src="{{route('theme.image',['name'=>'gc4.webp'])}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-sm-5">
                                    <p>Interactive pics</p>
                                    <small class="text-grey">A platform for Graduating Class students.</small>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


        </div>
    </div>
</div>


@endsection
