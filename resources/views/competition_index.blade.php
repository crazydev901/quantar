@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style=" padding-bottom: 1rem;">
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
        </section>
        <!-- 1st Hero Variation -->
    </div>

    <div class="competitions-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="title-competition">
                        <p>{{ $competition->name  }}</p>
                    </div>
                    <div class="price-competition">
                        <p style="margin: 0">Award: {{ number_format( $competition->reward, 0) }} USD</p>
                    </div>
                    <div class="data_publish">
                        <p>@php
                            $date=date_create($competition->start);
                            echo date_format($date, 'jS F Y'); 
                            echo " – ";
                            $date=date_create($competition->end);
                            echo date_format($date, 'jS F Y'); 
                           @endphp
                        </p>
                    </div>
                    <div class="challenge">
                        <p>Challenge Participants: 81</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <section style="margin-bottom: 30px; margin-top: 30px">
        <div class="container">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                           href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                           href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                           href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab"
                           href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">Upload
                            the Results</a>
                    </li>
                </ul>
            </div>
            <div class="card shadow">
                <div class="card-body" style="max-height: 400px; overflow: auto;">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                             aria-labelledby="tabs-icons-text-1-tab">
                            <div>
                                {!! $competition->description !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                             aria-labelledby="tabs-icons-text-2-tab">
                            {!! $competition->data_description !!}
                            <div class="dowloand">
                                <div class="content-box__title-bar py-1">
                                    <div class="Title-brWRjy jsEHvP" style="line-height: 46px;">Data</div>
                                    <div class="btn-wrapper">
                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url(json_decode($competition->data)[0]->download_link) ?: '' }}"
                                           download class="btn btn-primary btn-block btn-default mb-3 mb-sm-0"
                                           style="padding: .4rem 1rem; background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;">
                                            <i class="fa fa-download" style="padding-right: 5px"></i>Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
                                 aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content text-center">
                                        <div class="modal-body p-0">
                                            <div class="card bg-secondary shadow border-0">
                                                <div class="card-header bg-white">
                                                    <div class="text-muted text-center">
                                                        <small style="font-size: 20px; color: #5c616b;">Terms &
                                                            Conditions
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="modal-body" style="color: #5c616b;">
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia, there live the blind texts. Separated
                                                        they live in Bookmarksgrove right at the coast of the Semantics,
                                                        a large language ocean.</p>
                                                    <p>A small river named Duden flows by their place and supplies it
                                                        with the necessary regelialia. It is a paradisematic country, in
                                                        which roasted parts of sentences fly into your mouth.</p>
                                                </div>
                                                <div class="card-body px-lg-5" style="padding-top: 0">
                                                    <form role="form" action="{{ asset("competitions/example.zip") }}"
                                                          method="get">
                                                        <div class="custom-control custom-control-alternative custom-checkbox"
                                                             style="text-align: left">
                                                            <input class="custom-control-input" id=" customCheckLogin"
                                                                   required type="checkbox">
                                                            <label class="custom-control-label" for=" customCheckLogin"><span
                                                                        style="color: #5c616b;">I agree terms</span></label>
                                                        </div>
                                                        <div class="text-center">
                                                            <button style="background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;"
                                                                    type="submit" class="btn btn-primary my-4">Download
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                             aria-labelledby="tabs-icons-text-3-tab">
                            <p class="description">{!! $competition->rules !!}</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel"
                             aria-labelledby="tabs-icons-text-5-tab">
                            @if($competition->results)
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <p class="description text-center">
                                            Your submission should be in CSV format. You can upload this in a
                                            zip/gz/rar/7z archive, if you prefer. Before the deadline,
                                            you can make as many submissions as you want, but only the last submission
                                            will be counted!
                                        </p>
                                    </div>
                                </div>

                                <p><strong>Result Status: {{$competition->results->status}}</strong></p>
                                <p><strong>Last upload date: {{$competition->results->created_at}}</strong></p>

                                <p><strong>Last upload file name: <a download
                                                                     href="{{ Storage::disk(config('voyager.storage.disk'))->url(json_decode($competition->results->result)[0]->download_link) }}">{{json_decode($competition->results->result)[0]->original_name}}</a></strong>
                                </p>
                                <form enctype="multipart/form-data" method="post"
                                      action="{{ route("competitions.upload", ["competition"=>$competition->id])  }}">
                                    @csrf
                                    <label for=""><strong>Data results:</strong> </label>
                                    <input required class="form-control" accept=".zip" type="file" name="result"
                                           placeholder="Upload Results">
                                    <small>please upload all results as zip archive</small>
                                    <br>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-success mx-auto form-control">Upload</button>
                                </form>

                            @else
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <p class="description text-center">
                                            Your submission should be in CSV format. You can upload this in a
                                            zip/gz/rar/7z archive, if you prefer. Before the deadline, you can make as
                                            many submissions as you want, but only the last submission will be counted!
                                        </p>
                                    </div>
                                </div>
                                <form enctype="multipart/form-data" method="post"
                                      action="{{ route("competitions.upload", ["competition"=>$competition->id])  }}">
                                    @csrf
                                    <label for=""><strong>Data results:</strong> </label>
                                    <input required class="form-control" accept=".zip" type="file" name="result"
                                           placeholder="Upload Results">
                                    <small>please upload all results as zip archive</small>
                                    <br>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-success mx-auto form-control">Upload</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">


                </div>
            </div>
        </div>
    </section>

@endsection

