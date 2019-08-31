<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Quantar</title>
    <link href="{{asset('front/img/favicon.png')}}" rel="icon" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{asset('front/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="{{asset('front/css/home.css')}}" rel="stylesheet">

</head>

<body id="page-top">
<header>
<!-- Header -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-bg fixed-top">
    <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="{{asset('front/img/black-logo.svg')}}" alt="logo" style="">
            <button type="button" class="navbar-toggler float-left" data-toggle="collapse" data-target="#nav">
                <!-- <i class="fa fa-bars"></i> -->
                <img src="{{asset('front/img/bars.svg')}}" alt="">
            </button>
        </a>
        
        <div class="collapse navbar-collapse justify-content-between" id="nav" style="    max-height: none !important;"> 
            <!-- Links -->
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item px-5">
                    <a class="nav-link" id="to-process">Process</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" id="to-solution">Quantar solution</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link" id="to-booking">Book consultation</a>
                </li>
            </ul> -->
            <ul class="nav navbar-nav ml-auto" id="right-menu">
                <li class="nav-item mr-4">
                    <a class="nav-link" id="to-process">Process</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" id="to-solution">Quantar solution</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" id="to-booking">Book consultation</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link border-blue text-center px-5" href="/f-login">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle back-blue text-center" id="navbardrop" data-toggle="dropdown" href="#" >Request access</a>
                    <div id="reg-dropdown" class="dropdown-menu dropdown-menu-right p-3 mt-4"
                        style="border-top: 2px solid #5e81f4; width: 210%">
                        <a class="dropdown-item back-blue text-center py-2" href="/register-scientist">Data-scientists</a>
                        <a class="dropdown-item back-blue text-center py-2 mt-3" href="/register-company">Companies</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- About Section -->
<section id="about" class="section-container">
    <center>
    <h4 class="title-large">Your next gen big data analytics solution</h4>
    <p class="explanation">Bridging data-scientists and companies in a global network solving real problems</p>
    </center>
    <div class="row">
        <div class="col-sm-12 col-md-4 card-container border-top-blue p-5 mt-6">
            <img src="{{asset('front/img/scientist.svg')}}" class="icon">
            <h4 class="title-small">Data-scientists</h4>
            <p class="explanation text-justify">Apply to join an extensive network of data-scientists and enthusiasts from around the world
            <br><br>
            Data-scientists are tasked with working on real world problems by developing dynamic initiatives that aid in the growth and development of our network partners</p>
            <a class="btn btn-block back-blue mt-5" href="/register-scientist">Request Access</a>
        </div>
        <div class="col-md-2 mt-6 d-none d-md-block"
            style="background-image: url('{{asset('front/img/woman.svg')}}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;">
            <!-- <img src="{{asset('front/img/woman.svg')}}"> -->
        </div>
        <div class="col-md-2 mt-6 d-none d-md-block" style="background-image: url('{{asset('front/img/man.png')}}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;">
            <!-- <img src="{{asset('front/img/man.png')}}" class="man"> -->
        </div>
        <div class="col-sm-12 col-md-4 card-container border-top-blue p-5 mt-6">
            <img src="{{asset('front/img/i-suitcase.svg')}}" class="icon">
            <h4 class="title-small">Companies</h4>
            <p class="explanation text-justify">Quantar’s unique offering provides companies with access to a comprehensive network of data-scientists whom endeavour to provide multifaceted solutions that drive growth and identify efficiencies in order to achieve better results and profitability for any respective project</p>
            <a class="btn btn-block back-blue mt-5" href="/register-company">Request Access</a>
        </div>
    </div>
</section>

<section id="process" class="section-container">
    <div class="gray-back text-center">
        <h4 class="title-large">Process</h4>
        <p class="explanation">Providing big data solutions for all companies big and small. Quantar utilizes it’s vetted network of data-scientists to provide actionable insights to companies across an array of sectors</p>
    </div>
    <div class="row p-5">
        <div class="col-md-4 row">
            <div class="col-md-9"><center>
                <img src="{{asset('front/img/step1.svg')}}">
                <h4 class="title-large">Step 1</h4>
                <p class="explanation">Partner companies tell us their business needs and problems and provide anonymised data</p>
            </center></div>
            <div class="col-md-3 text-center m-auto">
                <i class="fas fa-chevron-right" style="font-size: 50px;"></i>
            </div>
        </div>
        <div class="col-md-4 row">
            <div class="col-md-9"><center>
                <img src="{{asset('front/img/step2.svg')}}" style="margin-top: 16px;">
                <h4 class="title-large">Step 2</h4>
                <p class="explanation">Our vetted community of leading data-scientists will analyse data and create insights</p>
            </center></div>
            <div class="col-md-3 text-center m-auto">
                <i class="fas fa-chevron-right" style="font-size: 50px;"></i>
            </div>
        </div>
        <div class="col-md-4 row">
            <div class="col-md-9"><center>
                <img src="{{asset('front/img/step3.svg')}}">
                <h4 class="title-large">Step 3</h4>
                <p class="explanation">Companies improve their business/scientists harness their skills and gain real world experience </p>
            </center></div>
        </div>
    </div>
</section>

<section id="solution" class="section-container">
    <div class="gray-back text-center">
        <h4 class="title-large">The Quantar solution is serving the unserved</h4>
        <p class="explanation">Harnessing the power of big data can be costly and unattainable for certain companies. Quantar streamlines this process through its expensive network of data-scientists, enabling it to provide affordable and effective solutions. Through the law of large numbers, Quantar has the ability to provide unique
and creative solutions for any respective project</p>
    </div>
    <div class="text-center mt-5">
        <img src="{{asset('front/img/solution.png')}}" style="width: 100%">
    </div>
</section>

<section id="booking" class="section-container">
    <div class="gray-back">
        <div class="text-center m-auto" style="max-width: 800px;">
            <h4 class="title-large">We love giving data advice</h4>
            <p class="explanation">Get in touch for a free chat with a senior data-scientist or about any queries you may have</p>
            <form class="row" id="booking-form">
                <div class="col-sm-12 col-md-6 mt-3">
                    <input type="text" class="form-control" id="name" placeholder="Your name*" required>
                </div>
                <div class="col-sm-12 col-md-6 mt-3">
                    <input type="email" class="form-control" id="email" placeholder="Your email*" required>
                </div>
                <div class="col-sm-12 col-md-6 mt-3">
                    <input type="text" class="form-control" id="number" placeholder="Your number*" required>
                </div>
                <div class="col-sm-12 col-md-6 mt-3">
                    <input type="text" class="form-control" id="subject" placeholder="Your subject*" required>
                </div>
                <div class="col-md-12 mt-3">
                    <textarea class="form-control" id="message" placeholder="Your message*" rows="4" required></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <button class="btn btn-block back-blue mt-4 btn-block" onclick="">Book consultion / Contact us</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="term" class="section-container text-center p-4" style="background: #F5F8FA">
    
    <p class="explanation mt-0" style="color: #8E8E8E">29 Holywell Row</p>
    <p class="explanation mt-0" style="color: #8E8E8E">EC2A 4JB</p>
    <p class="explanation mt-0" style="color: #8E8E8E">London, UK</p>
    <br>
    <p class="explanation mt-0" style="color: #8E8E8E">Copyright &copy; 2019 by Quantar.io All rights reserved</p>

</section>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- <script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script> -->
<!-- Plugin JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    // Navbar Actions
    $(document).on('click', '#to-process', function (e) {
        var pos = $("#process").offset().top - $(".navbar").height() - 40;
        $("html, body").animate({ scrollTop: pos }, 600);
        return false;
    });
    $(document).on('click', '#to-solution', function (e) {
        var pos = $("#solution").offset().top - $(".navbar").height() - 40;
        $("html, body").animate({ scrollTop: pos }, 600);
        return false;
    });
    $(document).on('click', '#to-booking', function (e) {
        var pos = $("#booking").offset().top - $(".navbar").height() - 40;
        $("html, body").animate({ scrollTop: pos }, 600);
        return false;
    });
    // $(document).on('click', '#to-term', function (e) {
    //     var pos = $("#term").offset().top - $(".navbar").height() - 40;
    //     $("html, body").animate({ scrollTop: pos }, 600);
    //     return false;
    // });


    // $(document).on('click', 'a[href^="#"]', function (event) {
    //     event.preventDefault();

    //     $('html, body').animate({
    //         scrollTop: $($.attr(this, 'href')).offset().top
    //     }, 500);
    // });
    // Save booking
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#booking-form").submit(function(e) {
        e.preventDefault();
        e.stopPropagation();

        console.log("Booking");
         if ($("#booking-form")[0].checkValidity() === false) {
            $("#booking-form").addClass('was-validated');
        }
        else {
            $.ajax({
                type: "POST",
                url: "save_booking",
                data: {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    number: $("#number").val(),
                    subject: $("#subject").val(),
                    message: $("#message").val(),
                },
                success: function (data) {
                    $("#booking-form")[0].reset();
                    Swal.fire(
                      'Success!',
                      'You submitted a request!',
                      'success'
                    )
                }
            });
        }
    });

    @isset($success)
    swal({
        title: '<h2 style="font-size: 84px;"> {{$success}} </h2>',
        timer: 2000,
    });
    @endisset
</script>

</body>

</html>
