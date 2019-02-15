@extends('layouts.charity-theme')


@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Blog</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    @foreach($posts as $post)
                    <div class="news-content">
                        <a href="#"><img height="300" src="{{route('blog.image',['name'=>$post->picture])}}" alt=""></a>

                        <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                            <div class="header-elements">
                                <div class="posted-date">March 12, 2018</div>

                                <h2 class="entry-title"><a href="#">{{$post->title}}</a></h2>

                                <div class="post-metas d-flex flex-wrap align-items-center">
                                    <!-- <span class="cat-links">in <a href="#">Causes</a></span>
                                    <span class="post-author">by <a href="#">Tom Phillips</a></span>
                                    <span class="post-comments"><a href="#">3 Comments</a></span> -->
                                </div>
                            </div>

                            <div class="donate-icon">
                                <!-- <a href="#"><img src="images/donate-icon.png" alt=""></a> -->
                            </div>
                        </header>

                        <div class="entry-content">
                            <?=$post->body?>
                        </div>

                        <footer class="entry-footer">
                            <a href="#" class="btn gradient-bg">Read More</a>
                        </footer>
                    </div>
                    @endforeach


                    <ul class="pagination d-flex flex-wrap align-items-center p-0">
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                    </ul>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="sidebar">

                        <div class="popular-posts">
                            <h2>Popular Posts</h2>

                            <ul class="p-0">
                            @foreach($posts as $post)
                                <li class="d-flex flex-wrap justify-content-between align-items-center">
                                    <figure><a href="#"><img height="80" src="{{route('blog.image',['name'=>$post->picture])}}" alt=""></a></figure>

                                    <div class="entry-content">
                                        <h3 class="entry-title"><a href="#">{{$post->title}}</a></h3>

                                        <div class="posted-date">MArch 12, 2018</div>
                                    </div>
                                </li>
                            @endforeach

                            </ul>
                        </div><!-- .cat-links -->

                    </div><!-- .sidebar -->
                </div><!-- .col -->
            </div>
        </div>
    </div>


@endsection