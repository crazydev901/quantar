@extends("client.app")

@section("componentcss")
<link href="{{asset('front/css/client/dashboard.css')}}" rel="stylesheet">
@stop

@section("content")
    <form class="content-container row" novalidate id="campaign-form" method="post">
        <h4 class="title">Create a campaign</h4>
        <div class="col-md-12 container-purple mt-4">
            <h4>{{auth()->user()->name}}, start your campaign here!</h4>
            <p style="margin-bottom: 0px">Select from the following options, so we can arrange the best campaign for you!</p>
        </div>

        <div class="col-md-12 container-white mt-4 row">
            <label class="mt-auto">Name your campaign</label>
            <input type="text" id="campaign_name" class="campaign-name form-control" placeholder="Enter a name for your campaign here" required>
        </div>

        <div class="col-md-12 row mt-4 px-0">
            <div class="col-sm-12 col-md-4 p-4 pl-0">
                <div class="container-white">
                    <h4 class="d-inline-block py-4">Is data available?</h4>
                    <img src="{{asset('front/img/i-data.svg')}}" alt="" class="float-right pt-4">
                    <button type="button" class="btn btn-primary btn-block mt-1" id="yes">Yes</button>
                    <button type="button" class="btn btn-default btn-block mt-3" id="no" onclick="">No</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-4 pl-0">
                <div class="container-white" style="padding-right: 80px">
                    <h4 class="d-inline-block py-4">Length of campaign</h4>
                    <img src="{{asset('front/img/i-clock.svg')}}" alt="" class="float-right pt-4">
                    <p>Enter the length of your campaign in months</p>
                    <div class="flex">
                        <input type="number" id="campaign_timing" class="input form-control" min="1" max="12" required>
                        <label class="months">Months</label>
                    </div>
                </div> 
            </div>
            <div class="col-sm-12 col-md-4 p-4 px-0">
                <div class="container-white" style="padding-right: 80px">
                    <h4 class="d-inline-block py-4">Start date of campaign</h4>
                    <img src="{{asset('front/img/i-calednar.svg')}}" alt="" class="float-right pt-4">
                    <p style="margin-bottom: 36px!important;">Enter the start date of your campaign</p>
                    <div class="d-flex mb-1" style="margin-top: ">
                        <input type="number" id="campaign-day" class="input form-control mr-2" min="1" max="31" placeholder="DD" required>
                        <input type="number" id="campaign-month" class="input form-control mr-2" min="1" max="31" placeholder="MM" required>
                        <input type="number" id="campaign-year" class="input form-control" min="2000" max="2099" placeholder="YYYY" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 row mt-4 px-0">
            <div class="col-sm-12 col-md-4 pl-0 pr-4">
                <div class="container-white">
                    <h4 class="d-inline-block py-4">Type of data</h4>
                    <img src="{{asset('front/img/i-atom.svg')}}" alt="" class="float-right pt-4">
                    
                    <label class="radio font-weight-normal">Audio / speech
                        <input type="radio" checked="checked" name="type_data" value="Audio/Speech">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Structured data / tubular
                        <input type="radio" name="type_data" value="Structured Data/Tubular">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Boolean
                        <input type="radio" name="type_data" value="Boolean">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Images
                        <input type="radio" name="type_data" value="Images">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Text
                        <input type="radio" name="type_data" value="Text">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Sensor data / IoT
                        <input type="radio" name="type_data" value="Sensor data/IoT">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Time series
                        <input type="radio" name="type_data" value="Time Series">
                        <span class="checkround"></span>
                    </label>
                    <label class="radio font-weight-normal">Enter custom type of data
                        <input type="radio" name="type_data" value="custom_type_data">
                        <span class="checkround"></span>
                    </label>
                    <textarea class="form-control" rows="4" id="custom_type_data" disabled="true"  placeholder="Enter the custom topic of data here"></textarea>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 padding-side-0">
                <div class="container-white">
                    <h4 class="d-inline-block py-4">Topic of data</h4>
                    <img src="{{asset('front/img/i-sheet.svg')}}" alt="" class="float-right pt-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label class="radio font-weight-normal">Asset / fleet management
                                <input type="radio" checked="checked" name="topic_data" value="Asset / fleet management">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Demand forecasting
                                <input type="radio" name="topic_data" value="Demand forecasting">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Process optimisation
                                <input type="radio" name="topic_data" value="Process optimisation">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Supply chain optimisation
                                <input type="radio" name="topic_data" value="Supply chain optimisation">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Customer service
                                <input type="radio" name="topic_data" value="Customer service">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Personalisation & customisation
                                <input type="radio" name="topic_data" value="Personalisation & customisation">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Enter custom topic of data
                                <input type="radio" name="topic_data" value="custom_topic_data">
                                <span class="checkround"></span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label class="radio font-weight-normal">Content centre automation
                                <input type="radio" name="topic_data" value="Content centre automation">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">IT automation
                                <input type="radio" name="topic_data" value="IT automation">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Quality control
                                <input type="radio" name="topic_data" value="Quality control">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Automated processing
                                <input type="radio" name="topic_data" value="Automated processing">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Intelligent image / video search
                                <input type="radio" name="topic_data" value="Intelligent image / video search">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Public safety & emergency response
                                <input type="radio" value="Public safety & emergency response" name="topic_data" value="">
                                <span class="checkround"></span>
                            </label>
                            <label class="radio font-weight-normal">Sales process automisation
                                <input type="radio" value="Sales process automisation" name="topic_data" value="">
                                <span class="checkround"></span>
                            </label>
                        </div>
                    </div>
                    <textarea class="form-control" rows="6" id="custom_topic_data" disabled="true" placeholder="Enter the custom type of data here"></textarea>
                </div>    
            </div>
        </div>

        <div class="col-md-12 container-white mt-4">
            <h4 class="py-4">Additinal comments</h4>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="col-md-12 row mt-4 px-0">
            <div class="col-sm-12 col-md-2 ml-auto">
                <button id="submit-btn" type="button" class="btn btn-primary" style="width: 100%;" onclick="$('#campaign-form').submit();">Submit</button>
            </div>
        </div>
    </form>
