@extends('layouts.home')

@section('content')

    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-title py-5" data-overlay="5">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1 class="ft-medium">Galleries</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-light">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Galleries</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="ht-30"></div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= Gallery Start ============================ -->
    <section class="space min mt-5">
        <div class="container">

            <!-- Gallery -->
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"/>

                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape"/>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds"/>

                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"/>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea"/>

                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park"/>
                </div>
            </div>
            <!-- Gallery -->

        </div>
    </section>
    <!-- ======================= Gallery end ============================ -->


@endsection


@section('styles')
    <style>

        .bg-title {
            background: url({{ asset('assets/img/applicant.jpeg') }});
            display: flex;
            width: 100%;
            background-size: cover !important;
        }
    </style>

@endsection
