</section>
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
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href="{{asset('front/css/home.css')}}" rel="stylesheet">

</head>

<body id="page-top" style="background-color: #f5f8fa">
<!-- About Section -->
    <div class="row" id="registerS">
        <div class="col-sm-12 col-md-3 d-none d-md-block">
            <div class="align-center">
                <div id ="circle"></div>
                <img src="{{asset('front/img/woman.svg')}}">
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <form class="align-center" id="reg-form">
                <h4 class="title-small">Register as a data-scientist</h4>
                <input type="text" class="form-control mt-4 font-weight-bold" placeholder="Your name*" name="name" id="name" required>
                <input type="email" class="form-control mt-4 font-weight-bold" placeholder="Your email*" name="email" id="email" required>
                <button class="btn btn-block back-blue mt-4 font-weight-bold">Request access</button>
                <a href="/noauth" class="btn btn-block border-blue mb-4 font-weight-bold">Go back</a>
            </form>
        </div>
    </div>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- <script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script> -->
<!-- Plugin JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    setLeftSideSize();
    $(window).resize(setLeftSideSize);

    function setLeftSideSize() {
        var cw = $('#circle').width();
        var mt = ( $('#registerS').height() - cw ) / 2;
        $('#circle').css({'height': cw+'px', 'top': mt + 'px'});

        mt = cw / 9 * 10 - $('#registerS img').width();
        mt = mt / 2;
        $('#registerS img').css({'left' : mt + 'px'})
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#reg-form").submit(function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        if ($("#reg-form")[0].checkValidity() === false) {
            $("#reg-form").addClass('was-validated');
        }
        else {
            $.ajax({
                type: "POST",
                url: "save_booking",
                data: {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    number: "",
                    subject: "Request Access",
                    message: "Scientise Request Access",
                },
                success: function (data) {
                    Swal.fire(
                      'Success!',
                      'You request is sent!',
                      'success'
                    )
                }
            });
        }
    });
</script>
</body>

</html>