@stop

@section("script")
<!-- Plugin JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    var is_anonimyzed = "yes";
    // Data available check box
    $(document).on('click', '#yes', function() {
        is_anonimyzed='yes';
        $("#yes").addClass("btn-primary");
        $("#no").removeClass("btn-primary");
    });
    $(document).on('click', '#no', function() {
        is_anonimyzed='no';
        $("#no").addClass("btn-primary");
        $("#yes").removeClass("btn-primary");
    });
    // type of data, topic of data radio custom input disable/enable
    $("input[name='type_data']").change(function(e){
        if($(this).val() == 'custom_type_data') {
            $("#custom_type_data").attr('disabled', false);
        } else {
            $("#custom_type_data").attr('disabled', true);
        }
    });
    $("input[name='topic_data']").change(function(e){
        if($(this).val() == 'custom_topic_data') {
            $("#custom_topic_data").attr('disabled', false);
        } else {
            $("#custom_topic_data").attr('disabled', true);
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // function onSubmit() {
    $("#campaign-form").submit(function(e) {
        e.preventDefault();

        if ($("#campaign-form")[0].checkValidity() === false) {
            e.stopPropagation();
            $("#campaign-form").addClass('was-validated');
        }
        else {
            console.log("creation", is_anonimyzed);

            var type_data = $("input[name='type_data']:checked").val();
            if (type_data == "custom_type_data")
                type_data = $("#custom_type_data").val();

            var topic_data = $("input[name='topic_data']:checked").val();
            if (topic_data == "custom_topic_data")
                topic_data = $("#custom_topic_data").val();

            var start_date = $("#campaign-day").val() + "/" + $("#campaign-month").val() + "/" + $("#campaign-year").val();
            console.log(type_data, topic_data, start_date);
            $.ajax({
                type: "POST",
                url: "save_compaign",
                data: {
                    name: $("#campaign_name").val(),
                    is_anonimyzed: is_anonimyzed,
                    timing: $("#campaign_timing").val(),
                    data_type: type_data,
                    topic: topic_data,
                    start_date: start_date,
                    comment: $("#comment").val()
                },
                success: function (data) {
                    // Clear Inputs
                    $("#campaign-form")[0].reset();
                    $("#campaign-form").removeClass('was-validated');
                    is_anonimyzed='yes';
                    $("#yes").addClass("btn-primary");
                    $("#no").removeClass("btn-primary");

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
