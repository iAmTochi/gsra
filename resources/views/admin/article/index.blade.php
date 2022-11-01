@extends('layouts.admin')

@section('content')


    <div class="dashboard-content">
        <div class="dashboard-tlbar d-block mb-5">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Articles</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-muted"><a href="#">{{  ucfirst(auth()->user()->role) }}</a></li>
                            <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">View Articles</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="cl-justify">

                        <div class="cl-justify-first">
                            <p class="m-0 p-0 ft-sm"> <span class="text-dark ft-medium"></span> </p>
                        </div>

                        <div class="cl-justify-last">
                            <div class="d-flex align-items-center justify-content-left">
                                <div class="dlc-list">

                                </div>
                                <div class="dlc-list ml-2">
                                    <a href="{{ route('articles.create') }}" style="background-color: black" class="btn  btn-secondary rounded">Add Article</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="mb-4 tbl-lg rounded overflow-hidden">
                        <div class="table-responsive bg-white">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col"></th>

                                    <th scope="col">Title</th>
                                    <th scope="col">Descriptions</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">{{ $loop->count }}</h4></div></td>
                                        <td><img src="{{asset('storage/'.$article->image ) }}" class="img-fluid circle" width="70" alt="" /></td>
                                        <td><span class="ft-medium">{{ $article->title }}</span></td>
                                        <td>{!! substr($article->content, 0, 200) !!}</td>
                                        <td>{{ $article->user->fullName() }}</td>
                                        <td>{{ $article->created_at->isoFormat('DD MMM, Y') }}</td>
                                        <td style="width: 45px">
                                            <div class="dash-action">
                                                <a href="{{ route('articles.edit', $article->id)}}" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center my-2"><i class="lni lni-pencil"></i></a>
                                                <button type="button" onclick="handleDelete({{ $article->id }})" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
                        <h5 class="modal-title" id="deleteModalLabel">Delete Article</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center font-weight-bold">Are you sure you want to delete this article? </p>
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
            form.action = '/admin/articles/' + id;
            //console.log("deleting..", form);
            $('#deleteModal').modal('show')

        }

    </script>

@endsection







