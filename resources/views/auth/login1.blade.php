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

<body id="page-top">
<!-- About Section -->
    <div class="row" id="login">
        <div class="col-sm-12 col-md-6">
            <div class="card-container border-top-blue ml-auto">
                <img src="{{asset('front/img/scientist.svg')}}" class="icon">
                <h4 class="title-small">Login as a Data-Scientist</h4>
                <input type="text" class="form-control" placeholder="Enter Access Code*" id="s-code">
                <button class="btn btn-block back-blue mt-4 font-weight-bold" onclick="scientistLogin()">Login</button>
                <a href="/register-scientist"  class="btn btn-block border-blue mt-3 mb-4 font-weight-bold">Not Registered?</a>
                <a href="/" class="back font-weight-bold">Go Back</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 ">
            <div class="card-container border-top-blue mr-auto">
                <img src="{{asset('front/img/i-suitcase.svg')}}" class="icon">
                <h4 class="title-small">Login as a Company</h4>
                <input type="text" class="form-control" placeholder="Enter Access Code*" id="c-code">
                <button class="btn btn-block back-blue mt-4 font-weight-bold" onclick="companyLogin()">Login</button>
                <a href="/register-company" class="btn btn-block border-blue mt-3 mb-4 font-weight-bold">Not Registered?</a>
                <a href="/" class="back font-weight-bold">Go Back</a>
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- <script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script> -->
<!-- Plugin JavaScript -->
<!-- <script src="{{asset('front/vendor/jquery-easing/jquery.easing.min.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function scientistLogin() {
        var code = $("#c-code").val();
        console.log("C clicked", code);

        $.ajax({
            type: "POST",
            url: "code_auth",
            data: {
                type: 'scientist',
                code: code,
            }
        });
    }
    function companyLogin() {
        var code = $("#c-code").val();
        console.log("C clicked", code);

        $.ajax({
            type: "POST",
            url: "code_auth",
            data: {
                type: 'company',
                code: code,
            },
            success: function (data) {
                swal({
                    title: '<h2 style="font-size: 84px;"> Welcome ' + data.user +'</h2>',
                    timer: 2000,
                    onClose: () => {
                        location.reload(true);
                    }
                })
            }
        });
    }
</script>
</body>

</html>
