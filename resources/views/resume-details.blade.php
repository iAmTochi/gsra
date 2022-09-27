@extends('layouts.home')

@section('content')

<!-- ======================= Top Breadcrubms ======================== -->
<div class="bg-light py-5">
    <div class="ht-30"></div>
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Candidate Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Candidates</a></li>
                        <li class="breadcrumb-item active theme-cl" aria-current="page">Candidates Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="ht-30"></div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Dashboard Detail ======================== -->
<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
                <div class="d-block border rounded mfliud-bot mb-4">
                    <div class="cdt_author px-2 pt-5 pb-4">
                        <div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
                            <img src="assets/img/team-1.jpg" class="img-fluid circle" width="100" alt="" />
                        </div>
                        <div class="dash_caption mb-3">
                            <h4 class="fs-lg ft-medium mb-0 lh-1">{{ $resume->applicant->user->fullName()  }}</h4>
                            <p class="m-0 p-0">{{ $resume->title }}</p>
                            <span class="text-muted smalls"><i class="lni lni-map-marker mr-1"></i>{{ $resume->applicant->user->location() }}</span>
                        </div>
                        <div class="jb-list-01-title px-2">
                            @php  $i = 1; @endphp
                            @foreach($resume->skills as $skill)
                                @if($i == 1)

                                    <span class="px-2 mb-2 d-inline-flex py-1 rounded text-purple bg-light-purple">{{ $skill->name }}</span>

                                @elseif($i == 2)

                                    <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">{{ $skill->name }}</span>


                                @elseif($i == 3)

                                    <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">{{ $skill->name }}</span>


                                @else

                                    <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-info bg-light-info">{{ $skill->name }}</span>

                                @endif

                                @php  $i++ @endphp

                            @endforeach


                        </div>
                    </div>

                    <div class="cdt_caps">
                        <div class="job_grid_footer pb-3 px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-briefcase mr-1"></i>Full Time</div>
                            <div class="df-1 text-muted"><i class="lni lni-laptop-phone mr-1"></i>{{ $resume->title }}</div>
                        </div>
                        <div class="job_grid_footer px-3 d-flex align-items-center justify-content-between">
                            <div class="df-1 text-muted"><i class="lni lni-envelope mr-1"></i>{{ $resume->applicant->user->email }}</div>
                            <div class="df-1 text-muted"><i class="lni lni-graduation mr-1"></i>3 Year Exp.</div>
                        </div>
                    </div>

                    <div class="cdt_caps py-5 px-3">
                        <a href="{{ asset('storage/'.$resume->doc) }}" class="btn btn-md theme-bg text-light rounded full-width">Download Resume</a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-8 col-xl-8">

                <!-- row -->
                <div class="row align-items-start">

                    <!-- About -->
                    <div class="abt-cdt d-block full-width mb-4">
                        <h4 class="ft-medium mb-1 fs-md">About {{ $resume->applicant->user->fullName() }}</h4>
                        <p>{!! $resume->about_me !!}</p>

                    </div>



                    <!-- Qualification -->
                    <div class="abt-cdt d-block full-width mb-4">
                        <h4 class="ft-medium mb-1 fs-md">Qualification</h4>
                        <div class="exslio-list mt-3">
                            <ul>
                                @foreach($resume->educations as $education)
                                <li>
                                    <div class="esclio-110 bg-light rounded px-3 py-3">
                                        <h4 class="mb-0 ft-medium fs-md">{{ $education->institution }}</h4>
                                        <div class="esclio-110-info full-width mb-2">
                                            <span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>{{ $education->qualification }}</span>
                                            <span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>{{ $education->graduated_at->isoFormat('YYYY ') }}</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>

                    <!-- Experience -->
                    <div class="abt-cdt d-block full-width mb-4">
                        <h4 class="ft-medium mb-1 fs-md">Experience</h4>
                        <div class="exslio-list mt-3">
                            <ul>

                                @foreach($resume->experiences as $experience)
                                <li>
                                    <div class="esclio-110 bg-light rounded px-3 py-3">
                                        <h4 class="mb-0 ft-medium fs-md">{{ $experience->employer }}</h4>
                                        <div class="esclio-110-info full-width mb-2">
                                            <span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i>{{ $experience->location }}</span>
                                            <span class="text-muted mr-2"><i class="lni lni-laptop-phone mr-1"></i>{{ $experience->job_title  }}</span>
                                            <span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>{{ $experience->started_at->isoFormat('YYYY ')  }} - {{ $experience->resigned_at?->isoFormat('YYYY ') }}</span>
                                        </div>
                                        <div class="esclio-110-decs full-width">
                                            <p>
                                                {!! $experience->responsibilities !!}

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="abt-cdt d-block full-width">
                        <h4 class="ft-medium mb-1 fs-md">Skills</h4>
                        <ul class="p-0 skills_tag text-left">
                            @foreach($resume->skills as $skill)
                            <li><span class="px-2 py-1 medium skill-bg rounded text-dark">{{ $skill->name }}</span></li>
                            @endforeach

                        </ul>
                    </div>

                </div>
                <!-- row -->

            </div>

        </div>
    </div>
</section>
<!-- ======================= Dashboard Detail End ======================== -->



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
