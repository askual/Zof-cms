
@extends('estartup.layout')






@section('content')

<!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>{{$post->title}}</h2>
        {{-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> --}}
      </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-12">
          <div class="block-blog text-conter">
                <?=$post->body?>
            {{-- <a href="#"><img src="{{url($post->picture)}}" class="img-fluid" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#"></a></h4>
              <span>{{$post->excerpt}}</span>
            <a class="pull-right readmore" href="{{route('single_post',['slug'=>$post->slug])}}">read more</a>
            </div> --}}
          </div>
        </div>
        

      </div>
    </div>
  </section>

@endsection