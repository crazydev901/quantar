@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style="padding-bottom: 2rem;">
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
                        <div class="col-lg-4">
                            <img src="../assets/img/theme/aboutme-img1.png" class="img-fluid wow fadeIn " alt="">
                        </div>
                        <div class="col-lg-8 py-5">
                            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
                               style="opacity: 1; transform: translateZ(0px) translateY(0%);">
                                <span class="mr-1">
                                    <a href="{{url('/')}}">Home</a>
                                </span>
                                <span class="breadcrumbs_span breadcrumb-item">Competitions</span>
                            </p>
                            <h1 class="display-3 text-white text-center page-competition">Competitions</h1>
                        </div>
                    </div>
                </div>
                <a href="#competition" class="scroll ntWayPoint active"><i class="fa fa-angle-down bounce animated"></i></a>
            </div>
        </section>
        <!-- 1st Hero Variation -->
    </div>
    @foreach($competitions as $competition)
        <div id="competition" class="App__contained___3emDO">
            <div class="competition-content">
                <div class="row">
                    <div class="col-md-2 col-sm-6 py-3" style="text-align: -webkit-center;">
                        @if($competition->category_url)
                            <a href="{{$competition->category_url}}">
                                <div class="competition-img"
                                     style="background-image: url({{ Voyager::image($competition->category )  }});">
                                </div>
                            </a>
                            @else
                            <div class="competition-img"
                                 style="background-image: url({{ Voyager::image($competition->category )  }});">
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-6 py-4 padingg">
                        <div class="primary">
                            <div class="primary-title">
                                @if($competition->created_at < \Carbon\Carbon::now()  )
                                    <a href="#" data-toggle="modal"
                                       data-target="#modal-form{{$competition->id}}">{{$competition->name}}</a>
                                @else
                                    <a href="{{ $competition->category_url or "#!"  }}">{{$competition->name}}</a>
                                @endif
                            </div>
                            <div class="primary-subtitle">
                                <p>{{ $competition->excerpt  }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 py-4 padding">
                        <div class="row price">
                            <div class="col-12">
                                <div class="price-title text-md-right">
                                    <p>
                                        <small>Award:</small> ${{ number_format($competition->reward) }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 text-center button-competition">
                                @if($competition->created_at < \Carbon\Carbon::now()  )

                                    @if($competition->started())
                                        <a href="{{ route("competitions.index", ["competition" => $competition->id])  }}"
                                           class="btn btn-block btn-default competition-button"
                                        >
                                <span style=" padding-right: 0.5em;" class="btn-inner--icon">
                                    <i class="fa fa-trophy"></i></span>Open Competition
                                        </a>
                                    @else
                                        <a href="#" class="btn btn-block btn-default competition-button"
                                           data-toggle="modal"
                                           data-target="#modal-form{{$competition->id}}">
                                <span style=" padding-right: 0.5em;" class="btn-inner--icon">
                                    <i class="fa fa-trophy"></i></span>Join Competition
                                        </a>
                                    @endif

                                @else
                                    <a href="{{ $competition->category_url or "#!"  }}" class="btn btn-block btn-default competition-button">
                                <span style=" padding-right: 0.5em;" class="btn-inner--icon">
                                    <i class="fa fa-trophy"></i></span>COMING SOON
                                    </a>
                                @endif
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="price-subtitle">
                                    {{--@if($competition->created_at < \Carbon\Carbon::now()  )--}}
                                        {{--<p>{{ trans_choice("competition.days",  $competition->created_at->diff(now())->days ,["days" => $competition->created_at->diff(now())->days] ) }}</p>--}}
                                    {{--@endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal-form{{$competition->id}}" tabindex="-1" role="dialog"
                     aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">

                            <div class="modal-body p-0">
                                <div class="card bg-secondary shadow border-0">
                                    <div class="card-header bg-white">
                                        <div class="text-muted text-center">
                                            <small style="font-size: 20px; color: #5c616b;">Join
                                                Competition
                                            </small>
                                        </div>
                                    </div>
                                    <div class="modal-body" style="color: #5c616b;">
                                        <div class="nav-wrapper">
                                            <ul class="nav nav-pills nav-fill flex-column flex-md-row"
                                                id="tabs-icons-text" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0 active"
                                                       id="tabs-icons-text-1-tab" data-toggle="tab"
                                                       href="#tabs-icons-text-1" role="tab"
                                                       aria-controls="tabs-icons-text-1" aria-selected="true"><i
                                                                class="ni ni-single-01 mr-2"></i>Join Individually</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0 " title="available soon"
                                                       id="tabs-icons-text-2-tab" disabled="true" data-toggle="tab"
                                                       href="#tabs-icons-text-2" role="tab"
                                                       aria-controls="tabs-icons-text-2" aria-selected="false"><i
                                                                class="ni ni-multiple-11 mr-2"></i>Apply with Team</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tabs-icons-text-1"
                                                         role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                                        <p class="description"> @include("terms-condition") </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                                         aria-labelledby="tabs-icons-text-2-tab">
                                                        <p class="description"><strong>Available soon, in the meantime
                                                                refer your friends to join the community</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-lg-5" style="padding-top: 0">
                                        <form role="form"
                                              action="{{ route("competitions.index", ["competition" => $competition->id])  }}"
                                              method="get">
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id="customCheckRegister{{$competition->id}}"
                                                       type="checkbox" required>
                                                <label class="custom-control-label" for="customCheckRegister{{$competition->id}}">
                                          <span>I agree to terms and conditions
                                          </span>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success my-4">Join Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
