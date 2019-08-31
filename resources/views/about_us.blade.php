@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <div class="selene-breadcumb-area">
        <!-- Shape -->
        <div class="welcome-bg-shape">
            <img class="welcome-first-shape" src="{{asset('assets/img/about_us/welcome-bg-1.png')}}" alt="">
            <img class="welcome-second-shape" src="{{asset('assets/img/about_us/welcome-bg-2.png')}}" alt="">
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent text-right">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="bradcumbContent" style="padding-right: 10px;"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('about-us')}}">About Us</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- 1st Hero Variation -->
    </div>

    <section id="about" class="section_about">
        <div class="container">
            <div class="row row-grid">
                <div class="col-md-12 text-center">
                    <div class="title_about">
                        <h5>We are proud to be Asia’s first distributed <br> community of data scientists.</h5>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="pl-md-4 ">
                        <div class="img_mob">
                            <img src="{{asset("assets/img/theme/title-icon.png")}}" class="text-left img_content">
                        </div>
                        <p>Quantar hosts data modelling competitions for world-leading institutions across emerging markets, connecting our community members and partner organisations.
                        We utilise our extensive network of leading academics and partner companies to curate real time
                            datasets, upon which our competitions are based. </p>
                    </div>
                </div>
                <div class="col-md-6 col-12 ">
                    <div class="">
                        <div class="img_mob">
                            <img src="{{asset("assets/img/theme/title-icon.png")}}" class="text-left img_content">
                        </div>
                        <p>Quantar community is made up of like minded individuals who are looking to cultivate skills, passion and love for big data and community driven projects.
                        We believe that learning should be more than just studying for a curriculum and taking exams. Quantar allows you to learn whilst applying skills to everyday global problems that need to be addressed.</p>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container">--}}
            {{--<div class="row row-grid align-items-center">--}}
                {{--<div class="col-md-12 col-12 we-are">--}}
                    {{--<h6>Who are we (home page)?</h6>--}}
                    {{--<p>Our mission is simple. </p>--}}
                    {{--<p>We aim to mobilise Asia’s community of data scientists to solve some of the greatest challenges faced by emerging markets.</p>--}}
                    {{--<p>We engage experienced and aspiring data scientists to solve pressing problems for mission-driven organizations.--}}
                        {{--Competitors get experience with real-world problems and a proven track record of results.We utilise cutting-edge practices in data science to tackle--}}
                        {{--the biggest issues faced by emerging markets and empower the organisations taking them on.</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 col-12 we-are">--}}
                    {{--<h6>Who are we (tab)?</h6>--}}
                    {{--<p>Quantar is a network of data scientists, students, and researchers who are constantly on the lookout for interesting, real-world projects.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </section>


    <section class="ftco-section">
        <div class="container-fluid col-lg">
            <div class="row">
                <div class="col-lg col-md-4 d-flex mb-sm-4">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url({{asset('assets/img/user/charls.jpg')}});"></div>
                        <div class="info text-center">
                            <h3>Charles Barnett</h3>
                            {{--<span class="position">System Analyst</span>--}}
                            <div class="text">
                                <p>Charles is a serial entrepreneur having founded and exited numerous technology related ventures ranging across
                                    the telecommunications sector. Charles has amassed a wealth of experience and industry contacts having worked
                                    with Tier 1 Operators globally. Charles advices to a number of associated ventures in the Middle East and Africa.
                                </p>
                                    {{--<ul class="ftco-social">--}}
                                        {{--<li><a href="#"><i class="ti-facebook"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="ti-twitter"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
                                        {{--<li><a href="#"><i class="ti-pinterest"></i></a></li>--}}
                                    {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-4 d-flex mb-sm-4">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url({{asset('assets/img/user/ryan.png')}});"></div>
                        <div class="info text-center">
                            <h3>Ryan Ezrock</h3>
                            {{--<span class="position">System Analyst</span>--}}
                            <div class="text">
                                <p>Ryans entrepreneurial background and venture capital experience has assisted a number of technology startups to reach
                                    their full potential. Ryan has worked on a range of large data migration projects within the Insuretech sector. </p>
                                {{--<ul class="ftco-social">--}}
                                    {{--<li><a href="#"><i class="ti-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-pinterest"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-4 d-flex mb-sm-4">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url({{asset('assets/img/user/ClaudioFeijoo.jpg')}});"></div>
                        <div class="info text-center">
                            <h3>Claudio Feijóo</h3>
                            {{--<span class="position">System Analyst</span>--}}
                            <div class="text">
                                <p>Claudio Feijóo holds an MSc and PhD in Telecommunication Engineering and MSc in Economics from UNED, where he is a guest lecturer in digital economics.
                                    Claudio is currently a Professor at Tongji University and Universidad Politénica de Madrid. Claudio also serves as Deputy Director of the Research
                                    Centre on Applied Information and Communication Technologies (CeDInt). </p>
                                {{--<ul class="ftco-social">--}}
                                    {{--<li><a href="#"><i class="ti-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-pinterest"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-6 d-flex mb-sm-4">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url({{asset('assets/img/user/Ahish.jpg')}});"></div>
                        <div class="info text-center">
                            <h3>Ahish Kaushik</h3>
                            {{--<span class="position">System Analyst</span>--}}
                            <div class="text">
                                <p>Ahish graduated from London School of Economics, specialised in Mathematics. He represented the LSE at the 2018 IYLFS at Shanghai Jiatong
                                    University and has been actively involved in numerous technology related startups prior to joining Quantar.</p>
                                {{--<ul class="ftco-social">--}}
                                    {{--<li><a href="#"><i class="ti-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-pinterest"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-4 d-flex mb-sm-4">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url({{asset('assets/img/user/Tina.jpg')}});"></div>
                        <div class="info text-center">
                            <h3>Tina Urba</h3>
                            {{--<span class="position">System Analyst</span>--}}
                            <div class="text">
                                <p>Tina holds an MSc in Mathematics from City University and MSc in Data Science (statistics specialisation) from UCL. Tina is proficient in Python, R and  Matlab.</p>
                                {{--<ul class="ftco-social">--}}
                                    {{--<li><a href="#"><i class="ti-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="ti-pinterest"></i></a></li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </section>

@endsection
