<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partial._head')

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
    <!-- Start Navigation -->

    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->



@yield('content')


<!-- ============================ Footer Start ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="light-footer skin-light-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer_widget">
                            <img src="{{ asset('assets/img/logo.png') }}" class="img-footer small mb-2" alt="" />

                            <div class="address mt-2">

                                Block 26, Plot 12, Admiralty Way, <br>Lekki Phase 1, Lagos, Nigeria

                            </div>
                            <div class="address mt-3">
                                07039292227<br>
                                07049214930<br>
                                08116047012<br>
                                <br>

                                support@gsrajobs.com<br>
                                gsrarecruit@gmail.com<br>
                                jobsglobalrecruitment21@gmail.com
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
                                <li><a href="#">Submit Job</a></li>
                                <li><a href="#">Shortlisted</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">For Candidates</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Explore All Jobs</a></li>
                                <li><a href="#">Browse Categories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">About Company</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Who We're?</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Our team</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Helpful Topics</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ's</a></li>
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
                        <p class="mb-0">© {{ date('Y') }} Global Skill Recruitment Agency Limited. <!-- Designd By <a href="https://themezhub.com/">ThemezHub</a>.--> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->



    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

@include('partial._foot')

