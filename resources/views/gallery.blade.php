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
            <div class="row">
                     @foreach($galleries as $gallery)
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                    <img src="{{asset('storage/'.$gallery->photo ) }}"
                                         class="w-100 shadow-1-strong rounded mb-4"
                                         alt="Boat on Calm Water"/>
                        </div>
                     @endforeach
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
