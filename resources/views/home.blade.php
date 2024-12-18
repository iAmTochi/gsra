@extends('layouts.home')

@section('content')


    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ======================= Home Banner ======================== -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-9.jpeg') }}) no-repeat;" data-overlay="2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="mb-5 text-left banner_caption typed-out">
                                    <h1 class="mb-1 uppercase banner_title ft-bold"><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium">...Or seeking for a new job</p>
                                </div>

                                <div class="mt-5 text-left align-items-center justify-content-center">
                                    <a href="{{ route('applicant.add.resume') }}" class="mr-1 bg-white btn hover-theme ft-regular"><i
                                                class="mr-1 lni lni-user"></i>I'm looking for a Job</a>
                                    <a href="{{ route('register.employer') }}"
                                       class="ml-1 btn bg-dark hover-theme text-light ft-regular"><i
                                                class="mr-1 lni lni-briefcase"></i>I'm Hiring</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-1.webp') }}) no-repeat;" data-overlay="2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="mb-5 text-right banner_caption typed-out">
                                    <h1 class="mb-1 uppercase banner_title ft-bold "><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium " >...Or seeking for a new job</p>
                                </div>

                                <div class="mt-5 text-right align-items-center justify-content-center">
                                    <a href="{{ route('applicant.add.resume') }}" class="mr-1 bg-white btn hover-theme ft-regular"><i
                                                class="mr-1 lni lni-user"></i>I'm looking for a Job</a>
                                    <a href="{{ route('register.employer') }}"
                                       class="ml-1 btn bg-dark hover-theme text-light ft-regular"><i
                                                class="mr-1 lni lni-briefcase"></i>I'm Hiring</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-banner margin-bottom-0"
                     style="background:#00ab46 url({{ asset('assets/img/banner-8.webp') }}) no-repeat;" data-overlay="2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="mb-5 text-center banner_caption typed-out">
                                    <h1 class="mb-1 uppercase banner_title ft-bold"><span class="count"></span> In need
                                        of a new staff?</h1>
                                    <p class="fs-md ft-medium">...Or seeking for a new job</p>
                                </div>

                                <div class="mt-5 text-center align-items-center justify-content-center">
                                    <a href="{{ route('applicant.add.resume') }}" class="mr-1 bg-white btn hover-theme ft-regular"><i
                                                class="mr-1 lni lni-user"></i>I'm looking for a Job</a>
                                    <a href="{{ route('register.employer') }}"
                                       class="ml-1 btn bg-dark hover-theme text-light ft-regular"><i
                                                class="mr-1 lni lni-briefcase"></i>I'm Hiring</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ======================= Home Banner ======================== -->


    <!-- ======================= Job seeks and employers Banner ======================== -->
    <section class="py-0 space" style="background: #ff0000;">
        <!-- ======================= for job seekers Start ============================ -->
        <div class="text-white container-fluid">


            <div class="row">
                <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                     style=" background: url({{ asset('assets/img/applicant.jpeg') }}); z-index: 1" data-overlay="1">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="px-4 py-5 position-relative">

                        <h2 class="mb-3 text-center text-white ft-bold">FOR JOB SEEKERS</h2>
                        <p class="mb-2" style="font-size: 18px !important;"> Our number one goal is to significantly
                            reduce the number of unemployed graduates in Nigeria. To achieve our primary objective,
                            we dedicate a lot of time to training and re-training candidates to be employable and
                            fitted for the right job. We are a one-stop shop for the basic recruitment needs of both employers and
                            job seekers and have inculcated <span class="font-weight-bold">SKILLS ACQUISITION</span> as a fundamental aspect of GSRA to
                            help prepare our candidates to be successful in their next job.
                        </p>

                        <div class="pl-0 mt-3 ml-0 col-lg-12 col-md-12 col-12">
                            <a href="{{ route('about') }}" class="rounded btn gray ft-medium apply-btn fs-sm">See
                                Details<i class="ml-2 lni lni-arrow-right-circle"></i></a>
                        </div>
                    </div>

                </div>


            </div>


        </div>
        <!-- ======================= for job seekers Start ============================ -->
        <!-- ======================= for job Employers Start ============================ -->
        <div class="text-white container-fluid">


            <div class="row employer">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                        <div class="px-2 py-5 position-relative">

                            <h2 class="mb-3 text-center text-white ft-bold">FOR EMPLOYERS</h2>
                            <p class="mb-2" style="font-size: 18px !important;"> Global Skills Recruitment Agency, GSRA,
                                is a recruiting. We dedicate a lot of time to training and re-training candidates to be employable and
                                fitted for the right job. We hire qualified employees to their respective employers.

                                At GSRA, we are focused on making candidates
                                <span class="font-weight-bold">highly productive at the workplace</span>. To do that, <span class="font-weight-bold">we undertake a lot of training
                                    on behalf of our clients and the candidates themselves</span> to ensure that they are equipped
                                with the requisite knowledge and skills to perform their responsibilities effectively.
                            </p>
                            <div class="pl-0 mt-3 ml-0 col-lg-12 col-md-12 col-12">
                                <a href="{{ route('about') }}"
                                   class="rounded btn gray ft-medium apply-btn fs-sm">See Details<i
                                            class="ml-2 lni lni-arrow-right-circle"></i></a>
                            </div>
                        </div>
                </div>
                <div class="px-0 col-xl-6 col-lg-6 col-md-12 col-sm-12 jbs"
                     style=" background: url({{ asset('assets/img/recruiter.webp') }}); z-index: 1" data-overlay="1">

                </div>


            </div>


        </div>
        <!-- ======================= for job Employers Start ============================ -->
    </section>

    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative">
                            <div class="mb-1"><span class="px-2 py-1 rounded theme-bg-light theme-cl">About Us</span>
                            </div>
                            <h2 class="mb-3 ft-bold text-capitalize"> Welcome to GSRA, <br> where we're revolutionizing the world of work!</h2>
                            @if (false)
                                
                            
                            <p class="mb-2"> Global Skills Recruitment Agency, GSRA, is a recruiting,
                                training and staffing agency. Our number one goal is to significantly
                                reduce the number of unemployed graduates in Nigeria. To achieve our primary objective,
                                we dedicate a lot of time to training and re-training candidates to be employable and
                                fitted for the right job. We hire for fit by connecting
                                qualified employees to their respective employers.
                            </p>
                            <p class="mb-4">At GSRA, we are focused on making candidates
                                highly productive at the workplace. To do that, we undertake a lot of training
                                on behalf of our clients and the candidates themselves to ensure that they are equipped
                                with the requisite knowledge and skills to perform their responsibilities effectively.
                                We are a one-stop shop for the basic recruitment needs of both employers and
                                job seekers and have inculcated SKILLS ACQUISITION as a fundamental aspect of GSRA to
                                help prepare our
                                candidates to be successful in their next job.
                            </p>
                            @endif
                                <p class="mb-2">
                                    We're on a mission to transform the way organizations and individuals connect and thrive in 
                                    the modern employment landscape. Our two-pronged approach is designed to drive success on both 
                                    sides of the equation:
        
                                </p>
                                <p class="mb-2">
                                    <b>For Organizations:</b> <br>
                                    We're your trusted partner in building high-performing teams that fuel growth and innovation. 
                                    Our expert staffing solutions ensure the right talent fits seamlessly into your unique culture 
                                    and roles, driving your organization forward.
        
                                </p>
                                <p class="mb-2">
                                    <b>For Candidates:</b> <br>
                                    We're your career compass in a world of digitalization and hybrid work environments. 
                                    Our personalized guidance and counseling empower you to navigate the modern job market with confidence, 
                                    unlocking your full potential and finding fulfillment in your career journey.
        
                                </p>
        
                                <p class="mb-2">
                                    At GSRA, we believe in people-first solutions that spark meaningful connections and drive success. 
                                    Join us in shaping the future of work!
                                </p>
                        </div>
                        <div class="position-relative row">
{{--                            <div class="col-lg-4 col-md-4 col-4">--}}
{{--                                <h3 class="mb-0 ft-bold theme-cl">10k+</h3>--}}
{{--                                <p class="ft-medium">Active Jobs</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-4 col-4">--}}
{{--                                <h3 class="mb-0 ft-bold theme-cl">12k+</h3>--}}
{{--                                <p class="ft-medium">Resumes</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-4 col-4">--}}
{{--                                <h3 class="mb-0 ft-bold theme-cl">07k+</h3>--}}
{{--                                <p class="ft-medium">Employers</p>--}}
{{--                            </div>--}}
                            <div class="mt-3 col-lg-12 col-md-12 col-12">
                                <a href="{{ route('about') }}"
                                   class="rounded btn btn-md theme-bg-light theme-cl hover-theme">See Details<i
                                            class="ml-2 lni lni-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/aboutus-01.jpg') }}" class="rounded img-fluid" alt="" width="350" />
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= About Start ============================ -->

    <!-- ======================= Why Choose GSRA Start ============================ -->
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="mb-4 text-center sec_title position-relative">
                        <h2 class="ft-bold text-muted">Why Choose GSRA?</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>1</span></div>
                            <div class="blg_desc"><p>We leave no stone unturned in fitting the right employee to the
                                    right employer and
                                    according to the organizational goals of our clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>2</span></div>
                            <div class="blg_desc"><p>We diagnose and offer purpose-built and targeted
                                    solutions to our clients’
                                    peculiar needs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>3</span></div>
                            <div class="blg_desc"><p>We equip employees and job seekers with the appropriate working
                                    skills
                                    needed to function productively in the workplace.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Single Item -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="blg_grid_box">
                        <div class="blg_grid_caption">
                            <div class="blg_tag"><span>4</span></div>
                            <div class="blg_desc"><p>We meticulously weave through the thick of applicant
                                    to ensure the right candidate is selected</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Why Choose GSRA ============================ -->

    <!-- ======================= Job List ======================== -->

    <section class="middle">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="mb-5 text-center sec_title position-relative">
                        <h6 class="mb-0 text-muted">Trending Jobs</h6>
                        <h2 class="ft-bold">All Popular Listed jobs</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">



                @foreach($jobs as $job)
                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="border rounded job_grid ">
                        <div class="position-absolute ab-left">
                            <button type="button"
                                    class="p-3 bg-white border circle d-flex align-items-center justify-content-center text-gray">
                                <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                        </div>
                        <div class="position-absolute ab-right"><span
                                    class="px-2 py-1 rounded medium bg-light-success text-success">{{ $job->workType->name }}</span>
                        </div>
                        <div class="px-3 pt-5 mb-3 job_grid_thumb">
                            <a href="{{ route('home.jobs.detail', $job->id) }}" class="m-auto text-center d-block"><img src="assets/img/c-2.png"
                                                                                              class="img-fluid"
                                                                                              width="70" alt=""/></a>
                        </div>
                        <div class="px-3 pb-5 text-center job_grid_caption">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                                      class="text-muted medium">{{ $job->recruiter->company_name }}</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="{{ route('home.jobs.detail', $job->id) }}" class="text-dark fs-md">{{ $job->title }}</a></h4>
                            <div class="jbl_location"><i class="mr-1 lni lni-map-marker"></i><span>{{ ucwords( strtolower($job->state->name)) }}</span>
                            </div>
                        </div>
                        <div class="px-3 pb-4 job_grid_footer d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="mr-1 lni lni-wallet"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="mr-1 lni lni-timer"></i>{{ $job->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
            <!-- row -->
            <div class="text-center position-relative">
                <a href="{{ route('home.jobs') }}" class="rounded btn btn-md theme-bg text-light hover-theme">Explore More
                    Jobs<i class="ml-2 lni lni-arrow-right-circle"></i></a>
            </div>

        </div>
    </section>
    <!-- ======================= Job List ======================== -->

    <section class="bg-cover" style="background:#ff0000 url({{ asset('assets/img/curve.svg') }})no-repeat">
        @if(false)
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                        <div class="mb-5 text-center sec_title position-relative">
                            <h6 class="mb-0 text-light">Current Openings</h6>
                            <h2 class="ft-bold text-light">We Have Worked with 10,000+ Trusted Companies</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-9.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-4.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-2.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-5.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-10.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-12.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="text-left cats-wrap">
                                    <a href="job-search-v1.html"
                                       class="px-2 py-3 bg-white rounded cats-box d-flex align-items-center">
                                        <div class="text-center"><img src="assets/img/c-17.png" class="img-fluid" width="55"
                                                                      alt=""></div>
                                        <div class="px-2 cats-box-caption">
                                            <h4 class="mb-0 fs-md ft-medium">Web Designing</h4>
                                            <span class="text-muted">302 Jobs</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif

        <div class="ht-50"></div>
    </section>


    <!-- ======================= Customer Review ======================== -->
    <section class="middle gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="mb-5 text-center sec_title position-relative">
                        <h6 class="mb-0 text-muted">Our Reviews</h6>
                        <h2 class="ft-bold">What Our Customers <span class="text-danger"> Are Saying</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="px-3 review-slide">

                        @foreach($testimonies as $testimony)
                        <!-- single review -->
                        <div class="px-2 single_review">
                            <div class="px-4 py-4 bg-white rounded reviews_wrap position-relative">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="{{asset('storage/'.$testimony->passport ) }}" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="pl-3 rv-110-caption">
                                        <h4 class="mb-0 ft-medium fs-md lh-1">{{ $testimony->name }}</h4>
                                        <p class="p-0 m-0">{{ $testimony->occupation }}</p>
                                    </div>
                                </div>
                                <div class="mt-3 rw-header d-flex">
                                    <p>{{ $testimony->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Customer Review ======================== -->


    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


@endsection

@section('styles')

    <style>

        .slick-next:before, .slick-prev:before {
            color: #ff0000 ;
        }

        .jbs {
            display: flex;
            width: 100%;
            background-size: cover !important;
            background-position: center !important;
        }

        @media only screen and (max-width: 991px) {

            .jbs {
                height: 220px;
                /*width: 100%;*/
            }

            .employer {


                display: flex;
                flex-flow: column-reverse;

            }
        }

        .typed-out{
            overflow: hidden;
            /*border-right: .15em solid #0001a2;*/
            white-space: nowrap;
            animation: typing 5.0s  alternate;
            width: 100%;
        }
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
    </style>

@endsection
