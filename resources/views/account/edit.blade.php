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
                            <li class="breadcrumb-item text-muted"><a href="#">Profile</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Update My Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <form action="{{ route('profile.update') }}" method="POST">
                @method('put')
                @csrf
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
                                                    <label class="text-dark ft-medium">First Name</label>
                                                    <input type="text" name="first_name" class="form-control rounded" value="{{ auth()->user()->firstName() }}" >
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control rounded" value="{{ auth()->user()->LastName() }}" >
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Title</label>
                                                    <input type="text" class="form-control rounded" name="title" value="{{ auth()->user()->applicant->resume?->title }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Phone</label>
                                                    <input type="text" class="form-control rounded" name="phone" value="{{ auth()->user()->applicant?->phone }}" >
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Email</label>
                                                    <input type="email" class="form-control rounded" value="{{auth()->user()->email}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">About Me</label>
                                                    <textarea name="about_me" class="form-control with-light">{{ auth()->user()->applicant?->resume->about_me }}</textarea>
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
                                            <label class="text-dark ft-medium">LinkedIn</label>
                                            <input type="text" name="linkedin" class="form-control rounded" placeholder="https://www.linkedin.com/" >
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Twitter</label>
                                            <input type="text" name="twitter" class="form-control rounded" placeholder="https://www.twitter.com/" >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Update Profile</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

        <!-- footer -->
        @include('partial._admin_foot')

    </div>


@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/36sx8xuffx9sspexlaoh2wizbah5jr2o3ph5dffp7iyd8mtq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


@endsection
@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>

@endsection







