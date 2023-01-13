@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Galleries</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">{{ isset($gallery) ?'Edit ':'Add '}} Image</a></li>
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
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>{{ isset($gallery) ?'Edit ':'Add '}} Image</h4>
                            </div>
                        </div>
                        <div class="_dashboard_content_body py-3 px-3">
                            <form class="row" action="{{  isset($gallery) ? route('galleries.update', $gallery->id) : route('galleries.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">Short Description</label>
                                                <input type="text" name="description" value="{{ old('description') ? old('description') : (isset($gallery) ? $gallery->description : '')}}" class="form-control rounded @error('description') is-invalid @enderror" placeholder="E.g Training session at Dynaton World">
                                                <span role="alert" class="invalid-feedback">
                                                    <strong>{{$errors->first('description')}}</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label class="text-dark ft-medium">{{ isset($gallery) ? 'Change Image?':'Image' }}</label>
                                                <input type="file" value="{{ old('photo') }}" name="photo" class="form-control rounded @error('photo') is-invalid @enderror">
                                                    <span role="alert" class="invalid-feedback">
                                                        <strong>{{$errors->first('photo')}}</strong>
                                                    </span>
                                            </div>
                                            @isset($gallery)
                                                @method('PUT')
                                                <img src="{{asset('storage/'.$gallery->photo ) }}" class="img-fluid mb-3" width="100" alt="" />
                                            @endisset
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">{{ isset($gallery) ?'Update ':'Add '}} Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if(!isset($gallery))
                    @if($galleries->isNotEmpty())
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="mb-4 tbl-lg rounded overflow-hidden">
                                <div class="table-responsive bg-white">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col"></th>
                                            <th scope="col">Short Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($galleries as  $gallery)
                                            <tr>
                                                <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{ $loop->iteration }}</h4></div></td>
                                                <td><img src="{{asset('storage/'.$gallery->photo ) }}" class="img-fluid " width="70" alt="" /></td>
                                                <td>{{ $gallery->description }}</td>
                                                <td>
                                                    <div class="dash-action">
                                                        <a href="{{ route('galleries.edit', $gallery)}}" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center my-2"><i class="lni lni-pencil"></i></a>
                                                        <a href="javascript:void(0);" onclick="handleDelete({{ $gallery->id }})" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="_dashboard_content bg-white rounded mb-4">
                                <div class="_dashboard_content_body py-3 px-3">
                                    <div class="container">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="text-center"> <i class="fa fa-4x fa-images" aria-hidden="true"></i>

                                                <h4>You do not have any images in the gallery.</h4>
                                                <p>When you upload an image, it will appear here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>

        <!-- footer -->
        @include('partial._admin_foot')

    </div>

    <!--Delete  Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form action="" method="POST" id="deleteCourseForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Image from Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center font-weight-bold">Are you sure you want to delete this image? </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection


@section('scripts')
    <script>
        function handleDelete(id) {
            const form = document.getElementById('deleteCourseForm');
            form.action = '/admin/galleries/' + id;
            //console.log("deleting..", form);
            $('#deleteModal').modal('show')

        }

    </script>

@endsection




