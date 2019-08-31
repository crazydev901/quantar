<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
    <div class="container-fluid">
        <a class="navbar-brand mr-md-5 @yield("brand-bg")" href="{{ url("/noauth")  }}">
            <img class="light" src="{{ asset("assets/img/brand/white.png") }}">
            <img class="dark" src="{{ asset("assets/img/brand/blue.png") }}">
        </a>
        @if(auth()->user())
            <div class="user_qpoins ml-md-5" data-toggle="modal" data-target="#myModal" style="padding-top: 7px;">
                <a class="btn btn-neutral btn-icon" href="#">My Q-points: {{ auth()->user()->balance }}</a>
            </div>
        @endif

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse " id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ url("/")  }}">
                            <img src="{{ asset("assets/img/brand/blue.png") }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
                <li class="user_qpoins_mob">
                    @if(auth()->user())
                        <a href="">Balance: {{ auth()->user()->balance }} Q-points </a>
                    @endif
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ url("/")  }}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Home </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{ route("competitions")  }}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Competitions </span>
                    </a>
                </li>
                {{--<li class="nav-item dropdown js-scroll-trigger">--}}
                    {{--<a href="{{route('community')}}" class="nav-link" role="button">--}}
                        {{--<i class="ni ni-ui-04 d-lg-none"></i>--}}
                        {{--<span class="nav-link-inner--text">Community</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="nav-item dropdown js-scroll-trigger">
                    <a href="{{ url("about-us") }}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">About us </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route('learn')}}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Learn  </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route('corporate')}}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Corporate  </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route("faq")  }}" class="nav-link" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Help  </span>
                    </a>
                </li>
                @guest
                    <li class="nav-item d-block d-lg-none dropdown">
                        <a href="{{route("login")  }}" class="nav-link" role="button">
                            <i class="ni ni-ui-04 d-lg-none"></i>
                            <span class="nav-link-inner--text">Sign In </span>
                        </a>
                    </li>

                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a href="{{ route("login") }}" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-sign-in mr-2"></i>
                </span>
                            <span class="nav-link-inner--text">Sign In</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(auth()->user()->hasRole('admin'))
                                <a class="dropdown-item" href="{{ url('admin') }}">
                                    {{ __('Admin Pannel') }}
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content text-center">
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white">
                        <div class="text-muted text-center">
                            <small style="font-size: 20px; color: #5c616b;">Q-points formula?
                            </small>
                        </div>
                    </div>
                    <div class="modal-body text-left" style="color: #5c616b;">
                        <p> - 5 points for each piece of information you include about yourself on your profile (skills,
                            location, university, wechat etc.)<br>
                            - 10 point for inviting a friend <br>
                            - 20 points for joining a competition <br>
                            - 30 points for submission of solution <br>
                            - 100 points for 3rd place <br>
                            - 200 points for 2nd place <br>
                            - 500 points for 1st place
                        </p>
                        <a class="href_mod" href="{{route('faq')}}">Learn more about Q-points</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
