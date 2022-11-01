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
                            <li class="breadcrumb-item"><a href="#" class="theme-cl">{{ isset($article) ?'Edit ':'Add '}} Articles</a></li>
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
                                <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>{{ isset($article) ?'Edit ':'Add '}} Article</h4>
                            </div>
                        </div>

                        <div class="_dashboard_content_body py-3 px-3">

                            <form action="{{  isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @isset($article)
                                    @method('PUT')
                                @endisset

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ isset($article)? $article->title:'' }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{ isset($article)? $article->content:'' }}</textarea>

                                </div>
                                <div class="form-group">
                                    <label for="published_at">Published At</label>
                                    <input type="text" class="form-control" id="published_at" name="published_at" value="{{ isset($article)? $article->published_at:'' }}">
                                </div>

                                @isset($article)
                                    <div class="form-group">
                                        <img src="{{ asset('storage/'.$article->image) }}" alt="" width="300">
                                    </div>
                                @endisset

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    @isset($article)
                                                        @if($category->id === $article->article_category_id)
                                                            selected
                                                    @endif
                                                    @endisset
                                            >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label for="tags">Tag</label>
                                        <select name="tags[]" id="tags" class="form-control tags-selector" multiple>
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                        @isset($article)
                                                            @if($article->hasTag($tag->id))
                                                                selected
                                                        @endif
                                                        @endisset
                                                >{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">{{ isset($article) ?'Update ':'Add '}} Article</button>
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script>
        flatpickr('#published_at', {
            // minDate: "today",
            enableTime: true,
            enableSeconds: true
        });
        $(document).ready(function() {
            $('.tags-selector').select2();
        });


    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endsection

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.tiny.cloud/1/36sx8xuffx9sspexlaoh2wizbah5jr2o3ph5dffp7iyd8mtq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection








