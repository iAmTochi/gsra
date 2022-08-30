@extends('layouts.admin')

@section('content')

	<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Post A New Job</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Post Job</a></li>
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Post Job</h4>
										</div>
									</div>

									<div class="_dashboard_content_body py-3 px-3">
										<form class="row" action="{{ route('jobs.store') }}" method="post">
											@csrf
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="row">

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Title</label>
															<input type="text" class="form-control rounded" placeholder="Title">
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Description</label>
															<textarea class="form-control rounded" placeholder="Job Description"></textarea>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Functions</label>
															<select class="form-control rounded">
																@foreach($jobFunctions as $jobFunction)
																	<option value="{{ $jobFunction->id }}" >{{ $jobFunction->name }}</option>
																@endforeach

															</select>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Industry</label>
															<select class="form-control rounded">
																@foreach($industries as $industry)
																<option value="{{ $industry->id }}" >{{ $industry->name }}</option>
																@endforeach

															</select>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Type</label>
															<select class="form-control rounded">
																@foreach($workTypes as $workType)
																	<option value="{{ $workType->id }}" >{{ $workType->name }}</option>
																@endforeach

															</select>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Level</label>
															<select class="form-control rounded">
																@foreach($jobLevels as $jobLevel)
																	<option value="{{ $jobLevel->id }}" >{{ $jobLevel->name }}</option>
																@endforeach

															</select>
														</div>
													</div>



													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Experience</label>
															<select class="form-control rounded">
																@foreach($experiences as $experience)
																	<option>{{ $experience->year }}</option>
																@endforeach
															</select>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Minimum Qualification</label>
															<select class="form-control rounded">
																@foreach($qualifications as $qualification)
																	<option>{{ $qualification->name }}</option>
																@endforeach

															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Expected Monthly Salary(Gross)</label>
															<select class="form-control rounded">
																@foreach($salaries as $salary)
																	<option>{{ $salary->range }}</option>
																@endforeach

															</select>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Gender</label>
															<select class="form-control rounded">
																<option>Male</option>
																<option>Female</option>
																<option>Other</option>
															</select>
														</div>
													</div>

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Application Deadline</label>
															<input type="date" class="form-control rounded" placeholder="dd-mm-yyyy">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">State</label>
															<select class="form-control rounded">
																@foreach($states as $state)
																	<option>{{ $state->state_name }}</option>
																@endforeach

															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6">

													</div>










													<div class="col-12">
														<div class="form-group">
															<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Publish Job</button>
														</div>
													</div>

												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
							<div class="py-3">© 2022 Workplex. Designd By ThemezHub.</div>
						</div>
					</div>

				</div>


@endsection
