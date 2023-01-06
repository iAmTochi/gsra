@extends('layouts.home')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title gray">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h2 class="mb-0 ft-medium">{{ $article->title }}</h2>
                            <nav class="transparent">
                                <ol class="breadcrumb p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('home.articles') }}">Articles</a></li>
                                    <li class="breadcrumb-item active theme-cl" aria-current="page">{{ $article->title }}</li>
                                </ol>
                            </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Blog Detail Start ================================== -->
    <section>

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <!-- Blog Detail -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="article_body_wrap">

                            <div class="article_featured_image">
                                <img class="img-fluid" src="{{ asset('storage/'. $article->image) }}" alt="">
                            </div>

                            <div class="article_top_info">
                                <ul class="article_middle_info">
                                    <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by Admin</a></li>
                                    <li><a href="#"><span class="icons"><i class="ti-calendar"></i></span> {{ $article->created_at->isoFormat('DD MMM YYYY') }}</a></li>
                                </ul>
                            </div>
                            <h2 class="post-title">{{ $article->title }}</h2>
                            <p>
                                {!! $article->content !!}
                            </p>
                        </div>
                    </div>

                    @if(false)
                    <!-- Author Detail TODO: Add Article Author -->

                    <div class="article_detail_wrapss single_article_wrap format-standard">

                        <div class="article_posts_thumb">
                            <span class="img"><img class="img-fluid" src="assets/img/user-1.jpg" alt=""></span>
                            <h3 class="pa-name">Rosalina William</h3>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <p class="pa-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        </div>

                    </div>
                        @endif




                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <!-- Searchbard -->
                    <div class="single_widgets widget_search">
                        <h4 class="title">Search</h4>
                        <form action="#" class="sidebar-search-form">
                            <input type="search" name="search" placeholder="Search..">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="single_widgets widget_category">
                        <h4 class="title">Categories</h4>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }} <span>{{ $category->articles->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Trending Posts -->
                    <div class="single_widgets widget_thumb_post">
                        <h4 class="title">Latest Articles</h4>
                        <ul>
                            <li>
										<span class="left">
											<img src="assets/img/b-1.jpg" alt="" class="">
										</span>
                                <span class="right">
											<a class="feed-title" href="#">Alonso Kelina Falao Asiano Pero</a>
											<span class="post-date"><i class="ti-calendar"></i>10 Min ago</span>
										</span>
                            </li>
                            <li>
										<span class="left">
											<img src="assets/img/b-2.jpg" alt="" class="">
										</span>
                                <span class="right">
											<a class="feed-title" href="#">It is a long established fact that a reader</a>
											<span class="post-date"><i class="ti-calendar"></i>2 Hours ago</span>
										</span>
                            </li>
                            <li>
										<span class="left">
											<img src="assets/img/b-3.jpg" alt="" class="">
										</span>
                                <span class="right">
											<a class="feed-title" href="#">Many desktop publish packages and web</a>
											<span class="post-date"><i class="ti-calendar"></i>4 Hours ago</span>
										</span>
                            </li>
                            <li>
										<span class="left">
											<img src="assets/img/b-4.jpg" alt="" class="">
										</span>
                                <span class="right">
											<a class="feed-title" href="#">Various versions have evolved over the years</a>
											<span class="post-date"><i class="ti-calendar"></i>7 Hours ago</span>
										</span>
                            </li>
                            <li>
										<span class="left">
											<img src="assets/img/b-5.jpg" alt="" class="">
										</span>
                                <span class="right">
											<a class="feed-title" href="#">Photo booth anim 8-bit PBR 3 wolf moon.</a>
											<span class="post-date"><i class="ti-calendar"></i>3 Days ago</span>
										</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tags Cloud -->
                    <div class="single_widgets widget_tags">
                        <h4 class="title">Tags</h4>
                        <ul>
                            @foreach($tags as $tag)
                            <li><a href="#">{{ $tag->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Blog Detail End ================================== -->

@endsection

@section('styles')
    <style>

        .nav-menu>li>a {
            color: #172228 !important;
        }
    </style>
@endsection

