@extends('Backend.layouts.admin_design')

@section('title')  Add New News @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New News</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('dashboard.index') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New News</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">New News Details</header>


                    </div>

                    <div class="col-md-8">
                        @if(Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                {!! session('flash_message_error') !!}

                            </div>
                        @endif
                    </div>


                    <div class="card-body " id="bar-parent">
                        <form method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">News Title</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Title" name="title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                         <input type="hidden" name="image">
                                            <input type="file" class="form-control-file" id="image"
                                                   name="image" required="" multiple>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Enter Description" name="description" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Author Name" name="author">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Add New News</button>
                                    <a href="{{ route('news.index') }}" class="btn btn-info">View All</a>
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
