@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Article Categories</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">{{ isset($category) ?'Edit ':'Add '}} Category</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="_dashboard_content bg-white rounded mb-4">
                        <div class="_dashboard_content_header br-bottom py-3 px-3">
                            <div class="_dashboard__header_flex">
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>{{ isset($category) ?'Edit ':'Add '}} Category</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{  isset($category) ? route('article-categories.update', $category->id) : route('article-categories.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @isset($category)
                                    @method('PUT')
                                @endisset
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Category Name</label>
                                                <input type="text" name="name" value="{{ old('name') ? old('name') : (isset($category) ? $category->name : '') }}" class="form-control rounded @error('name') is-invalid @enderror" placeholder="Category Name">
                                                <span class="invalid-feedback" role="alert">
																<strong>{{$errors->first('name')}}</strong>
															</span>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">{{ isset($category) ?'Update ':'Add '}} Category</button>
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







