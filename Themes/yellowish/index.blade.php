
@extends('yellowish.layout')


@section('intro')
<div class="container">
        <div class="row py-4">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h5 class="text-white display-4">Disrupting, for better!</h5>
                <p class="text-white intro-lead">We are a team of software developers who love to develop products that impact peoples life. Our mobile apps, web apps and platforms are specifically designed to meet <b>African</b> needs.</p>
            <a class="btn btn-outline" href="{{route('theme.page.about')}}">Contact Us</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="{{route('theme.image',['name'=>'yolk.png'])}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="feat pt-4 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h5 class="display-5 mb-2"><span class="fan-title pb-1">FEATURED</span> PROJECTS</h5>
                    <p class="text-grey">These are our current priorities.</p>
                </div>
                <div class="col-sm-6 col-md-4 text-right">
                    <i class="fa fa-th-large fa-4x" style="color:#F9DF92;"></i>
                </div>
            </div>

            <div class="row prod-card">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'yolk4.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>GC suite</p>

                            <small class="text-grey">A platform for Graduating Class students.</small>
                            <br>    
                            <a href="{{route('theme.page.gcsuite')}}" class="btn btn-outline2">Learn More</a>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'yolk4.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>YeCampus</p>

                            <small class="text-grey">A one stop solution for campus students. Not just an app, its a campus by itself. </small>
                            <br>    
                            <a href="{{route('theme.page.yecampus')}}" class="btn btn-outline2">Learn More</a>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'yolk4.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>YeCulture</p>

                            <small class="text-grey">A platform designed to digitize African Languages </small>
                            <br>
                            <a href="{{route('theme.page.yeculture')}}" class="btn btn-outline2">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="card product-card">
                        <div class="text-center py-4">
                            <img src="{{route('theme.image',['name'=>'yolk4.png'])}}" alt="" class="product-icons">
                        </div>
                        <div class="card-body text-center">
                            <p>ZoffSites</p>

                            <small class="text-grey">Have a fully functional website starting from 210 birr/month.</small>
                            <br>
                            <a href="{{route('theme.page.zoffsites')}}" class="btn btn-outline2">Learn More</a>
                        </div>
                    </div>
                </div>
               
            </div>


            <div class="dd row">
                    <div class="col-sm-12 col-md-8 col-lg-8 embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BaxQRmfvFXw" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h5 class="text-white display-4">Askual on ETV</h5>
                        <p class="text-white intro-lead">
                            Ethiofunder, our crowd-funding platform was the main focus of the interview.
                        </p>
                        <ul class="text-white intro-lead">
                        <li>Ethiofunder</li>
                        <li>My ASTU</li>
                        </ul>
                        {{-- <a class="btn btn-outline">Contact Us</a> --}}
                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/BaxQRmfvFXw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                    </div>
            </div>
            <div class="dd row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h5 class="text-white display-4">Askual on JTV</h5>
                    <p class="text-white intro-lead">We preached about opensource. <a href=""> Astu Portal </a>, <a href="" > My Astu</a>,  and our other apps are also presented.</p>
                    <ul class="text-white intro-lead">
                        <li>GC App Series</li>
                        <li>My ASTU</li>
                        <li>ASTU Portal</li>
                    </ul>
                    {{-- <a class="btn btn-outline">Contact Us</a> --}}
                </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q6Jx21HD7GA" allowfullscreen></iframe>
                    </div>
            </div>

        </div>



    </div>
@endsection

@section('js')

@endsection
