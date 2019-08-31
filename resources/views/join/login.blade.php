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
            <form class="card-container border-top-blue ml-auto" novalidate id="scientist-form">
                <img src="{{asset('front/img/scientist.svg')}}" class="icon">
                <h4 class="title-small">Login as a data-scientist</h4>
                <input type="text" name="s-code" class="form-control" placeholder="Enter access code*" id="s-code" required>
                <button class="btn btn-block back-blue mt-4 font-weight-bold">Login</button>
                <a href="/register-scientist"  class="btn btn-block border-blue mt-3 mb-4 font-weight-bold">Not registered?</a>
                <a href="/noauth" class="back font-weight-bold">Go back</a>
            </form>
        </div>
        <div class="col-sm-12 col-md-6 ">
            <form class="card-container border-top-blue mr-auto" novalidate id="company-form">
                <img src="{{asset('front/img/i-suitcase.svg')}}" class="icon">
                <h4 class="title-small">Login as a company</h4>
                <input type="text" class="form-control" placeholder="Enter access code*" id="c-code" required>
                <button class="btn btn-block back-blue mt-4 font-weight-bold">Login</button>
                <a href="/register-company" class="btn btn-block border-blue mt-3 mb-4 font-weight-bold">Not registered?</a>
                <a href="/noauth" class="back font-weight-bold">Go back</a>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#scientist-form").submit(function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        if ($("#scientist-form")[0].checkValidity() === false) {
            $("#scientist-form").addClass('was-validated');
        }
        else {
            var code = $("#s-code").val();
            console.log("aaa ", code);

            $.ajax({
                type: "POST",
                url: "code_auth",
                data: {
                    type: 'scientist',
                    code: code,
                },
                success: function (data) {
                    if (data.user == 'fail') {
                        Swal.fire(
                          'Failed!',
                          'You entered the wrong access code!',
                          'error'
                        )
                    }
                    else {
                        location.href = "/";
                    }
                }
            });
        }
    });

    $("#company-form").submit(function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        if ($("#company-form")[0].checkValidity() === false) {
            $("#company-form").addClass('was-validated');
        }
        else {
            var code = $("#c-code").val();
            console.log("aaa ", code);

            $.ajax({
                type: "POST",
                url: "code_auth",
                data: {
                    type: 'company',
                    code: code,
                },
                success: function (data) {
                    console.log(data);
                    if (data.user == 'fail') {
                        Swal.fire(
                          'Failed!',
                          'You entered the wrong access code!',
                          'error'
                        )
                    }
                    else {
                        Swal.fire(
                          'Success!',
                          'Welcome to Quantar!',
                          'success',
                        ).then((result) => {
                            location.href = "/client/dashboard";
                        })
                        // swal({
                        //     title: '<h2 style="font-size: 84px;"> Welcome , ' + data.user +'! </h2>',
                        //     timer: 2000,
                        //     onClose: () => {
                        //         location.href = "/client/dashboard";
                        //     }
                        // })
                    }
                }
            });
        }
    });
</script>
</body>

</html>
