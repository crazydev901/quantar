@extends("layouts.app")
@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped pb-250">
            <div class="shape shape-style-1 shape-primary">
                {{-- TODO Max change for all pages shape-primary --}}
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
            <div class="container py-lg-md d-flex">
                <div class="col px-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-md-block d-lg-block">
                            <img src="{{ asset("assets/img/theme/header.png") }}" class="img-fluid wow fadeIn " alt="">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-3  text-white">Asia’s community of data scientists empowering small to medium sized businesses across the globe to solve their data challenges.
                            </h1>
                            <div class="btn-wrapper">
                                <br>
                                <a href="{{ route("competitions")  }}"
                                   class="btn btn-info btn-icon mb-3 mb-sm-0 wow fadeInUp ">
                                    <span class="btn-inner--icon"><i class="fa fa-trophy"></i></span>
                                    <span class="btn-inner--text ">JOIN A COMPETITION</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row row-grid">
                        <div class="col-lg-3">
                            <div class="card h-100 card-lift--hover shadow border-0 wow fadeInUp animated">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                                        <i class="ni ni-spaceship"></i>
                                    </div>
                                    <h6 class="text-primary text-uppercase">Pan-Asian Competitions</h6>
                                    <p class="description mt-3">Our competitions are designed to provide challenges for a wide array of competitors. Whether you’re a novice or an expert, you’ll be able to compete for the chance to win cash prizes and access employment opportunities.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card h-100 card-lift--hover shadow border-0 wow fadeInUp animated">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                        <i class="ni ni-world"></i>
                                    </div>
                                    <h6 class="text-success text-uppercase">Community Driven</h6>
                                    <p class="description mt-3">Our intuitive online platforms provides you with all the tools to compete and collaborate with your peers in the data science community. You’ll have the chance to grow your own network by working with top tier talent.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card h-100 card-lift--hover shadow border-0 wow fadeInUp animated">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-warning rounded-circle mb-4">
                                        <i class="ni ni-planet"></i>
                                    </div>
                                    <h6 class="text-warning text-uppercase">Market Analysis</h6>
                                    <p class="description mt-3">Data analysis conducts insightful market dynamics for
                                        our diverse network of partner companies.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card h-100 card-lift--hover shadow border-0 wow fadeInUp animated">
                                <div class="card-body py-5">
                                    <div class="icon icon-shape icon-shape-info rounded-circle mb-4">
                                        <i class="ni ni-like-2"></i>
                                    </div>
                                    <h6 class="text-info text-uppercase">Actionable Advice</h6>
                                    <p class="description mt-3">Our service doesn’t end there! Quantar empowers all
                                        stakeholders through the development of strategic directives.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section bg-secondary">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-7">
                    <div class="card bg-default shadow border-0">
                        <img src="{{ asset("assets/img/theme/who-we-are.jpg") }}" class="card-img-top">
                        <blockquote class="card-blockquote">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                 class="svg-bg">
                                <polygon points="0,52 583,95 0,95" class="fill-default"/>
                                <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"/>
                            </svg>
                            <h4 class="display-3 font-weight-bold text-white">Who We Are</h4>
                            <p class="lead1 text-italic text-white">Quantar is a network of data scientists, students,
                                and researchers who are constantly
                                on the lookout for interesting, real-world projects.</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="pl-md-4">
                        <h3>What We Do</h3>
                        <p>Our mission is simple.</p>
                        <p>We aim to mobilise Asia’s community of data scientists to solve some of the greatest
                            challenges faced by emerging markets.</p>
                        <p>We engage experienced and aspiring data scientists to solve pressing problems for
                            mission-driven organizations.<br>
                            Competitors get experience with real-world problems and a proven track record of results. We
                            utilise cutting-edge practices in data science to tackle
                            the biggest issues faced by emerging markets and empower the organisations taking them
                            on.</p>
                        {{--<p class="lead">- Data scientist</p>--}}
                        {{--<p class="lead">- Machine learners</p>--}}
                        {{--<p class="lead">- Serial entrepreneurs in tech and telecoms</p>--}}
                        {{--<p class="lead">- World-class professor in industry</p>--}}
                        {{--<p class="lead">- Advisers from leading company</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pb-0 bg-gradient-warning">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-6  ml-lg-auto">
                    <div class="position-relative pl-md-5">
                        <img src="{{ asset("assets/img/ill/ill-2.svg") }}" class="img-center img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="d-flex px-3">
                        <div>
                            <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                                <i class="ni ni-building text-primary"></i>
                            </div>
                        </div>
                        <div class="pl-4">
                            <h4 class="display-3 text-white">Our Process</h4>
                            <p class="text-white"></p>
                        </div>
                    </div>
                    <div class="card shadow wow fadeInUp animated shadow-lg--hover mt-5">
                        <div class="card-body">
                            <div class="d-flex px-3">
                                <div>
                                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                        <i class="ni ni-cloud-download-95"></i>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="title text-success">Download Data</h5>
                                    <p>Getting started it is very easy Read the description of the proposed challenge,
                                        click to download the data provided and you're good to go.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow wow fadeInUp animated shadow-lg--hover mt-5">
                        <div class="card-body">
                            <div class="d-flex px-3">
                                <div>
                                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                        <i class="ni ni-ungroup"></i>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="title text-warning">Create Your Model</h5>
                                    <p>Apply your model to the test sample supplied and upload the results on the site.
                                        That's it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow wow fadeInUp animated shadow-lg--hover mt-5">
                        <div class="card-body">
                            <div class="d-flex px-3">
                                <div>
                                    <div class="icon icon-shape bg-gradient-cyan rounded-circle text-white">
                                        <i class="ni ni-satisfied"></i>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h5 class="title text-warning">Upload the results</h5>
                                    <p>Now we can check to see whether your model works better than other people's and
                                        announce the winners of the challenge!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-md-4">
                    <div class="pr-md-5">
                        <h3 class="h3-dark">Unbounded Potential</h3>
                        <p>By turning individuals into stakeholders, we incentivize our community to fuel it's own
                            growth.</p>
                        <p>
                            This dynamic alignment means Quantar is seamlessly positioned with any partner network to
                            conduct data-driven challenges that can provide actionable solutions at competitive rates.
                        </p>

                    </div>
                </div>
                <div class="col-md-8" style="text-align: right">
                    <img src="{{ asset("assets/img/theme/promo-2.png") }}" class="img-fluid floating">
                </div>
            </div>
        </div>
    </section>

    {{--<section class="section section-lg">--}}
    {{--<div class="container">--}}
    {{--<div class="row justify-content-center text-center mb-lg">--}}
    {{--<div class="col-lg-8">--}}
    {{--<h2 class="display-3">A Multitude Of Options And Feats</h2>--}}
    {{--<p class="lead text-muted">Currently cell-phone metadata and geospatial images and other IOT--}}
    {{--connected infrastructures currently hold the most potential for development. Mobile Network--}}
    {{--Operators hold onto swathes of underutilised data.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <section class="section section-lg pt-0">
        <div class="container">
            <div class="card wow fadeInUp animated bg-gradient-warning shadow-lg border-0">
                <div class="p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <!--<h3 class="text-white">We made website building easier for you.</h3>-->
                            <p class="lead text-white mt-3">We embed data analytics into the core of organisations,
                                integrating its value into all enterprise applications, instead of running it as a
                                separate function. This process is key to unlocking the full potential of analytics.</p>
                        </div>
                        <div class="col-lg-3 ml-lg-auto">
                            <a href="#" class="btn btn-lg btn-block btn-white"> Start a challenge </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gradient-default">
        <div class="container pt-lg pb-300">
            {{--<div class="row text-center justify-content-center">--}}
            {{--<div class="col-lg-10 wow fadeInUp animated">--}}
            {{--<h2 class="display-3 text-white">Build something</h2>--}}
            {{--<p class="lead text-white">Quantar hosts an entire data science ecosystem of scientists, engineers,--}}
            {{--academics, companies, NGOs, governments and institutions to develop, curate, and prepare--}}
            {{--data-driven challenges. </p>--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
        <div class="container">
            <div class="row justify-content-center mt--300">
                <div class="col-lg-8 wow fadeInUp animated">
                    <div class="card bg-gradient-secondary shadow">
                        <form action="{{ url("contactUs")  }}" method="post">
                            @csrf
                        <div class="card-body p-lg-5">
                            <h4 class="mb-1">Have questions?</h4>
                            <p class="mt-0">Contact us.</p>
                            <div class="form-group mt-5">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Your name" name="name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email address" name="email" type="email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <textarea class="form-control form-control-alternative" name="message" rows="4" cols="80"
                                          placeholder="Type a message..."></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default btn-round btn-block btn-lg">Send Message
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
