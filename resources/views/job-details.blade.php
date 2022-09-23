@extends('layouts.home')

@section('content')



    <!-- ======================= Searchbar Banner ======================== -->
    <div class="py-5 bg-title"  data-overlay="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12 mt-5">
                    <div class="banner_caption text-center mb-2">
                        <h1 class="ft-bold mb-4">The Most Exciting Jobs</h1>
                    </div>

                    <form class="bg-white rounded p-1">
                        <div class="row no-gutters">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />
                                    <i class="bnc-ico lni lni-search-alt"></i>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico" placeholder="Location or Zip Code" />
                                    <i class="bnc-ico lni lni-target"></i>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Searchbar Banner ======================== -->

    <!-- ============================ Job Details Start ================================== -->
    <section class="bg-light py-5 position-relative">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                    <div class="bg-white rounded px-3 py-4 mb-4">
                        <div class="jbd-01 d-flex align-items-center justify-content-between">
                            <div class="jbd-flex d-flex align-items-center justify-content-start">
                                <div class="jbd-01-thumb">
                                    <img src="assets/img/c-1.png" class="img-fluid" width="90" alt="" />
                                </div>
                                <div class="jbd-01-caption pl-3">
                                    <div class="tbd-title"><h4 class="mb-0 ft-medium fs-md">{{ $job->title }}</h4></div>
                                    <div class="jbl_location mb-3"><span><i class="lni lni-map-marker mr-1"></i>{{ucwords( strtolower($job->state->name))}}, Nigeria</span><span class="medium ft-medium text-warning ml-3">{{ $job->workType->name}}</span></div>
                                    <div class="jbl_info01">
                                        <span class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2">Magento</span>
                                        <span class="px-2 py-1 ft-medium medium rounded text-danger bg-light-danger mr-2">WordPress</span>
                                        <span class="px-2 py-1 ft-medium medium rounded text-purple bg-light-purple">Laravel</span>
                                    </div>
                                </div>
                            </div>
                            <div class="jbd-01-right text-right hide-1023">
                                <div class="jbl_button mb-2"><button type="button" onclick="event.preventDefault();
                                        document.getElementById('job-application-form').submit();" class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Apply This Job</button></div>
{{--                                <div class="jbl_button"><a href="javascript:void(0);" class="btn rounded bg-white border fs-sm ft-medium">View Company</a></div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-3 py-4">
                            <h5 class="ft-medium fs-md">Job description</h5>
                            <div class="jbd-details mb-4">

                                {!! $job->job_summary !!}
                            </div>


                            <div class="jbd-details mb-1">
                                <h5 class="ft-medium fs-md">Key Skills</h5>
                                <ul class="p-0 skills_tag text-left">
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">MS SQL</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">SQL Development</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Dynamod</span></li>
                                    <li><span class="px-2 py-1 medium skill-bg rounded text-dark">Database</span></li>
                                </ul>
                            </div>

                        </div>

                        <div class="jbd-02 px-3 py-3 br-top">
                            <div class="jbd-02-flex d-flex align-items-center justify-content-between">
                                <div class="jbd-02-social">
                                    <ul class="jbd-social">
                                        <li><i class="ti-sharethis"></i></li>
                                        <li><a href="javascript:void(0);"><i class="ti-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="jbd-02-aply">
                                    <div class="jbl_button mb-2">
{{--                                        <a href="#" class="btn btn-md rounded gray fs-sm ft-medium mr-2">Save This Job</a>--}}
                                        <button type="button"
                                           onclick="event.preventDefault();
                                        document.getElementById('job-application-form').submit();" class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Apply Job</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="jb-apply-form bg-white rounded py-3 px-4 box-static">
                        <h4 class="ft-medium fs-md mb-3">Intrested in this job?</h4>

                        <form  id="job-application-form" class="_apply_form_form" action="" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="text-dark mb-1 ft-medium medium">Cover Letter(Optional)</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Write a cover to personalise the job application"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-dark mb-1 ft-medium medium">Upload Resume:<font>pdf, doc, docx</font></label>
                                <div class="custom-file">
                                    <input type="file" name="resume" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="terms_con">
                                    <input id="aa3" name="policy" class="checkbox-custom" name="Coffee" type="checkbox">
                                    <label for="aa3" class="checkbox-custom-label">I agree to pirvacy policy</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md rounded theme-bg text-light ft-medium fs-sm full-width">Apply For This Job</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Job Details End ================================== -->

    <!-- ======================= Related Jobs ======================== -->
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Related Jobs</h6>
                        <h2 class="ft-bold">All Related Listed jobs</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-1.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-2.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-3.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="job_grid border rounded ">
                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                        <div class="position-absolute ab-right"><span class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>
                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-4.png" class="img-fluid" width="70" alt="" /></a>
                        </div>
                        <div class="job_grid_caption text-center pb-5 px-3">
                            <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html" class="text-muted medium">Google Inc</a></h6>
                            <h4 class="mb-0 ft-medium medium"><a href="job-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>
                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>
                        </div>
                        <div class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-wallet mr-1"></i>$50k - $80k PA.</div>
                            <div class="df-1 text-muted"><i class="lni lni-timer mr-1"></i>3 days ago</div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
    </section>
    <!-- ======================= Related Jobs ======================== -->


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
