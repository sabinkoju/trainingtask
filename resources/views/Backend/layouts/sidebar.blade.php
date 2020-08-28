<?php $url = url()->current(); ?>

<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>

                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left info">
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                    Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item start">
                    <a href="{{route('dashboard.index')}}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"> <i class="material-icons">list</i>
                        <span class="title">News</span>
                        <span class="arrow"></span>
                    </a>

                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('news.create')}}" class="nav-link ">
                                <span class="title">Add News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news.index')}}" class="nav-link ">
                                <span class="title">View All News</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"> <i class="material-icons">edit</i>
                        <span class="title">Post</span>
                        <span class="arrow"></span>
                    </a>

                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('post.create')}}" class="nav-link ">
                                <span class="title">Add Post</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link ">
                                <span class="title">View All Post</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"> <i class="material-icons">today</i>
                        <span class="title">Event</span>
                        <span class="arrow"></span>
                    </a>

                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('events.create')}}" class="nav-link ">
                                <span class="title">Add Event</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('events.index')}}" class="nav-link ">
                                <span class="title">View All Event</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link nav-toggle"> <i class="material-icons">cloud</i>
                        <span class="title">Resources</span>
                        <span class="arrow"></span>
                    </a>

                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('resources.create')}}" class="nav-link ">
                                <span class="title">Add Resources</span>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('resources.index')}}" class="nav-link ">
                                <span class="title">View All Resources</span>
                            </a>
                        </li>
                    </ul>
                </li>
        </div>
    </div>
</div>
