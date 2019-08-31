@extends("client.app")

@section("componentcss")
<link href="{{asset('front/css/client/details.css')}}" rel="stylesheet">
@stop

@section("content")
    <div class="content-container">
        <h4 class="title d-block">Account details</h4>
        <div class="col-sm-12 col-md-4 row container-white mt-4">
            <div class="col-sm-12 col-md-5">
                <h4 style="color: #ccc">User</h4>
            </div>
            <div class="col-sm-12 col-md-7">
                <h4>{{auth()->user()->name}}</h4>
            </div>
        </div>
        <div class="col-md-12 row mt-4 pl-0">
            <div class="container-white row col-sm-12 col-md-4">
                <div class="col-sm-12 col-md-5">
                    <h4 style="color: #ccc">Email</h4>
                </div>
                <div class="col-sm-12 col-md-7">
                    <h4>{{auth()->user()->email}}</h4>
                </div>
                <!-- <div class="change-btn-mobile">
                    <a style="">Change</a>
                </div> -->
            </div>
            <!-- <div class="change-btn-full">
                <a>Change</a>
            </div> -->
        </div>
        <div class="col-md-12 row mt-4 pl-0">
            <div class="container-white row col-sm-12 col-md-4">
                <div class="col-sm-12 col-md-5">
                    <h4 style="color: #ccc">Access code</h4>
                </div>
                <div class="col-sm-12 col-md-7">
                    <h4>{{auth()->user()->psw}}</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 mt-4 p-0">
            <button type="button" class="btn btn-default btn-block" onclick="document.getElementById('logout-form').submit();">Sign out</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@stop
