@extends('layouts.home')

@section('content')


    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-title py-5" data-overlay="5">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1 class="ft-medium">Browse Jobs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-light">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="text-light">Find Job</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">Browse Jobs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="ht-30"></div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ============================ Main Section Start ================================== -->
    <section class="bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="bg-white rounded">

                        <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                            <h4 class="ft-medium fs-lg mb-0">Search Filter</h4>
                            <div class="ssh-header">
                                <a href="javascript:void(0);" class="clear_all ft-medium text-muted">Clear All</a>
                                <a href="#search_open" data-toggle="collapse" aria-expanded="false" role="button" class="collapsed _filter-ico ml-2"><i class="lni lni-text-align-right"></i></a>
                            </div>
                        </div>

                        <!-- Find New Property -->
                        <div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">

                            <div class="search-inner">

                                <div class="filter-search-box px-4 pt-3 pb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search by keywords...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Location, Zip..">
                                    </div>
                                </div>

                                <div class="filter_wraps">

                                    <!-- Job categories Search -->
{{--                                    <div class="single_search_boxed px-4 pt-0 br-bottom">--}}
{{--                                        <div class="widget-boxed-header">--}}
{{--                                            <h4>--}}
{{--                                                <a href="#categories" class="ft-medium fs-md pb-0" data-toggle="collapse" aria-expanded="true" role="button">Job Categories</a>--}}
{{--                                            </h4>--}}

{{--                                        </div>--}}
{{--                                        <div class="widget-boxed-body collapse show" id="categories" data-parent="#categories">--}}
{{--                                            <div class="side-list no-border">--}}
{{--                                                <!-- Single Filter Card -->--}}
{{--                                                <div class="single_filter_card">--}}
{{--                                                    <div class="card-body p-0">--}}
{{--                                                        <div class="inner_widget_link">--}}
{{--                                                            <ul class="no-ul-list filter-list">--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="a1" class="checkbox-custom" name="ADA" type="checkbox" checked="">--}}
{{--                                                                    <label for="a1" class="checkbox-custom-label">IT Computers (62)</label>--}}
{{--                                                                    <ul class="no-ul-list filter-list">--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="aa1" class="checkbox-custom" name="ADA" type="checkbox">--}}
{{--                                                                            <label for="aa1" class="checkbox-custom-label">Web Design (31)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="aa2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                            <label for="aa2" class="checkbox-custom-label">Web development (20)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="aa3" class="checkbox-custom" name="Coffee" type="checkbox">--}}
{{--                                                                            <label for="aa3" class="checkbox-custom-label">SEO Services (43)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="a2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                    <label for="a2" class="checkbox-custom-label">Financial Service (16)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="a3" class="checkbox-custom" name="Coffee" type="checkbox">--}}
{{--                                                                    <label for="a3" class="checkbox-custom-label">Art, Design, Media (22)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="a4" class="checkbox-custom" name="Mother" type="checkbox">--}}
{{--                                                                    <label for="a4" class="checkbox-custom-label">Coach & Education (21)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="a5" class="checkbox-custom" name="Outdoor" type="checkbox">--}}
{{--                                                                    <label for="a5" class="checkbox-custom-label">Apps Developements (17)</label>--}}
{{--                                                                    <ul class="no-ul-list filter-list">--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ab1" class="checkbox-custom" name="ADA" type="checkbox">--}}
{{--                                                                            <label for="ab1" class="checkbox-custom-label">IOS Development (12)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ab2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                            <label for="ab2" class="checkbox-custom-label">Android Development (04)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="a6" class="checkbox-custom" name="Pet" type="checkbox">--}}
{{--                                                                    <label for="a6" class="checkbox-custom-label">Writing & Translation (04)</label>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <!-- Job Locations Search -->--}}
{{--                                    <div class="single_search_boxed px-4 pt-0 br-bottom">--}}
{{--                                        <div class="widget-boxed-header">--}}
{{--                                            <h4>--}}
{{--                                                <a href="#locations" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Locations</a>--}}
{{--                                            </h4>--}}

{{--                                        </div>--}}
{{--                                        <div class="widget-boxed-body collapse" id="locations" data-parent="#locations">--}}
{{--                                            <div class="side-list no-border">--}}
{{--                                                <!-- Single Filter Card -->--}}
{{--                                                <div class="single_filter_card">--}}
{{--                                                    <div class="card-body p-0">--}}
{{--                                                        <div class="inner_widget_link">--}}
{{--                                                            <ul class="no-ul-list filter-list">--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="b1" class="checkbox-custom" name="ADA" type="checkbox" checked="">--}}
{{--                                                                    <label for="b1" class="checkbox-custom-label">Australia (21)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="b2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                    <label for="b2" class="checkbox-custom-label">New Zeland (12)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="b3" class="checkbox-custom" name="Coffee" type="checkbox">--}}
{{--                                                                    <label for="b3" class="checkbox-custom-label">United Kingdom (21)</label>--}}
{{--                                                                    <ul class="no-ul-list filter-list">--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ac1" class="checkbox-custom" name="ADA" type="checkbox">--}}
{{--                                                                            <label for="ac1" class="checkbox-custom-label">London (06)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ac2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                            <label for="ac2" class="checkbox-custom-label">Manchester (07)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ac3" class="checkbox-custom" name="Coffee" type="checkbox">--}}
{{--                                                                            <label for="ac3" class="checkbox-custom-label">Birmingham (08)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="b4" class="checkbox-custom" name="Mother" type="checkbox">--}}
{{--                                                                    <label for="b4" class="checkbox-custom-label">United State (04)</label>--}}
{{--                                                                    <ul class="no-ul-list filter-list">--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ad1" class="checkbox-custom" name="ADA" type="checkbox">--}}
{{--                                                                            <label for="ad1" class="checkbox-custom-label">New York (32)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ad2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                            <label for="ad2" class="checkbox-custom-label">Washington (42)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li>--}}
{{--                                                                            <input id="ad3" class="checkbox-custom" name="Coffee" type="checkbox">--}}
{{--                                                                            <label for="ad3" class="checkbox-custom-label">Los Angeles (22)</label>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="b5" class="checkbox-custom" name="Outdoor" type="checkbox">--}}
{{--                                                                    <label for="b5" class="checkbox-custom-label">India (15)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="b6" class="checkbox-custom" name="Pet" type="checkbox">--}}
{{--                                                                    <label for="b6" class="checkbox-custom-label">Singapore (09)</label>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <!-- Job Skills Search -->
{{--                                    <div class="single_search_boxed px-4 pt-0 br-bottom">--}}
{{--                                        <div class="widget-boxed-header">--}}
{{--                                            <h4>--}}
{{--                                                <a href="#skills" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Skills</a>--}}
{{--                                            </h4>--}}

{{--                                        </div>--}}
{{--                                        <div class="widget-boxed-body collapse" id="skills" data-parent="#skills">--}}
{{--                                            <div class="side-list no-border">--}}
{{--                                                <!-- Single Filter Card -->--}}
{{--                                                <div class="single_filter_card">--}}
{{--                                                    <div class="card-body p-0">--}}
{{--                                                        <div class="inner_widget_link">--}}
{{--                                                            <ul class="no-ul-list filter-list">--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c1" class="checkbox-custom" name="ADA" type="checkbox" checked="">--}}
{{--                                                                    <label for="c1" class="checkbox-custom-label">Administrative (15)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c2" class="checkbox-custom" name="Parking" type="checkbox">--}}
{{--                                                                    <label for="c2" class="checkbox-custom-label">iPhone & Android (33)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c3" class="checkbox-custom" name="Coffee" type="checkbox">--}}
{{--                                                                    <label for="c3" class="checkbox-custom-label">Java & AJAX (32)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c4" class="checkbox-custom" name="Mother" type="checkbox">--}}
{{--                                                                    <label for="c4" class="checkbox-custom-label">Account Manager (21)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c5" class="checkbox-custom" name="Outdoor" type="checkbox">--}}
{{--                                                                    <label for="c5" class="checkbox-custom-label">WordPress (32)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c6" class="checkbox-custom" name="Pet" type="checkbox">--}}
{{--                                                                    <label for="c6" class="checkbox-custom-label">Magento (42)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c7" class="checkbox-custom" name="Beauty" type="checkbox">--}}
{{--                                                                    <label for="c7" class="checkbox-custom-label">Shopify (12)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c8" class="checkbox-custom" name="Bike" type="checkbox">--}}
{{--                                                                    <label for="c8" class="checkbox-custom-label">PHP Script (08)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c9" class="checkbox-custom" name="Phone" type="checkbox">--}}
{{--                                                                    <label for="c9" class="checkbox-custom-label">Drupal (32)</label>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <input id="c11" class="checkbox-custom" name="Private" type="checkbox">--}}
{{--                                                                    <label for="c11" class="checkbox-custom-label">Joomla (50)</label>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <!-- Experience Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#experience" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Experience</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="experience" data-parent="#experience">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @foreach($experiences as $experience)
                                                                <li>
                                                                    <input id="d{{ $experience->id }}" class="checkbox-custom" name="experience" type="checkbox" >
                                                                    <label for="d{{ $experience->id }}" class="checkbox-custom-label">{{ $experience->year }}</label>
                                                                </li>
                                                                @endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job types Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#jbtypes" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Type</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="jbtypes" data-parent="#jbtypes">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @foreach($workTypes as $workType)
                                                                <li>
                                                                    <input id="e{{$workType->id}}" class="radio-custom" name="jtype" type="radio">
                                                                    <label for="e{{$workType->id}}" class="radio-custom-label">{{ $workType->name }}</label>
                                                                </li>
                                                                @endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Job Level Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#jblevel" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Job Level</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="jblevel" data-parent="#jblevel">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @foreach($jobLevels as $jobLevel)
                                                                <li>
                                                                    <input id="f{{ $jobLevel->id }}" class="checkbox-custom" name="job_level" type="checkbox" {{ $jobLevel->id == 1?"checked":'' }}>
                                                                    <label for="f{{ $jobLevel->id }}" class="checkbox-custom-label">{{ $jobLevel->name }}</label>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Expected Salary Search -->
                                    <div class="single_search_boxed px-4 pt-0">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#salary" data-toggle="collapse" aria-expanded="false" role="button" class="ft-medium fs-md pb-0 collapsed">Expected Salary</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse" id="salary" data-parent="#salary">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @foreach($salaries as $salary)
                                                                <li>
                                                                    <input id="g{{$salary->id}}" class="checkbox-custom" name="ADA" type="checkbox">
                                                                    <label for="g{{$salary->id}}" class="checkbox-custom-label">{{$salary->range}} per month</label>
                                                                </li>
                                                                @endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group filter_button pt-2 pb-4 px-4">
                                    <button type="submit" class="btn btn-md theme-bg text-light rounded full-width">22 Results Show</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->

                </div>

                <!-- Item Wrap Start -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">{{ $jobs->count() }} New Jobs Found</h6>
                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                    <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
{{--                                        <div class="single_fitres mr-2 br-right">--}}
{{--                                            <select class="custom-select simple">--}}
{{--                                                <option value="1" selected="">Default Sorting</option>--}}
{{--                                                <option value="2">Recent jobs</option>--}}
{{--                                                <option value="3">Featured jobs</option>--}}
{{--                                                <option value="4">Trending Jobs</option>--}}
{{--                                                <option value="5">Premium jobs</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
                                        <div class="single_fitres">
                                            <a href="job-search-v3.html" class="simple-button mr-1"><i class="ti-layout-grid2"></i></a>
                                            <a href="job-list-v3.html" class="simple-button active theme-cl"><i class="ti-view-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All jobs -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            @forelse($jobs as $job)
                            <!-- Single job -->
                            <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                <div class="jb-list01">
                                    <div class="jb-list-01-title"><h5 class="ft-medium mb-1"><a href="{{ route('home.jobs.detail', $job->id) }}">{{ $job->title }}</a></h5></div>
                                    <div class="jb-list-01-info d-block mb-3">
                                        <span class="text-muted mr-2"><i class="lni lni-map-marker mr-1 "></i>{{ucwords( strtolower($job->state->name))}}, Nigeria</span>
                                        <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>{{ $job->workType->name }}</span>
{{--                                        <span class="text-muted mr-2"><i class="lni lni-star-filled mr-1"></i>Urgent</span>--}}
                                        <span class="text-muted mr-2"><i class="lni lni-money-protection mr-1"></i>{{$job->currency->symbol.$job->salary->range}}</span>
                                    </div>
                                    <div class="jb-list-01-title">
                                        <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
                                        <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
                                        <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
                                        <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-info bg-light-info">CSS3</span>
                                        <span class="px-2 mb-2 d-inline-flex py-1 rounded text-purple bg-light-purple">HTML5</span>
                                    </div>
                                </div>
                            </div>
                            @empty
                                    <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                        <div class="jb-list01">
                                            <div class="jb-list-01-title"><h5 class="ft-medium mb-1"><a href="job-detail.html">No Job post yet!</a></h5></div>
                                        </div>
                                    </div>

                            @endforelse



                        </div>
                    </div>

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                        <span class="fas fa-arrow-circle-right"></span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                <li class="page-item active"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">...</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">18</a></li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                                        <span class="fas fa-arrow-circle-right"></span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Main Section End ================================== -->


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
