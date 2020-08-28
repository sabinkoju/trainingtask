<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand" href="{{route('frontNewsView')}}">OnlineNews24</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('frontNewsView')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('frontView')}}">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('frontEventsView')}}">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('frontResourcesView')}}">Resources</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
        </ul>
      </div>
    </div>
  </nav>
