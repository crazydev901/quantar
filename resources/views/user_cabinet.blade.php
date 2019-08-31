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
    <div class="user_cabinet">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-4 py-4 text-center" style="overflow: hidden">
                    <img class="user_cabinet-img d-md-block" style="max-width: 100%;"
                         src="{{asset('assets/img/scientists/p3-team-img1-1.png')}}" alt="">
                    <div class="avatar-halo_cabinet u-absolute u-textColorGreenNormal svgIcon">
                        <svg viewBox="0 0 114 114" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.66922967,32.092726 C17.0070768,13.6353618 35.9421928,1.75 57,1.75 C78.0578072,1.75 96.9929232,13.6353618 106.33077,32.092726 L107.66923,31.4155801 C98.0784505,12.4582656 78.6289015,0.25 57,0.25 C35.3710985,0.25 15.9215495,12.4582656 6.33077033,31.4155801 L7.66922967,32.092726 Z"></path>
                            <path d="M106.33077,81.661427 C96.9929232,100.118791 78.0578072,112.004153 57,112.004153 C35.9421928,112.004153 17.0070768,100.118791 7.66922967,81.661427 L6.33077033,82.338573 C15.9215495,101.295887 35.3710985,113.504153 57,113.504153 C78.6289015,113.504153 98.0784505,101.295887 107.66923,82.338573 L106.33077,81.661427 Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="col-md-10 col-8 py-4">
                    <div class="title-competition title-competition_cabinet">
                        <p>First Last</p>
                        <a href="{{route('edit')}}">
                            <button type="button" class="btn btn-block btn-default edit_button">
                                <span class="btn-inner--icon"></span>Edit
                            </button>
                        </a>
                    </div>
                    <div class="country language">
                        <p>Moldova, russian</p>
                    </div>
                    <div class="ranked" style="display: inline-block">
                        <p>Ranked #1,</p>
                    </div>
                    <div class="qpoints">
                        <p>Q-points: 125</p>
                    </div>
                    <div class="joined_user">
                        <p>36 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="Tabs__kind-subheader___3sP0X" data-tabs="true">
            <div class="Tabs__tabList___2nMC3">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link respons_5s active" style="margin-right: 20px" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Bio</a>
                    <a class="nav-link respons_5s" style="margin-right: 20px" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">My Competitions</a>
                    <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Discussions</a>
                </div>
            </div>
            <div class="tab-content ftco-animate" id="myTabContent">

                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                    <div class="emDO" style="margin-bottom: 70px;">
                        <div class="paper_padding">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                    <div class="App__contained___3emDO" style="margin-bottom: 70px;">
                        <div class="competition-content">
                            <a class="competition-a" href="#">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6 py-3 none_des" style="text-align: -webkit-center;">
                                        <div class="competition-img"
                                             style="background-image: url({{asset('assets/img/theme/aboutme-img3.png')}});">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 py-4 padingg_cabinet">
                                        <div class="primary">
                                            <div class="primary-title">
                                                <p>Sustainable Development Goals (SDGs): Text Classification Challenge</p>
                                            </div>
                                            <div class="primary-subtitle">
                                                <p>Classify text and documents by relevance to the 27 indicators of SDG #3
                                                    (Health and Well-Being)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12 py-4 competitions_secondary flex_us text-center d-flex justify-content-end align-items-center">
                                        <div class="rank_cabinet">
                                            <div class="ranked-title us_right">
                                                <p>Ranked #1 </p>
                                            </div>
                                            <div class="ranked-title us_left">
                                                <p> Q-Points: 125</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                    <div class="emDO" style="margin-bottom: 70px;">
                        <div class="paper_padding_discussions">
                            <div class="row">
                                <div class="col-md-1 col-4 py-4 py_cabinet">
                                    <img class="user_avatar_discussions" src="{{asset('assets/img/scientists/p3-team-img2-1.png')}}" alt="" style="">
                                    <div class="avatar-halo_discussions u-absolute u-textColorGreenNormal svgIcon">
                                        <svg viewBox="0 0 114 114" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.66922967,32.092726 C17.0070768,13.6353618 35.9421928,1.75 57,1.75 C78.0578072,1.75 96.9929232,13.6353618 106.33077,32.092726 L107.66923,31.4155801 C98.0784505,12.4582656 78.6289015,0.25 57,0.25 C35.3710985,0.25 15.9215495,12.4582656 6.33077033,31.4155801 L7.66922967,32.092726 Z"></path><path d="M106.33077,81.661427 C96.9929232,100.118791 78.0578072,112.004153 57,112.004153 C35.9421928,112.004153 17.0070768,100.118791 7.66922967,81.661427 L6.33077033,82.338573 C15.9215495,101.295887 35.3710985,113.504153 57,113.504153 C78.6289015,113.504153 98.0784505,101.295887 107.66923,82.338573 L106.33077,81.661427 Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-md-8 col-10 col-sm-6 padingg_cabinet">
                                    <div class="primary_discussions">
                                        <div class="primary-title_discussions">
                                            <a href="#">Solutions</a>
                                        </div>
                                        <div class="primary-user_discussions">
                                            <a href="#">Rahad</a>
                                        </div>
                                        <div class="primary-des">
                                            <p> ~ 2 hours ago</p>
                                        </div>
                                        <div class="primary-des">
                                            <a href="#">Sustainable Development Goals (SDGs): Text Classification Challenge</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 p-4 col-2">
                                    <div class="comments_discussions">
                                        <a href="#">
                                            <svg class="comment_icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg> 10
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-2 py-4 col-8 none_des">
                                    <div class="primary-title_comments">
                                            <p>Last comment by</p>
                                    </div>
                                    <div class="primary-user_discussions">
                                        <a href="#">Rahad</a>
                                    </div>
                                    <div class="primary-des">
                                        <p> ~ 9 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection