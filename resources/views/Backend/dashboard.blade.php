@extends('Backend.layouts.admin_design')

@section('title')  Dashboard @endsection

@section('content')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"  href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel purple">
									<div class="symbol">
										<i class="material-icons">list_alt</i>
									</div>
									<div class="value white">
                                    <p class="sbold addr-font-h1" data-counter="counterup" data-value="">
                                        {{count($news)}}
                                        </p>
										<p>News</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="material-icons">edit</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="">
                                            {{count($posts)}}
                                        </p>
										<p>Posts</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">
                                    <i class="material-icons">today</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="">
                                            {{count($events)}}
                                        </p>
                                        <p>Events</p>
									</div>
								</div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
								<div class="overview-panel green">
									<div class="symbol">
                                    <i class="material-icons">cloud</i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="">
                                            {{count($resources)}}
                                        </p>
                                        <p>Resources</p>
									</div>
								</div>
							</div>
                        </div>
        </div>
        <!-- end widget -->
    </div>
@endsection
