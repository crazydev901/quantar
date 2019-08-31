@extends("client.app")

@section("componentcss")
<link href="{{asset('front/css/client/mycampaigns.css')}}" rel="stylesheet">
@stop

@section("content")
    <div class="content-container">
        <h4 class="title">My campaigns</h4>
        @forelse($requests as $record)
            <div class="row">
                <div class="col-md-12 container-white row blue-border mt-3">
                    <div class="col-xs-12 col-md-2">
                        <h4>{{ $record->name }}</h4>
                    </div>
                    <div class="col-sm-12 col-md-2 flex">
                        <i class="far fa-clock"></i>
                        <p>{{ $record->timing }}</p>
                    </div>
                    <div class="col-sm-12 col-md-2 flex">
                        <i class="far fa-calendar-alt"></i>
                        <p>{{ $record->star_date }}</p>
                    </div>
                    <div class="col-sm-12 col-md-2 flex">
                        <i class="fab fa-react"></i>
                        <p>{{ $record->data_type }}</p>
                    </div>
                    <div class="col-sm-12 col-md-4 flex">
                        <i class="far fa-clipboard"></i>
                        <p>{{ $record->topic }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-block">
                <h5>Your currently have no campaigns</h5>
            </div>
        @endforelse
<!--         <h4 class="title">Completed Campaigns</h4>
        <div class="col-md-12 container-white margin-top-20 row">
            <div class="col-sm-12 col-md-2">
                <h4>Campaign 8</h4>
            </div>
            <div class="col-sm-12 col-md-2 flex">
                <i class="far fa-clock"></i>
                <p>6 months</p>
            </div>
            <div class="col-sm-12 col-md-2 flex">
                <i class="far fa-calendar-alt"></i>
                <p>04/06/2019</p>
            </div>
            <div class="col-sm-12 col-md-2 flex">
                <i class="fab fa-react"></i>
                <p>Structured Data/Tubular</p>
            </div>
            <div class="col-sm-12 col-md-4 flex">
                <i class="far fa-clipboard"></i>
                <p>Intelligent Image/Video Search</p>
            </div>
        </div> -->
    </div>
@stop
