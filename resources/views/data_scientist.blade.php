@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style=" padding-bottom: 1rem;">
            <div class="shape shape-style-1 shape-primary">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>

    <div class="competitions-container bottomPadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-competition">
                        <p>Data Scientists</p>
                    </div>
                    <div class="primary-subtitle1">
                        <p>Quantar’s community is open to everyone and anyone from experienced data science professionals to aspiring students and researchers. We engage with mission-driven organizations across Emerging Markets with real-world problems and a proven track record of pursuing results.
                            In order to be part of our community and join a competition click here <a href="{{route('competitions')}}" class="text-underline" style="color: darkturquoise;">join a competition!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row shadow mb-5">
            <div class="paper col-md-12">
                <div class="heading">
                    <div class="header_ys user">
                        <span class="users">Community : {{ 1000 + \App\User::count()  }} Data Scientists</span>
                        <span class="joined">Joined</span>
                    </div>
                </div>
                @foreach($users as $user)
                <div class="user_list py-4">
                    {{--{{url('user', [ "user" => $user->id])}}--}}
                    <a class="user" href="#" style="padding: 0 !important;">
                        <div class="row" style="padding-left: 15px">
                            <div class="col-7 col-lg-6 div-user">
                                <img class="user_avatar" src="{{asset($user->randomAvatar())}}" alt="">
                                <div class="avatar-halo u-absolute u-textColorGreenNormal svgIcon" style="top: -5px; left: 23px;">
                                    <svg viewBox="0 0 114 114" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.66922967,32.092726 C17.0070768,13.6353618 35.9421928,1.75 57,1.75 C78.0578072,1.75 96.9929232,13.6353618 106.33077,32.092726 L107.66923,31.4155801 C98.0784505,12.4582656 78.6289015,0.25 57,0.25 C35.3710985,0.25 15.9215495,12.4582656 6.33077033,31.4155801 L7.66922967,32.092726 Z"></path><path d="M106.33077,81.661427 C96.9929232,100.118791 78.0578072,112.004153 57,112.004153 C35.9421928,112.004153 17.0070768,100.118791 7.66922967,81.661427 L6.33077033,82.338573 C15.9215495,101.295887 35.3710985,113.504153 57,113.504153 C78.6289015,113.504153 98.0784505,101.295887 107.66923,82.338573 L106.33077,81.661427 Z"></path>
                                    </svg>
                                </div>
                                <div class="user_username">
                                    <p>{{ $user->name  }}</p>
                                </div>
                            </div>
                            <div class="col-5 col-lg-6 py-4 joined  d-flex justify-content-end align-items-center">
                                <p>{{ $user->created_at->diffForHumans()  }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="user_list py-4">
                        <div class="row" style="padding-left: 15px">
                            <div class="col-12 col-lg-12 div-user">
                                <i class="ni ni-bold-left"></i>
                                <i class="ni ni-circle-08"></i>
                                <i class="ni ni-bold-right"></i>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-6 paginator" style="padding-left: 28px;">
                        {{--<nav id="jspagination" aria-label="Page navigation example">--}}
                            {{--{{ $users->render()  }}--}}
                        {{--</nav>--}}
                    </div>
                    <div class="col-lg-6 col-6 paginator">
                        {{--<div class="button-user text-right">--}}
                            {{--<a href="{{route('top_user')}}">--}}
                                {{--<button class="btn-user btn-primary" type="button">View top user</button>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection