@extends('Frontend/app')
@section('bg-img',asset('Frontend/img/about-bg.jpg'))
@section('title','All Resources')
@section('subtitle','Get Your Desired Resource')

@section('main-content')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="table-scrollable">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                id="example4" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th> S.No </th>
                                                        <th> Title </th>
                                                        <th> Download File </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($resources as $key=>$resource)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$resource->title}}</td>
                                                        <td><a href="{{$resource->file}}"download>Download</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <!-- Pager -->
                                            <div class="d-flex justify-content-center">
                                                {{$resources->links()}}
                                            </div>
                </div>
        </div>
      </div>
    </div>
  </article>
  <hr>
@endsection
