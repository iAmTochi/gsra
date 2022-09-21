@extends('layouts.admin')

@section('content')

    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Add Your Resume</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">Add Resume</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form action="{{ route('applicant.resume.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Create Resume</h4>
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
                                                <label class="text-dark ft-medium">Your Name</label>
                                                <input type="text" name="user_id" class="form-control rounded" value="{{ auth()->user()->authFullName() }}" placeholder="Full Name" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Professional Title</label>
                                                <input type="text" name="title" class="form-control rounded" placeholder="e.g. Web Designer">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Job category</label>
                                                <select name="job_function_id" class="form-control rounded">
                                                    <option>Choose your job category</option>
                                                    @foreach($jobFunctions as $jobFunction)
                                                        <option value="{{ $jobFunction->id }}" >{{ $jobFunction->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Email</label>
                                                <input type="email" name="email" class="form-control rounded" value="{{ auth()->user()->email }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Resume Summary</label>
                                                <textarea class="form-control with-light" name="resume_summary" placeholder="Resume Summary"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Education -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Education Details</h4>
                            </div>
                        </div>
                        <div class="_dashboard_content_body py-3 px-3">
                            <div class="row">
                                <div class="education col-12 row mx-0">
                                    <div class="col-xl-12 col-lg-12 education-field">
                                        <div class="gray rounded p-3 mb-3 position-relative">
                                            <button class="aps-clone delete-education"><i class="fas fa-times"></i></button>
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">School Name</label>
                                                <input type="text" name="school[]" class="form-control rounded" placeholder="School Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Qualification</label>
                                                <input type="text" name="qualification[]" class="form-control rounded" placeholder="Qualification Title">
                                            </div>
                                            <div class="form-row">
                                                <!--<div class="col-6">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">Start Date</label>
                                                        <input type="date" name="_date[]" class="form-control rounded" placeholder="dd-mm-yyyy">
                                                    </div>
                                                </div> -->
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">End Date</label>
                                                        <input type="date" name="school_end_date[]" class="form-control rounded" placeholder="dd-mm-yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                           <!-- <div class="form-group">
                                                <label class="text-dark ft-medium">Note</label>
                                                <textarea class="form-control ht-80" placeholder="Note Optional"></textarea>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group ml-3">
                                        <button type="button" class="btn gray ft-medium apply-btn fs-sm rounded add-education"><i class="fas fa-plus mr-1"></i>Add Education</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Experience -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Experience Details</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <dive class="row">
                                <div class="experience row col-xl-12 col-lg-12 mx-0">
                                <div class="experience-field col-xl-12 col-lg-12">
                                    <div class="gray rounded p-3 mb-3 position-relative">
                                        <button class="aps-clone delete-experience"><i class="fas fa-times"></i></button>
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Employer</label>
                                            <input type="text" name="employer[]" class="form-control rounded" placeholder="Employer Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Job Title</label>
                                            <input type="text" name="job_title[]" class="form-control rounded" placeholder="Designation Title">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">Start Date</label>
                                                    <input type="date" name="job_start_date[]" class="form-control rounded" placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="text-dark ft-medium">End Date</label>
                                                    <input type="date" name="job_end_date[]" class="form-control rounded" placeholder="dd-mm-yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Note</label>
                                            <textarea name="[]" class="form-control ht-80" placeholder="Note Optional"></textarea>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 ml-3">
                                    <div class="form-group">
                                        <button type="button" class="btn gray ft-medium apply-btn fs-sm rounded add-experience"><i class="fas fa-plus mr-1"></i>Add Experience</button>
                                    </div>
                                </div>

                            </dive>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Skills -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Skills Details</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <div class="row ">
                                <div class="skill col-12 row mx-0">
                                    <div class="col-xl-12 col-lg-12 skill-field">
                                        <div class="gray rounded p-3 mb-3 position-relative">
                                            <button class="aps-clone delete"><i class="fas fa-times"></i></button>
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Skills Name</label>
                                                <input type="text" name="skill_name[]" class="form-control rounded" placeholder="Skills Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group ml-3">
                                        <button type="button" class="btn gray ft-medium apply-btn fs-sm rounded add-skill"><i class="fas fa-plus mr-1"></i>Add Skills</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- submit -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save & Preview</button>
                </div>
            </div>

        </div>
        </form>

        <!-- footer -->
        @include('partial._admin_foot')

    </div>
@endsection


@section('scripts')

    <script>


        /**
         * Add Education
         */
        //Clone the hidden element and shows it
        $('.add-education').click(function(){
            $('.education-field').first().clone().appendTo('.education').show();
            removeEducationField();
        });

        //Attach functionality to delete buttons
        function removeEducationField(){
            $('.delete-education').off();
            $('.delete-education').click(function(){
                console.log("click");
                $(this).closest('.education-field').remove();
            });
        }

        /**
         * Add Experience
         */
        //Clone the hidden element and shows it
        $('.add-experience').click(function(){
            $('.experience-field').first().clone().appendTo('.experience').show();
            removeExperienceField();
        });

        //Attach functionality to delete buttons
        function removeExperienceField(){
            $('.delete-experience').off();
            $('.delete-experience').click(function(){
                console.log("click");
                $(this).closest('.experience-field').remove();
            });
        }


        /**
         * Add Skills
         */
        //Clone the hidden element and shows it
        $('.add-skill').click(function(){
            $('.skill-field').first().clone().appendTo('.skill').show();
            attach_delete();
        });

        //Attach functionality to delete buttons
        function attach_delete(){
            $('.delete').off();
            $('.delete').click(function(){
                console.log("click");
                $(this).closest('.skill-field').remove();
            });
        }

    </script>




    <script>
        /**
         * Deprecated
         */
        //Clone the hidden element and shows it
        // $('.add-one').click(function(){
        //     $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
        //     attach_delete();
        // });
        //

        //Attach functionality to delete buttons
        // function attach_delete(){
        //     $('.delete').off();
        //     $('.delete').click(function(){
        //         console.log("click");
               // $(this).closest('.form-group').remove();
            // });
        // }
    </script>
@endsection
