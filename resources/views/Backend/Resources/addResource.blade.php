@extends('Backend.layouts.admin_design')

@section('title')  Add New Resource @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Resource</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('dashboard.index') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Resource</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">New Resource Details</header>


                    </div>

                    <div class="card-body " id="bar-parent">
                        <form method="post" action="{{route('resources.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Resource Title</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Resource Title" name="title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Upload File</label>
                                         <input type="hidden" name="file">
                                            <input type="file" class="form-control-file" id="file"
                                                   name="file" required="" multiple>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Add New Resource</button>
                                    <a href="{{ route('resources.index') }}" class="btn btn-info">View All</a>
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
