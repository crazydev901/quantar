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
                    <div class="title-users">
                        <p>Top Users</p>
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
                        <span class="username"></span>
                        <span class="QPoints">Q-Points</span>
                    </div>
                </div>
                <div class="user_list py-4">
                    <a class="user" href="{{route('user_cabinet')}}" style="padding: 0 !important;">
                        <div class="row" style="padding-left: 15px">
                            <div class="col-7 col-lg-6 div-user">
                                <img class="user_avatar" src="{{asset('assets/img/scientists/p3-team-img1-1.png')}}" alt="">
                                <div class="avatar-halo u-absolute u-textColorGreenNormal svgIcon" style="top: -5px; left: 23px;">
                                    <svg viewBox="0 0 114 114" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.66922967,32.092726 C17.0070768,13.6353618 35.9421928,1.75 57,1.75 C78.0578072,1.75 96.9929232,13.6353618 106.33077,32.092726 L107.66923,31.4155801 C98.0784505,12.4582656 78.6289015,0.25 57,0.25 C35.3710985,0.25 15.9215495,12.4582656 6.33077033,31.4155801 L7.66922967,32.092726 Z"></path><path d="M106.33077,81.661427 C96.9929232,100.118791 78.0578072,112.004153 57,112.004153 C35.9421928,112.004153 17.0070768,100.118791 7.66922967,81.661427 L6.33077033,82.338573 C15.9215495,101.295887 35.3710985,113.504153 57,113.504153 C78.6289015,113.504153 98.0784505,101.295887 107.66923,82.338573 L106.33077,81.661427 Z"></path>
                                    </svg>
                                </div>
                                <div class="user_username">
                                    <p>gipard_lukos</p>
                                </div>
                            </div>
                            <div class="col-5 col-lg-6 py-4 joined d-flex justify-content-end align-items-center">
                                <div class="QPoints_top">
                                    <p>Q-Points: 120</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="user_list py-4">
                    <a class="user" href="{{route('user_cabinet')}}" style="padding: 0 !important;">
                        <div class="row" style="padding-left: 15px">
                            <div class="col-7 col-lg-6 div-user">
                                <img class="user_avatar" src="{{asset('assets/img/scientists/p3-team-img4-1.png')}}" alt="">
                                <div class="avatar-halo u-absolute u-textColorGreenNormal svgIcon" style="top: -5px; left: 23px;">
                                    <svg viewBox="0 0 114 114" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.66922967,32.092726 C17.0070768,13.6353618 35.9421928,1.75 57,1.75 C78.0578072,1.75 96.9929232,13.6353618 106.33077,32.092726 L107.66923,31.4155801 C98.0784505,12.4582656 78.6289015,0.25 57,0.25 C35.3710985,0.25 15.9215495,12.4582656 6.33077033,31.4155801 L7.66922967,32.092726 Z"></path><path d="M106.33077,81.661427 C96.9929232,100.118791 78.0578072,112.004153 57,112.004153 C35.9421928,112.004153 17.0070768,100.118791 7.66922967,81.661427 L6.33077033,82.338573 C15.9215495,101.295887 35.3710985,113.504153 57,113.504153 C78.6289015,113.504153 98.0784505,101.295887 107.66923,82.338573 L106.33077,81.661427 Z"></path>
                                    </svg>
                                </div>
                                <div class="user_username">
                                    <p>maximus_rnt</p>
                                </div>
                            </div>
                            <div class="col-5 col-lg-6 py-4 joined d-flex justify-content-end align-items-center">
                                <div class="QPoints_top">
                                    <p>Q-points: 100</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection