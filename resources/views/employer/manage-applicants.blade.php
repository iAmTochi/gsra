@extends('layouts.admin')

@section('content')

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Manage Jobs</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Jobs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="px-3 py-2 br-bottom br-top bg-white rounded mb-3">
                        <div class="flixors">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">07 New Applicants Found</h6>
                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                    <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                                        <div class="single_fitres mr-2">
                                            <select class="custom-select simple">
                                                <option value="1" selected="">Default Sorting</option>
                                                <option value="2">Short By Name</option>
                                                <option value="3">Short By Rating</option>
                                                <option value="4">Short By Trending</option>
                                                <option value="5">Shot By Recent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="data-responsive">

                        <!-- Single List -->
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater"><img src="{{ asset('') }}assets/img/t-3.png" class="img-fluid circle" width="70" alt="" /></div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">Sign Karan</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i class="lni lni-map-marker mr-1"></i>United States</span>
                                                <span class="ml-2"><i class="lni lni-briefcase mr-1"></i>Web Designer</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <a href="#" data-toggle="modal" data-target="#edit" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#note" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-add-files mr-1"></i>Note</a>
                                        <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashed-list-footer p-3 br-top">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ico-content">
                                    <ul>
                                        <li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
                                        <li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single List -->
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater"><img src="{{ asset('') }}assets/img/t-4.png" class="img-fluid circle" width="70" alt="" /></div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">Charles T. Gerena</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i class="lni lni-map-marker mr-1"></i>United States</span>
                                                <span class="ml-2"><i class="lni lni-briefcase mr-1"></i>UI/UX Designer</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <a href="#" data-toggle="modal" data-target="#edit" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#note" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-add-files mr-1"></i>Note</a>
                                        <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashed-list-footer p-3 br-top">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ico-content">
                                    <ul>
                                        <li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
                                        <li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single List -->
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater"><img src="{{ asset('') }}assets/img/t-1.png" class="img-fluid circle" width="70" alt="" /></div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">Julie D. Morales</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i class="lni lni-map-marker mr-1"></i>United States</span>
                                                <span class="ml-2"><i class="lni lni-briefcase mr-1"></i>Web Designer</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <a href="#" data-toggle="modal" data-target="#edit" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#note" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-add-files mr-1"></i>Note</a>
                                        <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashed-list-footer p-3 br-top">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ico-content">
                                    <ul>
                                        <li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
                                        <li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single List -->
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater"><img src="{{ asset('') }}assets/img/t-5.png" class="img-fluid circle" width="70" alt="" /></div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">Samantha D. Hebert</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i class="lni lni-map-marker mr-1"></i>United States</span>
                                                <span class="ml-2"><i class="lni lni-briefcase mr-1"></i>PHP Developer</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <a href="#" data-toggle="modal" data-target="#edit" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#note" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-add-files mr-1"></i>Note</a>
                                        <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashed-list-footer p-3 br-top">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ico-content">
                                    <ul>
                                        <li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
                                        <li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Single List -->
                        <div class="dashed-list-wrap bg-white rounded">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater"><img src="{{ asset('') }}assets/img/t-2.png" class="img-fluid circle" width="70" alt="" /></div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">Patricia B. North</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i class="lni lni-map-marker mr-1"></i>United States</span>
                                                <span class="ml-2"><i class="lni lni-briefcase mr-1"></i>IOS Developer</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li><a href="javascript:void(0);" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <a href="#" data-toggle="modal" data-target="#edit" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>Edit</a>
                                        <a href="#" data-toggle="modal" data-target="#note" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-add-files mr-1"></i>Note</a>
                                        <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashed-list-footer p-3 br-top">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ico-content">
                                    <ul>
                                        <li><span><i class="lni lni-calendar mr-1"></i>07 July 2017</span></li>
                                        <li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- footer -->
        @include('partial._admin_foot')

    </div>

@endsection