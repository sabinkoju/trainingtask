<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

@include('Backend.layouts.head')
<!-- END HEAD -->

<body
        class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="">
                    <span class="logo-icon material-icons fa-rotate-45">dashboard</span>
                    <span class="logo-default">Dummy</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>

            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                {{-- <ul class="nav navbar-nav pull-right">
                    <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                    <!-- start language menu -->

                    <!-- end language menu -->


                    <?php $current_user = auth()->user(); ?>
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            @if($current_user->image == "NULL")
                                <img onclick="zoom()" alt="" class="img-circle " src="{{ asset('public/uploads/profile/profile.png') }}" />
                            @else
                                <img onclick="zoom()" alt="" class="img-circle " src="{{ asset('public/uploads/profile/'.  auth()->user()->image ) }}" />
                            @endif
                                <span class="username username-hide-on-mobile"> {{  auth()->user()->name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('Backend.profile') }}">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="{{ route('changePassword') }}">
                                    <i class="icon-settings"></i> Change Password
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('msLogout') }}">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->

                </ul> --}}
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
    @include('Backend.layouts.sidebar')

    <!-- end sidebar menu -->

     <!-- The Modal:Image zoom on click -->
    <div id="myModal" class="modal">
      <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>

        <!-- start page content -->
        <div class="page-content-wrapper">
            @yield('content')
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->

    </div>
    <!-- end page container -->
    <!-- start footer -->

@include('Backend.layouts.footer')
