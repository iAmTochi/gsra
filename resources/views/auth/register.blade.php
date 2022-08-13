<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/live-workplex/workplex/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Aug 2022 17:49:58 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Workplex - Creative Job Board HTML Template</title>

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->



    <!-- ======================= Login Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-start justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mfliud">
                    <div class="text-center mb-5 p-2">
                        <a class="nav-brand" href="{{ route('home') }}">
                            <img src="assets/img/logo.png" class="logo" alt="" />
                        </a>
                    </div>
                    <form class="border p-3 rounded" method="{{ route('register') }}">

                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First Name *</label>
                                <input type="text" class="form-control" placeholder="First Name">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('first_name')}}</strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('first_name')}}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" class="form-control" placeholder="Username*">
                            <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('first_name')}}</strong>
                                </span>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Password *</label>
                                <input type="password" class="form-control" placeholder="Password*">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('first_name')}}</strong>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Confirm Password *</label>
                                <input type="password" class="form-control" placeholder="Confirm Password*">
                                <span role="alert" class="invalid-feedback">
                                        <strong>{{$errors->first('first_name')}}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <p>By registering your details, you agree with our Terms & Conditions, and Privacy and Cookie Policy.</p>
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="ddd" class="checkbox-custom" name="ddd" type="checkbox">
                                    <label for="ddd" class="checkbox-custom-label">Sign me up for the Newsletter!</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Create An Account</button>
                        </div>
                        <div class="form-group text-center mb-0">
                            <p class="extra">Have an Account?<a href="{{ route('login') }}" class="text-dark"> Login</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->




</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/slider-bg.js"></script>
<script src="assets/js/smoothproducts.js"></script>
<script src="assets/js/snackbar.min.js"></script>
<script src="assets/js/jQuery.style.switcher.js"></script>
<script src="assets/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

<!-- Mirrored from themezhub.net/live-workplex/workplex/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Aug 2022 17:49:58 GMT -->
</html>
