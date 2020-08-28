@extends('Backend.layouts.admin_design')

@section('title') View All News @endsection

@section('content')

<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">All News List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                href="{{route('dashboard.index')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="javascript:">News</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">View All News</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line">
                <div class="tab-content">
                    <div class="tab-pane active fontawesome-demo" id="tab1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">All
                                            News List</header>

                                    </div>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                <div class="btn-group">
                                                    <a href="{{ route('news.create') }}" id="addRow"
                                                        class="btn btn-info" style="margin-right: 10px;">
                                                        Add News <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-scrollable">
                                            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                id="example4" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th> S.No </th>
                                                        <th> Title </th>
                                                        <th> Image </th>
                                                        <th> Description </th>
                                                        <th> Author </th>
                                                        <th> Created At </th>
                                                        <th> Updated At </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($news as $key=>$new)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$new->title}}</td>
                                                        <td><img src="{{asset('Backend/Newsimages/'.$new->image)}}"
                                                         alt="News image" width="auto" height="60px" id="zoom"></td>
                                                        <td>{{$new->description}}</td>
                                                        <td>{{$new->author}}</td>
                                                        <td>{{$new->created_at}}</td>
                                                        <td>{{$new->updated_at}}</td>
                                                       <td class="text-left">
                                                        <form action="{{route('news.edit', $new->id)}}" method="GET" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        {{method_field('PUT')}}
                                                        <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                                                        </form>
                                                        <form action="{{ route('news.destroy', $new->id)}}" method="post" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                        </form>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
<!-- data tables -->
<link href="{{ asset('Backend/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}"
    rel="stylesheet">
@endsection

@section('scripts')
<!-- data tables -->
<script src="{{ asset('Backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('Backend/js/pages/table/table_data.js') }}"></script>


<script src="{{ asset('Backend/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('Backend/js/jquery.sweet-alert.custom.js') }}"></script>
@endsection
