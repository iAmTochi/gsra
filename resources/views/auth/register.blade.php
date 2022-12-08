@extends('layouts.auth')

@section('content')
    <!-- ======================= Login Detail ======================== -->
    <section class="middle gray">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-12 text-center mb-5">
                    <a class="nav-brand mb-5" href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="logo" />
                    </a>

                </div>

                <div class="row justify-content-center">

                    <div class="col-md-6">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb" style="max-height: 300px">
                                <img src="{{ asset('assets/img/applicant.jpeg')}}" class="img-fluid" alt="">
                            </div>
                            <a href="{{ route('register.job-seeker') }}" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Sign up as Job seeker</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb" style="max-height: 300px">
                                <img src="{{ asset('assets/img/recruiter.webp') }}" class="img-fluid" alt="">
                            </div>
                            <a href="{{ route('register.employer') }}" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Sign up as Employer</a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->



@endsection
