
@extends('estartup.layout')






@section('content')

<!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Latest posts</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>
    <div class="container">
      <div class="row">

      	@foreach($posts as $post)
        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{url($post->picture)}}" class="img-fluid" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">{{$post->title}}</a></h4>
              <span>{{$post->excerpt}}</span>
            <a class="pull-right readmore" href="{{route('single_post',['slug'=>$post->slug])}}">read more</a>
            </div>
          </div>
        </div>
        @endforeach
        

      </div>
    </div>
  </section>

@endsection