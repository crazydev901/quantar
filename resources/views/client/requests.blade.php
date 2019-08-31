@extends("client.app")

@section("content")
    <header class="masthead-sistem">
        <div class="container-quant-sistem">
            <div class="client-section text-left">
                <div class="active-1 mobile-active">
                    <h3>Active campaigns</h3>
                </div>
                <div class="active-2">
                    <p></p>
                </div>
            </div>
            <div class="container-fluid dashbord-campaings">

                @forelse($requests as $record)
                    <div class="campaigns">
                        <div class="blocks-compain">
                            <div class="block-1">
                                <div class="item-block">
                                    <p style="font-size: 20px">Campaign {{ $record->id }}</p>
                                </div>
                                <div class="item-block">
                                    <div class="color-item item-1"><img src="{{asset('front/img/duration.png')}}" alt=""></div>
                                    <p>{{ $record->timing }}</p>
                                </div>
                                <div class="item-block">
                                    <div class="color-item item-2"> <img src="{{asset('front/img/type.png')}}" alt=""></div>
                                    <p>{{ $record->data_type }}</p>
                                </div>
                                <div class="item-block">
                                    <div class="color-item item-3"><img src="{{asset('front/img/topic.png')}}" alt=""></div>
                                    <p>{{ $record->topic }}</p>
                                </div>
                                <div class="item-block">
                                    <div class="color-item item-4"><img src="{{asset('front/img/anonim.png')}}" alt=""></div>
                                    <p>{{ $record->is_anonimyzed }}</p>
                                </div>
                                <div class="item-block">
                                    <div class="color-item item-5"><img src="{{asset('front/img/timing.png')}}" alt=""></div>
                                    <p>{{ $record->star_date }}</p>
                                </div>
                            </div>
                            <div class="block-2">
                                <div class="item-status">
                                    <div class="color-item item-6"></div>
                                    <p>Received: {{$record->created_at->format("Y-m-d")  }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="campaigns">
                        <div class="blocks-compain">
                            <div class="block-3">
                                <div class="item-block">
                                    <div class="color-item item-6"></div>
                                    <p>Your currently have no campaigns</p>
                                </div>
                            </div>
                            <div class="block-4">
                                <div class="item-status">
                                    <div class="color-item item-6"></div>
                                    <p>NA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse


                <div class="add-competition">
                    <div class="create">
                        <a href="{{route("client.dashboard")}}" class="add-button text-decoration-none"><i class="lnr lnr-plus-circle"></i>
                            Create a new campaign</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
