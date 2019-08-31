@extends("layouts.app")

@section("content")
    <div class="position-relative">
        <!-- shape Hero -->
        <section class="section section-lg section-shaped" style=" padding-bottom: 0 !important;">
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

    <section>
        <div class="container">
            <form action="{{ route("edit")  }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row m-y-2">

                    <!-- edit form column -->
                    <div class="col-lg-4 text-lg-center edit_title">
                        <h2>Edit Profile</h2>
                        <img src="{{asset($user->randomAvatar())}}" class="m-x-auto img-fluid img-circle"
                             alt="avatar"/>
                        <br><small> Avatar is setted randomly, change functionality coming soon </small>
                        {{--<h6 class="m-t-2 mt-2">Upload a different photo</h6>--}}
                        {{--<label class="custom-file">--}}
                            {{--<input type="file" id="file" name="avatar" class="custom-file-input">--}}
                            {{--<span class=" btn btn-primary custom-file-control">Choose file</span>--}}
                        {{--</label>--}}
                    </div>
                    <div class="col-lg-8 push-lg-4 personal-info" style="margin-top: 50px;">

                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Username</label>
                            <div class="col-lg-12">
                                <input class="form-control" name="name" type="text" value=" {{ $user->name  }} "/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Gender</label>
                            <div class="col-lg-3">
                                <select id="garden" name="gender" class="form-control" size="0">
                                    <option value="" @if(!$user->gender) selected @endif >Chose...</option>
                                    <option value="Male" @if($user->gender== "Male") selected @endif >Male</option>
                                    <option value="Female" @if($user->gender== "Female") selected @endif >Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Where are you based?</label>
                            <div class="col-lg-12">
                                <input class="form-control" name="location" type="text" value="{{ $user->location or ""  }}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Сhoose your University</label>
                            <div class="col-lg-12">
                                <input class="form-control" name="university" type="text" value="{{ $user->university or ""  }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">A bit about yourself, degrees,
                                projects you are proud of or anything else</label>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="bio" id="Message" rows="4"
                                          placeholder="Bio">{{$user->bio}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel"/>
                                <input type="submit" class="btn btn-primary" value="Save Changes"/>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection