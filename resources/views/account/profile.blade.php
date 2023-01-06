@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">My Profile</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">My Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">
                            <div class="_dashboard_content_header br-bottom py-3 px-3">
                                <div class="_dashboard__header_flex">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My Account</h4>
                                </div>
                            </div>

                            <div class="_dashboard_content_body py-3 px-3">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                        <div class="custom-file avater_uploads">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
                                        </div>
                                    </div>

                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Full Name</label>
                                                    <input type="text" class="form-control rounded" value="{{ auth()->user()->fullName() }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Job Title</label>
                                                    <input type="text" class="form-control rounded" readonly value="{{ auth()->user()->applicant->resume?->title }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Phone</label>
                                                    <input type="text" class="form-control rounded" value="{{ auth()->user()->applicant?->phone }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Email</label>
                                                    <input type="email" class="form-control rounded" value="{{auth()->user()->email}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">About Info</label>
                                                    <textarea class="form-control with-light" readonly>{{ auth()->user()->applicant?->resume?->about_me }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="ti-facebook mr-1 theme-cl fs-sm"></i>Social Accounts</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Facebook</label>
                                        <input type="text" class="form-control rounded" placeholder="https://www.facebook.com/" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Twitter</label>
                                        <input type="text" class="form-control rounded" placeholder="https://www.twitter.com/" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">LinkedIn</label>
                                        <input type="text" class="form-control rounded" placeholder="https://www.linkedin.com/" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">GooglePlus</label>
                                        <input type="text" class="form-control rounded" placeholder="https://www.gplus.com/" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <a href="{{ route('profile.edit') }}" class="btn btn-md ft-medium text-light rounded theme-bg">Edit Profile</a>
                                    </div>
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







