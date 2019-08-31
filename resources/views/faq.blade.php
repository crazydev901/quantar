@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style="padding-bottom: 1rem; padding-top: 3rem;">
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
            <div class="container d-flex">
                <div class="col px-0">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="{{asset('../assets/img/theme/home-2-phone-2.png')}}" class="img-fluid wow fadeIn "
                                 alt="">
                        </div>
                        <div class="col-lg-7 py-5 faq-page faq_padding">
                            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                               style="padding-top: 25px; opacity: 1; transform: translateZ(0px) translateY(0%);">
                                <span class="mr-1">
                                    <a href="{{route('competitions')}}">Home</a>
                                </span>
                                <span class="breadcrumbs_span breadcrumb-item">Faq</span>
                            </p>
                            <h1 class="display-3 py-5 text-white text-center">FAQ Page</h1>
                        </div>
                    </div>
                </div>
                <a href="#six" class="scroll ntWayPoint active" style="bottom: -18px !important;"><i
                            class="fa fa-angle-down bounce animated"></i></a>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>

    <section id="six">
        <div class="block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="faqsec list-faq">
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">How do I
                                    enter a competition?
                                </h2>
                                <div class="content" style="display: block;">
                                    <p> - Make sure you create an account by clicking Sign Up <br>
                                        - Browse the competitions <br>
                                        - Join the competition (you must enter to download the dataset) <br>
                                        - Make sure to read competition guidelines and privacy policy <br>
                                        - Download the data <br>
                                        - Build model and develop your insights <br>
                                        - submit the results of your model on the test set <br>
                                        - Watch yourself on the Leaderboard <br>
                                        - The final winners will be announced at the close of the competition <br>
                                    </p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">How will
                                    I get my prize money? Are there any conditions?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p>The prize money is available to all contestants regardless of skill set. Upon
                                        authentication, the prize money
                                        will be paid directly. Quantar is not liable for fees or taxes liable in your
                                        home country upon
                                        receiving the funds. Any relevant conditions will be stated in the Competition
                                        Rules and Terms of Use.</p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">There
                                    are no restrictions on individual users.
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p>Ofcourse! We actively encourage students to enter into competitions amongst
                                        friends or represent their respective universities. We believe collaboration is
                                        essential
                                        to developing the best possible outcome. However, if you feel you have mastered
                                        data analytics, no problem! There are no restriction on individual users. </p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">As a
                                    competition host, do I have to share data publicly? What about data privacy?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p>Competition hosts would have to share a certain degree information within their
                                        datasets. We work with our network partners to ensure data is anonymised and
                                        processed in accordance with relevant regulatory requirements.</p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">Is it
                                    free to enter Quantar?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p>Yes! Quantar’s platform and data are entirely free. We also provide a collection
                                        of data sets from our corporate partners. </p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">Q-points
                                    formula?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p> - 5 points for each piece of information you include about yourself on your
                                        profile (skills, location, university, wechat etc.) <br>
                                        - 10 point for inviting a friend <br>
                                        - 20 points for joining a competition <br>
                                        - 30 points for submission of solution <br>
                                        - 100 points for 3rd place <br>
                                        - 200 points for 2nd place <br>
                                        - 500 points for 1st place <br>
                                    </p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                                    Conversion rate?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p> 1 Q-Point = 1 Q-Coin <br>
                                        {{--1 Q-coin =  10 Q-coins--}}
                                        {{--Chinese Yuan--}}
                                    </p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">What is the difference between Q-points and Q-coins?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p> Q-coins are Quantar’s own currency!</p>
                                </div>
                            </div>
                            <div id="toggle-widget" class="experties">
                                <h2 class="wow fadeInUp ui-state-active" data-wow-delay="0s"
                                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">How can
                                    I use Q -coins?
                                    <span class="mkdf-accordion-mark">
                                        <span class="mkdf_icon_plus icon_plus"></span>
                                        <span class="mkdf_icon_minus icon_minus-06"></span>
                                    </span></h2>
                                <div class="content" style="display: block;">
                                    <p> - Cash out your Q-coins! Just write to the Quantar support and we will give you
                                        updates when coins will be available to be cashed out. <br>
                                        - Use Q-coins on partnered products and services. <br>
                                        - Use Q-coins within partner universities and earn credits on campus
                                        - Q-coins coming soon!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection