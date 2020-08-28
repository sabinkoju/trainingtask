@extends('Backend.layouts.admin_design')

@section('title')  Edit Post @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Edit Post</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('dashboard.index') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Post</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">Post Details</header>


                    </div>


                    <div class="card-body " id="bar-parent">
                        <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Title" name="title" value="{{@$post->title}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                         <input type="hidden" name="image">
                                                @if($post->image != null)
                                                    <img src="{{asset('Backend/Postimages/' .$post->image)}}"
                                                         alt="Post image" height="100px" width="auto">
                                                @endif
                                            <input type="file" class="form-control-file" id="image"
                                                   name="image">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Enter Description" name="description" required>{{@$post->description}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Author Name" name="author" value="{{@$post->author}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Update Post</button>
                                    <a href="{{ route('post.index') }}" class="btn btn-info">View All</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection



@section('css')
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css') }}">
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en',
            modules: 'file',
        });

    </script>

    <script src="{{ asset('Backend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('Backend/js/jquery.sweet-alert.custom.js') }}"></script>
@endsection
