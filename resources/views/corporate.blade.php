@extends("layouts.app")
@section("brand-bg", "brand-transparent")
@section("scripts")
    <script>
        function formAccess( action ){
            event.preventDefault();

                    // do other things for a valid form
                    $("input[name='action']").val(action);
                    $("form.form").find('[type="submit"]').trigger('click');;

        }
    </script>
@append
@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <div class="selene-breadcumb-corporate">
            <!-- Shape -->
            <div class="welcome-bg-shape">
                <img class="welcome-first-shape" src="{{asset('assets/img/corporate/1.png')}}" alt="">
            </div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="corporate_content text-left">
                            @if(isset($passcode))
                                <p>Asia's Leading Community of Data Enthusiasts, Empowering
                                    Emerging Markets to Tackle their Biggest Data Challenges at Scale</p>
                            @else

                                <form action="{{ route("corporate")  }}" method="post" class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10 pt-5">
                                            <p>To get access enter your email and passcode</p>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                       id="exampleFormControlInput1"
                                                       placeholder="name@company.com" required>
                                                <label for="action">Passcode</label>
                                                <input type="text" name="passcode" class="form-control"
                                                       id="exampleFormControlInput1"
                                                       placeholder="A1COD45#">
                                                <input type="hidden" name="action" value="passcode">
                                                @if($errors->has("passcode"))
                                                    <small class="text-danger">  {{$errors->first("passcode")}} </small>
                                                @endif
                                                <br>
                                                <button type="submit" style="display: none"></button>
                                                <span id="access" onclick="formAccess('access');" class="btn btn-success">Access</span>
                                                <span id="request" onclick="formAccess('request');" class="btn btn-success">Request</span>
                                            </div>
                                            <small> To request an pass code please fill email and press request button
                                            </small>
                                        </div>
                                    </div>
                                </form>

                                <form action="{{ route("corporate")  }}" method="post" class="form">
                                    @csrf
                                    <div class="row">
                                        @if (\Session::has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                                                <span class="alert-inner--text">
                                                <strong>Thank you {{ \Session::get('success')  }} </strong> for requesting the passcode! One of our team members will contact you soon via email to provide with access to the corporate page!</span>
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 1st Hero Variation -->
    </div>
    @if(isset($passcode))
        <section class="section bg-corporate">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="content_corporate">
                            <h3>Our Service</h3>
                            <p>We've created a pan-Asian community of data scientists that compete to come up with the
                                best
                                statistical model
                                for your most challenging predictive problems.</p>
                            <p>We fuel Emerging Market development by enabling Small to Medium Sized Enterprises (SMEs)
                                to
                                scale rapidly
                                through the power of data analytics, utilising the latest machine learning
                                techniques.</p>
                            <p>Bring in our distributed community of data scientists to consult on your toughest
                                business
                                problems.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="cutting">
                            <h3>Cutting Edge AI & Machine Learning</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 cutting_description">
                                <p>Our continually expanding community keeps us at
                                    the forefront of technological progress.</p>
                                <p>The exponential rise of machine learning is largely due
                                    to the active community supporting it. This includes
                                    researchers and practitioners who are constantly
                                    pushing the boundaries of how machine learning can
                                    be applied.</p>
                                <p>Our community includes an increasing number of
                                    enthusiasts with atypical backgrounds, bringing in
                                    diverse experiences and points of view</p>
                            </div>
                            <div class="col-md-6 cutting_img1 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/2.png')}}" alt="">
                            </div>
                        </div>

                        <div class="cutting">
                            <h3>Distributed Network</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 cutting_description">
                                <p>Our revolutionary network allows for comparative
                                    advantage in its truest form, utilising mass collaboration
                                    to deliver the most efficient results.</p>
                                <p>We leverage the skills and expertise of a global
                                    community to meet your data challenges at scale</p>
                            </div>
                            <div class="col-md-6 cutting_img2 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/3.png')}}"
                                     style="margin-top: 0"
                                     alt="">
                            </div>
                        </div>

                        <div class="cutting">
                            <h3>Mutually Beneficial Partnerships</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 cutting_description">
                                <p>Competition is core to our community.</p>
                                <p>By turning individuals into stakeholders, we incentivise
                                    our members to actively grow the community which in
                                    turn leads to more scientists at your disposal.
                                </p>
                            </div>
                            <div class="col-md-6 cutting_img3 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/4.png')}}"
                                     style="margin-top: 0"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="why_title">
                            <h3>Why Us?</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="min_title">
                                    <h6>Efficiency & Agility</h6>
                                    <p>Our distributed network provides
                                        dynamic and efficient solutions to
                                        your data challenges.
                                    </p>
                                    <p>Unlike cumbersome teams of
                                        consultants, our community
                                        provides you with an agile
                                        workforce to meet your individual
                                        needs. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="min_title">
                                    <h6>Vast Network of Data Scientists</h6>
                                    <p>We harness our partnerships with
                                        world leading universities and
                                        institutions, drawing upon a wide
                                        range of expertise across
                                        industries.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="min_title">
                                    <h6>The Power of Competition</h6>
                                    <p>Competition is core to our business model.</p>
                                    <p>The free market of ideas drives out
                                        the least optimal solutions, leaving
                                        only the most powerful at your
                                        disposal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-corporate">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="competitive_corporate">
                            <h3>Competitive Advantages</h3>
                        </div>
                        <div class="cutting">
                            <h3>Scale</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 cutting_description">
                                <p>Access to our community is flexible and, unlike
                                    traditional consultants, we rapidly assemble teams en
                                    masse utilising the true power of scale.</p>
                                <p>Building and optimising predictive models is ideal for
                                    our crowd-sourcing platform because it allows
                                    participants to build on the incumbent, best performing
                                    model.</p>
                                <p>This process filters the low performing models and
                                    systematically drives increases in accuracy.</p>
                            </div>
                            <div class="col-md-6 cutting_img4 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/5.png')}}" alt="">
                            </div>
                        </div>

                        <div class="cutting">
                            <h3>Own Your Data</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 cutting_description">
                                <p>You will have guaranteed, worldwide IP rights and
                                    further opportunities to monetise your data.
                                </p>
                                <p>Our in-house leader-board keeps track of top
                                    performing individuals and models, we actively manage
                                    our community.
                                </p>
                            </div>
                            <div class="col-md-6 cutting_img3 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/6.png')}}" alt="">
                            </div>
                        </div>

                        <div class="cutting">
                            <h3>Free Marketing</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 cutting_description">
                                <p>Our network of data scientists, students, and
                                    researchers are constantly on the lookout for
                                    interesting, real-world projects.
                                </p>
                                <p>In working with our community, you freely market your
                                    organisation to the next generation of top data
                                    scientists.
                                </p>
                            </div>
                            <div class="col-md-6 col-12 cutting_img2 cutting_img5 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/7.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="why_title">
                            <h3>Our Four Step Process</h3>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-3 col-6 process_corporate">
                                <p>1. Case Study</p>
                            </div>
                            <div class="col-md-3 col-6 process_corporate">
                                <p>2. Data Analytics</p>
                            </div>
                            <div class="col-md-3 col-6 process_corporate">
                                <p>3. Modelling</p>
                            </div>
                            <div class="col-md-3 col-6 process_corporate">
                                <p>4. Output</p>
                            </div>
                        </div>
                        <div>
                            <img class="img-fluid" src="{{asset('assets/img/corporate/8.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-corporate">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="keeping_corporate">
                            <h3>Keeping Your Data Secure</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6 secure_corporate">
                                <p>Aside from delivering results, maintaining the security
                                    and anonymity of your data is our priority.
                                </p>
                                <p>We only allow active participants access to real time
                                    data sets, so you remain in complete control.
                                </p>
                                <p>And by ensuring we only deal with anonymised data,
                                    we maintain compliance with the most recent privacy
                                    legislation.
                                </p>
                            </div>
                            <div class="col-md-6 cutting_img4 cutting_img2 text-center">
                                <img class="img-fluid" src="{{asset('assets/img/corporate/9.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="why_title">
                            <h3>Corporate Partnerships</h3>
                            <p class="quantar_corporate">Quantar is committed to the growth of Emerging Markets.
                                Our unique data solutions may be used to drive
                                philanthropic causes. Quantar achieves this through its
                                connections to funding sources and strategic
                                partnerships, assisting to further implement solutions
                                that our network solves.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection