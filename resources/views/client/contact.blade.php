@extends("client.app")

@section("componentcss")
<link href="{{asset('front/css/client/dashboard.css')}}" rel="stylesheet">
@stop

@section("content")
    <form class="content-container row" novalidate id="contact-form" method="POST">
        <h4 class="title">Contact us</h4>
        <div class="col-md-12 container-white mt-4">
            <h4 class="py-4">If you have any queries please feel free to message us through here, and we will get back to you as soon as we can</h4>
            <textarea class="form-control" rows="5" id="message" required></textarea>
        </div>
        <div class="col-sm-12 col-md-2 mt-4 p-0">
            <button type="button" class="btn btn-primary btn-block" onclick="$('#contact-form').submit();">Submit</button>
        </div>
    </form>
@stop

@section("script")
<!-- Plugin JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#contact-form").submit(function(e) {
        e.preventDefault();

        if ($("#contact-form")[0].checkValidity() === false) {
            e.stopPropagation();
            $("#contact-form").addClass('was-validated');
        }
        else {
            console.log("Booking");
            $.ajax({
                type: "POST",
                url: "save_contact",
                data: {
                    message: $("#message").val(),
                },
                success: function (data) {
                    $("#contact-form")[0].reset();
                    $("#contact-form").removeClass('was-validated');
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
@stop
