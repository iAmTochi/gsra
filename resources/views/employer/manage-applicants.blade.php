@extends('layouts.admin')

@section('content')

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">{{ $jobTitle }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Jobs</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">{{ $jobTitle }} Applicants</a></li>
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
                                    <h6 class="mb-0 ft-medium fs-sm"> {{ $applications->count() }} Applicant{{ $applications->count()>1?'s':'' }} Found</h6>
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

                        @foreach($applications as $application)
                        <!-- Single List -->
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater"><img src="{{ asset('') }}assets/img/t-3.png" class="img-fluid circle" width="70" alt="" /></div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">{{ $application->applicant->user->fullName() }}</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i class="lni lni-map-marker mr-1"></i>{{ $application->applicant->user->location() }}</span>
                                                <span class="ml-2"><i class="lni lni-briefcase mr-1"></i>{{ $application->applicant->resume->title }}</span>
                                            </div>
                                            <div class="ico-content">

                                                <ul>
                                                    <li><a href="{{ asset('storage/'.$application->doc) }}" target="_blank" class="px-2 py-1 medium bg-light-success rounded text-success"><i class="lni lni-download mr-1"></i>Download CV</a></li>
{{--                                                    <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>--}}
                                                    <li><a href="{{ route('send-message', $application->applicant->user->id) }}" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>More Info</a>
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
                                        <li><span><i class="lni lni-calendar mr-1"></i>{{ $application->created_at->diffForHumans() }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>

        </div>

        <!-- footer -->
        @include('partial._admin_foot')

    </div>

@endsection
