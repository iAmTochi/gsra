@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Testimonies</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">{{ $testimony?'Edit ':'Add '}} Testimony</a></li>
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
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>{{ $testimony?'Edit ':'Add '}} Testimony</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{  $testimony ? route('testimonies.update', $testimony->id) : route('testimonies.store') }}" method="post" enctype="multipart/form-data">
                                @csrf


                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Client Name</label>
                                                <input type="text" name="name" value="{{ old('name') ? old('name') : (isset($testimony) ? $testimony->name : '') }}" class="form-control rounded @error('name') is-invalid @enderror" placeholder="Client Name">
                                                <span class="invalid-feedback" role="alert">
																<strong>{{$errors->first('name')}}</strong>
															</span>
                                            </div>
                                        </div>

                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Client Occupation/More Info</label>
                                                <input type="text" name="occupation" value="{{ old('occupation') ? old('occupation') : (isset($testimony) ? $testimony->occupation : '')}}" class="form-control rounded @error('occupation') is-invalid @enderror" placeholder="E.g Chief">
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('occupation')}}</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Client Testimony</label>
                                                <textarea class="form-control summernote rounded @error('description') is-invalid @enderror" name="description"  placeholder="Client Testimony">{{ old('description') ? old('description') : (isset($testimony) ? $testimony->description : '') }}</textarea>
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('description')}}</strong>
															</span>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">

                                            <div class="form-group">
                                                <label class="text-dark ft-medium">{{ $testimony ? 'Change Passport?':'Passport' }}</label>
                                                <input type="file" value="{{ old('passport') }}" name="passport" class="form-control rounded @error('passport') is-invalid @enderror">
                                                <span role="alert" class="invalid-feedback">
																<strong>{{$errors->first('passport')}}</strong>
															</span>

                                            </div>
                                            @isset($testimony)
                                                @method('PUT')
                                                <img src="{{asset('storage/'.$testimony->passport ) }}" class="img-fluid circle text-center" width="100" alt="" />
                                            @endisset
                                        </div>







                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">{{ $testimony?'Update ':'Add '}} Testimony</button>
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
        @include('partial._admin_foot')

    </div>


@endsection







