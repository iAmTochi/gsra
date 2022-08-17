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

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="text-center mb-5 p-2">
                        <a class="nav-brand" href="{{ route('home') }}">
                            <img src="assets/img/logo.png" class="logo" alt="" />
                        </a>
                    </div>
                    <form class="border p-3 rounded" method="POST" action="{{ route('login') }}">
                        @if (session()->has('status'))
                            <div class="mb-4 font-medium theme-cl text-sm text-green-600">
                                {{ __('Login with your new password') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" value="{{ old('email') }}" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email *">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" placeholder="Password*">
{{--                            <span role="alert" class="invalid-feedback">--}}
{{--                                <strong>{{$errors->first('first_name')}}</strong>--}}
{{--                            </span>--}}
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="{{ route('password.request') }}" class="theme-cl">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                        </div>
                        <div class="form-group text-center mb-0">
                            <p class="extra">Not a member?<a href="{{ route('register') }}" class="text-dark"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->

    <!-- ======================= Newsletter Start ============================ -->
    <section class="space bg-cover" style="background:#03343b url({{ asset('assets/img/landing-bg.png') }}) no-repeat;">
        <div class="container py-5">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-light mb-0">Subscribr Now</h6>
                        <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                    <form class="bg-white rounded p-1">
                        <div class="row no-gutters">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control lg left-ico" placeholder="Enter Your Email Address">
                                    <i class="bnc-ico lni lni-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width custom-height-lg theme-bg text-light fs-md" type="button">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="light-footer skin-light-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer_widget">
                            <img src="assets/img/logo.png" class="img-footer small mb-2" alt="" />

                            <div class="address mt-2">
                                3298 Grant Street Longview, New Texox<br>United Kingdom 75601
                            </div>
                            <div class="address mt-3">
                                1-202-555-0106<br>support@workplex.com
                            </div>
                            <div class="address mt-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">For Employers</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Explore Candidates</a></li>
                                <li><a href="#">Job Pricing</a></li>
                                <li><a href="#">Submit Job</a></li>
                                <li><a href="#">Shortlisted</a></li>
                                <li><a href="#">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">For Candidates</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Explore All Jobs</a></li>
                                <li><a href="#">Browse Categories</a></li>
                                <li><a href="#">Saved Jobs</a></li>
                                <li><a href="#">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">About Company</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Who We'r?</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Packages</a></li>
                                <li><a href="#">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Helpful Topics</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ's Page</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom br-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© 2022 Workplex. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-headers">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ti-close"></span>
                    </button>
                </div>

                <div class="modal-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="m-0 ft-regular">Login</h2>
                    </div>

                    <form>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="Username*">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password*">
                        </div>

                        <div class="form-group">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-1">
                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                    <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                </div>
                                <div class="eltio_k2">
                                    <a href="#" class="theme-cl">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                        </div>

                        <div class="form-group text-center mb-0">
                            <p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark"> Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


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
