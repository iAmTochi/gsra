@extends('layouts.home')

@section('content')
<!-- ======================= Article Start ============================ -->
<section class="page-title gray">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <h2 class="mb-0 ft-medium">Latest Articles</h2>
                    <nav class="transparent">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Articles</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="middle">
    <div class="container">
        <div class="row mt-5">
            @foreach($articles as $article)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('home.articles.show', $article) }}" class="d-block"><img src="{{ asset('storage/'. $article->image) }}" class="img-fluid rounded" alt="" style="min-height: 300px; width: 400px" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">{{ $article->created_at->isoFormat('LL') }}</span>
                        <h5 class="bl_title lh-1"><a href="{{ route('home.articles.show', $article) }}">{{ $article->title }}</a></h5>
                        <p>
                            {!! substr($article->content,0, 200) !!}
                        </p>
                        <a href="{{ route('home.articles.show', $article) }}" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(false)
            <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="javascript:void(0);" class="btn stretched-link borders">Load More Blogs<i class="lni lni-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
        @endif

    </div>
</section>
<!-- ======================= Article Start ============================ -->

@endsection

@section('styles')
    <style>

        .nav-menu>li>a {
            color: #172228 !important;
        }
    </style>
@endsection

